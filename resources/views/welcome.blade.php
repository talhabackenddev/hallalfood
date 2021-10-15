@extends('layouts.app')

@section('content')

<style>
  :root {
    --dark-green: #9cc675;
    --dark-yellow: #e89a3d;
    --extra-light-brown: #fdf0d7;
    --light-brown: #ecd5ab;
    --dark-brown: #915b40;
    --light-yellow: #f8e3a8;
    --light-red: #f3ac99;
    --light-teal: #a6c8cc;
    --light-gray: #ddd5d6;
    --theme-color2: #e89a3d;
  }


  .site-logo {
    width: 218.33px !important;
    margin-right: 50px;
  }

  .btn {
    border-radius: 5px;
    font-weight: normal;
    font-size: 15px;
    letter-spacing: 0.02em;
    line-height: 12px;
    text-align: center;
    font-weight: 600;
    font-size: 14px;
    padding: 14px 30px;
    cursor: pointer;
  }

  .btn-theme {
    background: var(--theme-color1);
    color: #212121;
  }

  .c-container {
    margin: auto;
    width: 93%;
    position: relative;
    z-index: 1;
  }

  .btn-outline-white {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.1);
    background-image: none;
    border-width: 2px;
    border-color: #fff;
    font-weight: 500;
    -webkit-transition: all .2s;
    transition: all .2s;
  }

  .btn {
    border-radius: 5px;
    font-weight: normal;
    font-size: 15px;
    letter-spacing: 0.02em;
    line-height: 12px;
    text-align: center;
    font-weight: 600;
    font-size: 14px;
    padding: 14px 30px;
    cursor: pointer;
  }

  .btn-outline-white:hover {
    background-color: #fff;
    color: var(--text-dark);
  }

  /* common css up */

  .testimonial p {
    font-size: 28px;
    letter-spacing: 0.02em;
    line-height: 35px;
  }

  .testimonial .name {
    font-weight: bold;
    font-size: 18px;
    letter-spacing: 0.04em;
    line-height: 35px;
    text-align: left;
  }

  .testimonial .designation {
    font-size: 14px;
    letter-spacing: 0.04em;
    text-align: left;
    color: #fff;
    opacity: 0.65;
  }

  .unt {
    margin-bottom: 20px;
    margin-top: 60px;
  }

  .hero-text {
    font-size: 30px;
    letter-spacing: 0.02em;
    color: #fff;
  }

  .gallery-thumbs {
    height: 100%;
  }

  .gallery-thumbs .swiper-wrapper {
    align-items: center;
  }

  .gallery-thumbs .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 250px !important;
    height: 330px;
    position: relative;
  }

  .gallery-thumbs .swiper-slide img {
    filter: contrast(0.5) blur(1px);
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
  }

  .gallery-thumbs .swiper-slide-active img {
    filter: contrast(1) blur(0px) !important;
  }

  .flex-row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
  }

  .flex-row .flex-col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
  }

  .gallery-thumbs .swiper-wrapper {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }


  .testimonial-section .quote {
    width: 75%;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 100px;
    padding-right: 100px;
    align-items: center;
  }

  .swiper-container.testimonial {
    height: 400px;
  }

  .testimonial-section .user-saying {
    background: #f5d6c4;
    width: 60%;
    color: #fff;
    height: 100%;
  }

  /*.testi-user-img {
                width: 40%;
            }*/
  .testimonial-section {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    width: 100%;
    height: 100%;
  }

  .testimonial-section .quote p {
    font-size: 20px;
    font-weight: 300;
    line-height: 1.8;
    font-style: italic;
    margin: 0;
    text-align: center;
    color: black;
  }

  /*.quote-icon {
                width: 60px;
                display: block;
                margin-bottom: 30px;
            }*/
  .imghover:hover {
    -ms-transform: scale(1);
    /* IE 9 */
    -webkit-transform: scale(1);
    /* Safari 3-8 */
    transform: scale(1.1);
    background-repeat: no-repeat;


  }

  .imghover {
    transition: 0.3s;
  }

  .cardhover {
    /*background-color: #ddd; m-2*/
    transition: .4s ease all;
    -webkit-transition: .4s ease all;
    border: 1px solid;
    color: #f1f1f1;

  }

  .cardhover:hover {
    box-shadow: -10px -10px 13px 0 rgb(0 0 0 / 10%);
    top: 10px;
    left: 10px;
    -webkit-transition: .4s ease all;
    transition: .4s ease all;
    color: #fff;
  }

  .part-1 {
    padding: 40px 40px 25px;
    border-bottom: 2px solid #524b81;
  }

  .card {
    height: 250px;
    /*width: 100%;*/
    background: #e8e8e8;
    box-shadow: 1px 1px 5px lightgrey;
    padding: 10px;
    border: 1px solid lightgrey;
    border-radius: 4px;
  }

  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap");


  /*icon*/

  .alex {
    margin-top: 50px;
  }

  .imgg {
    border-radius: 50%;
  }

  .alex .team {
    width: auto;
    display: flex;
    justify-content: center;
    text-align: center;
    flex-wrap: wrap;
  }

  .alex .team .member {
    width: 325px;
    margin: 10px;
    background: #fff;
    border-radius: 6px;
    box-shadow: 2px 2px 3px #aaaaaa;
    padding: 25px;
    border: 1px solid #ededed;
  }

  .pic {
    width: 80px;
    margin-top: -113px;
  }

  .alex .team .member h3 {
    color: #444;
  }

  .alex .team .member span {
    font-size: 17px;
    color: #999;
  }

  .alex .team .member p {
    margin: -18px 0;
    font-weight: 400;
    color: #000;
    font-size: 20px;
    text-align: justify;
  }

  .alex .team .member .btn a {
    background: #ddd;
    display: block;
    float: right;
    width: 125px;
    margin: 0 10px;
    padding: 10px;
    border-radius: 6px;
    color: #444;
    text-transform: capitalize;
    transition: all 0.3s ease;
  }

  .alex .team .member .btn a:hover {
    background: #5a36dd;
    color: #fff;
  }

  #main {
    padding: 10px 10px;
  }

  .reviews {
    border: 1px solid #c7a2a2;
    /* for visibility */
    /*height: 407px;
*/
    width: 341px;
    /*box-shadow: 0px 0px 10px #000;*/
  }

  .testii-img {
    height: 131px;
    background-color: #cb652b;
  }

  .testii-img img {
    margin-top: 10px;
    height: 100px;
    width: 100px;
    object-fit: cover;
    border-radius: 50%;
  }

  .testii-content-container {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    background: #fbe9ec;
  }

  .testii-content {
    font-family: Italic;
  }

  .testii-header {
    padding-top: 45px;
  }

  .testii-name {
    font-family: Roboto, sans-serif;
    font-size: 30px;
    font-weight: bold;
  }

  .testii-branch {
    font-family: Roboto, sans-serif;
    font-size: 15px;
  }

  /* 
ul {
  padding: 0 0 0 2.75em;
}
ul li {
  list-style: none;
  line-height: 1.7rem;
  position: relative;
  padding-bottom: 1rem;
}

 ul li:before {
  content: "";
  display: inline-block;
  width: .75em;
  height: .75em;
  border-radius: 50%;
  background: brown;
  margin: 0 2em 0 -2.75em;
} */


  .imggg {
    filter: gray;
    /*-webkit-filter: grayscale(1); */
    transition: all .8s ease-in-out;
    opacity: 0.5;
  }

  .imggg:hover {
    filter: none;
    -webkit-filter: grayscale(0);
    transform: scale(1);
    opacity: 1;
  }
