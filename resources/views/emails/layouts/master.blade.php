@include('emails.layouts.header')
    <tr class="content">
        <td>
            @yield('content')
            <br />
            <p>Sincerely,</p>
            <p>The IASIG Team</p>
        </td>
    </tr>
@include('emails.layouts.footer')