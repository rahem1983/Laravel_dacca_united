<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return redirect('api/index');
    }
    public function homepage()
    {
        return view('index');
    }

    public function seed()
    {
        DB::table('users')->insert([
            'name' => 'Rahemul Islam',
            'email' => 'rahem@notmail.com',
            'password' => Hash::make('007')
        ]);
    }

    public function login(Request $req)
    {
        $req->validate([
            'username'=>'required ',
            'password'=> 'required | min:8',
            'email'=> 'required'
        ]);
        $data = $req->input();
        $user = new User;
        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $res=$user->save();
        $req->session()->put('username', $data['username']);
        return redirect('/');
    }

    public function signup(Request $req)
    {
        $req->validate([
            'name'=>'required | alpha',
            'email' => 'required | email | unique:users',
            'password'=> 'required | min:8',
            'email'=> 'required'
        ]);
    }
    public function join(){
        $join = DB::table('matches')
            ->join('matchresult', 'matchresult.MatchID', "=", 'matches.MatchID')
            ->select('*')
            ->get();

        return $join;
    }
}
