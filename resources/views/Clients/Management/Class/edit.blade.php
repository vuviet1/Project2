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
    @if($errors->any())
        <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ. Vui lòng nhập lại</div>
    @endif

    @include('Admin.Pages.Management.Class.edit')
@endsection
