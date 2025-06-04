@extends('layout')
@section('title', 'Müşteri Listeme')
@section('css_specific')
    <link rel="stylesheet" href="../assets/css/plugins/dataTables.bootstrap5.min.css">
    <link href="../assets/css/plugins/animate.min.css" rel="stylesheet" type="text/css">
@endsection
@section('breadcrumb')
    <div class="row align-items-center">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Müşteri Yönetimi</a></li>
                <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Müşteri Listeleme</a></li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="page-header-title">
                <h2 class="mb-0">Müşteri Listeleme</h2>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row"><!-- HTML (DOM) Sourced Data table start -->
        <div class="col-sm-12">
            @if(session('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <a href="{{route('companies.create')}}" class="btn btn-sm btn-primary" role="button">Müşteri Ekle</a>
                </div>
                <div class="card-body table-responsive">
                    <table id="companies" class="table table-striped table-bordered nowrap">
                        <thead>
                        <tr>

                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js_specific')
    <script src="{{ asset('assets/js/plugins/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $('#companies').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            ordering: false,
            ajax: '{{ route('companies.index') }}',
            lengthMenu: [ [10, 20, 30, 50, 100], [10, 20, 30, 50, 100] ],
            columns: [
                { data: 'reg_no', title: 'Kayıt No' },
                { data: 'title', title: 'Ünvan' },
                { data: 'full_address', title: 'Adres' },
                { data: 'phone', title: 'Telefon' },
                { data: 'email', title: 'E-Posta' },
                { data: 'created_by', title: 'Oluşturan' },
                { data: 'created_at', title: 'Oluşturulma Tarihi' },
                { data: 'updated_by', title: 'Güncelleyen' },
                { data: 'updated_at', title: 'Güncelleme Tarihi' },
                {
                    data: 'id',
                    title: 'İşlemler',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        return `
                            <a href="/companies/${data}/edit" class="btn btn-sm btn-primary">Güncelle</a>
                            <form action="/companies/${data}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                            </form>
                        `;
                    }
                }
            ]
        });

    </script>
@endsection
