@extends('layout')
@section('title', 'Müşteri Ekleme')
@section('breadcrumb')
    <div class="row align-items-center">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Müşteri Yönetimi</a></li>
                <li class="breadcrumb-item"><a href="{{ route('companies.create') }}">Müşteri Ekleme</a></li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="page-header-title">
                <h2 class="mb-0">Müşteri Ekleme</h2>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Müşteri Adı</label>
                            <input type="text" value="{{ old('title') }}" name="title" id="title" class="form-control"
                                   placeholder="Müşteri adını giriniz">
                            @error('title')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefon</label>
                            <input type="number" value="{{ old('phone') }}" name="phone" id="phone" class="form-control"
                                   placeholder="Telefon">
                            @error('phone')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-posta</label>
                            <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control"
                                   placeholder="E-posta adresi">
                            @error('email')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="full_address" class="form-label">Adres</label>
                            <textarea name="full_address" id="full_address" class="form-control"
                                      placeholder="Tam adres">{{ old('full_address') }}</textarea>
                            @error('full_address')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
