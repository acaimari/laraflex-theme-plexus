@php
    $sidebarSearchEnable = config('theme.sidebar_search_active');
@endphp
@if ($sidebarSearchEnable)
<div class="sidebar">
<div class="widget widget_search">
    <form method="get" class="search-form input-group" action="{{ route('search') }}">  
        <input class="form-control" type="text" value="" name="s" id="s" placeholder="type to search...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </form>
</div>
@endif


								
@php
    $sidebarPostCatEnable = config('theme.sidebar_post_cat_active');
@endphp

@if ($sidebarPostCatEnable)
    <div class="widget widget_categories">
        <h4>Categories</h4>
        <ul>
            @foreach($categories as $category)
                @if ($category->posts_count > 0)
                    <li>
                        <a href="{{ route('category.show', ['slug' => $category->slug]) }}">
                            <i class="fa fa-folder-open-o"></i> {{ $category->title }}
                        </a>
                        <span>({{ $category->posts_count }})</span>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif


@php
    $sidebarPostTabActive = config('theme.sidebar_post_tab_active');
@endphp

@if ($sidebarPostTabActive)
    <div id="widget-tabs" class="widget widget_tabs">
        <ul class="title-tabs">
            <li><a href="#tab1">RECENT</a></li>
            <li><a href="#tab2">POPULAR</a></li>
            <!-- <li><a href="#tab3">COMMENTS</a></li> -->
        </ul>
        <div class="content-tabs">
            
        <div id="tab1">
    <div class="recent-post">
        @foreach ($recentPosts->sortByDesc('created_at') as $post)
            <div class="tabs-post">
                <a class="thumb" href="{{ route('post.show', $post->slug) }}">
                    <img src="{{ !empty($post->image) ? $post->image : '/storage/default/thumbnail-default.gif' }}" alt="{{ $post->title }}">
                </a>
                <div class="right-post">
                    <a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                    <p><i class="fa fa-clock-o"></i> Posted on {{ $post->created_at->format('d M. Y') }}</p>
                </div>
            </div>
        @endforeach
        <div class="text-right">
            <a href="{{ route('post.list') }}" class="see-more">See more <i class="fa fa-arrow-right" style="margin-right: 25px;"></i></a>
        </div>
        <div class="margin" style="margin: 20px;"></div>
    </div>
</div>


            <div id="tab2">
    <div class="popular-post">
        @foreach($popularPosts as $mostViewedPost)
        <div class="tabs-post">
            <a class="thumb" href="{{ route('post.show', $mostViewedPost->slug) }}">
                <img src="{{ !empty($mostViewedPost->image) ? $mostViewedPost->image : '/storage/default/thumbnail-default.gif' }}" alt="{{ $mostViewedPost->title }}">
            </a>
            <div class="right-post">
                <a href="{{ route('post.show', $mostViewedPost->slug) }}">{{ $mostViewedPost->title }}</a>
                <p><i class="fa fa-clock-o"></i> Posted on {{ $mostViewedPost->created_at->format('d M. Y') }}</p>
            </div>
        </div>
        @endforeach
        <div class="text-right">
            <a href="{{ route('post.list') }}" class="see-more">See more <i class="fa fa-arrow-right" style="margin-right: 25px;"></i></a>
            <div class="margin" style="margin: 20px;"></div>
        </div>
    </div>
</div>




        </div>
    </div>
@endif


@php
    $sidebarTextWidgetActive = config('theme.sidebar_text_widget_active');
@endphp

@if ($sidebarTextWidgetActive)
    <div class="widget">
        <h4>TEXT WIDGET</h4>
        <div class="textwidget">
            <p>Sed vestibulum laoreet orci, nec maximus velit. Aliquam sed justo vel nibh lobortis rutrum at id elit. Donec vitae fermentum metus, varius viverra purus. Pellentesque bibendum eros sed justo dignissim, accumsan placerat tortor volutpat.</p>
            <p><a class="btn-widget" href="contact.html">contact us</a></p>
        </div>
    </div>
@endif



</div>


