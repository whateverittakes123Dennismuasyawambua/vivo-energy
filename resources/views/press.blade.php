@extends('layouts.master')
@section('content')
    @include('partials.nav')
    <div id="wrapper">
        <div class="section">
            <div class="slide">
            <image src="assets/img/gallery/lubricants.jpg" alt="">
                <p>Vivo Energy Uganda, the company that distributes and markets Shell-branded fuels and lubricants in Uganda, together with National Environment Management Authority (NEMA), Uganda Breweries Limited....</p>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $('#wrapper').fullpage();
    });
    </script>  
@endsection