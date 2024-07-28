@extends('templates.index')

@push('style')
  <link rel="stylesheet" type="text/css" href="{{ asset('template/list-css/table-style.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('template/list-css/basictable.css') }}" />
@endpush

@push('scripts')

<script type="text/javascript" src="{{ asset('template/list-js/jquery.basictable.min.js') }}"></script>
 <script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();
      $('#table-breakpoint').basictable({
        breakpoint: 768
      });
    });
  </script>
@endpush

@section('content')
<div class="container">
  <h1>Create a New Peran</h1>
  <form action="{{ route('perans.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="name">Name:</label>
              <select class="form-control" id="cast" name="cast_id">
                @foreach($casts as $key => $value)
                    <option value="{{ $value->id}}">{{ $value->name}}</option>
                @endforeach 
            </select>
          </div>
            <!-- Example of using $perans -->
            <div class="form-group">
                <label for="peran">Peran:</label>
                <input type="text" name="peran" id="name">
            </div>
            <div class="form-group">
              <label for="peran">Title:</label>
              <select class="form-control" id="film" name="film_id">
                  @foreach($films as $key => $value)
                      <option value="{{ $value->id }}">{{ $value->title }}</option>
                  @endforeach 
              </select>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@push('scripts')
    <!-- Your custom scripts can go here -->
@endpush
