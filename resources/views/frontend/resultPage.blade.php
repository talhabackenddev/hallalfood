@extends('layouts.app')

@section('content')
<!-- <style>
  .checked {
    color: orange;
  }
</style> -->

<section class="py-5 overflow-hidden banner bg-primary" id="home">

  <div class="row">
    <div class="col-sm-6 col-lg-2" style=" width: 20%;">
      <div class="sidebar">
        <div class="widget user_widget_search" style="margin-left: 17px; margin-top: 80px; width: 87%;">
          <div class="row">
            <div class="col-md-3">
              <img src="https://cdn.icon-icons.com/icons2/1993/PNG/512/filter_filters_funnel_list_navigation_sort_sorting_icon_123212.png" style=" width:40px;">
            </div>
            <div class="col-md-2">
              <h2>filter</h2>
            </div>
          </div>
          <form id="user_wiget_search_form" class="user_wiget_search_form" method="GET">
            <div class="form-group">
              <label for="user_sort">Sort by</label>
              <select class="form-control custom-select" id="user_sort">
                <option>best match</option>
                <option>New users</option>
                <option>Most viewed</option>
                <option>Most liked</option>
                <option>Popular</option>
              </select>
            </div>
            <div class="form-group">
              <label for="user_gender">Distance</label>
              <input id="multi" class="multi-range" type="range" style="width: 100%;" />
            </div>
            <div class="form-group">
              <label for="user_age">Chief Rating</label><br>
              <div class="star-rating">
                <input id="star-5" type="radio" name="rating" value="star-5" />
                <label for="star-5" title="5 stars">
                  <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
                <input id="star-4" type="radio" name="rating" value="star-4" />
                <label for="star-4" title="4 stars">
                  <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
                <input id="star-3" type="radio" name="rating" value="star-3" />
                <label for="star-3" title="3 stars">
                  <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
                <input id="star-2" type="radio" name="rating" value="star-2" />
                <label for="star-2" title="2 stars">
                  <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
                <input id="star-1" type="radio" name="rating" value="star-1" />
                <label for="star-1" title="1 star">
                  <i class="active fa fa-star" aria-hidden="true"></i>
                </label>
              </div>
            </div>
            <div class="form-group">
              <p>Offer type</p>
              <input type="radio" id="sheduled" name="fav_language" value="sheduled">
              <label for="sheduled">sheduled</label><br>
              <input type="radio" id="demand" name="fav_language" value="demand">
              <label for="demand">On-demand</label>
            </div>
            <div class="form-group">
              <label>Date</label><br>
              <i class="fas fa-calendar-week"></i>
              <input type="date" id="date" name="date">
            </div>
            <div class="form-group">
              <p>Delivery</p>
              <input type="radio" id="sheduled" name="fav_language" value="sheduled">
              <label for="sheduled">All</label><br>
              <input type="radio" id="demand" name="fav_language" value="demand">
              <label for="demand">Pickup</label><br>
              <input type="radio" id="demand" name="fav_language" value="demand" style="margin-left: 6px;">
              <label for="demand">Delivery</label>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-7">
    <div class="row">
        <div class="col-lg-2" >
        </div> 
        <div class="col-lg-12" >
          <ul class="bxslider testimonals">
            <li>
              <div class="col-lg-2">
                <img src="{{url('/')}}/assets/img/gallery/slider.PNG" style="margin-top: 28px; max-width: 132%;" />
              </div>
              <div class="col-lg-5">
                <div class="parent" style="margin-top: 12px;">
                  <p>4.7</p>
                  <img src="{{url('/')}}/assets/img/gallery/star.png" style="width: 20px; height: 20px; ">
                  <p>(35)</p>
                </div>
                <strong><h2 class="text-center" style="font-size: 18px; margin-top:48px;">Ilham j.</h2></strong>
                  <h4 class="text-center" style="font-size: 12px;">Cuisine marocaine</h4>
                  <p class="text-center">I learned to cook from my mother in our village in south China. When we immergtated 
                    to US, we brought along the flavour of our hometown.
                    <br>
                    <a class="mt-5" href="" style="color: red">learn more</a>
                  </p> 
              </div>
              <div class="col-lg-5" style="background: #FAF9F7;">
                <h6 style="margin-top: 14px;" >Ilham's popular dishes</h6>
                <div class="parent" style="margin-top: 28px;">
                  <div class="content">
                    <div class="card-body" style="padding-top: 25px;" >
                      <img class="rounded-circle" style="border-radius: 50%;" src="{{url('/')}}/assets/img/gallery/burger.png"
                                    data-holder-rendered="true">
                      <p class="card-text" >Tajine de poulet</p>
                    </div>                
                  </div>
                  <div class="content" >
                    <div class="card-body" style="padding-top: 25px;">
                      <img class="rounded-circle" style="border-radius: 50%;" src="{{url('/')}}/assets/img/gallery/burger.png"
                                    data-holder-rendered="true">
                      <p class="card-text" >Tajine de poulet</p>
                    </div>                
                  </div>
                  
                  <div class="content" >
                    <div class="card-body" style="padding-top: 25px;">
                      <img class="rounded-circle" style="border-radius: 50%;"  src="{{url('/')}}/assets/img/gallery/burger.png"
                                    data-holder-rendered="true">
                      <p class="card-text">Tajine de poulet</p>
                    </div> 
                    </div>
              </div>
            </li>
            <li>
              <div class="col-lg-2">
                <img src="{{url('/')}}/assets/img/gallery/slider.PNG" style="margin-top: 28px; max-width: 132%;" />
              </div>
              <div class="col-lg-5">
                <div class="parent" style="margin-top: 12px;">
                  <p>4.7</p>
                  <img src="{{url('/')}}/assets/img/gallery/star.png" style="width: 20px; height: 20px; ">
                  <p>(35)</p>
                </div>
                <strong><h2 class="text-center" style="font-size: 18px; margin-top:48px;">Ilham j.</h2></strong>
                  <h4 class="text-center" style="font-size: 12px;">Cuisine marocaine</h4>
                  <p class="text-center">I learned to cook from my mother in our village in south China. When we immergtated 
                    to US, we brought along the flavour of our hometown.
                    <br>
                    <a class="mt-5" href="" style="color: red">learn more</a>
                  </p> 
              </div>
              <div class="col-lg-5" style="background: #FAF9F7;">
                <h6 style="margin-top: 14px;" >Ilham's popular dishes</h6>
                <div class="parent" style="margin-top: 28px;">
                  <div class="content">
                    <div class="card-body" style="padding-top: 25px;" >
                      <img class="rounded-circle" style="border-radius: 50%;" src="{{url('/')}}/assets/img/gallery/burger.png"
                                    data-holder-rendered="true">
                      <p class="card-text" >Tajine de poulet</p>
                    </div>                
                  </div>
                  <div class="content" >
                    <div class="card-body" style="padding-top: 25px;">
                      <img class="rounded-circle" style="border-radius: 50%;" src="{{url('/')}}/assets/img/gallery/burger.png"
                                    data-holder-rendered="true">
                      <p class="card-text" >Tajine de poulet</p>
                    </div>                
                  </div>
                  
                  <div class="content" >
                    <div class="card-body" style="padding-top: 25px;">
                      <img class="rounded-circle" style="border-radius: 50%;"  src="{{url('/')}}/assets/img/gallery/burger.png"
                                    data-holder-rendered="true">
                      <p class="card-text"  >Tajine de poulet</p>
                    </div> 
                    </div>
              </div>
            </li>
            <li>
              <div class="col-lg-2">
                <img src="{{url('/')}}/assets/img/gallery/slider.PNG" style="margin-top: 28px; max-width: 132%;" />
              </div>
              <div class="col-lg-5">
                <div class="parent" style="margin-top: 12px;">
                  <p>4.7</p>
                  <img src="{{url('/')}}/assets/img/gallery/star.png" style="width: 20px; height: 20px; ">
                  <p>(35)</p>
                </div>
                <strong><h2 class="text-center" style="font-size: 18px; margin-top:48px;">Ilham j.</h2></strong>
                  <h4 class="text-center" style="font-size: 12px;">Cuisine marocaine</h4>
                  <p class="text-center">I learned to cook from my mother in our village in south China. When we immergtated 
                    to US, we brought along the flavour of our hometown.
                    <br>
                    <a class="mt-5" href="" style="color: red">learn more</a>
                  </p> 
              </div>
              <div class="col-lg-5" style="background: #FAF9F7;">
                <h6 style="margin-top: 14px;" >Ilham's popular dishes</h6>
                <div class="parent" style="margin-top: 28px;">
                  <div class="content">
                    <div class="card-body" style="padding-top: 25px;" >
                      <img class="rounded-circle" style="border-radius: 50%;" src="{{url('/')}}/assets/img/gallery/burger.png"
                                    data-holder-rendered="true">
                      <p class="card-text" >Tajine de poulet</p>
                    </div>                
                  </div>
                  <div class="content" >
                    <div class="card-body" style="padding-top: 25px;">
                      <img class="rounded-circle" style="border-radius: 50%;" src="{{url('/')}}/assets/img/gallery/burger.png"
                                    data-holder-rendered="true">
                      <p class="card-text" >Tajine de poulet</p>
                    </div>                
                  </div>
                  
                  <div class="content" >
                    <div class="card-body" style="padding-top: 25px;">
                      <img class="rounded-circle" style="border-radius: 50%;"  src="{{url('/')}}/assets/img/gallery/burger.png"
                                    data-holder-rendered="true">
                      <p class="card-text"  >Tajine de poulet</p>
                    </div> 
                    </div>
              </div>
            </li>
          </ul>

        </div>

        <div class="col-lg-2" >
        </div> 
    </div>

      <div class="tab mt-4" style="padding-top: 30px;">
        <div class="row">
          <div class="col-lg-6">
            <button class="tablinks" onclick="openCity(event, 'Scheduled' )" id="defaultOpen" style="width: 120%; border-radius: 25px;">Scheduled</button>

          </div>
          <div class="col-lg-6">
            <button class="tablinks" onclick="openCity(event, 'On-demand')" style="width: 100%; border-radius: 25px;">On-demand</button>

          </div>
        </div>

      </div>
      <div id="Scheduled" class="tabcontent">
        <div class="row h-100 gx-2 mt-7" style="margin-top: 50px; width: 105%;">
          <div class="col-sm-6 col-lg-4 mb-3 mb-md-0 h-100 pb-4">
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControl" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls2" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls3" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3 mb-md-0 h-100 pb-4">
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls4" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls5" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls6" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls7" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <div class="col-sm-6 col-lg-4 mb-3 mb-md-0 h-100 pb-4">
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls8" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls9" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls9" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls9" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls10" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls10" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls10" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls11" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls11" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls11" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-3">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px; margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <img src="{{url('/')}}/assets/img/icons/tray.png" alt="...">

                    <p>Only 5 still available</p>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <img src="{{url('/')}}/assets/img/icons/calendar.png" alt="...">
                    <p>Monday 20 Septembre
                      14:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="On-demand" class="tabcontent">
        <div class="row h-100 gx-2 mt-7" style="margin-top: 50px; width: 105%;">
          <div class="col-sm-6 col-lg-4 mb-3 mb-md-0 h-100 pb-4">
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-6 col-lg-4 mb-3 mb-md-0 h-100 pb-4">
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <div class="col-sm-6 col-lg-4 mb-3 mb-md-0 h-100 pb-4">
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-span" style="margin-bottom: 70px;">
              <div class="position-relative">

                <div class="card-actions">

                  <div class="badge p-4" style="position: relative;top:-123px; left:0px;border-radius: 0rem 4rem 4rem 0rem;background-color: #ffffffa1;width: 45%;">
                    <div class="row" style=" align-items: center;">
                      <div class="col-sm-4 col-lg-4">
                        <img src="{{url('/')}}/assets/img/icons/distance.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <p style="margin-bottom: 0rem;margin-left: -20px;color: black;">3,5Km</p>
                      </div>
                      <div class="col-sm-4 col-lg-5">
                        <img src="{{url('/')}}/assets/img/icons/Delivery icon.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{url('/')}}/assets/img/gallery/MaskGroup 6.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" style="position: absolute;left: 8px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" style="position: absolute;   right: 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 30px;"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-actions">

                  <div class="badge badge-foodwagon bg-primary p-4" style="position: relative;top: 45px;left: 7px;">
                    <img src="{{url('/')}}/assets/img/gallery/Mask Group 7.png" class="d-block w-100" alt="..." style="height: 80px; width:80px">
                  </div>
                </div>
              </div>
              <div class="card-body px-0" style="font-size: 12px; font-family: Bahnschrift;background-color: #FAF9F7;">
                <div class="row" style="align-items: baseline; --bs-gutter-x: 0rem; height: 23px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-5">
                    <p style="text-align: center;font-size: 17px;font-weight:600;letter-spacing: -0.5px;font: normal normal 400 16px Bahnschrift;padding-left: 10px;color: #000000;"> Tajine Chicken</p>

                  </div>
                  <div class="col-lg-3">
                    <h5 style="text-align: center;font: normal normal 400 16px Bahnschrift;letter-spacing: -0.57px;"> €12,50</h5>

                  </div>

                </div>
                <div class="row" style="align-items: center;text-align: center;--bs-gutter-x: 0rem;">
                  <div class="col-sm-6 col-lg-4" style="margin-left: 11px;">
                    <h5 style=" text-align: center;font: normal normal normal 15px/26px Rockwell;letter-spacing: -0.38px;    margin-bottom: 1px;">Ilham J.</h5>
                    <span class="fa fa-star checked"></span>4,5 (12)
                    <p style="font: normal normal normal 10px Bahnschrift;letter-spacing: -0.3px;">Cuisine: Moroccan</p>
                  </div>

                  <div class="col-sm-6 col-lg-8" style="width: 148px;">
                    <p style=" font: normal normal 300 14px/14px Bahnschrift;letter-spacing: -0.38px;">Order must be placed minimum <span style="color:#FF0000;">24 houres </span> before delivery/pickup</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="col-sm-6 col-lg-3"></div>

</section>


@endsection

@section('page_js')
 <script>
 /* important
   $('#multi').mdbRange({
     single: {
       active: true,
       multi: {
         active: true,
         rangeLength: 1
       },
     }
   }); */

  $(document).ready(function() {
    $('.bxslider').bxSlider();
  });
 </script>
@endsection
