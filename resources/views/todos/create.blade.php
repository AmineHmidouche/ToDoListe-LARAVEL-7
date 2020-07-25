@extends('todos.layout')

@section('content')
<form method="POST" action="/todos/create">
    @csrf
<x-alert/>
<h2 class="border-b pb-4 mb-2">Enter your information</h2>
    <input type="text" name="title" class="py-2 p-4 px-2 border-rounded border border-gray-400 " />
    <input type="submit" value="Entrer"  class="py-2 px-2  mb-4 border-rounded">

</form>

    <a href="/todos/index" class="mx-5 py-1 px-1 p-4 bg-green-400 border cursor-pointer text-whithe rounded">Back</a>

@endsection