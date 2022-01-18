<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\SameOldPassword;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;


class ProfileController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'current_password' => ['required', new SameOldPassword],
        ]);

        $user = User::where('id', $id);

        $user->update($request->only('name', 'email'));

        $previousMdp = Auth::user()->password;

        if (Hash::check($request->current_password, $previousMdp)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        return redirect()->route('profile')->with('success', 'Votre profile a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
