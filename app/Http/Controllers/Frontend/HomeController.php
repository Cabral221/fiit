<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\Contact as MailContact;
use App\Mail\Newsletter as MailNewsletter;
use App\Models\Contact;
use App\Models\GalleryImage;
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
        $images = GalleryImage::orderBy('created_at', 'DESC')->limit(5)->get();

        return view('frontend.index', compact('images'));
    }

    public function gallery()
    {
        dd('gallerie page');
    }

    public function news(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:newsletters'],
        ]);

        Newsletter::create([
            'email' => $request->email,
        ]);

        Mail::to('fiitprotectioninternationale@gmail.com')
            ->send(new MailNewsletter($request->email));

        session()->flash('flash_success', 'Votre email a bien été enregistré, Merci pour l\'interêt');
        return redirect()->route('frontend.index');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:50'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'min:2', 'max:1000'],
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            "message" => $request->message,
        ]);

        Mail::to('fiitprotectioninternationale@gmail.com')
            ->send(new MailContact($request->name, $request->email, $request->message));

        session()->flash('flash_success', 'Votre message a bien été envoyé, nous vous répondrons dans les plus brefs delais.');
        return redirect()->route('frontend.index');
    }
}
