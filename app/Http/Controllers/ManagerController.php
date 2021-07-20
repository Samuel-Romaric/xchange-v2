<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ManagerController extends Controller
{
    public function landing()
    {
        return view('front.index');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function addMessage(Request $request)
    {
        $validator = \Validator::make(
            $request->all(),
            [
                'name' => 'required|string|min:3',
                'email' => 'required|email',
                'subject' => 'required',
                'msg' => 'required|string|min:8',
            ]
        );
        //
        if ($validator->fails()) {
            flashy()->error($validator->errors()->first());
            return redirect()->back();
        }

        $mail_sended = true;
        Mail::send(new ContactUs($request->except('_token')));

        // try {
        //     Mail::send(new ContactUs($request->except('_token')));
        // } catch (\Exception $e) {
        //     //throw $e;
        //     $mail_sended = false;
        //     \Log::error($e->getMessage(), $e->getTrace());
        //     dd($e->getMessage();
        // }

        if (!$mail_sended) {
            flashy()->error("Désolé notre message n'a pas été envoyé");
            return redirect()->back();
        } else {
            flashy()->error("Votre message à bien été envoyé !");
            return redirect()->back();
        }

        // flashy()->success("Votre message à bien été envoyé");
        // return redirect()->back();
        // // dd("sended !", $request->all());
    }

    public function community()
    {
        return view('front.community');
    }

    public function notifications()
    {
        return view('posts.notifications.index');
    }

    public function changeLocalization(Request $request)
    {
        $user = auth()->user();

        $validator = \Validator::make(
            $request->all(),
            [
                'locale' => 'required|in:fr,en',
            ]
        );

        if ($validator->fails()) {
            flashy()->error($validator->errors()->first());
            return redirect()->back();
        }

        $locale = $request->get('locale');

        if (is_null($user)) {
            \Session::put('locale', $locale);
        } else {
            $user->lang = $locale;
            $user->save();
        }

        \App::setLocale($locale);

        flashy()->success('Vos paramètre de langue on été mise à jour');

        return redirect()->back();
    }
}
