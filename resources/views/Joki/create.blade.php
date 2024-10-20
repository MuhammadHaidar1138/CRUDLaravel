@extends('Template.app')

@section('content-dinamis')
    <div class="allbg">

        <div class="bg">
            <form action="{{ route('product.store') }}" method="post" class="bgform">
                @csrf
                <div class="inbg">
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label text-white">Nama :</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-2 col-form-label text-white">Tipe Tiket :</label>
                        <div class="col-sm-10">
                            <select name="type" id="type" class="form-select">
                                <option selected disabled hidden>Pilih Tipe Tiket</option>
                                <option value="cat1">Cat 1</option>
                                <option value="cat2">Cat 2</option>
                                <option value="cat3">Cat 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <label for="email" class="col-sm-2 col-form-label text-white">Email :</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="contact" class="col-sm-2 col-form-label text-white">Kontak :</label>
                        <div class="col-sm-10">
                            <input type="text" name="contact" id="contact" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah data</button>
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

    .bg {
        background-color: #313131;
        border-radius: 5px;
        padding: 20px;
    }

    .inbg {
        background-color: #313131;
        border-radius: 5px;
        padding: 20px;
    }

    .bgform {
        background-color: #313131;
        border-radius: 5px;
        padding: 20px;
    }
</style>