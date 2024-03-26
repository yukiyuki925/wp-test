<?php get_header(); ?>

<main class="main-contents wrapper">
  <div class="post-list">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article class="post-item">
      <a href="#">
        <img src="images/img-fruits.jpg" alt="" class="wp-post-image">
      </a>
      <header class="post-header">
        <h2 class="post-title">
          <a href="#">初心者必携のキャンプグッズ おすすめ10選</a>
        </h2>
        <time class="post-date" datetime="2022-12-31">2022年12月31日</time>
        <ul class="post-categories">
          <li><a href="#">オーガニックフード</a></li>
        </ul>
      </header>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <p>記事はありません。</p>
    <?php endif; ?>
  </div>

  <div class="nav-links">
    <a href="#">← 新しい投稿</a>
    <a href="#">過去の投稿 →</a>
  </div>
</main>

<?php get_footer(); ?>