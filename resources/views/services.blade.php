@extends('layouts.app')

@section('content')
<style>
    .btn-group button {
        background-color: #5499C7; /* Green background */
        border: 1px solid black; /* Green border */
        color: white; /* White text */
        padding: 10px 24px; /* Some padding */
        cursor: pointer; /* Pointer/hand icon */
        float: left; /* Float the buttons side by side */
    }
    
    .btn-group button:not(:last-child) {
        border-right: none; /* Prevent double borders */
    }
    
    /* Clear floats (clearfix hack) */
    .btn-group:after {
        content: "";
        clear: both;
        display: table;
    }
    
    /* Add a background color on hover */
    .btn-group button:hover {
        background-color: #A9CCE3;
    }

</style>

<div class="btn-group" style="width:50%">
    <button onclick="location.href = '/home';" id="westock" style="width:33.3%">WeStock</button>
    <button onclick="location.href = '/home';" id="skynet" style="width:33.3%">SkyNet</button>
    <button onclick="location.href = '/home';" id="tarmac" style="width:33.3%">TarMac</button>
</div>

@endsection
    