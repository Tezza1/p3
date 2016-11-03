@extends("p3.layouts.master")

@section("title")
    Main Page
@endsection

@section("mainBanner")
	<img src="img/coffeeCode.jpg" alt="">
	<img src="img/coffeeLife.png" alt="">
@endsection

@section("headline")
	<h1>Welcome to the Coffee Break Coder</h1>
@endsection

@section("overview")
	<p>The <em>Coffee Break Coder</em> is a website designed to make web programmer&rsquo;s life easier. It contains everyday tools designed to streamline tasks or provide dummy 	&ldquo;filler&rdquo; information. Two key tasts that web developers reuire is creating dummy text to check the layout of their pages and dummy users. We look forward to helping to make your life easier by streamlining these tasks. So please check out out the relevant links at the top of the page.</p>
	{{-- http://www.lipsum.com/ --}}
	<p><em>Lorem Ipsum</em> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, so many and web devlopers use Lorem Ipsum as their default model text</p>
	<p>This is a simple tool to help generate <em>fake users</em> to help popluate data required to test your web projects. It can be used test web page layouts, databases, routes, etc. in your local production environment without worrying about either entering real data (and worrying about information privacy issues) or the time consuming task of entering large amounts of fake data.</p>
	<p>So please relax and enjoy your work. And enjoy using the The <em>Coffee Break Coder</em>.</p>
@endsection

@section("contents")

@endsection