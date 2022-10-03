@extends('layout.main')

@section('content')

    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="content">
            <span data-aos="fade-up" data-aos-delay="150">Where To Next ?</span>
            <h3 data-aos="fade-up" data-aos-delay="300"> Discover Morocco</h3>
            <p data-aos="fade-up" data-aos-delay="450">&ldquo; Travelers Are Dreamers Who Make Their Desires For Adventure A Reality &rdquo;</p>
            <a data-aos="fade-up" data-aos-delay="600" href="#destination" class="btn">Discover</a>
        </div>

    </section>
    <!-- home section ends -->

<!-- booking form section starts  -->
    <section class="book-form" id="book-form">

        <form action="">
            <div class="inputBox" data-aos="zoom-in" data-aos-delay="150">
                <span>Direction?</span>
                <select name="direction" id="sl">
                    <option >Choose direction</option>
                    <option value="n">North</option>
                    <option value="s">South</option>
                    <option value="e">East</option>
                    <option value="w">West</option>
                </select>
            </div>
            <input data-aos="zoom-in" data-aos-delay="600" type="button" value="find now" class="btn" onclick="Find()">
        </form>

    </section>
<!-- booking form section ends -->

<!-- find section starts north -->
<section class="destination" id="north" style="display: none;">

    <div class="heading">
        <span style="font-size: 18px;">our destinations</span>
        <h1>North destinations</h1>
    </div>

    <div class="box-container">
        @foreach ($trajetsN as $trajetN)
        <div class="box-container">
            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="{{asset('images/'.$trajetN->image_trajet)}}" alt="Product Image">
                </div>
                <div class="content">
                    <h3>{{$trajetN->titre_trajet}}</h3>
                    <p>{{$trajetN->desc_trajet}}</p>
                    <a href="{{route('trajet',['id'=>$trajetN->id])}}">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
         @endforeach
    </div>
</section>
<!-- find section ends -->
<!-- find section starts east-->
<section class="destination" id="east" style="display: none;">

    <div class="heading">
        <span style="font-size: 18px;">our destinations</span>
        <h1>East destinations</h1>
    </div>

    <div class="box-container">
        @foreach ($trajetsE as $trajetE)
        <div class="box-container">
            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="{{asset('images/'.$trajetE->image_trajet)}}" alt="Product Image">
                </div>
                <div class="content">
                    <h3>{{$trajetE->titre_trajet}}</h3>
                    <p>{{$trajetE->desc_trajet}}</p>
                    <a href="{{route('trajet',['id'=>$trajetE->id])}}">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
         @endforeach
    </div>
</section>
<!-- find section ends -->

<!-- find section starts south-->
<section class="destination" id="south" style="display: none;">

    <div class="heading">
        <span style="font-size: 18px;">our destinations</span>
        <h1>South destinations</h1>
    </div>

    <div class="box-container">
        @foreach ($trajetsS as $trajetS)
        <div class="box-container">
            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="{{asset('images/'.$trajetS->image_trajet)}}" alt="Product Image">
                </div>
                <div class="content">
                    <h3>{{$trajetS->titre_trajet}}</h3>
                    <p>{{$trajetS->desc_trajet}}</p>
                    <a href="{{route('trajet',['id'=>$trajetS->id])}}">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
         @endforeach
    </div>
</section>
<!-- find section ends -->
<!-- find section starts west-->
<section class="destination" id="west" style="display: none;">

    <div class="heading">
        <span style="font-size: 18px;">our destinations</span>
        <h1>West destinations</h1>
    </div>

    <div class="box-container">
        @foreach ($trajetsW as $trajetW)
        <div class="box-container">
            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="{{asset('images/'.$trajetW->image_trajet)}}" alt="Product Image">
                </div>
                <div class="content">
                    <h3>{{$trajetW->titre_trajet}}</h3>
                    <p>{{$trajetW->desc_trajet}}</p>
                    <a href="{{route('trajet',['id'=>$trajetW->id])}}">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
         @endforeach
    </div>
</section>
<!-- find section ends -->

<!-- about section starts  -->
    <section class="about">

        <div class="video-container" data-aos="fade-right" data-aos-delay="300">
            <video src="{{asset('images/about-vid-1.mp4')}}" muted autoplay loop class="video"></video>
            <div class="controls">
                <span class="control-btn" data-src="{{asset('images/about-vid-1.mp4')}}"></span>
                <span class="control-btn" data-src="{{ asset('images/about-vid-2.mp4')}}"></span>
                <span class="control-btn" data-src="{{asset('images/about-vid-3.mp4')}}"></span>
            </div>
        </div>

        <div class="content">
            <span>Why TripM3anad ?</span>
            <h3>TripM3ana ...</h3>
            <p>
                is a platform created by young Moroccan backpackers so you can easily find all the details about the best destination.
            </p>

        </div>

    </section>
<!-- about section ends -->

