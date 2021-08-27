<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119001,
        'name' => 'Nela Rosdiana',
        'gender' => 'Female',
        'phone' => '081377779999',
        'class' => 'XII RPL 5'];
  }
}