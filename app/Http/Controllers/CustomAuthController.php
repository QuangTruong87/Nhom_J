<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//Unknow
class CustomAuthController extends Controller
{
    public function detail()
    {
        if(Auth::check()){
            $users = DB::table('users')->paginate(3);
            return view("detail",['users'=> $users]);
        }
        
        return redirect("detail")->withErrors(['login' => 'Please login first !!!']);
    }
}