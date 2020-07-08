<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use Illuminate\Support\Facades\DB;
/*
insert into users (name, email, fiscalia, rol, password) values ('Andres','azavala@minpublico.cl','QUILLOTA','ADMIN','XXX');
insert into users (name, email, fiscalia, rol, password) values ('Marcos','mamador@minpublico.cl','VILLA ALEMANA','ADMIN','XXX');
insert into users (name, email, fiscalia, rol, password) values ('Maria Fernanda','mpuga@minpublico.cl','QUILPUE','ADMIN','XXX');
insert into users (name, email, fiscalia, rol, password) values ('Maritza','masalinas@minpublico.cl','LA CALERA','ADMIN','XXX');
insert into users (name, email, fiscalia, rol, password) values ('Sandra','scabrera@minpublico.cl','LIMACHE','ADMIN','XXX');
insert into users (name, email, fiscalia, rol, password) values ('Jose','juribe@minpublico.cl','SACFI','ADMIN','XXX');


*/

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
               

        //

    }
}




