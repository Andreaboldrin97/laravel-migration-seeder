<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // ASSEGNO UNA VARIABILE AL DB CON ::ALL() SELEZIONO TUTTE LE TABELLE
        $trains = Train::all();
        // RITORNO CON LA FUNZIONE VIEW GLI ELEMENTI CHE BISOGNO VISUALIIZARE
        return view("train", compact("trains"));
    }
}