</style>
</head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">

    <section class=" overflow-hidden bg-primary" id="home" style="background-image: url(assets/img/gallery/banner.png);background-repeat:no-repeat;
    background-size: cover; padding-bottom: inherit;">
      <div class="row flex-center">

        <div class="col-md-7 col-lg-5 text-md-start text-center" style="font-family: Berlin Sans FB;
    font-weight: 100; padding-top: 50px; padding-bottom: 90px; background-image: linear-gradient(to left, rgb(255 255 255 / 8%), rgb(42 38 38));">
          <div class="container">

            <h1 style="font-size: 4rem; font-weight: bolder; color: white;">Fresh.</h1>
            <h1 style="font-size: 4rem; font-weight: bolder; color: white;">Halal.</h1>
            <h1 style="font-size: 4rem; font-weight: bolder; color: white;">Homemade.</h1>
            <span class=" mb-5" style="font-size: 1.5rem; color: white;">Find offers in your <br>area</span>
            <div class="row">
              <div class="col-lg-8 p-1 my-2" style="display: flex; background-color: white; border-radius: 50px; margin-left: 15px;">
                <div class="row">
                  <div class="col-8">
                    <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon fa-lg py-0"></i>
                      <label class="visually-hidden" for="inputDelivery">Address</label>
                      <input style="background-color: transparent;" class="form-control input-box form-foodwagon-control py-0" id="inputDelivery" type="text" placeholder="Enter Your Address" />
                    </div>
                  </div>
                  <div class="col-4 px-0">
                    <button style="width: 120px; margin-left: -14px; margin-top: -56px; border-radius: 50px; height: 29px;" class="btn btn-danger px-0 py-0" type="submit">Find Offers <span style="float: right;"><i class="fas fa-greater-than"></i></span></button>
                  </div>

                </div>

              </div>
              <span style="color: white;">Already Have an account? <a href="" style="color: white; font-weight:400;">Login in</a></span>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-7 order-0 order-md-1 mt-md-0">

        </div>

      </div>
    </section>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0" style="background-image: url(assets/img/gallery/line2.png); background-repeat: no-repeat; background-size:cover; ">
      <div class="container">
        <div class="row justify-content-center my-5">
          <div class="col-lg-12 text-center ">
            <div class="row pb-5 offset-lg-2">
              <div class="col-lg-2">
                <hr style="height: 0.3rem; color: tomato;">
              </div>
              <div class="col-lg-5">
                <h2>How it works</h2>
              </div>
              <div class="col-lg-2">
                <hr style="height: 0.3rem; color: tomato;">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 my-5">
            <div class="text-center m-3">
              <img src="{{url('/')}}/assets/img/gallery/map.png">
              <h5 class="mt-4 fw-bold">Discover</h5>
              <p class="mb-md-0">Découvrez les plats fait maison à côté de chez vous.
                Tous nos Home-Chefs sont choisis avec soin et respectent les normes d'hygiène</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 my-4">
            <div class="text-center m-3">
              <img src="{{url('/')}}/assets/img/gallery/clock.png">
              <h5 class="mt-4 fw-bold">Order</h5>
              <p class="mb-md-0">Ajoutez des plats à votre panier, sélectionnez la date et l'heure de ramassage ou de
                livraison et passez la commande - c'est aussi simple que ça !</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 my-3">

            <div class="text-center m-3">
              <img src="{{url('/')}}/assets/img/gallery/bag.png">
              <h5 class="mt-4 fw-bold">Enjoy</h5>
              <p class="mb-md-0">Récupérez votre plat directement chez le Chef ou faites-vous livrer.
              </p>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </section>

    <section class="spacer">
      <div class="col-lg-12 text-center ">
        <div class="row pb-5 offset-lg-2">
          <div class="col-lg-2">
            <hr style="height: 0.3rem; color: tomato;">
          </div>
          <div class="col-lg-5">
            <h2>Meet Our HomeChefs</h2>
          </div>
          <div class="col-lg-2">
            <hr style="height: 0.3rem; color: tomato;">
          </div>
        </div>
      </div>
      <div class="container-fluid justify-content-center my-5">

        <div class="testimonial-section col-sm-12" style="background-color: #f5d6c4;border-radius: 244px 0px 0px 244px;">
          <div class="testi-user-img">
            <div class="swiper-container gallery-thumbs">
              <div class="swiper-wrapper">
                <img src="{{url('/')}}/assets/img/gallery/dish.png" style="width: 500px;">
              </div>
            </div>
          </div>
          <div class="user-saying col-sm-12" style="background-color: #f5d6c4;">
            <div class="swiper-container testimonial">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="quote">
                    <img class="text-center" src="{{url('/')}}/assets/img/gallery/cheif.png" alt="" style="width: 195px; border-radius: 0px;">
                    <div class="text-center" style="color: black;">-Ramkishor Verma-</div>
                    <div class="text-center">University Student</div>
                    <p class="text-center">
                      “This is best and biggest unified platform
                      for instant online admission. We can easily
                      take admission for any course in any institute..“
                    </p>

                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="quote">
                    <img class="text-center" src="{{url('/')}}/assets/img/gallery/cheif.png" alt="" style="width: 195px; border-radius: 0px;">
                    <div class="text-center" style="color: black;">-Ramkishor Verma-</div>
                    <div class="text-center">University Student</div>
                    <p class="text-center">
                      “This is best and biggest unified platform
                      for instant online admission. We can easily
                      take admission for any course in any institute..“
                    </p>

                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="quote">
                    <img class="text-center" src="{{url('/')}}/assets/img/gallery/cheif.png" alt="" style="width: 195px; border-radius: 0px;">
                    <div class="text-center" style="color: black;">-Ramkishor Verma-</div>
                    <div class="text-center">University Student</div>
                    <p class="text-center">
                      “This is best and biggest unified platform
                      for instant online admission. We can easily
                      take admission for any course in any institute..“
                    </p>

                  </div>
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination swiper-pagination-white"></div>
            </div>
          </div>
        </div>
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <section class="py-0">
      <div class="container alex">
        <div class="col-lg-12 text-center ">
          <div class="row pb-5  offset-lg-3">
            <div class="col-lg-2">
              <hr style="height: 0.3rem; color: tomato;">
            </div>
            <div class="col-lg-3">
              <h2>Our Values</h2>
            </div>
            <div class="col-lg-2">
              <hr style="height: 0.3rem; color: tomato;">
            </div>
          </div>
        </div>
        <div class="team mt-5" style="background-image: url(assets/img/gallery/line1.png); background-repeat: no-repeat; background-size: contain;">
          <div class="member">
            <img class="pic" src="{{url('/')}}/assets/img/gallery/hrticon.png" alt="">
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing</p>
            <img src="https://images.unsplash.com/photo-1508919801845-fc2ae1bc2a28?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aW1nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" style="width: 175px;margin-top:21px; margin-bottom:21px; border-radius: 38%;">
            <p>Est consectetur voluptatum.
              <hr>
            </p>
          </div>
          <div class="member">
            <img class="pic" src="{{url('/')}}/assets/img/gallery/checkmark.png">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet </p>
            <ul class="mt-5 round">
              <li class="round">Lorem ipsum dolor sit amet</li>
              <li class="round">Lorem ipsum dolor sit amet</li>
              <li class="round">Lorem ipsum dolor sit amet</li>
            </ul>
          </div>
          <div class="member">
            <img class="pic" src="{{url('/')}}/assets/img/gallery/lock.png" style="width: 50px;" alt="">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing</p>
          </div>
        </div>
      </div>
    </section>
    <!-- <section> close ============================-->
    <div class="container my-5">
      <section>
        <div class="text-center mb-5">
          <div class="col-lg-12 text-center ">
            <div class="row pb-5  offset-lg-3">
              <div class="col-lg-2">
                <hr style="height: 0.3rem; color: tomato;">
              </div>
              <div class="col-lg-3">
                <h2>Testimonials</h2>
              </div>
              <div class="col-lg-2">
                <hr style="height: 0.3rem; color: tomato;">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="reviews imggg">
              <div class="testii-content-container">
                <span class="testii-content text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
              </div>
              <div class="testii-img d-flex justify-content-center">
                <img class="imgg" src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Placeholder_Person.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="reviews imggg">
              <div class="testii-content-container">
                <span class="testii-content text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
              </div>
              <div class="testii-img d-flex justify-content-center">
                <img class="imgg" src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Placeholder_Person.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="reviews imggg">
              <div class="testii-content-container">
                <span class="testii-content text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
              </div>
              <div class="testii-img d-flex justify-content-center">
                <img class="imgg" src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Placeholder_Person.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="text-center">
      <div class="col-lg-12 text-center ">
        <div class="row pb-5  offset-lg-3">
          <div class="col-lg-2">
            <hr style="height: 0.3rem; color: tomato;">
          </div>
          <div class="col-lg-3">
            <h2>Mobile App</h2>
          </div>
          <div class="col-lg-2">
            <hr style="height: 0.3rem; color: tomato;">
          </div>
        </div>
      </div>
    </div>
    <section class="container mb-5" style="background-color: #cb652b; width: 77%; border-radius: 46px;">
      <div class="row flex-center" style="margin-left: -160px;">
        <div class="col-lg-4 d-none d-lg-block">
          <img src="{{url('/')}}/assets/img/gallery/mbl.png" alt="..." style="width: 222px;" />
        </div>
        <div class="col-lg-6 mt-md-0">
          <h1 class="text-primary"></h1>
          <h2 class="text-white" style="margin-bottom: 57px;">It's never been easier to order food. Look for the finest It's never been easier to order food. Look for the finest</h2>
          <a href="https://play.google.com/store/apps" target="_blank"><img src="{{url('/')}}/assets/img/gallery/app.png" width="160" alt="" style="width: 206px;" /></a>
          <a class="pe-2" href="https://www.apple.com/app-store/" target="_blank"><img src="{{url('/')}}/assets/img/gallery/apple.png" width="160" alt="" style=" width: 206px;" /></a>
          <h4 class=" mt-4 text-white">It's never been easier to order food.</h4>
        </div>
      </div>
    </section>


  </main>


  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="https://md-aqil.github.io/images/swiper.min.js"></script>

  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: '2',
      // coverflowEffect: {
      //   rotate: 50,
      //   stretch: 0,
      //   depth: 100,
      //   modifier: 1,
      //   slideShadows : true,
      // },

      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 50,
        modifier: 6,
        slideShadows: false,
      },

    });


    var galleryTop = new Swiper('.swiper-container.testimonial', {
      speed: 400,
      spaceBetween: 50,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      direction: 'vertical',
      pagination: {
        clickable: true,
        el: '.swiper-pagination',
        type: 'bullets',
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
  </script>

  @endsection