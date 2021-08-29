<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119076,
        'Nama' => 'Faustina Puspamurti',
        'Jenis Kelamin' => 'Perempuan',
        'Telepon' => '089672395671',
        'Kelas' => 'XII RPL 3'];
  }
}
