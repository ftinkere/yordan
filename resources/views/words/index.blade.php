@extends('app')
@section('content')
    <h4>Words</h4>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Word</th>
                <th scope="col">Grammar</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
        @foreach($words as $word)
            <tr>
                <th scope="row">{{ $word->id }}</th>
                <td>{{ $word->word }}</td>
                <td>{{ $word->grammar }}</td>
                <td>{{ $word->description }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('words.show', $word->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('words.edit', $word->id) }}">Edit</a>
                    <form action="{{ route('words.destroy', $word->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        <tr>
            <form action="{{ route('words.store') }}" method="POST">
                @csrf
                @method('POST')
                <th>
                    #
                </th>
                <td>
                    <input class="form-control" name="word" placeholder="Enter word">
                </td>
                <td>
                    <input class="form-control" name="grammar" placeholder="Enter grammar">
                </td>
                <td>
                    <input class="form-control" name="description" placeholder="Enter description">
                </td>
                <td>
                    <button type="submit" class="btn btn-success">Add</button>
                </td>
            </form>
        </tr>
        </tbody>
    </table>
@endsection
