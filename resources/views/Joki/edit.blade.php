@extends('Template.app')

@section('content-dinamis')
    <div class="allbg">

        <div class="container mt-5 bg-dark-gray">
            <form action="{{ route('product.update', $joki->id) }}" method="POST" class="card p-5 cardbg">
                @csrf
                @method('PATCH')

                <div class="inbg">
                    <h4 class="mb-4 text-white">Edit Produk</h4>

                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label text-white">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" class="form-control" value="{{ $joki->name }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="type" class="col-sm-2 col-form-label text-white">Tipe:</label>
                        <div class="col-sm-10">
                            <select name="type" id="type" class="form-select" required>
                                <option selected disabled hidden>Pilih Tipe Tiket</option>
                                <option value="cat1" {{ $joki->type == 'cat1' ? 'selected' : '' }}>Cat 1</option>
                                <option value="cat2" {{ $joki->type == 'cat2' ? 'selected' : '' }}>Cat 2</option>
                                <option value="cat3" {{ $joki->type == 'cat3' ? 'selected' : '' }}>Cat 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label text-white">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" id="email" class="form-control" value="{{ $joki->email }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="contact" class="col-sm-2 col-form-label text-white">Contact:</label>
                        <div class="col-sm-10">
                            <input type="int" name="contact" id="contact" class="form-control" value="{{ $joki->contact }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <style>
        .allbg {
            background: linear-gradient(to top, #000, #3d3d36);
            padding: 20px;
            min-height: 100vh;
        }

        .bg-dark-gray {
            background-color: #313131;
            border-radius: 5px;
            padding: 20px;
        }

        .inbg {
            background-color: #313131;
            border-radius: 5px;
            padding: 20px;
        }

        .cardbg {
            background-color: #313131;
            border-radius: 5px;
            padding: 20px;
        }
    </style>
@endsection