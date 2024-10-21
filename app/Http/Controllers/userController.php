<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class userController extends Controller
{
    public function index()
    {
        $user = DB::select("SELECT a.* FROM rekening.user a");
        return response()->json(['user' => $user], 200);
    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('login', ['title' => 'Login']);
        }
        try {
            $validated = $request->validate([
                'namauser' => 'required|string',
                'password' => 'required|string'
            ]);
            $result = DB::select("SELECT idpembacameter,namauser,password3 FROM rekening.user WHERE idpembacameter IS NOT NULL AND namauser = '" . $validated['namauser'] . "' AND password3 = '" . $validated['password'] . "' ");
            if (!$result) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            $payload = JWTAuth::factory()->customClaims([
                'sub' => $result[0]->idpembacameter,  // User ID or some unique identifier
                'idpembacameter' => $result[0]->idpembacameter,  // User ID or some unique identifier
                'namauser' => $result[0]->namauser,
                'iat' => now()->timestamp,  // Issued at time
                'exp' => now()->addMinutes(60)->timestamp // Expiration time (e.g., 1 hour)
            ])->make();
            $token = JWTAuth::encode($payload)->get();
            // echo $token;
            $cookie = cookie('access_token', $token, 60, '/', null, false, true); // ojo lali ganti ndek true pas production
            if ($request->is('api/login')) {
                return response()->json(['token' => $token], 200);
            }
            if ($request->is('login')) {
                return redirect('/jalan')->cookie($cookie);
            }
        } catch (QueryException $th) {
            return response()->json(['error' => 'Database error', 'message' => $th], 200);
        }
    }

    public function logout(Request $request)
    {
        $token = $request->cookie('access_token');
        $cookie = Cookie::forget('access_token');
        return redirect('login')->withCookie($cookie);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
