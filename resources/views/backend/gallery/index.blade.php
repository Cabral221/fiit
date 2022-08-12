@extends('backend.layouts.app')

@section('title', __('Bibliothèque'))

@section('content')


<x-backend.card>
    <x-slot name="header">
        Gestion des Images et videos
    </x-slot>

    <x-slot name="body">

        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ route('admin.gallery.images.store') }}" enctype="multipart/form-data"
                class="g-3 pb-4">
                @csrf
                <div class="mb-3">
                    <label for="formImage" class="form-label">Selection une image</label>
                    <input class="form-control" type="file" id="formImage" required name="image">
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
                <div>
                    <button type="submit" class="btn btn-success mb-3">Ajouter</button>
                </div>
            </form>

            <h5>Dernières images enregistrées</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Image ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Crée le</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $image)
                    <tr>
                        <th scope="row">{{ $image->id }}</th>
                        <td>
                            <img src="{{ url('gallery/imgs/' . $image->image) }}" style="height: 70px; width: auto;" />
                        </td>
                        <td>{{ $image->created_at }}</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm"> <i class="cil-trash"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('admin.gallery.images') }}" class="btn btn-block btn-primary">Voir Plus
                d'images...</a>
            </div>
            <div class="col-md-6">
                <form method="POST" action="{{ route('admin.gallery.videos.store') }}" enctype="multipart/form-data"
                class="g-3 pb-4">
                @csrf
                <div class="mb-3">
                    <label for="formVideo" class="form-label">Selection une vidéo</label>
                    <input class="form-control" type="file" id="formVideo" required name="video">
                </div>
                <div>
                    <button type="submit" class="btn btn-success mb-3">Ajouter</button>
                </div>
            </form>

            <h5>Dernières vidéos enregistrées</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="btn btn-block btn-primary">Voir Plus de vidéo...</a>
        </div>
    </div>


</x-slot>
</x-backend.card>
@endsection
