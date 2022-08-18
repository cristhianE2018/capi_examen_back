<?php

namespace App\Http\Controllers;
use App\Models\user_domicilio;
use Illuminate\Http\Request;

class User_DomicilioController extends Controller
{
    

    public function mostrarDatos(){
        $query = user_domicilio::all();
        return $query;
    }
}
