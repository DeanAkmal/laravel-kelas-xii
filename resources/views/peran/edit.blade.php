@extends('templates.index')

@section('content')
<div class="container">
    <h2>Edit Peran</h2>
    <form action="{{ route('peran.update', $peran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="film_id" value="{{ $peran->film_id }}">
        <div class="form-group">
            <label for="cast_id">Cast:</label>
            <select class="form-control" id="cast_id" name="cast_id" required>
                @foreach($casts as $cast)
                    <option value="{{ $cast->id }}" {{ $peran->cast_id == $cast->id ? 'selected' : '' }}>{{ $cast->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="actor">Peran :</label>
            <input type="text" class="form-control" id="actor" name="actor" value="{{ $peran->actor }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('peran.index', $peran->film_id) }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
