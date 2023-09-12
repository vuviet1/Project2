@extends('Layout.index')

@section('title')

@endsection

@section('sidebar')
    @parent
@endsection

@section('mainheader')
    @parent
@endsection

@section('content')
    @include('Layout.Pages.main')

@endsection
