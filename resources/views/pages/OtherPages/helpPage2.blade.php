@extends('layout.master')

@section('content')

<main class="bg_gray">
		
	<div class="container margin_90_65">
		<div class="main_title">
			<h1>Help and Support Center</h1>
			<p>What are you looking for?</p>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="search-input white">
					<input type="text" placeholder="Search question or article...">
					<button type="submit"><i class="ti-search"></i></button>
				</div>
				<!-- /search-input -->
			</div>
		</div>
	</div>
	<!-- /container -->
		
		<div class="bg_white">
			<div class="container margin_90_65">
				<div class="main_title">
					<h2>Our Support Sections</h2>
					<p>Read articles and questions</p>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<a class="box_topic_2" href="#0">
						<i class="ti-wallet"></i>
						<h3>Payments</h3>
						<p>Eu qui mundi lucilius petentium, mea amet libris prodesset in, ei unum delectus vituperata eum. Ne usu omittam menandri.</p>
					</a>
					</div>
					<div class="col-md-6">
						<a class="box_topic_2" href="#0">
						<i class="ti-user"></i>
						<h3>Account</h3>
						<p>Eu qui mundi lucilius petentium, mea amet libris prodesset in, ei unum delectus vituperata eum. Ne usu omittam menandri.</p>
					</a>
					</div>
				</div>
				<!-- /row -->
				
				<div class="row">
					<div class="col-md-6">
						<a class="box_topic_2" href="#0">
						<i class="ti-help"></i>
						<h3>General help</h3>
						<p>Eu qui mundi lucilius petentium, mea amet libris prodesset in, ei unum delectus vituperata eum. Ne usu omittam menandri.</p>
					</a>
					</div>
					<div class="col-md-6">
						<a class="box_topic_2" href="#0">
						<i class="ti-truck"></i>
						<h3>Shipping</h3>
						<p>Eu qui mundi lucilius petentium, mea amet libris prodesset in, ei unum delectus vituperata eum. Ne usu omittam menandri.</p>
					</a>
					</div>
				</div>
				<!-- /row -->
				
				<div class="row">
					<div class="col-md-6">
						<a class="box_topic_2" href="#0">
						<i class="ti-eraser"></i>
						<h3>Refunds</h3>
						<p>Eu qui mundi lucilius petentium, mea amet libris prodesset in, ei unum delectus vituperata eum. Ne usu omittam menandri.</p>
					</a>
					</div>
					<div class="col-md-6">
						<a class="box_topic_2" href="#0">
						<i class="ti-comments"></i>
						<h3>Reviews</h3>
						<p>Eu qui mundi lucilius petentium, mea amet libris prodesset in, ei unum delectus vituperata eum. Ne usu omittam menandri.</p>
					</a>
					</div>
				</div>
				<!-- /row -->					
			</div>
			<!-- /container -->	
		</div>
		<!-- /bg_white -->
	</main>
    @endsection