<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function create(){
        $user = User::create([
            'nama' => 'Nur Amalia',
            'telp' => '098678657461',
            'email' => 'nuramalia12@gmail.com',
        ]);
    }
}
