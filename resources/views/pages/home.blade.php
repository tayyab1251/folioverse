@extends('layouts.app')

@section('title', 'Portfolio — PHP Laravel Developer')

@section('content')
    @include('components.hero')
    @include('components.stats')
    @include('components.work')
    @include('components.skills')
    @include('components.testimonials')
    @include('components.blog')
    @include('components.contact')
@endsection