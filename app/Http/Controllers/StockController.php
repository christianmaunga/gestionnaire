<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    function getStocks(){

        //👇🏾 return all the data from stack table
        return Stock::all();
    }
}
