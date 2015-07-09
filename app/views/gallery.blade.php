@extends('master')

@section('content')
<div class="container">
      <div class="row">
            <h3 class="gallery-title text-center">Gallery One</h3>
            <div class="owl-carousel gallery">
              <div><img src="{{ asset('images/gallery/student-sm.jpg') }}" class="img-thumbnail gallery-img"></div>
              <div><img src="{{ asset('images/gallery/student-sm.jpg') }}" class="img-thumbnail gallery-img"></div>
              <div><img src="{{ asset('images/gallery/student-sm.jpg') }}" class="img-thumbnail gallery-img"></div>
              <div><img src="{{ asset('images/gallery/student-sm.jpg') }}" class="img-thumbnail gallery-img"></div>
            </div>
        </div>

        <div class="row">
            <h3 class="gallery-title text-center">Gallery One</h3>
              <div class="owl-carousel gallery">
                <div><a class="group4" href="{{ asset('images/gallery/ohoopee1.jpg') }}" title="Me and my grandfather on the Ohoopee."><img src="{{ asset('images/gallery/student-sm.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="group4" href="{{ asset('images/gallery/ohoopee1.jpg') }}" title="Me and my grandfather on the Ohoopee."><img src="{{ asset('images/gallery/student-sm.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="group4" href="{{ asset('images/gallery/ohoopee1.jpg') }}" title="Me and my grandfather on the Ohoopee."><img src="{{ asset('images/gallery/student-sm.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="group4" href="{{ asset('images/gallery/ohoopee1.jpg') }}" title="Me and my grandfather on the Ohoopee."><img src="{{ asset('images/gallery/student-sm.jpg') }}" class="img-thumbnail gallery-img"></a></div>
                <div><a class="group4" href="{{ asset('images/gallery/ohoopee1.jpg') }}" title="Me and my grandfather on the Ohoopee."><img src="{{ asset('images/gallery/student-sm.jpg') }}" class="img-thumbnail gallery-img"></a></div>
              </div>
          </div>

</div>
@endsection

@section('script')
<script type="text/javascript" src=" {{ asset('js/jquery.colorbox-min.js') }}"></script>
@endsection