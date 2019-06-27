{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
  <div class="container">
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      <div class="row">
        <div class="col-12">
          <hr class="mb-md-5">
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-6">
          @if (has_nav_menu('about_navigation'))
            {!! wp_nav_menu(
              [
                'theme_location' => 'about_navigation',
                'menu_class' => 'about-nav',
                'walker' => new App\wp_bootstrap4_navwalker(),
                'link_before' => '<h1><b>> ',
                'link_after' => '</b></h1>'
              ]
            ) !!}
          @endif
          <hr class="mb-0">
        </div>
        <div class="col-md-6 my-md-auto my-xl-0 mt-xl-auto">
          @if (has_post_thumbnail())
             {!! the_post_thumbnail('col-8-thumbnail', array('class' => 'img-fluid image-cover-frontpage')) !!}
          @else
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/265160064" allowfullscreen></iframe>
            </div>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          @include('partials.content-page')
        </div>
      </div>
    @endwhile
  </div>
@endsection