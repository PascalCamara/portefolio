<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function show() {
        return view('home/home');
    }

    public function update(Request $request) {
        $messages = [
            'required' => 'Le champ :attribute est requis.',
            'email' => 'Email invalide'
        ];

        $validator = Validator::make($request->all(), [
            'name' => '|required|max:100',
            'email' => '|required|email',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/#contactForm')
                ->withErrors($validator)
                ->withInput();
        } else {

            $contactQuery = array(
                "message" => $request->get('message'),
                "email" => $request->get('email'),
                "name" => $request->get('name'),
            );
            DB::table('contacts')->insert($contactQuery);
            return Redirect::to('/')->with(['successMessage' => 'Merci de m\'avoir laissé un message']);
        }


    }

    public function getDownload() {

        $file= storage_path(). "/CV/pascal_camara_cv.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, 'pascal_camara_cv.pdf', $headers);
    }
}