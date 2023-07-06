
@extends('plexus::layouts.app')

@section('content')

<div class="main-content">


<div style="margin-top: 20px;"></div>

            <div class="page-content page-sidebar">
                <div class="container">
                    <div class="row">                        

                        <div class="col-md-4 col-lg-3">
                            <div class="sidebar">

                                <!-- Search -->
                                <div class="widget widget_search">
    <form method="get" class="search-form input-group" action="{{ route('search') }}">
        <input class="form-control" type="text" value="" name="q" id="q" placeholder="type to search...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </form>
</div>

                                @if(config('theme.widget_post_categories_active'))
                                <div class="widget widget_categories">
                                    <h4>Categories</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-folder-open-o"></i> Web</a> <span>(23)</span></li>
                                        <li><a href="#"><i class="fa fa-folder-open-o"></i> Development</a> <span>(11)</span></li>
                                        <li><a href="#"><i class="fa fa-folder-open-o"></i> Photoshop</a> <span>(15)</span></li>
                                        <li><a href="#"><i class="fa fa-folder-open-o"></i> Illustrations</a> <span>(05)</span></li>
                                        <li><a href="#"><i class="fa fa-folder-open-o"></i> Photography</a> <span>(10)</span></li>
                                        <li><a href="#"><i class="fa fa-folder-open-o"></i> Design </a> <span>(25)</span></li>
                                    </ul>
                                </div>
                                @endif

                                @if(config('theme.widget_post_tabs_active'))
                                <div id="widget-tabs" class="widget widget_tabs">
                                    <ul class="title-tabs">
                                        <li><a href="#tab1"> RECENT </a></li>
                                        <li><a href="#tab2"> POPULAR </a></li>
                                        <li><a href="#tab3"> COMMENTS </a></li>
                                    </ul>
                                    <div class="content-tabs">
                                        <div id="tab1">
                                            <div class="recent-post">
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs50x50/2.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <a href="blog-post.html">Nullam Massa Turpis...</a>
                                                        <p><i class="fa fa-clock-o"></i> Posted on 11 Oct. 2014</p>
                                                    </div>
                                                </div>
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs50x50/5.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <a href="blog-post.html">Malesuada Lacinia...</a>
                                                        <p><i class="fa fa-clock-o"></i> Posted on 16 Nov. 2013</p>
                                                    </div>
                                                </div>
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs50x50/4.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <a href="blog-post.html">Quis Dictum Nulla...</a>
                                                        <p><i class="fa fa-clock-o"></i> Posted on 21 May. 2011</p>
                                                    </div>
                                                </div>
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs50x50/1.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <a href="blog-post.html">Nam Ornare Pulvinar...</a>
                                                        <p><i class="fa fa-clock-o"></i> Posted on 28 Mar. 2011</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab2">
                                            <div class="popular-post">
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs50x50/5.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <a href="blog-post.html">Malesuada Lacinia...</a>
                                                        <p><i class="fa fa-clock-o"></i> Posted on 16 Nov. 2013</p>
                                                    </div>
                                                </div>
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs50x50/4.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <a href="blog-post.html">Quis Dictum Nulla...</a>
                                                        <p><i class="fa fa-clock-o"></i> Posted on 21 May. 2011</p>
                                                    </div>
                                                </div>                                                  
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs50x50/3.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <a href="blog-post.html">Nam Ornare Pulvinar...</a>
                                                        <p><i class="fa fa-clock-o"></i> Posted on 28 Mar. 2011</p>
                                                    </div>
                                                </div>                                              
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs50x50/2.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <a href="blog-post.html">Nullam Massa Turpis...</a>
                                                        <p><i class="fa fa-clock-o"></i> Posted on 11 Oct. 2014</p>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div id="tab3">
                                            <div class="comment-post">
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/faces/thumbs50x50/5.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. "</p>
                                                        <p class="none-style">posted by <a href="#">Mary G. Kirkpatrick</a></p>
                                                    </div>
                                                </div>
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/faces/thumbs50x50/4.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <p>" Nullam fermentum risus sit amet nisl porta hendrerit. "</p>
                                                        <p class="none-style">posted by <a href="#">Sonia L. Ortega</a></p>
                                                    </div>
                                                </div>                                                  
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/faces/thumbs50x50/1.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. "</p>
                                                        <p class="none-style">posted by <a href="#">Dennis T. Furr</a></p>
                                                    </div>
                                                </div>                                              
                                                <div class="tabs-post">
                                                    <a class="thumb" href="blog-post.html"><img src="images/faces/thumbs50x50/2.jpg" alt=""></a>
                                                    <div class="right-post">
                                                        <p>" Fusce ultricies eget nibh in maximus potenti. "</p>
                                                        <p class="none-style">posted by <a href="#">Edward S. Neal</a></p>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif


                                @if(config('theme.widget_page_widget_active'))
                                <div class="widget">
                                    <h4>TEXT WIDGET</h4>
                                    <div class="textwidget">
                                        <p>Sed vestibulum laoreet orci, nec
                                        maximus velit. Aliquam sed justo vel
                                        nibh lobortis rutrum at id elit. 
                                        Donec vitae fermentum metus,
                                        varius viverra purus. Pellentesque
                                        bibendum eros sed justo dignissim,
                                        accumsan placerat tortor volutpat.
                                        </p>
                                        <p><a class="btn-widget" href="contact.html">contact us</a></p>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-8 col-lg-9"> <!-- COL-MD8 -->
                            <div class="content-primary">
                                <div class="title-page">
                                    
                                
                                <h3> Search results "{{ $query }}"</h3>


                                </div>
                                <div class="content-inner">

                                    <section class="padding page-default">

                        
                                    <h3>Pages</h3>
                                    <ul>
                                        @forelse($pages as $page)
                                            <li>
                                                <a href="{{ route('page.show', $page->slug) }}">{{ $page->title }}</a>
                                            </li>
                                        @empty
                                            <li>No results were found on the pages.</li>
                                        @endforelse
                                    </ul>

                                    <h3>Posts</h3>
                                    <ul>
                                        @forelse($posts as $post)
                                            <li>
                                                <a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                                            </li>
                                        @empty
                                            <li>No results were found in the posts.</li>
                                        @endforelse
                                    </ul>

                    




                                    </section>
                                    
                                </div>
                            </div>                            
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

    @endsection