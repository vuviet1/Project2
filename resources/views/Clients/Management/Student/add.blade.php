@extends('Admin.Layout.index')

@section('title')
    {{$title}}
@endsection

@section('sidebar')
    @parent
@endsection

@section('mainheader')
    @parent
@endsection

@section('content')
    @include('Admin.Pages.Management.Student.add')
@endsection
