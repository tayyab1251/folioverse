@extends('layouts.app')

@section('title', "MVC, middleware, and why Laravel's structure finally clicked — Tayyab Sabir")
@section('description', "Notes on what changed when I stopped fighting Laravel's conventions and started reading requests the way the framework does.")

@section('content')
  @include('partials.navbar')

  <article class="section" style="border-top: none; padding-top: var(--space-7);">
    <div class="container-ds">

      <div class="article-header">
        <div class="breadcrumb-ds">
          <a href="{{ route('blog.index') }}">/blog</a> / mvc-middleware-laravel-structure
        </div>
        <div class="route-label"><span class="method">GET</span> /blog/mvc-middleware-laravel-structure HTTP/1.1</div>
        <h1>MVC, middleware, and why Laravel's structure finally clicked</h1>
        <div class="article-meta">
          <span>Tayyab Sabir</span>
          <span class="dot">·</span>
          <span>Jul 18, 2026</span>
          <span class="dot">·</span>
          <span>7 min read</span>
          <span class="dot">·</span>
          <span class="post-category" style="margin: 0;">Laravel</span>
        </div>
      </div>

      <div class="article-body">
        <p>
          For a while I could write PHP that worked — routes that responded,
          queries that returned the right rows — without really following
          Laravel's conventions. It ran. It just didn't feel like it was
          <em>supposed</em> to look like that. Every controller was doing
          everything: validating input, querying the database, formatting the
          response, sometimes even sending an email inline.
        </p>

        <p>
          It worked in the same way a house of extension cords "works." The
          moment I needed to reuse a piece of logic somewhere else, I'd copy
          it. The moment two developers touched the same controller, we'd
          collide.
        </p>

        <h2>The request has a shape, whether you follow it or not</h2>

        <p>
          What actually changed things was thinking about a request as
          something that passes through layers, not something a single
          function handles top to bottom. Laravel already gives you those
          layers — middleware, then routing, then the controller, then
          whatever service or model layer you choose to add:
        </p>

        <pre><code><span class="cm">// routes/web.php</span>
Route::middleware(<span class="str">'auth'</span>)->group(<span class="kw">function</span> () {
    Route::get(<span class="str">'/dashboard'</span>, [<span class="fn">DashboardController</span>::class, <span class="str">'index'</span>]);
});

<span class="cm">// app/Http/Controllers/DashboardController.php</span>
<span class="kw">public function</span> <span class="fn">index</span>(Request $request)
{
    $stats = $this->dashboardService-><span class="fn">summaryFor</span>($request->user());

    <span class="kw">return</span> view(<span class="str">'dashboard.index'</span>, compact(<span class="str">'stats'</span>));
}</code></pre>

        <p>
          Nothing here is clever. That's the point. The middleware decides
          <em>who's allowed in</em>. The controller decides <em>what to do
          with the request</em> and hands the actual work to something else.
          Nobody reading this six months from now has to guess where the
          auth check lives.
        </p>

        <h2>Middleware isn't just for auth</h2>

        <p>
          I'd only ever used middleware for the obvious case — checking if a
          user is logged in. What clicked later was realizing it's really
          just: <strong>run this before (or after) the request reaches the
          controller, for every route that needs it</strong>. Rate limiting,
          logging, tenant scoping — all the same pattern.
        </p>

        <blockquote>
          If you're writing the same "check" at the top of three different
          controllers, that's not business logic — that's a middleware that
          hasn't been extracted yet.
        </blockquote>

        <h3>Where I still get it wrong</h3>

        <ul>
          <li>Putting validation logic inline instead of in a Form Request — still my most common Laravel code review comment on myself.</li>
          <li>Reaching for a new package before checking if Laravel already ships the thing (queues, notifications, and events cover more than I expected).</li>
          <li>Under-using Eloquent relationships and writing raw joins out of old habit from core PHP.</li>
        </ul>

        <h2>What I'm doing differently now</h2>

        <p>
          Every new feature, I ask the same three questions before writing a
          line: what validates this, what authorizes this, and what actually
          does the work. If the answer to all three is "the controller," I
          stop and split it up. It's slower for the first ten minutes and
          faster for every minute after that.
        </p>

        <p>
          Laravel's structure isn't ceremony — it's the accumulated answer to
          "where does this go" so a team doesn't have to keep re-deciding it.
          That's the part that took actual production code, not a tutorial,
          to sink in.
        </p>
      </div>

      <div class="article-tags">
        <span class="tag">Laravel</span>
        <span class="tag">MVC</span>
        <span class="tag">Middleware</span>
        <span class="tag">Backend</span>
      </div>

      <div class="card-ds author-card">
        <div class="author-avatar">TS</div>
        <div>
          <h4>Tayyab Sabir</h4>
          <p>PHP &amp; Laravel developer. Writes about backend systems, APIs, and what actually breaks in production.</p>
        </div>
      </div>

      <div class="related-wrap">
        <div class="section-head" style="margin-bottom: var(--space-4);">
          <h2 style="font-size: var(--fs-h3);">More like this</h2>
        </div>
        <div class="blog-grid">
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
        </div>
      </div>

    </div>
  </article>

  @include('partials.footer')
@endsection