@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Tambah Event</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('event.store') }}" method="post">
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
                        <label for="nama">Pembeli:</label>
                        <select name="created_by" class="custom-select">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name.' ('. $user->email.')'}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Release Date:</label>
                        <input type="date" class="form-control"  name="event_date">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
