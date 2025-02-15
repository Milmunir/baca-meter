<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Throwable;
use Tymon\JWTAuth\Facades\JWTAuth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getJalan(Request $request){
        $url = $request->path();
        try {
            $jalan = DB::select("SELECT a.* FROM rekening.jalan a ORDER BY idcabang,idwilayah,idjalan");
            if ($url == 'jalan') {
                return view('/main', ['jalan' => $jalan, 'title' => 'Jalan']);
            }
            return response()->json(['jalan' => $jalan], 200);
        } catch (QueryException $th) {
            return response()->json(['error' => 'Database error', 'message' => $th], 500);
        }
    }
    public function uploadStanMeter(Request $request){
        $path = env('FILE_IMAGE_PATH');
        try {
            $validated = $request->validate([
                'nosambungan' => 'required|string',
                'stan' => 'required|integer',
                'pakai' => 'required|integer',
                'idcatatan' => 'required',
                'lat' => 'required|string',
                'long' => 'required|string',
                'iduser' => 'required|string',
                'foto' => 'required|file|image'
            ]);
            $validated['bulan'] = date("m");
            $validated['tahun'] = date("Y");
            $validated['pakairata'] = 6000; //placeholder
            $validated['tglbaca'] = date("Y-m-d");
            $validated['foto'] = $request->file('foto')->store($path);
            $result = DB::update("UPDATE stanmeter SET tglbaca = '" . $validated['tglbaca'] . "', stan =  " . $validated['stan'] . ",pakai = " . $validated['pakai'] . ", pakairata = " . $validated['pakairata'] . ", idcatatan = " . $validated['idcatatan'] . ", iduser = " . $validated['iduser'] . ", lat = '" . $validated['lat'] . "', lon = '" . $validated['long'] . "', foto = '" . $validated['foto'] . "', path_foto = '" . $path . "' WHERE tahun = " . $validated['tahun'] . " AND bulan = " . $validated['bulan'] . " AND nosambungan = '" . $validated['nosambungan'] . "'");
            if (!$request->is('api/')) {
                return redirect('/bacaan/' . $request->idjalan);
            }
            return response()->json(['message' => $validated], 200);
        } catch (ValidationException $th) {
            return response()->json(['error' => 'validation error', 'messages' => $th->errors()], 422);
        } catch (QueryException $th) {
            return response()->json(['error' => 'Database goes wrong', 'messages' => $th], 500);
        }
    }
    public function getJadwal(Request $request){
        $wilayah = $request->wilayah;
        try {
            $jadwal = DB::select("SELECT a.* FROM " . $wilayah . ".jadwalbaca a ORDER BY tanggal");
            return response()->json(['jadwal' => $jadwal], 200);
        } catch (QueryException $th) {
            return response()->json(['error' => 'Database error', 'message' => $th], 500);
        }
    }
    public function getBacaan(Request $request, $jalan = '',  $id = ";"){
        $ids = base64_decode($id);
        $ids = str_replace(['\\/'], ['/'], $ids);
        $bulan = date("m");
        $tahun = date("Y");
        $token = $request->cookie('access_token') ?? $request->header('api-key');
        $payload = JWTAuth::setToken($token)->getPayload();
        $idpembacameter = $payload['idpembacameter'];
        // $tanggal = "2024-12-11"; // ojo lali diganti
        $tanggal = date("Y-m-d"); // ojo lali diganti
        try {
            $data = DB::select(
                "SELECT 
                    p.nosambungan,
                    p.nama, 
                    CONCAT(p.alamat, ' ', p.noalamat) AS alamat,
                    p.idtarif,
                    p.idwilayah,
                    p.idjalan,
                    s.stan,
                    COALESCE(
                        (SELECT s2.stan 
                        FROM stanmeter s2 
                        WHERE s2.nosambungan = s.nosambungan 
                        AND s2.tahun = IF(s.bulan = 1, s.tahun - 1, s.tahun) 
                        AND s2.bulan = IF(s.bulan = 1, 12, s.bulan - 1)
                        ), 0
                    ) AS stanlalu,
                    s.pakai,
                    s.idcatatan,
                    s.lat,
                    s.lon,
                    s.tglbaca,
                    p.idpembaca AS iduser,
                    p.nopelanggan,
                    p.nourut,
                    COALESCE(
                        (SELECT s2.lat 
                        FROM sidoarjo.stanmeter s2 
                        WHERE s2.nosambungan = s.nosambungan 
                        AND s2.tahun = IF(s.bulan = 1, s.tahun - 1, s.tahun) 
                        AND s2.bulan = IF(s.bulan = 1, 12, s.bulan - 1)
                        ), 0
                    ) AS lat_lalu,
                    COALESCE(
                        (SELECT s2.lon 
                        FROM sidoarjo.stanmeter s2 
                        WHERE s2.nosambungan = s.nosambungan 
                        AND s2.tahun = IF(s.bulan = 1, s.tahun - 1, s.tahun) 
                        AND s2.bulan = IF(s.bulan = 1, 12, s.bulan - 1)
                        ), 0
                    ) AS long_lalu,
                    SUBSTRING(p.nosambungan, 1, 2) AS idcabang 
                FROM 
                    sidoarjo.stanmeter s
                LEFT JOIN sidoarjo.pelanggan p ON s.nosambungan = p.nosambungan
                LEFT JOIN sidoarjo.pembacameter pm ON pm.id = p.idpembaca
                LEFT JOIN sidoarjo.jadwalbaca j ON p.urutbaca <= j.harike
                WHERE 
                    s.tahun = " . $tahun . "
                    AND s.bulan = " . $bulan . "
                    AND j.tanggal = '" . $tanggal . "'
                    AND pm.idpembacameter = '" . $idpembacameter . "'
                    AND s.stan = '-1'
                    AND p.urutbaca != 0
                    AND s.isaccepted = 0
                    AND s.idjalan = " . $jalan . "
                ORDER BY p.nosambungan;"
            );
            $catatan = DB::select("SELECT a.* FROM rekening.catatanmeter a");
            if ($request->is('bacaan/*/detail/*')) {
                return view('/detail', ['data' => $data, 'nosambungan' => $ids, 'title' => 'Detail Pelanggan', 'catatan' => $catatan]);
            }
            if ($request->is('api/bacaan/*/detail/*')) {
                foreach ($data as $key) {
                    if ($key->nosambungan == $ids) {
                        $data = $key;
                        break;
                    }
                }
                return response()->json(['data' => $data], 200);
            }
            if ($request->is('bacaan/*')) {
                return view('/pelanggan', ['pelanggan' => $data, 'title' => 'Daftar Pelanggan']);
            }
            if ($request->is('api/*')) {
                return response()->json(['data' => $data], 200);
            }
            return view('/pelanggan', ['pelanggan' => $data, 'title' => 'Daftar Pelaggan']);
        } catch (QueryException $th) {
            return response()->json(['error' => 'Database error', 'message' => $th], 500);
        } catch (Throwable $th) {
            return response()->json(['error' => 'Validation error', 'message' => $th], 422);
        }
    }
}
