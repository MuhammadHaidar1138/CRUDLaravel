@extends('Template.app')

@section('content-dinamis')
    <div class="allbg">
        <div class="container mt-5">
            <form action="{{ route('event.store') }}" method="post" class="card p-5 bg-dark text-white">
                @csrf
                <div class="inbg">
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <h4 class="mb-4">Tambah Data Produk</h4>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama :</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" class="form-control">
                            @if ($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control">
                            @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-2 col-form-label">Tipe Tiket :</label>
                        <div class="col-sm-10">
                            <select name="type" id="type" class="form-select">
                                <option selected disabled hidden>Pilih Tipe Tiket</option>
                                <option value="2S">2-Shoot</option>
                                <option value="MnG">Meet n Greet</option>
                            </select>
                            @if ($errors->has('type'))
                                <small class="text-danger">{{ $errors->first('type') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="memberName" class="col-sm-2 col-form-label">Nama Member :</label>
                        <div class="col-sm-10">
                            <select name="memberName" id="memberName" class="form-select">
                                <option selected disabled hidden>Pilih Nama Member</option>
                                <option value="Fiony Alveria">Fiony Alveria</option>
                                <option value="Angelina Christy">Angelina Christy</option>
                                <option value="Jessica Chandra">Jessica Chandra</option>
                            </select>
                            @if ($errors->has('memberName'))
                                <small class="text-danger">{{ $errors->first('memberName') }}</small>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<style>
    .allbg {
        background: linear-gradient(to top, #000, #3d3d36);
        padding: 20px;
        min-height: 100vh;
    }

    .bg-dark {
        background-color: #343a40;
        border-radius: 5px;
    }
</style>