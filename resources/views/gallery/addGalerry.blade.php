@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Tambah Sepeda</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('gallery.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Sepeda:</label>
                        <input type="text" class="form-control"  name="title">
                    </div>
                    <div class="form-group">
                        <label for="barcode">Spesifikasi:</label>
                        <textarea type="text" class="form-control"  name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Insert Picture:</label>
                        <input type="file" class="form-control"  name="picture">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
