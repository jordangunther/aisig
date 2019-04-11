@extends('emails.layouts.master')

@section('title', 'IASIG {{ $type }} Approval')
@section('themeColor', 'green')

@section('header')
    @parent

    <h1>IASIG {{ $type }} Approval</h1>
@stop

@section('content')
    <p>Hi there,</p>
    <br />
    <p>{{ $messageInput }}</p>
@stop