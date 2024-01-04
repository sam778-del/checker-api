<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class StepController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $quiz = Category::with('steps')->get();
        return view('step.index', compact('quiz'));
    }
}
