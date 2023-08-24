@extends('layouts.default')


@section('pageTitle')
	Search
@stop

@section('content')
	<x-search-bar :query="$query"></x-search-bar>
@endsection
