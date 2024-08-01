@extends('templates.index')

@section('content')
    <div class="container">
        <h2>List of Perans</h2>
        <a href="{{ route('movies.show', $filmId) }}" class="btn btn-primary">Back to Film</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Film</th>
                    <th>Cast</th>
                    <th>Actor</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perans as $peran)
                    <tr>
                        <td>{{ $peran->id }}</td>
                        <td>{{ $peran->film->title }}</td>
                        <td>{{ $peran->cast->name }}</td>
                        <td>{{ $peran->actor }}</td>
                        <td>
                            <a href="{{ route('peran.edit', $peran->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
