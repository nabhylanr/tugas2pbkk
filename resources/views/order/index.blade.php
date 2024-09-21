@extends('layouts.app')

@section('title', 'Order Page')

@section('contents')
<div class="container mt-5">
    @foreach($categories as $category)
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: #1F3933; color: #FFFFFF;">
            <h6 class="m-0 font-weight-bold">{{ $category->nama }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($category->menu as $menu)
                        <tr>
                            <td>{{ $menu->nama_menu }}</td>
                            <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="text-center">Tidak ada menu untuk kategori ini.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
