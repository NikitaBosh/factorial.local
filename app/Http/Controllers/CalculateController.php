<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    /**
     * Загрузка формы
     *
     *
     * @return     View представление
     */
    public function index()
    {
        return view('index')
    }
}
