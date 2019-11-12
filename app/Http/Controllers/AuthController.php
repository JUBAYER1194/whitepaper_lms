<?php

namespace App\Http\Controllers;

use App\Notifications\newUserNotification;
use App\User;
use Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

      use ResetsPasswords;

    public function __construct()
    {
       $this->middleware('JWT', ['except' => ['login','signup','sendPasswordResetLink','sendResetFailedResponse','sendResetResponse','callResetPassword','resetPassword','sendResetLinkResponse','sendResetLinkFailedResponse']]);
    }
    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response()->json(['message' => 'Failed, Invalid Token.']);
    }
    protected function sendResetResponse(Request $request, $response)
    {
        return response()->json(['message' => 'Password reset successfully.']);
    }
    public function callResetPassword(Request $request)
    {
        return $this->reset($request);
    }
    protected function resetPassword($user, $password)
    {

        $user->password = $password;
        $user->save();
        event(new PasswordReset($user));
    }


    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }
    public function signup(Request $request)
    {

       $user=new User();
       $user->first_name=$request->first_name;
       $user->last_name=$request->last_name;
       $user->email=$request->email;
       $user->password=$request->password;
       $user->save();
       $user->assignRole($request->role_id);
       $admins=User::role('Admin')->get();
        foreach($admins as $admin) {
            $admin->notify(new newUserNotification($user));
            }
        }



    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
