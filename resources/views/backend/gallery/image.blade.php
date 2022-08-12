@extends('backend.layouts.app')

@section('title', __('Image'))

@section('content')

    <x-backend.card>
        <x-slot name="header">
            Liste des images
        </x-slot>

        <x-slot name="body">

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

        </x-slot>
    </x-backend.card>
@endsection
