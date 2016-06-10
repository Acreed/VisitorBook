<?php

namespace App\Http\Controllers;

use Request;

use App\Models\message;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Site extends Controller
{
    public function index()
	{
        //dd($request);
        if (Request::has('name'))
        {
            dd(Request::all());
            /*
            $mess = new message;
            $mess->username = $request->input('name');
            $mess->email = $request->input('email');
            $mess->message = $request->input('message');
            $mess->save();*/
        }
        $data = [
            'title' => 'Гостевая книга',
            'messages' => message::latest()->paginate(1),
            'count' => message::count()
        ];
		return view('pages.messages.index', $data);
	}

    public function edit($id)
    {
        return view('pages.messages.edit');
    }
}
