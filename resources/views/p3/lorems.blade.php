@extends("p3.layouts.master")

@section("title")
    Lorem Generator
@stop

@section("mainBanner")
	<img src="img/coffeeLogo.jpg" alt="">
	<img src="img/programmer3.jpg" alt="">
@stop

@section("headline")
	<h1>Lorem Generator</h1>
@stop

@section("overview")
	<p>jfhdhfkdfhkd</p>
	<p>uiyuiyiyiuyiy</p>
	<p>uyiuyiyiyi</p>
@stop

@section("contents")
	<?php
		$lipsum = new joshtronic\LoremIpsum();
		echo '5 words: ' . $lipsum->words(5);
		echo "<br>";
		echo '1 sentence:  ' . $lipsum->sentence();
		echo "<br>";
		echo '5 sentences: ' . $lipsum->sentences(5);
		echo "<br>";
		echo $lipsum->paragraphs(3, 'p');
		// Generates: <p>Lorem ipsum...</p><p>...</p><p>...</p>
		echo $lipsum->sentences(3, ['article', 'p']);
		// Generates: <article><p>...</p></article><article><p>...</p></article><article><p>...</p></article>
	?>
@stop