@extends('master')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<h3 class="about-paragraphs-head">Who are we ?</h3>
					<p class="about-paragraphs">
						Al-Mawrid Islamic International College is a co-educational institution located at Umar Audi Road, Opposite Tiger House, Beside University of Ilorin Staff Quarters, G.R.A., Ilorin, Kwara State. It is established with the sole aim of grooming individuals who will be Academically, Islamically and morally sound. Thus, they will be able to compete globally with their counterparts. The school is strategically positioned which makes it accessible coupled with modest school fees and quality service.
						<br><br>We focus on providing our students with a wide range of academic subjects, as well as offering numerous co–curricular activities including games and sports. The school does not only prepare her students for academic excellence that lie ahead but take a holistic view of life and place emphasis on their spiritual and moral well being.</p>

				<h3 class="about-paragraphs-head">About the school</h3>

					<h4>The school is made up of two section</h4>
					<div role="tabpanel">
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#school-section-one" aria-controls="school-section-one" role="tab" data-toggle="tab">Secondary School Section</a></li>
					    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Arabic and Islamic Studies Section.</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="school-section-one">The Secondary School Section is made up of Junior and Senior Secondary Schools (JSS and SSS). This section offers subjects approved for Junior and Senior Secondary Schools with focus on Arabic, Islamic Education, recitation and memorization of Holy Qur’an. The school exposes the students to Information Communication Technology (ICT), Sciences, Home Economics e.t.c. through standard laboratories that are well equipped with modern gadgets and well stocked library.</div>
					    <div role="tabpanel" class="tab-pane" id="profile">The Arabic and Islamic Studies Section runs the following programmes:
							<ol type="a">
								<li>Preparatory class. One year></li>
								<li>Junior Islamic School (JIS) 3 years</li>
								<li>Senior Islamic School (SIS) 3 years</li>
								<li>Adult Education in Arabic, Quranic and Islamic Studies. (All programmes in 2a–d above come up in the evenings 4-6p.m)</li>
								<li>There are also Saturdays and Sundays programmes between (8am–12Noon.) for interested students.</li>
							</ol>
							NB: Quran recitation and memorization is compulsory for all categories of students between 8am-9am daily (Monday to Friday) 
						</div>

					  </div>

					</div>
				</div>
				
				<div class="col-md-6 col-lg-6">
					<h3 id="facilities" class="about-paragraphs-head">Available facilities</h3>
					<div class="carousel slide" id="activities-Carousel">
			
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li class="active" data-slide-to="0" data-target="#activities-Carousel"></li>
						<li data-slide-to="1" data-target="#activities-Carousel"></li>
						<li data-slide-to="2" data-target="#activities-Carousel"></li>
					</ol>
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<div class="item active">
						<img src="{{ asset('images/facilities/classroom.jpg') }}" alt="classroom">
						<div class="carousel-caption">
							<h4>Modern Class Rooms</h4>
							<p>Conducive classroom for better assimilation during classes</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item">
					<img src="{{ asset('images/facilities/computer_lab.jpg') }}" alt="Computer Laboratory">
						<div class="carousel-caption">
							<h4>Computer Laboratory</h4>
							<p>Well equipped computer laboratory for practical session on subject taught in computing</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->


					<div class="item">
					<img src=" {{ asset('images/facilities/transport.jpg') }}" alt="Transportaion">
						<div class="carousel-caption">
							<h4>Transportation</h4>
							<p>Transporatation of students from their various home to school and back home after school period</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->


				</div><!-- carousel-inner -->
				
				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#activities-Carousel"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#activities-Carousel"><span class="icon-next"></span></a>
			
			</div><!-- end activities-Carousel -->
					<p class="about-paragraphs">
						<ul>
							<li>Competent and Commited Staff</li>
							<li>Modern Classrooms</li>
							<li>Computer Laboratory</li>
							<li>Well equiped Science Lab</li>
							<li>Quranic Memorization secion</li>
							<li>Conducive Learning Environment</li>
							<li>Transportation</li>
							<li>Hostel Accommodation</li>
							<li>Adequate Security Guaranteed</li>
							<li>Debatin Club, Arabic &amps; French</li>
							<li>Provision of First Aid</li>
						</ul>
					</p>
				</div>
				
			</div>
			
		</div>
@endsection