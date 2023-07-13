<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    function index()
    {
        return view('Login');
    }

    function login(Request $request)
    {
        Session::put('email', $request->email);
        //dd(Session::get('email'));
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        //dd($infologin);
        if (Auth::attempt($infologin)) {
            //if the Authentication success
            //return 'sukses';
            $request->session()->regenerate();
            //return redirect('Home')->with('succes', 'Berhasil Login');
            return redirect()->intended('/');
        } else {
            //if it ain't
            //return redirect('Login')->withErrors('E-mail atau Password yang dimasukkan salah');
            return back()->with('loginError', 'Login gagal! Email atau Password salah');
        }
    }

    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|max:15',
        //     'email' => 'required|string|email|unique:users,email',
        //     'password' => 'required|string|min:6|confirmed',
        // ]);

        $this->validate($request, [
            'username' => 'required|string|max:15',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        //if ($validator->fails()) {
        ///    return redirect('Register')->withErrors($validator);
        //}

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Berhasil Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $request->validate([
            'profile_photo_path' => ['image']
        ]);

        $profile_photo_path = null;

        if ($request->hasFile('profile_photo_path')) {
            $profile_photo_path = $request->file('profile_photo_path')->store('photos');
        }

        $uploadfoto = User::find($user->id);

        $uploadfoto->profile_photo_path = $profile_photo_path;

        $uploadfoto->save();
        return redirect('/Profile');
    }

    public function update(Request $request)
    {
        $user = $request->user();

        if ($request->hasFile('profile_photo_path')) {
            $photoName = time() . '.' . $request->profile_photo_path->extension();
            $request->profile_photo_path->move(public_path('images'), $photoName);
            $user->profile_photo_path = $photoName;
        }

        $user->save();
        $uploadfoto = User::find($user->id);

        return view('Profile', compact('uploadfoto'));
    }
}
