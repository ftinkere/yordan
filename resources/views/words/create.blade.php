@extends('app')
@section('content')
    <form action="{{ route('words.store') }}" method="POST">
        @csrf
        @method('POST')
        <input class="form-control" name="word" placeholder="Enter word">
        <input class="form-control" name="grammar" placeholder="Enter grammar">
        <input class="form-control" name="description" placeholder="Enter description">
        <button type="submit" class="btn btn-success">Add</button>
    </form>
@endsection
