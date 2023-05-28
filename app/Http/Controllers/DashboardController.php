<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = dashboard::orderBy('id', 'DESC')->get();
        $logam = DB::table('dashboards')
                ->where('result', 'logam')
                ->count();
        $nonLogam = DB::table('dashboards')
                ->where('result', 'nonlogam')
                ->count();
        $relay = DB::table('relays')
                ->first();
        $status = Status::first();
        // dd($status);
        return view('dashboard', compact('data', 'logam', 'nonLogam', 'status', 'relay'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
