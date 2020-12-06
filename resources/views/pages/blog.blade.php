@extends('layouts.app-sub')

@section('content')
<!--================Blog Area =================-->
{{-- <div class="conteiner">
  <div class="section-top-border">
    <div class="col-md-4">
      <div class="typography">
        <h1>This is header 01</h1>
      </div>
    </div>
  </div>  
</div> --}}
<section class="blog_area section_padding">
  <div class="container">
    <div class="typography mb-5">
      <h1>Medicine Blog</h1>
    </div>
    <div class="row">
      <div class="col-lg-12 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          <article class="blog_item">
            <div class="blog_item_img">
              <img class="card-img rounded-0" src="{{ url('frontend/img/blog/single_blog_1.png')}}" alt="">
              <a href="#" class="blog_item_date">
                <h3>15</h3>
                <p>Jan</p>
              </a>
            </div>

            <div class="blog_details">
              <a class="d-inline-block" href="single-blog.html">
                <h2>Google inks pact for new 35-storey office</h2>
              </a>
              <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.</p>
              <ul class="blog-info-link">
                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
              </ul>
            </div>
          </article>

          <article class="blog_item">
            <div class="blog_item_img">
              <img class="card-img rounded-0" src="img/blog/single_blog_2.png" alt="">
              <a href="#" class="blog_item_date">
                <h3>15</h3>
                <p>Jan</p>
              </a>
            </div>

            <div class="blog_details">
              <a class="d-inline-block" href="single-blog.html">
                <h2>Google inks pact for new 35-storey office</h2>
              </a>
              <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.</p>
              <ul class="blog-info-link">
                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
              </ul>
            </div>
          </article>

          <article class="blog_item">
            <div class="blog_item_img">
              <img class="card-img rounded-0" src="img/blog/single_blog_3.png" alt="">
              <a href="#" class="blog_item_date">
                <h3>15</h3>
                <p>Jan</p>
              </a>
            </div>

            <div class="blog_details">
              <a class="d-inline-block" href="single-blog.html">
                <h2>Google inks pact for new 35-storey office</h2>
              </a>
              <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.</p>
              <ul class="blog-info-link">
                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
              </ul>
            </div>
          </article>

          <article class="blog_item">
            <div class="blog_item_img">
              <img class="card-img rounded-0" src="img/blog/single_blog_4.png" alt="">
              <a href="#" class="blog_item_date">
                <h3>15</h3>
                <p>Jan</p>
              </a>
            </div>

            <div class="blog_details">
              <a class="d-inline-block" href="single-blog.html">
                <h2>Google inks pact for new 35-storey office</h2>
              </a>
              <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.</p>
              <ul class="blog-info-link">
                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
              </ul>
            </div>
          </article>

          <article class="blog_item">
            <div class="blog_item_img">
              <img class="card-img rounded-0" src="img/blog/single_blog_5.png" alt="">
              <a href="#" class="blog_item_date">
                <h3>15</h3>
                <p>Jan</p>
              </a>
            </div>

            <div class="blog_details">
              <a class="d-inline-block" href="single-blog.html">
                <h2>Google inks pact for new 35-storey office</h2>
              </a>
              <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.</p>
              <ul class="blog-info-link">
                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
              </ul>
            </div>
          </article>

          <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
              <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                  <i class="ti-angle-left"></i>
                </a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link">1</a>
              </li>
              <li class="page-item active">
                <a href="#" class="page-link">2</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                  <i class="ti-angle-right"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================Blog Area =================-->

@endsection