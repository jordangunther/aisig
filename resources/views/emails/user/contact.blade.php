@extends('emails.layouts.master')

@section('title', 'Contact Message')
@section('themeColor', 'green')

@section('header')
    @parent

    <h1>Contact Message</h1>
@stop

@section('content')
    <p>Hi there,</p>
    <br />
    <p>{{ $messageSetup }}</p>
    <br />
    <p>Message:</p>
    <p>{{ $messageInput }}</p>
@stop