@extends('plexus::layouts.app')
@section('content')
   
                           
<div class="container">

@if ($homePageSetting->content_type == 'page')
    @include('plexus::frontend.page', ['page' => $homePageSetting->content])
@elseif ($homePageSetting->content_type == 'post')
    @include('plexus::frontend.post', ['post' => $homePageSetting->content])
@else
    
<div style="height: 20px;"></div>
<div class="container">
    <div class="alert alert-warning" role="alert">
        
        No pages or posts assigned to the home to display.
    </div>
</div>

@endif


</div>
@endsection