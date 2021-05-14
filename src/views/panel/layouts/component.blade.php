@extends('vendor.larapanel.panel.layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('style')
    {{ $style }}
@endsection

@section('content')

    <div class="app-title">
        <div>
            {{ $subject }}
        </div>
        <ul class="app-breadcrumb breadcrumb">
            {{ $breadcrumb }}
        </ul>
    </div>

    {{ $content }}

@endsection

@section('script')
    {{ $script }}
@endsection
