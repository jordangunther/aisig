@extends('emails.layouts.master')

@section('title', 'Admin Request')
@section('themeColor', 'red')

@section('header')
    @parent

    <h1>IASIG User Admin Request</h1>
@stop

@section('content')
    <p>IASIG Admin User,</p>
    <br />
    <p>Please login to the IASIG Portal to approve or reject this user admin request.</p>
    <br />
    <p>{{ $name }}'s Information:</p>
    <p>User's Name: {{ $name }}</p>
    <p>User's Email: {{ $email }}</p>
    <p>User's Description: {{ $description }}</p>
@stop