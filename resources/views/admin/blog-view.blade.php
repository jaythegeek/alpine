@extends('layouts.app')
@section('title', $post->title)
@section('description', substr($post->stripped_content,0,160))
@section('content')
<blog-view-admin :post="{{ $post }}"></blog-view-admin>
@endsection