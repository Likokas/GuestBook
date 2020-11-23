@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Sepeda</h1>
        </div>
        <div class="row">
            @auth()
                <div class="col-md-2 offset-md-10">
                    <a href="{{ route('event.create') }}" class="btn btn-dark" role="button" aria-pressed="true">Tambah</a>
                </div>
            @endauth
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Owned By</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    <tr>
                        <td> <a @auth() href="{{ route('event.edit', $event) }}@endauth">{{ $event->title }}</a> </td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->status }}</td>
                        @if(isset($event->creator->name))
                            <td>{{ $event->creator->name }}</td>
                        @else
                            <td>-</td>
                        @endif

                        <td>{{ $event->updated_at }}</td>
                        <td>{{ $event->created_at }}</td>
                        @auth()
                            <td>
                                <form action="{{ route('event.destroy', $event) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit">DELETE</button>
                                </form>
                            </td>
                        @endauth
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
