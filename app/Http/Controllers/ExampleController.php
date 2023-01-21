<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function printHelloWorld($text)
    {
        return "Hello World Example " . $text;
    }
}
