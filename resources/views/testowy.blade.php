
@extends('layouts.app')

@section('content')

	@foreach ($tablica as $kolor)
		<p style="margin-left:30px;">
			{{ $kolor }}
			@if ( ! $loop->last)
				<hr>
			@endif
		</p>
	@endforeach

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut deserunt molestias veritatis quae magni illo numquam praesentium, possimus maxime quis in voluptatem neque mollitia alias exercitationem. Esse soluta, numquam alias!</p>

@endsection
