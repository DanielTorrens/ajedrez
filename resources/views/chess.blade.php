@extends('components.layout')

@section('title')
	chessmate
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> {{--libreria jquery--}}
@section('content')

	<script>
		$(document).ready( function () {
			$('#nav-inicio').css('background-color','rgb(226, 226, 226)');
	    	$('#nav-inicio a').css('color','#5d4954');
		});
	</script>
		
@endsection