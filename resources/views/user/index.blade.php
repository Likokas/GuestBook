@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Sepeda</h1>
        </div>
        <div class="row">
            @auth()
                <div class="col-md-2 offset-md-10">
                    <a href="{{ route('user.create') }}" class="btn btn-dark" role="button" aria-pressed="true">Tambah</a>
                </div>
            @endauth
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Event List</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        @foreach($user->events as $event)
                            <li>{{$event->title}}</li>
                        @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection