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
  <br />
  <!-- /w3l-medile-movies-grids -->
    <div class="agileits-single-top">
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('movies') }}">Movies</a></li>
        <li class="active">{{ $film->title }}</li>
      </ol>
    </div>
    <div class="single-page-agile-info">
      <!-- /movie-browse-agile -->
      <div class="show-top-grids-w3lagile">
        <div class="col-sm-8 single-left">
          <div class="song">
            <div class="single-right-grids">

            <div class="col-md-4 single-right-grid-left">
              <a href="single.html"><img src="{{ asset($film->poster) }}" alt="" /></a>
            </div>
            <div class="col-md-8 single-right-grid-right">
              <div class="song-info">
                <h2>{{ $film->title }}</h2>
                <p class="author"><a href="#" class="author">{{ $film->year }}</a></p>
                <p class="views">{{ $film->sinopsis }}</p>
              </div>
              <div class="col-md-8 single-right-grid-right">
                <div class="song-info">
                  <h2>{{ $film->title }}</h2>
                  <p class="author"><a href="#" class="author">{{ $film->year }}</a></p>
                  <p class="views">{{ $film->sinopsis }}</p>
                </div>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                    <div class="agile-news-table">
                      <table id="table-breakpoint">
                        <thead>
                          <tr>
                            <th>Actor</th>
                            <th>Peran</th>
                            <th>Actions</th> <!-- Tambahkan kolom Actions -->
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($perans as $peran)
                          <tr>
                            <td class="w3-list-info">{{ $peran->cast_id }}</td>
                            <td class="w3-list-info">{{ $peran->actor }}</td>
                            <td class="w3-list-info">
                              <a href="{{ route('peran.edit', $peran->id) }}" class="btn btn-warning btn-sm">EDIT</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    <!-- Tambahkan tombol Add di bawah tabel -->


                  </div>
                </div>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>

          <!-- Other sections such as comments and similar films -->
          <!-- ... -->

        </div>
        <div class="col-md-4 single-right">
          <h3>Similar Film By Genre</h3>
          @foreach ($filmByGenre as $film)
            <div class="single-grid-right">
              <div class="single-right-grids">
                <div class="col-md-4 single-right-grid-left">
                  <a href="{{ route('movies.show', $film->id) }}"><img src="/{{ $film->poster }}" alt="" /></a>
                </div>
                <div class="col-md-8 single-right-grid-right">
                  <a href="{{ route('movies.show', $film->id) }}" class="title">{{ $film->title }}</a>
                  <p class="author"><a href="#" class="author">{{ $film->year }}</a></p>
                  <p class="views" style="text-align: justify; margin-right: 10px">{{ $film->sinopsis }}</p>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="clearfix"> </div>
      </div>
      <!--body wrapper end-->
      <div class="w3_agile_banner_bottom_grid">
        <div id="owl-demo" class="owl-carousel owl-theme">
          @foreach ($filmByRelease as $filmRelease)
            <div class="item">
              <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                <a href="{{ route('movies.show', $filmRelease->id) }}" class="hvr-shutter-out-horizontal"><img src="/{{ $filmRelease->poster }}" title="{{ $filmRelease->title }}" class="img-responsive" alt=" " />
                  <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                </a>
                <div class="mid-1 agileits_w3layouts_mid_1_home">
                  <div class="w3l-movie-text">
                    <h6><a href="{{ route('movies.show', $filmRelease->id) }}">{{ $filmRelease->title }}</a></h6>
                  </div>
                  <div class="mid-2 agile_mid_2_home">
                    <p>{{ $filmRelease->year }}</p>
                    <div class="block-stars">
                      <ul class="w3l-ratings">
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                @if ($filmRelease->year == now()->year)
                  <div class="ribben">
                    <p>NEW</p>
                  </div>
                @endif
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script src="js/simplePlayer.js"></script>
<script>
  $("document").ready(function() {
    $("#video").simplePlayer();
  });
</script>
@endpush
