@extends("p3.layouts.master")

@section("title")
    User Generator
@endsection

@section("mainBanner")
	<img src="img/jsCoffee.jpg" alt="">
	<img src="img/html.jpg" alt="">
@endsection

@section("headline")
	<h1>User Generator</h1>
@endsection

@section("overview")
	<p>The table is designd to holp you create random user data that you can use to enter into your databses, mailing lists, etc.</p>
	<p>The first step is to fill in the table with the required information. Input how many users you require and submit the information.</p>
	<p>Then your data will be created. Then copy and paste as reuired to allow you to focus on the imporant task of creating beautiful software.</p>
@endsection

@section("contents")
	<?php
		// Fake name generator
		// $generator = \Nubs\RandomNameGenerator\All::create();
		$generator = new \Nubs\RandomNameGenerator\Alliteration();

		// Fake company generator
		$faker = Faker\Factory::create();
		$faker->addProvider(new CompanyNameGenerator\FakerProvider($faker));

		// Fale birthday generator
		function getDOB () {
			// Reference to: http://stackoverflow.com/questions/16568605/generate-randomy-birth-date
			$curr_year = date('Y');

			$dob_year  = rand($curr_year-18,$curr_year-47);
			$dob_month = rand(01,12);
			$dob_day   = rand(01,30);

			$dob = $dob_month.'/'.$dob_day.'/'.$dob_year;

			return $dob;
		}

	?>
	<br>
	<form  method="post" action="/users">
		{{ csrf_field() }}
        <fieldset>
            <legend>User Generator Form</legend>
            <br>
            <label for="userNumber">Number of dummy users required (1 - 100):</label>
            <input type="number" name="userNumber" id="userNumber" value='{{ ("number") }}'>
            <br>
            <br>
            <input type="submit" value="Generate users">
        </fieldset>
    </form> 
    <br>
    @if ($number < 1 || $number > 100)
        <p>Enter a valid number range</p>
    @else       
        <table>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Date of Birth</th>
            </tr>
            @for($i = 0; $i < $number; $i++)
                <tr>
                    <td>{{ $generator->getName() }}</td>
                    <td>{{ $faker->companyName }}</td>
                    <td>{{ getDOB() }}</td>
                </tr>
            @endfor
        </table>
    @endif
@endsection