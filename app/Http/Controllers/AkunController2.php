<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController2 extends Controller
{
    public function index()
    {
        return view('account.index');
}

    public function create()
    {
        return view('account.create');
}
public function show()
    {
        return view('account.show');
}
public function master()
    {
        return view('template.master');
}
public function indexakun()
{
    return view('account.indexAkun');
}
public function indextable()
{
    return view('account.indextable');
}
public function akunindex()
{
    return view('account.akunindex');
}
}
