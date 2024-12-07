@extends('layout.layout')

@section('title')
    Home
@endsection


@section('sidebar')
    @parent
    Home Sidebar
@endsection

@section('content')
    <section>
        <form action="/users" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input id="name" name="name" type="text"
                    class="block w-1/2 p-2 mt-1 text-sm border-gray-300 rounded-md focus:ring-1 focus:ring-red-500 focus:bg-slate-300 focus:outline-none bg-slate-200"
                    required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input id="email" name="email" type="email"
                    class="block w-1/2 p-2 mt-1 text-sm border-gray-300 rounded-md focus:ring-1 focus:ring-red-500 focus:bg-slate-300 focus:outline-none bg-slate-200"
                    required>
                <p class="text-sm text-gray-500">We'll never share your email with anyone else.</p>
            </div>

            <button class="px-4 py-2 text-sm text-white bg-black hover:bg-red-500">Submit</button>
        </form>
    </section>
@endsection
