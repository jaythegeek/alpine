@extends('layouts.app')
@section('title', $post->title .' - Alpine Elements Careers #BeInYourElement')
@section('content')
<blog-view :post="{{ $post }}"></blog-view>
@endsection