@extends("p3.layouts.master")

@section("title")
    User Generator
@stop

@section("mainBanner")
	<img src="img/jsCoffee.jpg" alt="">
	<img src="img/html.jpg" alt="">
@stop

@section("headline")
	<h1>User Generator</h1>
@stop

@section("overview")
	<p>The table is designd to holp you create random user data that you can use to enter into your databses, mailing lists, etc.</p>
	<p>The first step is to fill in the table with the required information. Input how many users you require and submit the information.</p>
	<p>Then your data will be created. The copy and paste as reuired to allow you to focus on the imporant task of creating beautiful software.</p>
@stop

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

	<form action="post">
        <fieldset>
            <legend>Your vote</legend>
            <label for="nationality">Your nationality:</label>
            <input type="text" name="nationality" id="nationality">
            <label for="city">City:</label>
            <input type="text" name="city" id="city">
            <label for="reason">Reason:</label>
            <textarea name="reason" id="reason"></textarea>
            <label for="contactInfo">More information:</label>
            <input class="radioButn" type="radio" name="contactInfo" value="yes" id="contactInfo" checked>Yes
            <input class="radioButn" type="radio" name="contactInfo" value="no">No
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <br>
            <button type="submit" value="submit">Submit</button>
        </fieldset>
    </form>

	<h1>Hello</h1>
	<p><?php echo getDOB();?></p>
	<p><?php echo $faker->companyName;?></p>
	<p><?php echo $generator->getName();?></p>
	<table>
		<tr>
			<th>Name</th>
			<th>Company</th>
			<th>Date of Birth</th>
		</tr>
		<tr>
			<td>{{ $generator->getName() }}</td>
			<td>{{ $faker->companyName }}</td>
			<td>{{ getDOB() }}</td>
		</tr>
	</table>
@stop