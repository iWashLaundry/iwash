<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
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

    public function workflow() {
        return view('dashboard.content.workflow', ['page' => 'workflow']);
    }

    public function customers() {
        return view('dashboard.content.customers', ['page' => 'customers']);
    }

    public function inventory() {
        return view('dashboard.content.inventory', ['page' => 'inventory']);
    }

    public function analytics() {
        return view('dashboard.content.analytics', ['page' => 'analytics']);
    }

    public function profile() {
        return view('dashboard.content.profile', ['page' => 'profile']);
    }

}
