<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\User;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        \Log::debug("AuthController::create()");
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \Log::debug("AuthController::store() START");
        $params = $request->all();
        //  ユーザ検索
        $user = User::where(['email' => $params['email'],])->first();
        if (!Hash::check($params['password'], $user->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        //  認証
        Auth::login($user);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(string $id)
    public function destroy(Request $request)
    {
        \Log::debug("AuthController::destroy() START");
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        \Log::debug("AuthController::destroy() EMD");
 
        return redirect('/');
    }

    /**
     * Summary of logout
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function logout(Request $request)
    {
        \Log::debug("AuthController::logout() START");
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        \Log::debug("AuthController::logout() EMD");
        return redirect('/');
    }
}
