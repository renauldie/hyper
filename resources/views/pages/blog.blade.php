@extends('layouts.app-sub')

@section('content')
<section class="blog_area section_padding">
  <div class="container">
    <div class="typography mb-5">
      <h1>Medicine Blog</h1>
    </div>
    <div class="row">
      @foreach ($items as $item)
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          <article class="blog_item">
            <div class="blog_item_img">
              <img class="card-img rounded-0"
                src="{{ $item->medicine_galleries->count() ? Storage::url($item->medicine_galleries->first()->image) : '' }}"
                alt="">
            </div>
            <div class="blog_details">
              <a class="d-inline-block" href="single-blog.html">
                <h2>{{ $item->medicine_name }}</h2>
              </a>
              <p>{{ $item->description }}</p>
              <ul class="blog-info-link">
                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
              </ul>
            </div>
          </article>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!--================Blog Area =================-->

@endsection