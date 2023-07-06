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
            @if ($post->sidebar_position == 'left' || $post->sidebar_position == 'right')
                <!-- Si la posición de la barra lateral es 'left', incluir la barra lateral a la izquierda (3 columnas) -->
                @if ($post->sidebar_position == 'left')
                    <div class="col-md-3">
                        @include('plexus::partials.left-sidebar')
                    </div>
                @endif

                <!-- El contenido principal siempre ocupa 9 columnas en el caso de que haya una barra lateral -->
                <div class="col-md-9">
						
                <div class="content-primary">
                                <div class="title-page">
                                <div class="title-page">
                                 <h3>Post list</h3>
                                </div>



      @php
        $chunks = $posts->chunk(2);
    @endphp

      @foreach ($chunks as $chunk)
        <div class="row">
            @foreach ($chunk as $post)
                <div class="col-md-6">
                    <article class="item-post">
                
                    <div class="post-thumb">
                        <a href="{{ route('post.show', $post->slug) }}">
                            <img class="thumbnail" src="{{ $post->image ? $post->image : '/storage/default/thumbnail-default.gif' }}" alt="">
                        </a>
                    </div>
                    <div class="post-meta">
                        <div class="meta">
                            <h4><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></h4>
                        </div>
                    </div>
                    
           
                    </article>
                </div>
            @endforeach
        </div>
    @endforeach

    @if ($posts->lastPage() > 10)
        <ul class="pagination none-style">
            <li>{{ $posts->links() }}</li>
        </ul>
    @endif         


</div>

                <!-- Si la posición de la barra lateral es 'right', incluir la barra lateral a la derecha (3 columnas) -->
                @if ($post->sidebar_position == 'right')
                    <div class="col-md-3">
                        @include('plexus::partials.right-sidebar')
                    </div>
                @endif
            @else


 
    
                <!-- Si no hay barra lateral, el contenido principal ocupa todas las columnas (12 columnas) -->
                <div class="col-md-12">

                <div class="content-primary">
                                <div class="title-page">
                                <div class="title-page">
                                 <h3>Pages list</h3>
                                </div>
@php
    $chunks = $post->chunk(2);
@endphp

@foreach ($chunks as $chunk)
    <div class="row">
        @foreach ($chunk as $page)
            <div class="col-md-6">
                <article class="item-post">
                    <div class="post-thumb">
                        <a href="{{ route('page.show', $page->slug) }}">
                            <img class="thumbnail" src="{{ $page->image ? $page->image : '/storage/default/thumbnail-default.gif' }}" alt="">
                        </a>
                    </div>
                    <div class="post-meta">
                        <div class="meta">
                            <h4><a href="{{ route('page.show', $page->slug) }}">{{ $page->title }}</a></h4>
                        </div>
                    </div>
                    
                </article>

            </div>
        @endforeach
    </div>
@endforeach
 </div>

 @if($post->lastPage() > 10)
    <ul class="pagination none-style">
        <li>{{ $post->links() }}</li>
    </ul>
@endif
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