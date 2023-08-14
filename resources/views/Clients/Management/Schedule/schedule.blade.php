@extends('Admin.Layout.index')

@section('title')

@endsection

@section('sidebar')
    @parent
@endsection

@section('mainheader')
    @parent
@endsection

@section('content')
    @include('Admin.Pages.main')
@endsection
