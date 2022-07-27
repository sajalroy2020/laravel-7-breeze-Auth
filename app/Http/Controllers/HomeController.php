<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function edit($id){
        $data['edit']=User::findorfail($id);
        return view('edit-Data',$data);
    }

    public function update(Request $request, $id){
        $edit=User::findorfail($id);
            $edit->name=$request->name;
            $edit->email=$request->email;
            $edit->update();
            return redirect()->route('home');
    }

}
