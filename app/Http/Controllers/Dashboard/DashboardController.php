<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
     $this->middleware(['auth']); // حماية للجميع
        // $this->middleware(['auth'])->except('index'); // الحماية على الجميع ما عدا
        //$this->middleware(['auth'])->only('create'); // حماية على هذا فقط
    }
    /*
    super admin
    admin
    visitor
    user


    */
    public function index()
    {
        $project_name = config('app.name');
        return view('dashboard.index')->with([
            'project_name' => $project_name
        ]);
    }
    public function create()
    {

    }
}
