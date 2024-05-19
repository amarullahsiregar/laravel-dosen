<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    // Belum Dipake vv
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        return view('user.store');
    }

    public function show($id)
    {
        return view('user.show');
    }

    public function edit($id)
    {
        return view('user.edit');
    }

    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
    public function profile()
    {
        return view('user.profile');
    }
    // Belum Dipake ^^
}
