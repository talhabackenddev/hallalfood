@extends('backend.layouts.masterLayout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default Input</h4>
                    <h6 class="card-subtitle">To use add <code>form-control</code> class to the input</h6>
                    <form class="mt-4">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                        <button class="btn btn-outline-secondary">Submit</button>
                    </form>


                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
        </div>
    </div>

</div>
@endsection