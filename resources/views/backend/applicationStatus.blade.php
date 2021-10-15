@extends('backend.layouts.masterLayout')

@section('content')

<div class="container-fluid">
    @if ($status->status == 1)
    <h2>Your Request is Rejected becouse {{$status->reject_reason}}</h2>
    @elseif($status->status == 0)
    <h2>Your Request is Pending </h2>
    @elseif($status->status == 2)
    <h2>Your Request is Accepted </h2>
    @endif
</div>
@endsection