@extends('app')
@section('content')
    <form action="{{ route('words.update', ['word' => $word->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input class="form-control" name="id" disabled value="{{$word->id}}">
        <input class="form-control" name="word" placeholder="Enter word" value="{{$word->word}}">
        <input class="form-control" name="grammar" placeholder="Enter grammar" value="{{$word->grammar}}">
        <input class="form-control" name="description" placeholder="Enter description" value="{{$word->description}}">
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
