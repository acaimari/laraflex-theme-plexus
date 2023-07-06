@extends('plexus::layouts.app')

@section('content')
@inject('route', 'Illuminate\Support\Facades\Route')


<style>
    .header-container {
        position: relative;
        height: 100px; /* Altura deseada */
        overflow: hidden;
    }

    .header-page-image {
        width: 100%;
        height: auto;
        object-fit: cover;
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
                                
                                @if(config('theme.title_active'))
                                    <div class="title-page">
                                        <h3>{{ $page->title }}</h3>  
                                    </div>
                                @endif
                                
                                    <div class="content-inner">

                               
                                     
  
<section>
    @if ($page->image)
        <div class="header-container">
            <img src="{{ $page->image }}" alt="{{ $page->title }}" class="header-page-image">
        </div>
    @endif
</section>

                                        <section class="padding page-default">
                                        {!! $page->content !!}
                                        </section>



                        </div>
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


                                        <div class="meta-single">
                                    <ul class="none-style">
                             
                                            <li>
     <!-- <div class="title-meta">Views:</div> -->
<div class="meta-details">Total views: {{ $pageTotalViews }} & Visitors: {{ $pageUniqueViews }}</div>

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

                </div>
            @endif
        </div>
    </div>
</div>


@endsection

