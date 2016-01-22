<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function index()
    {
    	return Todo::all();
    }
}
