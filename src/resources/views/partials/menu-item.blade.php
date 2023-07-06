@if(!empty($item['child']))
    <li class="menu-item-has-children">
        <div class="arrow-parent"><i class="fa fa-angle-down"></i></div>
        @php
            if ($item['type'] == 'post') {
                $url = route('post.show', ['slug' => $item['slug']]);
                $target = "_self";
            } elseif ($item['type'] == 'category') {
                $url = route('category.show', ['slug' => $item['slug']]);
                $target = "_self";
            } elseif ($item['type'] == 'page') {
                $url = route('page.show', ['slug' => $item['slug']]);
                $target = "_self";
            } elseif ($item['type'] == 'custom') {
                $url = $item['slug'];
                $target = $item['target'] ?? "_self";
            }
            $displayTitle = $item['name'] ?? $item['title'];
        @endphp
        <a class="dropdown-item dropdown-toggle" href="{{ $url }}" id="navbarDropdown{{ $item['id'] }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="{{ $target }}">
            {{ $displayTitle }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $item['id'] }}">
            @foreach($item['child'] as $child)
                 @include('plexus::partials.menu-item', ['item' => $child])
            @endforeach
        </ul>
    </li>
@else
    <li>
        @php
            if ($item['type'] == 'post') {
                $url = route('post.show', ['slug' => $item['slug']]);
                $target = "_self";
            } elseif ($item['type'] == 'category') {
                $url = route('category.show', ['slug' => $item['slug']]);
                $target = "_self";
            } elseif ($item['type'] == 'page') {
                $url = route('page.show', ['slug' => $item['slug']]);
                $target = "_self";
            } elseif ($item['type'] == 'custom') {
                $url = $item['slug'];
                $target = $item['target'] ?? "_self";
            }
            $displayTitle = $item['name'] ?? $item['title'];
        @endphp
        <a class="dropdown-item" href="{{ $url }}" target="{{ $target }}">{{ $displayTitle }}</a>
    </li>
@endif
