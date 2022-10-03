@extends('layout.main')

@section('content')
{{-- First section --}}
 <!-- home section starts  -->
@foreach ($trajets as $trajet)
    <section class="home" id="home">

        <div class="content">
            <span data-aos="fade-up" data-aos-delay="150" id="titre">{{$trajet->titre_trajet}}</span>
            <p data-aos="fade-up" data-aos-delay="450">&ldquo; Travelers Are Dreamers Who Make Their Desires For Adventure A Reality &rdquo;</p>

        </div>

    </section>
<!-- home section ends -->
<!-- trajet info starts  -->
    <section class="book-form" id="book-form">


        <section class="about">
            <div class="image">
                <img src="{{asset('images/'.$trajet->image_trajet)}}" alt="">
            </div>
        </section>
        <section class="about">
            <div class="content">
                <span>Depart <i class="fa-solid fa-map-location-dot"></i></span>
                <p>
                    {{$trajet->desc_trajet}}
                </p>
            </div>
        </section>
        <section class="about">
            <div class="content">
                <span>Best Camping <i class="fa-solid fa-campground"></i></span>
                <div class="container">
                    <div class="card">
                    <div class="imgBx">
                        <img src="{{asset('images/'.$trajet->camp1_image)}}">
                    </div>
                    <div class="contentBx">
                        <p>{{$trajet->camp1_name}}</p>
                        <p>{{$trajet->camp1_desc}}</p>
                        <h2>{{$trajet->camp1_prix}}</h2>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="content">
                <span>Transport <i class="fa-solid fa-car"></i></span>
                <p>
                    {{$trajet->transport_trajet}}
                </p>
            </div>
        </section>

    </section>
@endforeach
<!-- trajet info ends -->



@endsection
