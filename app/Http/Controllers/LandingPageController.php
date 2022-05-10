<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing_page.index', [
            'jobs' => JobApplication::all(),
        ]);
    }

    public function detail($id)
    {
        return response()->json([
            'data' => JobApplication::find($id),
        ]);
    }
}
