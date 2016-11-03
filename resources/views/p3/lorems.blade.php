@extends("p3.layouts.master")

@section("title")
    Lorem Generator
@endsection

@section("mainBanner")
	<img src="img/coffeeLogo.jpg" alt="">
	<img src="img/programmer3.jpg" alt="">
@endsection

@section("headline")
	<h1>Lorem Generator</h1>
@endsection

@section("overview")
    <p>The table is designd to holp you create lorem ipsum text that you can used as filler text in websites, etc.</p>
	<p>The first step is to fill in the table with the required information. Input how many words, lines or paragraphs you require and submit the information.</p>
	<p>Then your data will be created. Then copy and paste as reuired to allow you to focus on the imporant task of creating beautiful software.</p>
@endsection

@section("contents")
    <form action="GET" action="lorems">
		{{ csrf_field() }}
        <fieldset>
            <legend>Lorem Generator Form</legend>
            <br>
            <label for="loremWords">Number of lorem words required (1 - 100):</label>
            <input type="number" name="loremWords" id="loremWords"><br>
            <br>
            <label for="loremSentences">Number of lorem sentences required (1 - 100):</label>
            <input type="number" name="loremSentences" id="loremSentences"><br>
            <br>
            <label for="loremParagraphs">Number of lorem paragraphs required (1 - 100):</label>
            <input type="number" name="loremParagraphs" id="loremParagraphs"><br>            
            <br>
            <input type="submit" value="Generate lorem ipsom text">
        </fieldset>
    </form>
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
@endsection