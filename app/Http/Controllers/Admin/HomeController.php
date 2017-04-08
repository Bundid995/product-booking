<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
  
  public function __construct() {
    //
  }

  /*
   * Admin Dashboard
   */
  public function index() {
    return view('admin.home');
  }


}
