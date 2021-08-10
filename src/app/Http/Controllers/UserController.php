<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\mbWordCount;
use App\Rules\katakanaMatchAll;
use App\Rules\nameSplitSpace;
use App\Rules\customEmail;
use App\EloquentModels\User;
use App\Mail\finishUserRegister;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * 入力ページの表示
     */
    public function input () {
        return view('register.input');
    }

    /**
     * 確認ページの表示
     */
    public function verification (Request $request) {
       $validatedData = $this->validation($request);
        return view('register.verification')->with($validatedData);
    }


    public function finish (Request $request) {
        $user = new User();
        $validatedData = $this->validation($request);

        $this->sendtestmail($validatedData['name'], $validatedData['email']);

        $user->name = $validatedData['name'];
        $user['email'] = $validatedData['email'];
        $user->save();

        return view('register.finish');
    }

    private function validation (Request $request) {
        $result = $request->validate([
            'name'  => ['required', new mbWordCount(40), new katakanaMatchAll(), new nameSplitSpace()],
            'email' => ['required', new customEmail(), 'unique:users'],
        ]);

        return $result;
    }

    public function sendtestmail($name, $email) {
        Mail::to($email)->send(new finishUserRegister($name, $email));
      }
}
