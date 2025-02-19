<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourtType;

class CourtTypeController extends Controller
{
    public function index ()
    {
        $types = CourtType::all();
        return $types;
        //return view('mcourt_type');
    }

    public function store ()
    {
        
    }
}
