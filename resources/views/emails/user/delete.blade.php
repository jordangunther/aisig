@extends('emails.layouts.master')

@section('title', 'IASIG {{ $type }} Deleted')
@section('themeColor', 'red')

@section('header')
    @parent

    <h1>IASIG {{ $type }} Deleted</h1>
@stop

@section('content')
    <p>Hi there {{ $name }},</p>
    <br />
    <p>We are sorry to inform you, but your {{ $type }} has been deleted.</p>
    <p>{{ $messageInput }}</p>
@stop