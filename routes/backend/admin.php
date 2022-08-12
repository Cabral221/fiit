<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GalleryController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

Route::get('gallery', [GalleryController::class, 'index'])
    ->name('gallery')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.dashboard')
        ->push(__('Bibliothecque'), route('admin.gallery'));
    });

Route::get('/gallery-image', [GalleryController::class, 'getImage'])
    ->name('gallery.images')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.gallery')
            ->push(__('Image'), route('admin.gallery.images'));
    });

Route::post('/gallery-image', [GalleryController::class, 'storeImage'])
    ->name('gallery.images.store');
Route::post('/gallery-video', [GalleryController::class, 'storeVideo'])
    ->name('gallery.videos.store');
