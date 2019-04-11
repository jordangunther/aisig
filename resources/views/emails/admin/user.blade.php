@extends('emails.layouts.master')

@section('title', 'New User Created')
@section('themeColor', 'green')

@section('header')
    @parent

    <h1>New User Created</h1>
@stop

@section('content')
    <p>IASIG Admin User,</p>
    <br />
    <p>A new user, {{ $name }}, has been created. Here are their information:</p>
    <p>User's Name: {{ $name }}</p>
    <p>User's Email: {{ $email }}</p>
    <p>User's Description: {{ $description }}</p>
@stop