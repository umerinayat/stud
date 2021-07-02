@extends('client.layouts.landing-page.master')


@section('content')
<div class="container">

    <!-- Domain CTA -->
    <div class="row text-center">
        <div class="col-sm-12">

            <div class="row">
                <div class="col-sm-12">
                    <h3><b>Domain.com</b></h3>
                    <p><b>is for sale</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-lg w-25" style="background-color: #F37B49;color: #fff"><b>Make
                            Offer</b></button>
                </div>
            </div>

        </div>
    </div>

    <!-- Latest -->
    <div class="row mt-4 text-center">

        <div class="col-sm-5">
            <div class="row">
                <div class="col-sm-12 text-muted">
                    <b>Latest Opportunities</b>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body" style="height: 20rem;border: 2px solid #ccc"></div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                <i class="fas fa-chevron-circle-left fa-2x" style="color: #F37B49" role="button"></i>
                <i class="fas fa-chevron-circle-right fa-2x" style="color: #F37B49" role="button"></i>
                </div>
            </div>
        </div>

        <div class="col-sm-5 offset-sm-2">
            <div class="row">
                <div class="col-sm-12 text-muted">
                    <b>Professional Freelander Services</b>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body" style="height: 20rem;border: 2px solid #ccc"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                <i class="fas fa-chevron-circle-left fa-2x" style="color: #F37B49" role="button"></i>
                <i class="fas fa-chevron-circle-right fa-2x" style="color: #F37B49" role="button"></i>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection