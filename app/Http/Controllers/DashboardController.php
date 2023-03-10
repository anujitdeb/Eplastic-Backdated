<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });

    }

    public function index()
    {
        //print_r(gettype($this->user));
        if($this->user == null){
            return view("backend.auth.login");
        }
        else{
            $statData = [];

            //return $courses;
            return view('backend.pages.dashboard.index', compact('statData'));
        }
        //return view('backend.pages.dashboard.index');
    }

    public function registration(){
        return view('backend.auth.register');
    }

    public  function  insertUser(createUserRequest $request){
//        dd($request->all());
        $request->merge(['password' => Hash::make($request->input('password'))]);

        User::create($request->all());

        //auth('web')->login($user);
        return redirect()->route('dashboard');
    }
}
