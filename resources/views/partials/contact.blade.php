<section id="contact" class="section">
  <div class="container-ds">
    <div class="route-label"><span class="method">POST</span> /contact HTTP/1.1</div>
    <div class="section-head">
      <h2>Let's talk</h2>
      <p>Hiring, freelance work, or just want to talk shop about Laravel — reach out.</p>
    </div>

    <div class="contact-grid">
      <div>
        <p>
          Open to junior/mid backend roles and freelance PHP or Laravel work.
          I reply fastest over email or LinkedIn.
        </p>
        <div class="contact-list">
          <a href="mailto:tayyabsabir72@gmail.com">✉ tayyabsabir72@gmail.com</a>
          <a href="tel:+923000441251">☎ +92 300 0441251</a>
          <a href="https://linkedin.com/in/tayyab1251" target="_blank" rel="noopener">in/ linkedin.com/in/tayyab1251</a>
          <a href="https://github.com/tayyab1251" target="_blank" rel="noopener">⌥ github.com/tayyab1251</a>
        </div>
      </div>

      <form class="form-ds" method="POST" action="">
        @csrf
        <div class="field">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name" required>
        </div>
        <div class="field">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required>
        </div>
        <div class="field">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="What are you building?" required></textarea>
        </div>
        <button type="submit" class="btn-ds btn-primary">Send message</button>
      </form>
    </div>
  </div>
</section>
