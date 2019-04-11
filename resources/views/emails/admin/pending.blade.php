@extends('emails.layouts.master')

@section('title', 'Pending {{ $contentType }}')
@section('themeColor', 'purple')

@section('header')
    @parent

    <h1>IASIG Pending {{ $contentType }}: {{ $contentName}}</h1>
@stop

@section('content')
    <p>IASIG Admin User,</p>
    <br />
    <p>Please login to the IASIG Portal to approve or reject this {{ $contentType }}.</p>
    <br />
    <p>{{ $contentType }}: {{ $contentName }}, Information:</p>
    <p>User's Name: {{ $username }}</p>
    <p>User's Email: {{ $email }}</p>
    <p>{{ $contentType }} Title: {{ $contentName }}</p>
    <p>{{ $contentType }} {{ $filterType }}: {{ $filterContent }}</p>
    <p>{{ $contentType }} Description: {{ $contentDescription }}</p>
@stop