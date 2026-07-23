@extends('layouts.app')

@section('title', 'Tayyab Sabir — PHP / Laravel Developer')
@section('description', 'PHP & Laravel developer building backend systems, REST APIs, and CMS platforms.')

@section('content')
  @include('partials.navbar')
  @include('partials.hero')
  @include('partials.stats')
  @include('partials.about')
  @include('partials.experience')
  @include('partials.skills')
  {{-- @include('partials.blogs') --}}
  @include('partials.projects')
  @include('partials.education')
  @include('partials.contact')
  @include('partials.footer')
@endsection
