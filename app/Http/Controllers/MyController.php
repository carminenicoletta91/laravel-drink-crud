<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
class MyController extends Controller
{
  public function getDrinks(){
    $type='Drink';
    $values=Drink::all();
    $max=Drink::max('price');
    $min=Drink::min('price');
    $avg=Drink::avg('price');
    return view('drink-table',compact('values','type','max','min','avg'));
  }
}
