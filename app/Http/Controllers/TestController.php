<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class TestController extends Controller
{
    public function index1()
    {
        return '建物です';
    }
    public function index2($room)
    {
        return '部屋番号は'. $room. 'です';
    }
}
