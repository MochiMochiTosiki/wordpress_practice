<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Easiest WP</title>
	<?php wp_head(); ?>
</head>
<body>
	<?php wp_body_open(); ?>
	<header class="page-header">
		<div class="header-area">
			<div class="panel-site-title">
				<p class="site-title"><a href="index.html">Easiest WP</a></p>
				<p class="site-subtitle">Just another WordPress site</p>
			</div>

			<nav class="global-nav">
				<ul id="global-menu" class="menu">
					<li class="current-menu-item"><a href="index.html">ホーム</a></li>
					<li><a href="portfolio.html">ポートフォリオ</a></li>
					<li><a href="profile.html">プロフィール</a></li>
					<li><a href="contact.html">お問い合わせ</a></li>
				</ul>
			</nav>

		</div>
	</header>

	<div class="hero"></div>
	<div class="content-area has-side-col">
		<div class="main-column">
			<h1 class="box-heading box-heading-main-col">Blog</h1>
			<div class="box-content">

				<ul class="archive">
					<li class="item-archive">
						<div class="time-and-thumb-archive">
							<time class="pub-date" datetime="2017-04-01T23:59:99+09:00">2017年4月1日</time>
							<p class="thumb thumb-archive"><a href="single.html"><img src="http://placehold.it/190x130"></a></p>
						</div>
						<div class="data-archive">
							<p class="list-categories-archive"><a href="archive.html">カテゴリ名</a></p>
							<h2 class="title-archive"><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></h2>
							<p class="list-tags-archive">タグ: <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a></p>
						</div>
					</li>
					<li class="item-archive">
						<div class="time-and-thumb-archive">
							<time class="pub-date" datetime="2017-04-01T23:59:99+09:00">2017年4月1日</time>
							<p class="thumb thumb-archive"><a href="single.html"><img src="http://placehold.it/190x130"></a></p>
						</div>
						<div class="data-archive">
							<p class="list-categories-archive"><a href="archive.html">カテゴリ名</a></p>
							<h2 class="title-archive"><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></h2>
							<p class="list-tags-archive">タグ: <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a></p>
						</div>
					</li>
					<li class="item-archive">
						<div class="time-and-thumb-archive">
							<time class="pub-date" datetime="2017-04-01T23:59:99+09:00">2017年4月1日</time>
							<p class="thumb thumb-archive"><a href="single.html"><img src="http://placehold.it/190x130"></a></p>
						</div>
						<div class="data-archive">
							<p class="list-categories-archive"><a href="archive.html">カテゴリ名</a></p>
							<h2 class="title-archive"><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></h2>
							<p class="list-tags-archive">タグ: <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a></p>
						</div>
					</li>
					<li class="item-archive">
						<div class="time-and-thumb-archive">
							<time class="pub-date" datetime="2017-04-01T23:59:99+09:00">2017年4月1日</time>
							<p class="thumb thumb-archive"><a href="single.html"><img src="http://placehold.it/190x130"></a></p>
						</div>
						<div class="data-archive">
							<p class="list-categories-archive"><a href="archive.html">カテゴリ名</a></p>
							<h2 class="title-archive"><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></h2>
							<p class="list-tags-archive">タグ: <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a></p>
						</div>
					</li>
					<li class="item-archive">
						<div class="time-and-thumb-archive">
							<time class="pub-date" datetime="2017-04-01T23:59:99+09:00">2017年4月1日</time>
							<p class="thumb thumb-archive"><a href="single.html"><img src="http://placehold.it/190x130"></a></p>
						</div>
						<div class="data-archive">
							<p class="list-categories-archive"><a href="archive.html">カテゴリ名</a></p>
							<h2 class="title-archive"><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></h2>
							<p class="list-tags-archive">タグ: <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a>, <a href="archive.html">タグ名</a></p>
						</div>
					</li>
				</ul>

			</div>

			<nav class="pagination">
				<div class="nav-links">
					<span class="current">1</span>
					<a href="index.html">2</a>
					<a href="index.html"><img class="arrow" src="images/arrow-right.png" srcset="images/arrow-right@2x.png 2x" alt="次へ"></a>
				</div>
			</nav>

		</div>

		<ul class="side-column">
			<li class="widget">
				<form class="searchform">
					<div>
						<input type="text">
						<input value="検索" type="submit">
					</div>
				</form>
			</li>
			<li class="widget">
				<h2 class="widgettitle">最近の投稿</h2>
				<ul>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
				</ul>
			</li>
			<li class="widget">
				<h2 class="widgettitle">カテゴリー</h2>
				<ul>
					<li><a href="archive.html">カテゴリ名</a></li>
					<li><a href="archive.html">カテゴリ名</a></li>
					<li><a href="archive.html">カテゴリ名</a></li>
				</ul>
			</li>
		</ul>

	</div>

	<footer class="page-footer">
		<div class="footer-widget-area">
			<ul class="footer-widgets">
				<li><a href="#"><img src="http://placehold.it/320x80"></a></li>
				<li><a href="#"><img src="http://placehold.it/320x80"></a></li>
				<li><a href="#"><img src="http://placehold.it/320x80"></a></li>
			</ul>
			<div class="back-to-top">
				<a href="#"><img src="images/arrow-up.png" srcset="images/arrow-up@2x.png 2x" alt="">TOP</a>
			</div>
		</div>
		<div class="copyright">
			<p>Copyright ©  Gijutsu-Hyohron Co., Ltd.</p>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>