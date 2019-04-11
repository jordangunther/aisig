@extends('emails.layouts.master')

@section('title', 'IASIG {{ $contentType }} Created')
@section('themeColor', 'green')

@section('header')
    @parent

    <h1>IASIG {{ $contentType }}: {{ $contentName}}, Created</h1>
@stop

@section('content')
    <p>Hi there {{ $username }},</p>
    <br />
    <p>Congrats on creating your new {{ $contentType }}: {{ $contentName}}! Your {{ $contentType }} will be reviewed by our IASIG Team. Until then, your {{ $contentType }} will be pending and not be seen by others. You should hear from one our team members within the next few days on the status of your {{ $contentType }}.</p>
    <br />
    <p>{{ $contentType }}: {{ $contentName }}, Information:</p>
    <p>User's Name: {{ $username }}</p>
    <p>User's Email: {{ $email }}</p>
    <p>{{ $contentType }} Title: {{ $contentName }}</p>
    <p>{{ $contentType }} {{ $filterType }}: {{ $filterContent }}</p>
    <p>{{ $contentType }} Description: {{ $contentDescription }}</p>
@stop