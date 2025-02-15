<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Exception;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class JwtAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('api-key') ?? $request->cookie('access_token');
        try {
            if (!$token) {
                if ($request->is('api/*')) {
                    return response()->json(['error' => 'API Key not provided'], 401);
                }
                if ($request->is('login')) {
                    return $next($request);
                }
                return redirect('login');
            }
            $user = JWTAuth::setToken($token)->getPayload();
            if ($request->is('login')) {
                // return response()->json(['error' => $user], 400);
                return redirect('/jalan');
            }
        } catch (TokenInvalidException $e) {
            return response()->json(['error' => 'Token is Invalid', 'eror' => $e], 401);
        } catch (TokenExpiredException $e) {
            return response()->json(['error' => 'Token is Expired', 'eror' => $e], 401);
        } catch (Exception $e) {
            // dd($user);
            return response()->json(['error' => 'Authorization Token not found', 'eror' => $e], 401);
        }
        // If token is valid, proceed with the request
        return $next($request);
    }
}
