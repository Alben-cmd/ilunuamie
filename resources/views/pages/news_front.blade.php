@extends('layouts.master')

@section('title', 'Frequently Asked Questions')

@section('content')

    <div class="header-text mb-5" style="background-image: url('../assets/images/slider/news.jpg');">
        <div class="container">
            <h3 style="color: white;"><b>News </b><br> Section</h3>
        </div>
    </div>
    <section>
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-12 entries" style="padding-left:50px; padding-right:50px;">
              <!-- <h2 class="sidebar-title text-center">Recent News</h2> -->
              @forelse ($news as $key => $item)
              <article class="bc4-item2" style="padding:15px 15px;"> 
                
                <h5 class="post-item clearfix">
                  <a href="{{ route('single.news', ['id' => $item['id'] ]) }} ">{!! $item['title'] !!}</a>
                </h5>
                  <div class="entry-content">
                  <p>
                    {!! \Illuminate\Support\Str::limit($item->news, 290, $end='...') !!} <a href="{{ route('single.news', ['id' => $item['id'] ]) }} "><em>read more</em> </a>
                  </p>
                </div>
                
              </article><!-- End blog entry -->
              <br>
                @empty
                News coming soon!
                @endforelse
                {{ $news->links() }}
            </div><!-- End blog entries list -->
            
            <!-- <h2 class="sidebar-title text-center">Older News</h2>
            <br>
            <div class="col-lg-4">
              
              <div class="bc4-item2" style="padding: 10px 10px">
                
                @forelse ($old_news as $key => $item)
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    
                    <h5><a href="{{ route('single.news', ['id' => $item['id'] ]) }}">
                      @php 
                          $text = strip_tags($item->title);
                          echo mb_strimwidth($text, 0, 50, "...");
                      @endphp
                    </a></h5>
                    <p>@php 
                      $text = strip_tags($item->news);
                      echo mb_strimwidth($text, 0, 46, "...");
                  @endphp <a href="{{ route('single.news', ['id' => $item['id'] ]) }}"><em>read more</em></a></p> 
                    <time datetime="2020-01-01"></time>
                  </div>
  
                 
                </div>
                @empty
                No Old News!
                @endforelse
              </div>             
            </div> -->
            <!-- End blog sidebar -->
  
          </div>
  
        </div>
      </section><!-- End Blog Section -->


@endsection
