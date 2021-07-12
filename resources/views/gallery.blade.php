@extends('layouts.master')
@section('content')
    @include('partials.nav')
    <div id="wrapper">
        <div class="section">
            <div class="slide">
                <image src="assets/img/gallery/aviation.jpg" alt="">
            </div>
            <div class="slide">
                <image src="assets/img/gallery/fuels.jpg" alt="">
            </div>
            <div class="slide">
                <image src="assets/img/gallery/lubricants.jpg" alt="">
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $('#wrapper').fullpage();
    });
    </script>
@endSection