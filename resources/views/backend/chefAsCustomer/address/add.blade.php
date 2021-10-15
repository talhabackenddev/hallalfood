@extends('backend.chefAsCustomer.customer')
@section('page_css')

@endsection
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if ($errors->any())
                    <div class="alert-error">
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $error }}</strong>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="card-header bg-transparent">
                        <h3 class="mb-0" style="font-weight: bold;">Update Delivery Addrress</h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="container">
                                <form action="{{ route('chef.address.update', $address->id) }}" id="form-submit" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Address type:</label>
                                            <input type="hidden" value="delivery_address" name="type">
                                            <input type="text" class="form-control" value="delivery_address" name="type" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Contact no: *</label>
                                            <input type="tel" class="form-control" placeholder="contact" value="{{ $address->phone }}" name="phone" required>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="name">Latitudes: *</label>
                                            <input type="text" class="form-control shopLat" placeholder="latitude" value="{{ $address->lat }}" name="latitude" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="name">Live location: *</label>
                                            <button class="btn-xm btn-primary" id="location">get location</button>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="name">Longitudes: *</label>
                                            <input type="text" class="form-control shopLng" placeholder="longitude" value="{{ $address->lng }}" name="longitude" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Address:</label>
                                            <input type="text" class="form-control" placeholder="address" value="{{ $address->address }}" name="address">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Country:</label>
                                            <input type="text" class="form-control" placeholder="country" value="{{ $address->country }}" name="country">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">City:</label>
                                            <input type="text" class="form-control" placeholder="city" value="{{ $address->city }}" name="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Postal code:</label>
                                            <input type="number" class="form-control" placeholder="postal code" value="{{ $address->postal_code }}" name="postal_code">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="submit btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('page_js')
<script type="text/javascript">
    $(document).ready(function() {
        $("#location").click(function(e) {
            e.preventDefault();
            if (navigator.geolocation) { //check if geolocation is available
                navigator.geolocation.getCurrentPosition(function(position) {
                    console.log(position);
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;
                    $(".shopLat").val(lat);
                    $(".shopLng").val(lng);
                });
            }
        });
        $.get("http://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&sensor=false", function(data) {
            console.log(data);
        })
    });
</script>

@endsection