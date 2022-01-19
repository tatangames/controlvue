<?php

namespace App\Http\Controllers\Backend\Principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
       return view('backend.admin.principal.principal');
    }


}
