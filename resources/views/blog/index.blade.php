@extends('layouts.app')

@section('title', 'Blog — Tayyab Sabir')
@section('description', 'Notes on PHP, Laravel, and building backend systems for real products.')

@section('content')
  @include('partials.navbar')

  <header class="hero" style="padding-block: var(--space-7) var(--space-6);">
    <div class="container-ds">
      <div class="route-label"><span class="method">GET</span> /blog HTTP/1.1</div>
      <h1 style="font-size: var(--fs-h1);">Notes from the backend.</h1>
      <p class="hero-sub">
        Things I run into building APIs, learning Laravel properly, and fixing
        what breaks in production — written down so future-me (and maybe you)
        doesn't have to relearn it.
      </p>
    </div>
  </header>

  <section class="section" style="border-top: none; padding-top: 0;">
    <div class="container-ds">

      <div class="blog-filter">
        <span class="filter-pill is-active">All</span>
        <span class="filter-pill">Laravel</span>
        <span class="filter-pill">APIs</span>
        <span class="filter-pill">Backend</span>
        <span class="filter-pill">Frontend</span>
      </div>

      <div class="blog-grid">

        {{-- Featured post --}}
        {{-- <a href="{{ route('blog.show', 'mvc-middleware-laravel-structure') }}" class="post-title-link post-featured-link" style="grid-column: 1 / -1;"> --}}
        <a href="" class="post-title-link post-featured-link" style="grid-column: 1 / -1;">
          <div class="card-ds post-featured">
            <div>
              <span class="badge-status"><span class="status-dot"></span>Latest</span>
              <h3>MVC, middleware, and why Laravel's structure finally clicked</h3>
              <p class="post-excerpt">
                For months I could write PHP that worked without really following
                Laravel's conventions. Here's what changed when I stopped fighting
                the framework and started reading requests the way it does.
              </p>
              <div class="post-meta" style="margin-top: var(--space-3); padding-top: 0;">
                <span>Jul 18, 2026</span>
                <span class="dot">·</span>
                <span>7 min read</span>
                <span class="dot">·</span>
                <span class="post-category" style="margin: 0;">Laravel</span>
              </div>
            </div>
            <div class="post-featured-panel">
              <div class="row"><span>route</span><span>GET /blog/mvc-middleware-laravel-structure</span></div>
              <div class="row"><span>status</span><span>200 OK</span></div>
              <div class="row"><span>category</span><span>Laravel</span></div>
              <div class="row"><span>reading_time</span><span>7 min</span></div>
            </div>
          </div>
        </a>

        @include('partials.post-card', ['post' => [
          'slug' => 'debugging-multi-tenant-auth-bug',
          'category' => 'Backend',
          'title' => 'Debugging a multi-tenant auth bug that only broke for one customer',
          'excerpt' => 'A production auth issue that only reproduced for a single tenant taught me more about session scoping than any tutorial did.',
          'date' => 'Jul 2, 2026',
          'reading_time' => 6,
        ]])

        @include('partials.post-card', ['post' => [
          'slug' => 'lessons-building-rest-apis-live-saas',
          'category' => 'APIs',
          'title' => 'What I learned building REST APIs for a live SaaS platform',
          'excerpt' => 'Designing endpoints for a product with real customers is a different game than designing them for a portfolio project.',
          'date' => 'Jun 20, 2026',
          'reading_time' => 5,
        ]])

        @include('partials.post-card', ['post' => [
          'slug' => 'figma-to-functional-cms',
          'category' => 'Frontend',
          'title' => 'From Figma to functional: turning designs into real CMS features',
          'excerpt' => 'Notes on the gap between a static design file and a CMS field that actually needs validation, permissions, and edge cases.',
          'date' => 'Jun 3, 2026',
          'reading_time' => 4,
        ]])

        @include('partials.post-card', ['post' => [
          'slug' => 'currency-conversion-api-pricing',
          'category' => 'APIs',
          'title' => 'Building a currency conversion API without breaking pricing for anyone',
          'excerpt' => 'How I approached rate updates and caching so pricing stayed consistent across multiple agency customers at once.',
          'date' => 'May 22, 2026',
          'reading_time' => 5,
        ]])

      </div>

      <div class="pagination-ds">
        <span class="is-current">1</span>
        <a href="#">2</a>
        <a href="#">→</a>
      </div>

    </div>
  </section>

  @include('partials.footer')
@endsection