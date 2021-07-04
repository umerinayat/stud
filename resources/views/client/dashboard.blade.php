@extends('client.layouts.landing-page.master')


@section('content')
<div class="container">
    <div class="row">
       <div class="col-sm-12">
            <h3>Client Dashboard</h3>
            <h4>User: {{ Auth::user()->name }}</h4>
       </div>
    </div>
</div>
@endsection