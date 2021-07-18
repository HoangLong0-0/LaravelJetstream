<!doctype html>
<html class="no-js" lang="zxx">

<x-user_head></x-user_head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<x-user_header1></x-user_header1>
<x-user_slider></x-user_slider>

@yield("content")

<!-- footer-start -->
<x-user_footer></x-user_footer>
<!-- footer-end -->


<!-- JS here -->
{{--<script src="{{asset("themes/js/bootstrap.min.js)}}"></script>--}}
<x-user_scripts></x-user_scripts>
