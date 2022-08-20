<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistics = Statistic::with(['user:id,name'])->orderBy('tasks', 'desc')->limit(10)->get();
        return view('statistics.index', ['statistics' => $statistics]);
    }
}
