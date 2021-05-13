@extends('home.layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('style')
    {{ $style }}

    @if( isset($description) )
        <meta name="description" content="{!! prepareMetaDescription( $description ) !!}">
    @endif

@endsection

@section('content_top')
    {{ $content_top ?? '' }}
@endsection

@section('content')
    {{ $content }}
@endsection

@section('script')
    {{ $script }}
@endsection
