<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function panel_catalogos()
    {
        return view('catalogos.panel');
    }
}
