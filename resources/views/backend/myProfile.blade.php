@extends('backend.layouts.masterLayout')

@section('content')

<div class="container-fluid" style="margin-top:-82px;">
    <div class="row">
        <form action="{{ route('chef.profile.update') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="profile_id" value="{{ $data->id }}" id="">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            @csrf
            <div class="row">

                <div class="col-sm-12 col-md-8 col-lg-8">
                    <h2 style="margin-top: 3px;">Profile name</h2>
                    <p>This is the name that will be visible to your customer. Once it's set, the profile name cannot be changed later. </p>
                    <input name="first_name" value="{{$data->first_name}}" style=" border-radius: 21px;">
                    <h2 style="margin-top: 13px;">Profile picture</h2>
                    <p>This is photo will visible to your customers. Here are some tips for taking a good photo:</p>
                    <ul>
                        <li>Ask someone to take the photo of you. Do not take a selfie.</li>
                        <li>Take the photo during daylight.Photos take in a kitchen gives a good impression to the customers.</li>
                        <li>Wear right clothing that represents the cuicsine you are serving.</li>
                        <li>Look at the camera and smile. Smiling make the new users feel welcome.</li>

                    </ul>
                    <center>
                        <img src="{{ asset('storage/'. $data->avatar) }}" style="    height: 100px;
    width: 100px;   clip-path: circle();" alt="dashboard_logo" class="dark-logo" />
                    </center>
                    <input type="file" id="image" name="image">
                    <button class="btn btn-danger" type="submit" style="font-size: 20px; background-color:#CB652B; border-radius:20px; border-color:#CB652B; font-family:Rockwell;  margin-left: 529px; margin-top:50px;">Submit</button>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h2>About me</h2>
                    <div class="rectangle">
                        <textarea name="aboutMe" value="{{ $data->aboutMe }}" style="text-align: left; font: normal normal 300 18px Bahnschrift;letter-spacing: -0.5px;color: #8D8D8D;width: -webkit-fill-available; padding: 13px; height: inherit; border-radius: 21px" placeholder="A brief paragraph that introduces you to your customers. Focus on what inspires you and the food you are serving."></textarea>
                    </div>

                    <label for="cuisine">Choose Cuisines</label><br>
                    <select name="cuisine" style="width: 340px; background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #707070;border-radius: 29px; text-align: left;font: normal normal 300 20px/42px Bahnschrift;letter-spacing: -0.5px;color: #8D8D8D;height: 35px;">
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>

                    <h2>Social media pages</h2>
                    <p>If you are active on social media, please share with us your pages so we can support getting more followers.</p>
                    <div class="row">
                        <div class="col-lg-2">
                            <img class="shadow-icon" src="{{url('/')}}/assets/img/icons/instagram.png" height="32" alt="..." />

                        </div>
                        <div class="col-lg-10">

                            <div class="form-group">
                                <input type="text" class="form-control" name="insta" class="first_name" placeholder="Paste instagram link" style="background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #707070;border-radius: 29px;">

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <img class="shadow-icon" src="{{url('/')}}/assets/img/icons/facebook.png" height="32" alt="..." />

                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="facebook" class="first_name" placeholder="Paste Facebook link" style="background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #707070;border-radius: 29px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection