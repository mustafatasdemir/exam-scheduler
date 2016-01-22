<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Classroom as Classroom;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $deneme = DB::table('classrooms')->where('active', true)->get();
        $classroom = Classroom::create(['name' => 'Flight 10', 'description' => 'asd', 'capacity' => 10, 'active' => true]);
        return view('pages.home')->with('count', count($deneme));
    }
}
