<?php

namespace App\Http\Controllers;

use App\Models\Wikbook;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class WikbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.index');
    }

    public function register()
    {
        return view('dashboard.register');
    }

    public function inputRegister(Request $request)
    {
        $request->validate([
            'name'=> 'required|min:3',
            'email'=> 'required',
            'password'=> 'required',
            'address'=> 'required',
            'no_telp'=> 'required',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'address'=>$request->address,
            'no_telp'=>$request->no_telp,
        ]);

        return redirect('/login');
    }

    public function login()
    {
        return view('dashboard.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email'=> 'required|exists:users,email',
            'password'=> 'required',
        ],[
            'email.exists' =>"Akun belum ada !"
        ]);
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)){
            return redirect()->route('E-Wikbook');
        }else{
            return redirect('login')->with('fail',"Gagal login, periksa dan coba lagi");
        }
    }

    public function ebook()
    {
        return view('dashboard.Ebook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wikbook  $wikbook
     * @return \Illuminate\Http\Response
     */
    public function show(Wikbook $wikbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wikbook  $wikbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Wikbook $wikbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wikbook  $wikbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wikbook $wikbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wikbook  $wikbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wikbook $wikbook)
    {
        //
    }
}
