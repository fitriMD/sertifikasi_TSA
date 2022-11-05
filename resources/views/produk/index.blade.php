@extends('layouts.app')
@section('content')
    <!-- Page Heading -->
    <div class="page-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Data Produk</h1>
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- Tables -->
    <section class="tables">
        <div class="container-fluid">
            <div class="row">
                {{-- @if (Auth::user()->email=='admin@admin.com') --}}
                <div class="col-sm">
                    <a class="btn btn-success" href="{{ route('produk.create') }}">Input Produk</a>
                </div>
                {{-- @endif --}}
                
                <div class="mx-auto pull-right">
                    <div class="float-left">
                        <form action="{{ route('produk.index') }}" method="GET" role="search">
                            <div class="input-group">
                                <a href="{{ route('produk.index') }}" class="mr-4 mt-1">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger" type="button" title="Refresh page">
                                            <span class="fas fa-sync-alt">Refresh</span>
                                        </button>
                                    </span>
                                </a>
                                <input type="text" class="form-control mr-4 mt-1" name="term" placeholder="Search"
                                    id="term">
                                <span class="input-group-btn mr-2 mt-1">
                                    <input type="submit" value="Cari" class="btn btn-primary">
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="default-table">
                        <table>
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th scope="">Id</th>
                                    <th scope="">Name</th>
                                    <th scope="">Description</th>
                                    <th scope="">Image</th>
                                    <th scope="">Price</th>
                                    <th width="400px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $produk)
                                    <tr>

                                        <td>{{ $produk->id }}</td>
                                        <td>{{ $produk->name }}</td>
                                        <td>{{ $produk->description }}</td>
                                        <td><img width="100px" src="{{ asset('storage/' . $produk->image) }}"></td>
                                        <td>Rp. {{ number_format($produk->price) }}</td>
                                        <td>
                                            <form action="{{ route('produk.destroy', $produk->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data barang?')">
                                                <a class="btn btn-info"
                                                    href="{{ route('produk.show', $produk->id) }}">Show</a>
                                                    <a href="{{ url('pesan') }}/{{ $produk->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
                                                    {{-- @if (Auth::user()->email=='admin@admin.com') --}}
                                                    <a class="btn btn-primary"
                                                    href="{{ route('produk.edit', $produk->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                    {{-- @endif --}}
                                                
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        
                        {{-- {{ $product->links() }} --}}
                        <!-- TARUH LINKS DISINI-->
                        {{-- @if (Auth::user()->email=='admin@admin.com') --}}
                        {{-- <br><br>
                        <div class="text-center my-2">
                            <a href="{{ route('produk.cetak_pdf', $produk->id) }}" class="btn btn-warning">Cetak PDF</a>
                            </div> --}}
                        {{-- @endif --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
