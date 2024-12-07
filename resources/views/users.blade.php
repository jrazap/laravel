@extends('layout.layout')

@section('title')
    Users
@endsection


@section('content')
    <section>
        <h3>Hello {{ $username }}</h3>

        @if ($username == 'jrazap')
            <p>Admin</p>
        @else
            <p>User</p>
        @endif
    </section>
@endsection
