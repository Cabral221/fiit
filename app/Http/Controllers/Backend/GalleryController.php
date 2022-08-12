<?php

namespace App\Http\Controllers\Backend;

use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

/**
 * Class DashboardController.
 */
class GalleryController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $images = GalleryImage::orderBy('updated_at', 'DESC')->limit(5)->get();

        return view('backend.gallery.index', compact('images'));
    }

    public function storeImage(Request $request)
    {
        // Validation formulaire
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        $data = new GalleryImage();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('gallery/imgs'), $filename);
            $data['image'] = $filename;
        }

        $data->save();
        session()->flash('flash_success', 'Image enregistrée avec succés');

        return redirect()->route('admin.gallery');
    }

    public function getImage()
    {
        $images = GalleryImage::orderBy('updated_at', 'DESC')->get();

        return view('backend.gallery.image', compact('images'));
    }
}
