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

@section("forms")
    <form method="post" action="/lorems">
		{{ csrf_field() }}
        <fieldset>
            <legend>Lorem Generator Form</legend>
            <br>
			 <label for="typeOutput">Select type of output:</label>
			 <br><br>
            <input class="radioButn" type="radio" name="typeOutput" value="lorenWords" checked>Words
            <input class="radioButn" type="radio" name="typeOutput" value="loremSentences">Sentences
			<input class="radioButn" type="radio" name="typeOutput" value="loremParagraphs">Paragraphs
            <br>
			<label for="number">Number required (1 - 100):</label>
            <input type="number" name="number" id="number" value='number'placeholder="Enter number 1- 100">
            <br>
            <br>
            <input class="button" type="submit" value="Generate lorem ipsom text">
        </fieldset>
    </form>
@endsection

@section("error")
    <br>
    @if(count($errors) > 0) 
        <ul class="error"> 
            @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li> 
            @endforeach 
        </ul> 
    @endif
    <br>
@endsection

@section("output")
	@if ($number == 0)
		<p>Generated lorem ipsum data will print here</p>
	@else
		<!-- Blade print function doesn't work with this plugin -->
		<h3>Copy and paste the required text below:</h3>
		<?php $lipsum = new joshtronic\LoremIpsum(); ?>
		@if ($typeOutput == "lorenWords")
			<?php echo $lipsum->words($number); ?>
		@elseif ($typeOutput == "loremSentences")
			<?php echo $lipsum->sentences($number); ?>
		@else
			<?php echo $lipsum->paragraphs($number, 'p'); ?>
		@endif
	@endif
    <br>
@endsection




