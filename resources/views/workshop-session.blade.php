@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Workshop Session</h1>
        @foreach ($workshopSessions as $workshopsession)
            <p>Date: {{ $workshopsession->s_date }}</p>
            <p>Name: {{ $workshopsession->session_name }}</p>
            <p>Fee for Members: ${{ $workshopsession->fee_member }}</p>
            <p>Fee for Non-Members: ${{ $workshopsession->fee_non_member }}</p>
            <p>Fee for Students: ${{ $workshopsession->fee_student }}</p>
        @endforeach
    </div>
@endsection
