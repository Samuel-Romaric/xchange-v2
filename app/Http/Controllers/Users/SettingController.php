<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class SettingController extends Controller
{
    public function makeInfos(Request $request)
    {
        $user = auth()->user();

        $validator = \Validator::make(
            $request->all(),
            [
                'name' => 'required|min:3',
            ]
        );

        if ($validator->fails()) {
            flashy()->error($validator->errors()->first());
            return redirect()->back();
        }

        $user->name = $request->get('name');

        if (!is_null($request->my_avatar)) {

            $file = $request->my_avatar;

            ImageOptimizer::optimize($file);

            $user->addMedia($file)->toMediaCollection('avatars');
        }

        $user->save();

        flashy()->success("Mise à jour prise en charge avec succès");

        return redirect()->back();
    }

    public function makeCredentials(Request $request)
    {
        $user = auth()->user();

        $validator = \Validator::make(
            $request->all(),
            [
                'modify-type' => 'required',
            ]
        );

        if ($validator->fails()) {
            flashy()->error($validator->errors()->first());
            return redirect()->back();
        }

        if ($request->get("modify-type") == "modify-email") {

            $validator2 = \Validator::make(
                $request->all(),
                [
                    'email' => 'required|email|unique:users,email,' . $user->id,
                ]
            );

            if ($validator2->fails()) {
                flashy()->error($validator2->errors()->first());
                return redirect()->back();
            }

            $user->email = $request->email;
            $user->save();

            flashy()->success("Votre email a bien été mis à jour!");
            return redirect()->back();
        }

        $validator2 = \Validator::make(
            $request->all(),
            [
                'old_password' => 'required',
                'password' => 'required|confirmed|min:8',
            ]
        );

        if ($validator2->fails()) {
            flashy()->error($validator2->errors()->first());
            return redirect()->back();
        }

        if (!Hash::check($request->old_password, $user->password)) {
            flashy()->error("Mot de passe incorrect!");
            return redirect()->back()->withInput();
        }

        $user->password = bcrypt($request->get('password'));
        $user->save();

        flashy()->success("Votre mot de passe à été mis à jour!");
        return redirect()->back();
    }
}
