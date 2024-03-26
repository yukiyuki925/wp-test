<?php get_header(); ?>

<main class="main-contents wrapper">
  <?php the_content();?>
  <div class="post-list">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <article class="post-item">
      <?php if(has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('medium_large'); ?>
      <?php endif; ?>
      <header class="post-header">
        <h1 class="post-title">
          <?php the_title(); ?>
        </h1>
        <time class="post-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_date(); ?></time>
        <?php the_category(); ?>
      </header>
      <div class="post-content wrapper">
        <p>
          仕事に追われて忙しい朝でも、<strong>栄養はしっかり取りましょう</strong>。
          朝にすると目覚めがすっきりする<a href="#">モーニングルーティン</a>も紹介します。
        </p>
        <h2>オーガニックフードのメリット</h2>
        <p>体の調子を整えます。栄養をとって毎日を乗り切りましょう。</p>
        <figure class="wp-block-image">
          <img src="images/img-food.jpg" alt="">
          <figcaption>おいしそうなフルーツや野菜</figcaption>
        </figure>
        <h3>おすすめの食材</h3>
        <ul>
          <li>バナナ</li>
          <li>キウイ</li>
          <li>りんご</li>
        </ul>
        <h2>モーニングルーティン</h2>
        <p>毎朝行うとより効果的です。</p>
        <ol>
          <li>軽いストレッチ</li>
          <li>水を飲む</li>
          <li>朝食をとる</li>
        </ol>
        <blockquote>
          <p>素敵な一日は、朝始まる。さぁ、朝をはじめよう。</p>
        </blockquote>
      </div>
      <footer class="post-footer wrapper">
        <div class="tags-links">
          <ul>
            <li><a href="#">初心者</a></li>
            <li><a href="#">健康</a></li>
            <li><a href="#">オーガニックフード</a></li>
          </ul>
        </div>
      </footer>
    </article>
    <?php endwhile; else : ?>
    <p>記事はありません</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>