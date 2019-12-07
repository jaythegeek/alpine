@extends('layouts.app')

@section('content')
<blog-view :post="{{ $post }}"></blog-view>
@endsection