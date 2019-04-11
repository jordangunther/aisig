<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
</head>
@include('emails.layouts.style')
<body>
    <table class="contentTable">
        <tr class="header">
            <td align="center">
                <div>
                    <img src="{{asset('assets/img/IASIG_logo.png')}}" alt="IASIG Logo" border="0" height="75" width="100%" title="IASIG Logo" style="display:block" />
                </div>
                @yield('header')
            </td>
        </tr>