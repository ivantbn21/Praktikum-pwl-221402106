<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_sinopsis()
    {
        return view('admin.sinopsis');
    }

    public function show_mc()
    {
        return view('admin.mc');
    }

    public function alur()
    {
        return view('admin.alur');
    }

    public function author()
    {
        return view('admin.author');
    }

    public function info()
    {
        return view('admin.info');
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
