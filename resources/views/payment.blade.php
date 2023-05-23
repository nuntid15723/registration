@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Payment</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('payment.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="amount">Amount:</label>

                <input type="number" value="550" name="amount" id="amount" class="form-control" required>
            </div>

            <div class="form-group">

                <label for="Account_Bank_Name">Account Bank Name : <h5>The Live eye Co.,Ltd.</h5></label>

            </div>

            <div class="form-group ">
                <label for="Account_Number">Account Number : <h5>123-45677-890</h5></label>
            </div>
            <div class="form-group ">
                <label for="Bank_name">Bank Name : <h5>ABC bank</h5></label>
            </div>
            <label class="form-label" for="customFile">Default file input example</label>
            <input type="file" class="form-control" id="customFile" accept="image/png, image/gif, image/jpeg" />


            <button type="submit" class="btn btn-primary">Submit Payment</button>
        </form>
    </div>
@endsection
