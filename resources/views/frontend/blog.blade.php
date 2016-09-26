@extends('frontend.layout.master')

@section('content')
<div class="blog_header">
<div class="container">
	<h2 class="text-center blog_welcome">Welcome to the TripShoes Blog</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4 blog_info">
				<a href="{{ asset('/article') }}">
					<div class="blog_img1"></div>
				</a>
				<div class="blog_text">
				<h3>How do I say that?</h3>
				<p>20 Essential "Must Learn" Vietnamese words and how to pronounce them correctly</p>
				</div>
			</div>
			<div class="col-md-4 blog_info">
				<a href="{{ asset('/article') }}">
					<div class="blog_img2"></div>
				</a>
				<div class="blog_text">
				<h3>Children of the Dragon</h3>
				<p>10 Interesting Insider Facts about Hoi An we bet you never knew</p>
				</div>
			</div>
			<div class="col-md-4 blog_info">
				<a href="{{ asset('/article') }}">
					<div class="blog_img3"></div>
				</a>
				<div class="blog_text">
				<h3>The Vietnamese eat what?</h3>
				<p>10 Fun Facts about food in Vietnam we bet you never knew</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row blog_end">
		<div class="col-md-12">
			<div class="col-md-4 blog_info">
				<a href="{{ asset('/article') }}">
					<div class="blog_img4"></div>
				</a>
				<div class="blog_text">
				<h3>Vietnam - Do and Dont's</h3>
				<p>A comprehensive list of things you can do and things you should never do in the country</p>
				</div>
			</div>
			<div class="col-md-4 blog_info">
				<a href="{{ asset('/article') }}">
					<div class="blog_img5"></div>
				</a>
				<div class="blog_text">
				<h3>What to pack for Vietnam</h3>
				<p>The ultimate packing list for visiting what the Asia's hidden gems</p>
				</div>
			</div>
			<div class="col-md-4 blog_info">
				<a href="{{ asset('/article') }}">
					<div class="blog_img6"></div>
				</a>
				<div class="blog_text">
				<h3>Is it "fur" or "pho"?</h3>
				<p>10 words to learn when ordering food at a Vietnamese restaurant</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
		