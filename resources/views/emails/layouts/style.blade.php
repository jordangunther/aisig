<style type="text/css">
@media only screen and (max-device-width: 600px) {
    /* mobile-specific CSS styles go here */
    body {
        font-family: 'Roboto', sans-serif !important;
        padding:0 !important;
        margin:0 !important;
    }
    table {
        max-width: 900px !important;
        display:block !important;
        margin: 0 auto !important;
    }
    table tr[class=header] {
        background-color: @yield('themeColor') !important;
        color:white !important;
    }
    table tr[class=header] td {
        padding: 100px 0px 50px 0px !important;
    }
    table tr[class=header] td div {
        height: 200px !important;
        width: 200px !important;
        background-color: white !important;
        border-radius: 50% !important;
        display: inline-block !important;
    }
    table tr[class=header] td div img {
        margin-top:65px
    }
    table tr[class=header] td h1 {
        font-weight:100 !important;
        padding-top:20px !important;
    }
    table tr[class=header] td h3 {
        font-weight:100 !important;
    }
    table tr[class=content] td {
        padding: 30px 50px !important;
    }
    table tr[class=footer] td {
        padding-top: 10px !important;
        color: grey !important;
        font-size: 12px !important;
    }
    hr {
        border: solid 1px @yield('themeColor') !important;
    }
}

/* regular CSS styles go here */
body {
    font-family: 'Roboto', sans-serif;
    padding:0;
    margin:0;
}
table {
    max-width: 900px;
    display:block;
    margin: 0 auto;
}
table tr.header {
    background-color: @yield('themeColor');
    color:white;
}
table tr.header td {
    padding: 100px 0px 50px 0px;
}
table tr.header td div {
    height: 200px;
    width: 200px;
    background-color: white;
    border-radius: 50%;
    display: inline-block;
}
table tr.header td div img {
    margin-top:65px
}
table tr.header td h1 {
    font-weight:100;
    padding-top:20px;
}
table tr.header td h3 {
    font-weight:100;
}
table tr.content td {
    padding: 30px 50px;
}
table tr.footer td {
    padding-top: 10px;
    color: grey;
    font-size: 12px;
}
hr {
    border: solid 1px @yield('themeColor');
}
</style>