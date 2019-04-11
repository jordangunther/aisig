@extends('emails.layouts.master')

@section('title', 'Pending {{ $contentType }}')
@section('themeColor', 'purple')

@section('header')
    @parent

    <h1>IASIG Pending {{ $contentType }}: {{ $contentName}}</h1>
@stop

@section('content')
    <p>Hi there {{ $username }},</p>
    <br />
    <p>Until further review, your {{ $contentType }} will be in a pending state. Your {{ $contentType }} will not be avaiable for display to other members of the IASIG Portal. Please contact the IASIG Team if you have any questions.</p>
    <br />
    <p>{{ $contentType }}: {{ $contentName }}, Information:</p>
    <p>User's Name: {{ $username }}</p>
    <p>User's Email: {{ $email }}</p>
    <p>{{ $contentType }} Title: {{ $contentName }}</p>
    <p>{{ $contentType }} {{ $filterType }}: {{ $filterContent }}</p>
    <p>{{ $contentType }} Description: {{ $contentDescription }}</p>
@stop