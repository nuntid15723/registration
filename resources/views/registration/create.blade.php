{{-- @extends('layouts.app')
@section('head')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
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
    @section('title', 'Registration Form')
</head>
@endsection

@section('content')
@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<div class="container">
    <h1>Registration Form</h1>
    <form action="{{ route('registration.store') }}" method="post" onsubmit="return validateForm();">
        @csrf
        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6 ">
                <label for="firstname">Firstname:</label>
                <input class="form-control" type="text" id="firstname" name="firstname" required>
                <br>
            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">
                <label for="lastname">Lastname:</label>
                <input class="form-control" type="text" id="lastname" name="lastname" required>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6">
                <label for="mobile">Mobile:</label>
                <input class="form-control" type="text" id="mobile" name="mobile" required>
                <br>
            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">
                <label for="email">Email:</label>
                <input class="form-control" type="email" id="email" name="email" required>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6">
                <label for="organization">Organization/School/University:</label>
                <select name="organization" class="form-control" id="exampleFormControlSelect1">
                    <option disabled selected>select</option>
                    <option value="1">Organization</option>
                    <option value="2">School</option>
                    <option value="3">University</option>
                </select>
                <br>
            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">
                <label for="receipt-name">Name Organization/School/University:</label>
                <input class="form-control" type="text" id="organization_name" name="organization_name">
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6">
                <label for="receipt-name">Name for Issue Receipt:</label>
                <input class="form-control" type="text" id="receipt-name" name="receipt_name" required>
                <br>

            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">
                <label for="receipt-address">Address for Issue Receipt:</label>
                <input class="form-control" type="text" id="receipt-address" name="receipt_address" required>
                <br>
            </div>

        </div>
        <div class="row">
            <div class="col-12" style="text-align: center;">
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    function validateForm() {
        var email = document.getElementById("email").value;
        var phone = document.getElementById("mobile").value;

        // ตรวจสอบรูปแบบอีเมล
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.match(emailRegex)) {
            alert("กรุณากรอกอีเมลให้ถูกต้อง");
            console.log("validateForm() - Invalid email");
            return false;
        }

        // ตรวจสอบรูปแบบหมายเลขโทรศัพท์ (ใช้ตัวเลขเท่านั้น)
        var phoneRegex = /^\d+$/;
        if (!phone.match(phoneRegex)) {
            alert("กรุณากรอกหมายเลขโทรศัพท์ให้ถูกต้อง");
            console.log("validateForm() - Invalid phone number");
            return false;
        }

        return true;
    }
</script>
@endsection
</body>

</html> --}}

@extends('layouts.app')
@section('head')

    <head>
        <title>Registration Form</title>
    @section('title', 'Registration Form')
</head>
@endsection

@section('content')
<div class="container">
    <h1>Registration Form</h1>
    <form action="{{ route('registration.create') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="firstname">First name:</label>
                    <input class="form-control" type="text" id="firstname" name="firstname" required>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="lastname">Last name:</label>
                    <input class="form-control" type="text" id="lastname" name="lastname" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input class="form-control" type="text" id="mobile" name="mobile" required>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="confirmed_mobile">Confirmed mobile:</label>
                    <input class="form-control" type="text" id="confirmed_mobile" name="confirmed_mobile" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="home_address">Home address:</label>
                    <input class="form-control" type="text" id="home_address" name="home_address" required>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="confirmed_email">Confirmed email:</label>
                    <input class="form-control" type="email" id="confirmed_email" name="confirmed_email" required>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">

                <div class="form-group">
                    <label for="organization">Organization/School/University:</label>
                    <input class="form-control" type="text" id="organization" name="organization">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="receipt_name">Name for issue receipt:</label>
                    <input class="form-control" type="text" id="receipt_name" name="receipt_name" required>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="receipt_address">Address for issue receipt:</label>
                    <input class="form-control" type="text" id="receipt_address" name="receipt_address" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="registration_type">Registration Type:</label>
                    <select class="form-control" id="registration_type" name="registration_type" required>
                        <option value="early">Early until 31 May</option>
                        <option value="late">Late 1 June - 30 June</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6 col-md-6">
                <div class="form-group">
                    <label for="workshop">Workshop:</label>
                    <select class="form-control" id="workshop" name="workshop" required>
                        <option value="1">Workshop Room 1 (500 USD) - 3 Oct 2023</option>
                        <option value="2">Workshop Room 2 (250 USD) - 3 Oct 2023</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-md-12">
                <div class="form-group">
                    <label for="special_requests">Special Requests:</label>
                    <textarea class="form-control" id="special_requests" name="special_requests"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="text-align: center;">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    function validateForm() {
        var email = document.getElementById("email").value;
        var phone = document.getElementById("mobile").value;

        // ตรวจสอบรูปแบบอีเมล
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.match(emailRegex)) {
            alert("กรุณากรอกอีเมลให้ถูกต้อง");
            console.log("validateForm() - Invalid email");
            return false;
        }

        // ตรวจสอบรูปแบบหมายเลขโทรศัพท์ (ใช้ตัวเลขเท่านั้น)
        var phoneRegex = /^\d+$/;
        if (!phone.match(phoneRegex)) {
            alert("กรุณากรอกหมายเลขโทรศัพท์ให้ถูกต้อง");
            console.log("validateForm() - Invalid phone number");
            return false;
        }

        return true;
    }
</script>
@endsection
