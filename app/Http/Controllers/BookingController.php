<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
  public function index()
  {
    return view('booking.index');
  }

  public function submit()
  {
    dd($_POST);
  }
}