<!-- camping section starts  -->
<section class="destination" id="destination">

    <div class="heading">
        <span style="font-size: 18px;">our destinations</span>
        <h1>Best Camping Places</h1>
    </div>

    <div class="box-container">
        @foreach ($campings as $camping)

        <section class="card-area">

            <!-- Card: Camping -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--camping">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                                            <path d="M57,52.1c0-0.4-0.1-0.7-0.3-1.1l-6.3-10.8L32.4,9l2.3-4c0.6-1,0.2-2.2-0.7-2.7c-1-0.6-2.2-0.2-2.7,0.7L30,5.2L28.7,3
                                        c-0.6-1-1.8-1.3-2.7-0.7c-1,0.6-1.3,1.8-0.7,2.7l2.3,4l-18,31.1L3.3,51C3.1,51.3,3,51.7,3,52.1c0,0.4,0.1,0.7,0.3,1
                                        c0.4,0.6,1,1,1.7,1h50c0.7,0,1.4-0.4,1.7-1C56.9,52.8,57,52.4,57,52.1z M34.7,49.8C34.2,50,32.1,50,30,50s-4.2,0-4.7-0.2
                                        c-0.2-0.5-0.2-2.1-0.2-3.6l0-4.3c0-2.7,2.2-4.9,4.9-4.9s4.9,2.2,4.9,4.9l0,4.3C34.9,47.7,34.9,49.3,34.7,49.8z M13.1,42.1L28,16.5
                                        v16.7c-3.9,0.9-6.9,4.4-6.9,8.6l0,4.3c0,1.7,0,2.9,0.2,4H8.5L13.1,42.1z M38.7,50.1c0.2-1,0.2-2.3,0.2-4l0-4.3
                                        c0-4.2-2.9-7.7-6.9-8.6V16.5l15,25.7l4.6,7.9H38.7z"/>
                                    </svg>
                                               <h2 class="card-front__heading">
                                                   {{($camping->camp_name)}}
                                               </h2>
                                               <p class="card-front__text-price" style="color: #050505;">
                                                {{($camping->prix_person) }} DH
                                               </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--camping">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="image">
                                    <img src="{{asset('images/'.$camping->camp_image1)}}" alt="Product Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">

                            <p class="inside-page__text">
                                {{($camping->camp_desc)}}
                                <br>
                                {{($camping->prix_person)}} => Person
                                <br>
                                {{($camping->prix_tente)}} => Tente
                            </p>


                        </div>
                    </div>
                </div>
            </section>
        </section>
        @endforeach
    </div>
</section>
<!-- camping section ends -->


<!-- tool section starts  -->
<section class="gallery" id="tool">

    <div class="heading">
        <span style="font-size: 18px;">our Tool</span>
        <h1>The Tools You Need For A Trip</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/tent.png" alt="">
            <h3>Tent</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/backpack.png" alt="">
            <h3>BackPack (sac à dos)</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/water-bottle.png" alt="">
            <h3>water bootle</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/sleeping-bag.png" alt="">
            <h3>Sleeping Bag (sacochage)</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/first-aid-box.png" alt="">
            <h3>First aid box (trousse de premieres soins)</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/compass.png" alt="">
            <h3>compass (boussole)</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/swiss-army-knife.png" alt="">
            <h3>swis knife </h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/lighter.png" alt="">
            <h3>Fire Lighter (briquet)</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/oil-lamp.png" alt="">
            <h3>Lamp</h3>
        </div>

    </div>

</section>
<!-- tool section ends -->


<!-- team section starts  -->
<section class="services" id="team">

    <div class="heading">
        <span style="font-size: 18px;">Our Team</span>
        <h1>Members</h1>
    </div>

    <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <div class="image">
                <img src="{{asset('images/avatar1.jpg')}}" alt="">
            </div>
            <h3>Al Mahdi Ait Ounzar</h3>
            <p>Software Developer</p>
            <div class="share">
                <a href="https://www.instagram.com/meh_ounz/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/al-mahdi-a-bb9232232/" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <div class="image">
                <img src="{{asset('images/avatar2.jpg')}}" alt="">
            </div>
            <h3>Abdessamad Ourdyl</h3>
            <p>UI/UX DESIGNER</p>
            <div class="share">

                <a href="https://www.instagram.com/samaddwho/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/al-mahdi-a-bb9232232/" class="fab fa-linkedin"></a>
            </div>
        </div>
        {{-- <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <div class="image">
                <img src="{{asset('images/avatar3.jpg')}}" alt="">
            </div>
            <h3>Mohamed Rizqui</h3>
            <p>Ads Manager</p>
            <div class="share">

                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div> --}}
        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <div class="image">
                <img src="{{asset('images/avatar4.jpg')}}" alt="">
            </div>
            <h3>Houssam Benamara</h3>
            <p>Data Analyst</p>
            <div class="share">

                <a href="https://www.instagram.com/houssam.benamara/" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>

</section>
<!-- team section ends -->

<!-- contact us section start  -->
<div class="background" id="contact">
    <div class="container">
      <div class="screen">

        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span>CONTACT</span>
              <span>US</span>
            </div>
            <div class="app-contact">CONTACT INFO : +212 654220539</div>
          </div>
          <div class="screen-body-item">
            <div class="app-form">
              <div class="app-form-group">
                <input class="app-form-control" placeholder="NAME" id="name">
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="EMAIL" id="email">
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="Phone Number" id="phone">
              </div>
              <div class="app-form-group message">
                <input class="app-form-control" placeholder="MESSAGE" id="msg">
              </div>
              <div class="app-form-group buttons">
                <button class="app-form-button">SEND</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
<!-- contact us section  end -->


<!-- review section starts  -->
<!--<section class="review">

    <div class="content" data-aos="fade-right" data-aos-delay="300">
        <span>testimonials</span>
        <h3>good news from our clients</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laudantium corporis fugiat quae unde perspiciatis similique ab modi enim consequatur aperiam cumque distinctio facilis sit, debitis possimus asperiores non harum.</p>
    </div>

    <div class="box-container" data-aos="fade-left" data-aos-delay="600">

        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="images/pic-1.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="images/pic-2.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="images/pic-3.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="images/pic-4.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>

    </div>

</section> -->
<!-- review section ends -->


<!-- banner section starts  -->
<div class="banner">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>start your adventures</span>
        <h3>Let's Explore This World</h3>
        <p>Wherever You Go , Go With ALL Your Heart.</p>
    </div>

</div>
<!-- banner section ends -->

@endsection
