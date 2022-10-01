<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //menampilkan register
    public function register()
    {
        return view('register.index', [
            "tittle" => "halaman register"
        ]);
    }

    //aksi registrasi
    public function aksiRegistrasi(Request $request)
    {
        // dd($request->email);
        $register = $request->validate([
            "email" => 'required',
            "username" => 'required',
            "password" => 'required'
        ]);

        Registrasi::create($register);

        return redirect("/");
    }
}
