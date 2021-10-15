@extends('layouts.app')

@section('content')

<style>
    .parent {
        display: flex;
    }

    .vl {
        margin-top: 10px;
        border-left: 3px solid rgb(210, 212, 210);
        height: 30px;
    }

    .checked {
        color: orange;
    }
</style>

<div class="container-fluid" style="height: 40px; background-color: rgb(187, 191, 194); margin-top:30px;">
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8" style="background-color: #FAF9F7;">
        <div class="row">
        <div class="col-lg-3">
                <div class="flex-stack">
                    <div class="module-1">
                        <h4 style="padding-left: 30px; color: rgb(224, 124, 30);">HomeChef</h4>
                    </div>
                    <div class="module-2">
                        <img src="Mask Group 8.png" style="width: 125px;height: 125px;">
                    </div>
                    <div class="parent" style="margin-left: 30px;">
                        <img src="location.png" style="height: 23px; margin-top: 10px;">
                        <div style="margin-top: 8px;margin-left: 10px;">
                            <p style="line-height: 16px;">12.7 km</p>
                            <p style="line-height:0px;">90502 Paris</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="parent">
                    <div class="module-1">
                        <h4 style="color: rgb(97, 96, 96);">Afghan Kitchen</h4>
                    </div>
                    <div class="module-2" style="margin-left: 10px;padding-top: 10px;">
                        <img src="Group 971.PNG">Certified
                    </div>
                    <div class="module-1" style="margin-left: 10px;padding-top: 4px;">
                        <img src="Group 977.png" style="width: 30px;height: 30px;">Active-Offers
                    </div>
                    <hr>
                    <div class="vl"></div>
                    <div class="module-2" style="padding-top: 4px;margin-left: 10px;">
                        <img src="Group 978.png" style="width: 30px;height: 30px;">Meal's-Served
                    </div>
                </div>
                <div class="flex-stack">
                    <div class="parent" style="font-family: Sitka Banner;">
                        4.5<span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>(12 reviews)
                    </div>
                    <div class="parent" style="font-family: Sitka Banner;">
                        <p>Speciality Moroccan, Meditteranien</p>
                        </div>
                    <div class="module-2" style="font-family: Sitka Banner;">
                        <h4>About Me</h4>
                    </div>
                    <div class="module-2" style="font-family: Bahnschrift;">
                        <p>I am a full‑time mom, a passionate cook, and a trained singer who grew up in Kolkata, India. I have a Master’s degree in Sociology. My husband and I moved to Los Angeles in 2003 and since then this is my home</p>
                        <!-- <button style="border: rgb(255, 255, 255); color: red;padding-left: 150px; background-color: rgb(255, 255, 255);">Learn More</button> -->
                        <a href="" style="color: red;">learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="flex-stack">
                    <div class="module-1">
                        <img src="bookmark.png" alt="">
                        <p>Favourite</p>
                    </div>
                    <div class="module-2">
                        <img src="sharing.png" alt="">
                        Share Profile
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
           
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    @endsection
