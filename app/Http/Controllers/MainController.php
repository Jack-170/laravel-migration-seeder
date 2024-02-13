<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trains;

class MainController extends Controller
{
    public function index()
    {
        $currentDate = now()->toDateString();

        $trains = Trains::whereDate('data_partenza', $currentDate)->get();

        return view("pages.index", compact("trains"));
    }
}
