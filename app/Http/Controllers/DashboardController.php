<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class DashboardController extends Controller
{
    public function index(){

        $idea = new Idea([
            'content' => 'test2',
        ]);
        $idea->save();

        return view('dashboard', [
            'ideas' => Idea::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
