{{--
  Expects a $post array/object with: slug, category, title, excerpt, date, reading_time
--}}
<a href="" class="post-title-link">
  <div class="card-ds post-card">
    <div class="post-head">
      <div class="post-route"><span class="method">GET</span> /blog/{{ $post['slug'] }}</div>
      <span class="post-category">{{ $post['category'] }}</span>
    </div>
    <h3>{{ $post['title'] }}</h3>
    <p class="post-excerpt">{{ $post['excerpt'] }}</p>
    <div class="post-meta">
      <span>{{ $post['date'] }}</span>
      <span class="dot">·</span>
      <span>{{ $post['reading_time'] }} min read</span>
    </div>
  </div>
</a>