@extends('emails.layouts.master')

@section('title', 'Welcome to IASIG')
@section('themeColor', '#0070cd')

@section('header')
    @parent

    <h1>Welcome to IASIG</h1>
    <h3>{{ $name }}</h3>
@stop

@section('content')
    <p>Hi there,</p>
    <br />
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
    <br />
    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.</p>
@stop