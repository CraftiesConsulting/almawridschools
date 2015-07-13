@extends('master')

@section('content')
<div class="container">
      <div class="row">
            <h3 class="gallery-title text-center">Our Students</h3>
              <div class="owl-carousel gallery">
                <div><a class="student" href="{{ asset('images/gallery/students/student-1.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/students/student-sm-1.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="student" href="{{ asset('images/gallery/students/student-2.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/students/student-sm-2.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="student" href="{{ asset('images/gallery/students/student-3.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/students/student-sm-3.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="student" href="{{ asset('images/gallery/students/student-4.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/students/student-sm-4.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="student" href="{{ asset('images/gallery/students/student-5.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/students/student-sm-5.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="student" href="{{ asset('images/gallery/students/student-6.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/students/student-sm-6.jpg') }}" class="img-thumbnail gallery-img"></a></div>
              </div>
        </div>

        <div class="row">
            <h3 class="gallery-title text-center">Our Staffs</h3>
              <div class="owl-carousel gallery">
                <div><a class="staff" href="{{ asset('images/gallery/staffs/staff-1.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/staffs/staff-sm-1.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="staff" href="{{ asset('images/gallery/staffs/staff-2.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/staffs/staff-sm-2.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="staff" href="{{ asset('images/gallery/staffs/staff-3.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/staffs/staff-sm-3.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="staff" href="{{ asset('images/gallery/staffs/staff-4.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/staffs/staff-sm-4.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="staff" href="{{ asset('images/gallery/staffs/staff-5.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/staffs/staff-sm-5.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="staff" href="{{ asset('images/gallery/staffs/staff-6.jpg') }}" title=""><img src="{{ asset('images/gallery/thumbnails/staffs/staff-sm-6.jpg') }}" class="img-thumbnail gallery-img"></a></div>
              </div>
        </div>

</div>
@endsection

@section('script')
<script type="text/javascript" src=" {{ asset('js/jquery.colorbox-min.js') }}"></script>
@endsection