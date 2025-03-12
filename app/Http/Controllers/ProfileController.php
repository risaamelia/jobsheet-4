<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index ()
    {
        $profile = [
            'name' => 'Risa Amelia',
            'email' => 'risaamelia493@gmail.com',
            'bio' => 'Siswa SMK N 1 Sayung',
            'profile_picture' => 'risa.jpg',
            'skil' => ['Laravel', 'PHP', 'Blade']
        ];
        return view('profile' , compact('profile'));
    }
}
