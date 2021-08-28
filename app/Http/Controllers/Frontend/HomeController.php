<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\Newsletter as MailNewsletter;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function news(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:newsletters'],
        ]);

        Newsletter::create([
            'email' => $request->email,
        ]);

        Mail::to('fiitprotectioninternationnale@gmail.com')
            ->send(new MailNewsletter($request->email));

        session()->flash('flash_success', 'Votre email a bien été enregistré, Merci pour l\'interêt');
        return redirect()->route('frontend.index');
    }
}
