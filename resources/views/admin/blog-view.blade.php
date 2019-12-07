@extends('layouts.app')

@section('content')
<blog-view-admin :post="{{ $post }}"></blog-view-admin>
@endsection
