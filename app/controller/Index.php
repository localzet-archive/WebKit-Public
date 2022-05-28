<?php

namespace app\controller;

use support\Request;

class Index
{
    public function index(Request $request)
    {
        return response('hello framex');
    }

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'framex']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }
}
