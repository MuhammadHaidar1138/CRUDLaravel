@extends('Template.app')

@section('content-dinamis')
<div class="allbg">
    @if (session()->has('success'))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    
        <div class="mb-3 d-flex justify-content-end">
            <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah +</a>
        </div>
        <div class="card bg-dark text-white">
            <div class="card-header bg-gradient">
                <h4 class="mb-0">Daftar Produk</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover table-dark">
                    <thead class="bg-gradient">
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Tipe</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($joki as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['type'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td>{{ $item['contact'] }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center" role="group">
                                        <a href="{{ route('product.edit', $item['id']) }}" class="btn btn-primary me-4">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('product.destroy', $item['id']) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this item?');">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .allbg {
            background: linear-gradient(to top, #000, #3d3d36);
            padding: 20px;
            min-height: 100vh;
        }
        .bg-gradient {
            background-color: #313131;
        }
        .table-dark {
            background-color: #313131;
        }
        .table-dark th {
            background-color: #313131;
        }
        .table-dark tbody tr:hover {
            background-color: #313131;
        }
    </style>

@endsection