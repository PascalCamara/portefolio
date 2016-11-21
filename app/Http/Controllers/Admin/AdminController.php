<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index() {
        return view("admin/index");
    }

    public function login(Request $request) {
        if ($request->session()->has("user")) return redirect("/admin");
        if ($request->has('login') && $request->has("password")) {
            $user = DB::table("admins")
                ->where("login", $request->input("login"))
                ->where("password", md5($request->input("password")))
                ->first();
            if ($user) {
                echo "test";
                session(["user" => $user]);
                return redirect("/admin");
            }
        }
        return view('admin/login');
    }

    public function portefolio() {

        $portefolios = DB::table("portefolios")->get();




        dd($portefolios);
    }
}