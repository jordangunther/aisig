@extends('emails.layouts.master')

@section('title', 'IASIG {{ $type }} Rejected')
@section('themeColor', 'red')

@section('header')
    @parent

    <h1>IASIG {{ $type }} Rejected</h1>
@stop

@section('content')
    <p>Hi there {{ $name }},</p>
    <br />
    <p>We are sorry to inform you, but your {{ $type }} has been rejected.</p>
    <p>{{ $messageInput }}</p>
    <p>{{ $whatToDo }}</p>
@stop