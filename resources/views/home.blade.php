{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Banner -->
    <section class="main-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-caption">
                                    <h4>Selamat Datang di website <em>Galaxy Music Surabaya</em></h4>
                                    @guest
                                    <p>Silahkan gunakan tombol <strong>Login</strong>
                                    </p>
                                    <div class="primary-button">
                                        <a href="{{ route('login') }}">LOGIN</a>
                                    </div>
                                    @else 
                                    <p>Silahkan gunakan tombol <strong>produk</strong> untuk melihat data produk!
                                    </p>
                                    <div class="primary-button">
                                        <a href="{{ route('produk.index') }}">Produk</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
