@extends("p3.layouts.master")

@section("title")
    Password Generator
@endsection

@section("mainBanner")
	<img src="img/password1.jpg" alt="">
	<img src="img/password2.png" alt="">
@endsection

@section("headline")
	<h1>Password Generator</h1>
@endsection

@section("overview")
	<h3>Step 1</h3>
	<p><span class="keyText">Length:</span> Decide on the length of your password. All paswords should be a minimum of 10 characters and a maximum of 25 characters.</p>
	<h3>Step 2</h3>
	<p><span class="keyText">Numbers:</span> By default passwords will only include letters. but there is an option to include numbers in your passwords as well as letters.</p>
	<h3>Step 3</h3>
	<p><span class="keyText">Special characters:</span> There are options of whether to include special characters and if so, what type of special characters to include.</p>
@endsection

@section("forms")
    <form method="post" action="/password">
		{{ csrf_field() }}
		<fieldset>
            <legend>Password generator</legend>

            <!-- FORM INPUTS TO SPECIFY LENGTH OF PASSWORD -->
            <br>
            <div class="column">

                <label for="numberLength">Length of password (10 - 25):</label>
                <br>
                <input type="number" name="numberLength" id="numberLength" placeholder="Enter length">
                <br>

                 <!-- FORM INPUTS TO SPECIFY IF NUMBERS ARE INCLUDED -->
                <br>
                <label for="includeNumber">Include number:</label>
                <br>
                <input type="checkbox" name="includeNumber" value="yes"> Yes
                <br>

                <!-- FORM INPUTS TO SPECIFY: WHETHER TO INCLUDE UPPER CASE, LOWER CASE, BOTH -->
                <br>
                <p></p>
                <label for="caseSensitive">Case sensitive:</label>
                <br>
                <input type="radio" name="radioCase" value="lowerCase" checked> Lower case<br>
                <input type="radio" name="radioCase" value="upperCase"> Upper case<br>
                <input type="radio" name="radioCase" value="mixedCase"> Mixed cases<br>

                <!-- FORM INPUTS TO SPECIFY: WHETHER TO INCLUDE A SPECIAL SYMBOL -->
                <br>
                <p></p>
                <label for="specialCharacters">Special charaters:</label>
                <br>
                <select name="specialCharacters">
                    <option value="none">None</option>
                    <option value="combo1">#$%&</option>
                </select>
                <br>

                <br>
                <br>
                <input class="button" type="submit" value="Generate password">
            </div>
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
		<p>Generated password will print here</p>
	@else
		<h3>Your password is: </h3>
		@for ($j = 0; $j < $number; $j++) 
			{{ $password[$j] }}
		@endfor
	@endif
    <br>
@endsection