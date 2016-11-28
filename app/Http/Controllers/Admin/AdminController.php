<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portefolio;
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
        $portefolios = Portefolio::all()->toBase();
        return view("admin/portefolio", [ "portefolios" => $portefolios ]);
    }

    public function portefolioStore(Request $request) {
        if ($request->isMethod("post")){

//            if ($request->hasFile("vignette")) {
//                $file = $request->file("vignette");
//                $fileName = md5($file->getFilename()) . $file->getClientOriginalExtension();
//                $path = public_path("portefolio_pics/", $fileName);
//            }
//            dd();

            $portefolio = Portefolio::find($request->id);
            $portefolio->title = $request->title;
            $portefolio->description = $request->description;
            $portefolio->vignette = $request->vignette;
            $portefolio->vignette_1 = $request->vignette_1;
            $portefolio->vignette_2 = $request->vignette_2;
            $portefolio->save();

        }
        return redirect("/admin/portefolio");

    }
}