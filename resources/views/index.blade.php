{{-- @extends('layouts.app')
@section('head')
    <style>
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .success-message {
            color: green;
            font-weight: bold;
        }
    </style>
@section('title', 'Home')

@endsection

@section('content')
@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<div class="container-fluid mt-3">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">Registration Type</th>
                <th scope="col" style="text-align: center;">Non member</th>
                <th scope="col" style="text-align: center;">Student</th>
                <th scope="col" style="text-align: center;">Member</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>

                <td>
                    <div class="row col-12">
                        <div class="col-5"> Early <h6 style="font-size: 12px;">until 31 may 2023</h6>
                        </div>
                        <div class="col-5">Early <h6 style="font-size: 12px;">until
                                31 may 2023</h6>

                        </div>
                    </div>
                </td>
                <td>
                    <div class="row col-12">
                        <div class="col-5"> Early <h6 style="font-size: 12px;">until 31 may 2023</h6>
                        </div>
                        <div class="col-5">Early <h6 style="font-size: 12px;">until
                                31 may 2023</h6>

                        </div>
                    </div>
                </td>
                <td>
                    <div class="row col-12">
                        <div class="col-6"> Early <h6 style="font-size: 12px;">until 31 may 2023</h6>
                        </div>
                        <div class="col-6">Early <h6 style="font-size: 12px;">until
                                31 may 2023</h6>

                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="col-12">Lecturn <h6 style="font-size: 12px;">
                            1-2 Oct 2023</h6>
                    </div>
                </th>
                <td>
                    <div class="row col-12">
                        <div class="col-5"> 500 USD
                        </div>
                        <div class="col-5">500 USD

                        </div>
                    </div>
                </td>
                <td>
                    <div class="row col-12">
                        <div class="col-5"> 500 USD
                        </div>
                        <div class="col-5">500 USD
                        </div>
                    </div>
                </td>
                <td>
                    <div class="row col-12">
                        <div class="col-5"> 500 USD
                        </div>
                        <div class="col-5">500 USD
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row"><div class="col-12">Workshop Room 1 <h6 style="font-size: 12px;">
                    3 Oct 2023 Oct 2023</h6>
            </div></th>
                <td></td>
                <td>500 USD<h6 style="font-size: 12px;">
                    1-2 Oct 2023</h6></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row"><div class="col-12">Lecturn <h6 style="font-size: 12px;">
                    1-2 Oct 2023</h6>
            </div></th>
                <td></td>
                <td>500 USD<h6 style="font-size: 12px;">
                    1-2 Oct 2023</h6></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
<script type="text/javascript"></script>
@endsection --}}

@extends('layouts.app')
@section('head')

    <head>
        <title>The Life Eye Co., Ltd. - Work Seminar</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .container {
                margin-top: 50px;
            }

            h1 {
                text-align: center;
            }

            .seminar-info {
                text-align: center;
                margin-bottom: 30px;
            }

            .registration-info {
                text-align: center;
                margin-bottom: 50px;
            }

            .registration-type {
                font-weight: bold;
                margin-bottom: 10px;
            }

            .registration-fee {
                font-weight: bold;
            }
        </style>
    @section('title', '>The Life Eye Co., Ltd. - Work Seminar')
</head>
@endsection

@section('content')
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                    src="https://scontent.fcnx3-1.fna.fbcdn.net/v/t31.18172-8/11053650_1635710319978564_1843960712108501411_o.jpg?_nc_cat=105&ccb=1-7&_nc_sid=174925&_nc_ohc=BrYDl7MzKKcAX8QVnMY&_nc_ht=scontent.fcnx3-1.fna&oh=00_AfDazF4Kc13kKB0As9PhtDOhXHuZJl1PHe_WGGzF_XMBaQ&oe=6493EEAE"
                    alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

    </div>

    <h1 class="mt-2">Regular Seminars</h1>
    <div class="seminar-info">
        <p>Teaching Workshop & Live Streaming</p>
        <p>October 1-3, 2015</p>
        <p>The Life Eye Co., Ltd.</p>
    </div>

    <div class="registration-info">
        <h2>Registration Information</h2>
        <div class="registration-type">
            <div class="col-12">
                <div class="row">
                    <p class="col-xl-3 col-md-3 col-sm">Registration Fee:</p>
                    <p class="col-xl-3 col-md-3 col-sm">Member</p>
                    <p class="col-xl-3 col-md-3 col-sm">Non-member</p>
                    <p class="col-xl-3 col-md-3 col-sm">Student</p>
                </div>
            </div>
        </div>
        <div class="registration-fee">
            <div class="col-12">
                <div class="row">
                    <p class="col-xl-4 col-md-6 col-sm">Early until 31 May 2015: $550 USD</p>
                    <p class="col-xl-4 col-md-6 col-sm">Late 1 June - 30 June 2015: $400 USD</p>
                    <p class="col-xl-4 col-md-6 col-sm">Early until 31 May 2015: $550 USD</p>
                    <p class="col-xl-4 col-md-6 col-sm">Late 1 June - 30 June 2015: $350 USD</p>
                    <p class="col-xl-4 col-md-6 col-sm">Early until 31 May 2015: $550 USD</p>
                    <p class="col-xl-4 col-md-6 col-sm">Late 1 June - 30 June 2015: $500 USD</p>
                </div>
            </div>
        </div>
    </div>

    <div class="registration-form">
        <h2>Registration Form</h2>
        <p> <i class="bi bi-arrow-right"></i><a href="{{ route('registration.create') }}">Register now to secure your
                spot!</a></p>
    </div>
@endsection

@section('scripts')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
