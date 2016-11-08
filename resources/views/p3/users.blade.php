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
@section("forms")
	<form  method="post" action="/users">
		{{ csrf_field() }}
        <fieldset>
            <legend>User Generator Form</legend>
            <br>
            <label for="userNumber">Number of dummy users required (1 - 100):</label>
            <input type="number" name="userNumber" id="userNumber" value='userNumber'placeholder="Enter number 1- 100">
            <br>
            <br>
            <input class="button" type="submit" value="Generate users">
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
	<p>Generated user data will print here</p>
@else
	<table>
		@foreach($users as $user)
			<tr>
				<td>{{ $user }}</td>
			</tr>
		@endforeach
	<table>
@endif
@endsection


