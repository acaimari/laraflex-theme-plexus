@extends('plexus::layouts.app')

@section('content')
@inject('route', 'Illuminate\Support\Facades\Route')


<style>
.thumbnail {
    width: 425px;
    height: 200px;
    object-fit: cover; /* Para recortar la imagen y mantener la relación de aspecto */
}
</style>


<div style="height: 20px;"></div>



<div class="page-content page-sidebar">
    <div class="container"> 
        <div class="row">
            @if ($page->sidebar_position == 'left' || $page->sidebar_position == 'right')
                <!-- Si la posición de la barra lateral es 'left', incluir la barra lateral a la izquierda (3 columnas) -->
                @if ($page->sidebar_position == 'left')
                    <div class="col-md-3">
                        @include('plexus::partials.left-sidebar')
                    </div>
                @endif

                <!-- El contenido principal siempre ocupa 9 columnas en el caso de que haya una barra lateral -->
                <div class="col-md-9">
                
						
						
                <div class="content-primary">
                                <div class="title-page">

                                    @if(config('theme.title_active'))
                                        <h3>{{ $tag->title }}</h3>
                                    @endif

                                    <!--
                                    <div class="top-nav">
                                        <a href="#" class="prev-post"><i class="fa fa-angle-double-left"></i> Older Posts</a>
                                        <a href="#" class="next-post">Newer Posts <i class="fa fa-angle-double-right"></i></a>
                                    </div> -->
                                </div>


   <div class="blog-list list2">
   @foreach ($tag->posts as $post)
    <article class="item-post">
        <div class="post-thumb">
            <a href="{{ route('post.show', $post->slug) }}">
                <img class="thumbnail" src="{{ $post->image ? $post->image : '/storage/default/thumbnail-default.gif' }}" alt="{{ $post->title }}">
            </a>
            <i class="fa fa-pencil"></i>
        </div>
        <div class="post-meta">
            <div class="avatar-author">
                <div class="arrow"></div>
                <a href="#"><img src="{{ $post->user->avatar }}" alt="{{ $post->user->name }}"></a>
            </div>
            <div class="meta-right">
                <h4><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></h4>
                <p><i class="fa fa-clock-o"></i> Posted on {{ $post->created_at->format('d M. Y') }} under {{ $post->category ? $post->category->title : 'Uncategorized' }}</p>
            </div>
        </div>
        <div class="post-content">
            <p>{{ $post->excerpt }}</p>
            <a href="{{ route('post.show', $post->slug) }}" class="link-more">CONTINUE READING</a>
        </div>
    </article>
@endforeach



                                </div>

                                <!--
                                <div class="blog-nav">
                                    <ul class="pagination none-style">
                                        <li><a href=""><i class="fa fa-angle-double-left"></i> First</a></li>  
                                        <li><a href=""><i class="fa fa-angle-left"></i> Back</a></li>                               
                                        <li><span class="page-numbers current">01</span></li>
                                        <li><a class="page-numbers" href="#">02</a></li>
                                        <li><a class="page-numbers" href="#">03</a></li>
                                        <li><a class="page-numbers" href="#">04</a></li>
                                        <li><a class="page-numbers" href="#">05</a></li>
                                        <li><a class="page-numbers" href="#">06</a></li>
                                        <li><a class="page-numbers" href="#">07</a></li>
                                        <li><a href="">Forward <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="">Last <i class="fa fa-angle-double-right"></i></a></li>                                            
                                    </ul>                                   
                                </div>
                            </div> -->
							






             
                                


                                
                                
            
                    </div>                
                </div>

                <!-- Si la posición de la barra lateral es 'right', incluir la barra lateral a la derecha (3 columnas) -->
                @if ($page->sidebar_position == 'right')
                    <div class="col-md-3">
                        @include('plexus::partials.right-sidebar')
                    </div>
                @endif
            @else


 
    
                <!-- Si no hay barra lateral, el contenido principal ocupa todas las columnas (12 columnas) -->
                <div class="col-md-12">

                <div class="content-primary">
                                
                                @if(config('theme.page_title_active'))
                                    <div class="title-page">
                                        <h3>{{ $page->title }}</h3>
                                    </div>
                                @endif
                                
                                    <div class="content-inner">

                                    @if(config('theme.header_image_active'))
                                      <!--  <section>
                                            <img src="images/pages/about.jpg" alt="">
                                        </section> -->
                                    @endif

                                        <section class="padding page-default">
                                        {!! $page->content !!}
                                        </section>
                            
                        </div>
                    </div>                

                </div>
            @endif
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.slick-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>

@endsection





