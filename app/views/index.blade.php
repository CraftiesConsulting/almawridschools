@extends('master')

@section('content')
@include('carousel_banner')
	<div class="container">
			<div class="">
				
			</div>
			<div class="row">
				<div class="col-12">
					<h6 id="welcome">Welcome To Al-Mawrid Islamic International College</h6>
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<h3 class="home-paragraphs-head">Welcome</h3>
					<p class="home-paragraphs">
						Al-Mawrid Islamic International College is a co-educational Institute established to give our students an all round education with the Islamic faith as the solid foundation upon which their Knowledge and character are based.<br>We focus on providing our students with a wide range of academic subjects, as well as offering numerous extracurricular activities...<br><span class="hidden">The school does not only prepare her students for the academic assessments that lie ahead, but equally takes a holistic view of life and places emphasis on their spiritual and moral well being.</span>
					</p>
					<a class="btn read-more pull-right" href="{{ url('about')}}">Read More</a>
				</div>
				
				<div class="col-lg-4">
					<h3 class="home-paragraphs-head">Vision &amp; Mission</h3>
					<p class="home-paragraphs">
						To impact faith, knowledge, skills and determination culture in our students so as to enrich their intellectual and leadership capabilities.<br>To produce academically sound and morally upright ciizens as future leaders.
					</p>
				</div>
				
				<div class="col-lg-4">
					<h3 class="home-paragraphs-head">Latest News</h3>
					<p class="home-paragraphs">
						For quality islamic and western education for your wards to prepare them for the future and the hereafter Our school is your first resort. we provide quality education to our student by providing qualified and willing to teach staffs. Supplement with good learning evironment which features stantard classrooms and library, laboratories, computer room, art and culture room etc. We also engage student in...
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-12 register">
					<div id="registration">
						<h1>Registration</h1>
						<p>New Academic exam takes  place every year. You can apply for your ward by downloading and filling the required information <a href="{{ url('admission_form') }}">here</a></p>
					</div>
				</div>
			</div>
		</div>
@endsection