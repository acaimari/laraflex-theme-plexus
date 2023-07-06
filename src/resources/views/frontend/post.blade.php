@extends('plexus::layouts.app')

@section('content')
@inject('route', 'Illuminate\Support\Facades\Route')


<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/css/owl.carousel.css"/>
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/vendor/caimari/laraflex-theme-plexus/src/resources/style.css"/>
    
    <link rel="stylesheet" id="fullcolor-css" href="" type="text/css" media="all">

<style>
    .post-thumb {
  width: 100%; /* Establece el ancho del contenedor al 100% del contenedor padre */
  height: 0; /* Establece la altura inicial del contenedor a 0 */
  padding-bottom: 40%; /* Establece el valor del padding inferior en relación al ancho, por ejemplo, 75% */
  position: relative; /* Establece la posición relativa para permitir el posicionamiento absoluto de la imagen */
  overflow: hidden; /* Oculta cualquier contenido adicional que supere el tamaño del contenedor */
}

.post-thumb img {
  position: absolute; /* Establece la posición absoluta para ajustar la imagen al contenedor */
  width: 100%; /* Establece el ancho de la imagen al 100% del contenedor */
  height: 100%; /* Establece la altura de la imagen al 100% del contenedor */
  object-fit: cover; /* Ajusta la imagen para cubrir todo el contenedor sin deformarse */
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
                <div class="col-md-9"> <!-------------------- MD9 ---------------->
                    <!-- Contenido Principal -->




                    <div class="content-primary">
                                
                                <div class="title-page">
                                <h3>{{ $post->title }}</h3>
  
                    <div class="top-nav">

                                @if ($postsCount > 1)
                                @if ($previousPost || $nextPost)
                                    @if ($previousPost)
                                        <a href="{{ route('post.show', $previousPost->slug) }}" class="prev-post"><i class="fa fa-angle-double-left"></i> Older Posts</a>
                                    @endif
                                    @if ($nextPost)
                                        <a href="{{ route('post.show', $nextPost->slug) }}" class="next-post">Newer Posts <i class="fa fa-angle-double-right"></i></a>
                                    @endif
                                @endif
                            @endif

                                </div>
                            </div>

                            <div class="blog-list single-post">

                                <article class="item-post">
                                    
                                
                                @if (!empty($post->image))
                                <div class="post-thumb">
                                    <img src="{{ $post->image }}" alt="{{ $post->title }}">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                     @endif


                                    <div class="post-meta">

                                    
                                        <div class="avatar-author">
                                            <div class="arrow"></div>
                                            <a href="#"><img src="{{ $post->user->avatar }}" alt=""></a>
                                        </div>

                                        <div class="meta-right">
                                                    <h4>{{ $post->user->name }}</h4>
                                                    <p>
                                                    <i class="fa fa-clock-o"></i>
                                                    Posted on {{ $post->created_at->format('d M. Y') }}
                                                    @if ($post->created_at != $post->updated_at)
                                                        , updated on {{ $post->updated_at->format('d M. Y') }}
                                                    @endif

                                                    @foreach ($post->categories as $category)
                                                    Under:
                                                    
                                            
                                                        <a href="{{ route('category.show', $category->slug) }}">{{ $category->title }}</a>
                                                        @if (!$loop->last)
                                                            ,
                                                        @endif
                                                    @endforeach
                                                </p>

                                        </div>
                                        
                                        <!-- <div class="meta-com">
                                            <i class="fa fa-comment-o"></i>
                                            <p>37</p>
                                        </div> -->
                                    
                                    </div>



                                    

                                    <div class="post-content">
                                    {!! $post->content !!}
                                    </div>

                                <div class="meta-single">
                                    <ul class="none-style">
                             

                                            @if ($post->categories->isNotEmpty())
                                            <li>
                                                <div class="title-meta">Category:</div>
                                                <div class="meta-details">
                                                    @foreach($post->categories as $category)
                                                        <a href="{{ route('category.show', $category->title) }}">{{ $category->title }}</a>
                                                        @if (!$loop->last)
                                                            ,
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </li>
                                            @endif

                                            @if ($post->tags->isNotEmpty())
                                            <li>
                                             <div class="title-meta">Tags:</div>
                                                <div class="meta-details">
                                                @foreach($post->tags as $tag)
                                                    <a href="{{ route('tag.show', $tag->title) }}">{{ $tag->title }}</a>
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </div>
                                            </li>
                                            @endif
                                            
                                            @if (isset($post->created_at))
                                                <li>
                                                    <div class="title-meta">Date:</div>
                                                    <div class="meta-details">{{ $post->created_at->format('F d, Y') }}</div>
                                                </li>
                                            @endif


                                            @if (isset($post->user))
                                            <li>
                                                <div class="title-meta">Author:</div>
                                                <div class="meta-details">{{ $post->user->name }}</div>
                                            </li>
                                            @endif

                                            

                                            <li>
                                                <div class="title-meta">Views:</div>
                                                <div class="meta-details">Total views: {{ $PostTotalViews }} & Visitors: {{ $PostUniqueViews }}</div>
                                                
                                            </li>
                                
                                            <!--   
                                            <li>
                                                <div class="title-meta">Comments:</div>
                                                <div class="meta-details">24</div>
                                            </li> -->
                                            
                                    </ul>
                                </div>

                                   
    </div>
</div>








                </div> <!-------------------- END MD9 ---------------->           
            
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
                        @if(config('theme.post_title_active'))
                            <div class="title-page">
                                <h3>{{ $post->title }}</h3>
                            </div>
                        @endif
                        <div class="content-inner">
                            @if(config('theme.post_header_image_active'))
                                <section>
                                    <img src="images/pages/about.jpg" alt="">
                                </section>
                            @endif
                            <section class="padding page-default">
                            {!! $post->content !!}
                            </section>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>




<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/jquery.min.js"></script> 
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/jquery.responsiveTabs.js"></script>
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/classie.js"></script>
<script type="text/javascript" src="/vendor/caimari/laraflex-theme-plexus/src/resources/assests/js/custom.js"></script>


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

