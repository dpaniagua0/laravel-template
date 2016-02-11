<!DOCTYPE html>
<!-- Mirrored from demo.flatlogic.com/3.2.1/transparent/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2016 02:33:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" href="img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Laravel Admin Blue Light</title>

  <script>
    /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
     chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
     https://code.google.com/p/chromium/issues/detail?id=332189
     */
  </script>
  <!-- Fonts
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
-->
  <!-- Styles
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
  <link href="{{ asset('css/application.min.css') }}" rel="stylesheet">



</head>
<body class="background-dark">
<div class="logo">
  <h4><a href="index-2.html">Light <strong>Blue</strong></a></h4>
</div>
@include('layouts.leftside')

<div class="wrap">
  @include('layouts.pageheader')

  <div class="content container">
    <h2 class="page-title">Dashboard <small>Statistics and more</small></h2>
    <div class="row">
      <div class="col-lg-12">
        <section class="widget large">
          @yield('content')

        </section>
      </div>
    </div>
  </div>
  <div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin"></i>
  </div>
</div>
<!-- common libraries. required for every page-->
<script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery-pjax/jquery.pjax.js') }}"></script>
<script src="{{ asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('lib/widgster/widgster.js') }}"></script>
<script src="{{ asset('lib/underscore/underscore.js') }}"></script>

<!-- common application js -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
  <div class="setting clearfix">
    <div>Background</div>
    <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
      <% dark = background == 'dark'; light = background == 'light';%>
      <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
      <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
    </div>
  </div>
  <div class="setting clearfix">
    <div>Sidebar on the</div>
    <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
      <% onRight = sidebar == 'right'%>
      <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
      <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
    </div>
  </div>
  <div class="setting clearfix">
    <div>Sidebar</div>
    <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
      <% display = displaySidebar%>
      <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
      <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
    </div>
  </div>
  <div class="setting clearfix">
    <div>White Version</div>
    <div>
      <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
    </div>
  </div>
</script>

<script type="text/template" id="sidebar-settings-template">
  <% auto = sidebarState == 'auto'%>
  <% if (auto) {%>
    <button type="button"
    data-value="icons"
    class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
    data-value="auto"
    class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
      <button type="button"
      data-value="auto"
      class="btn btn-transparent btn-sm">Auto</button>
      <% } %>
    </script>


    <script src="{{ asset('lib/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('lib/jquery.sparkline/index.js') }}"></script>

    <script src="{{ asset('lib/backbone/backbone.js') }}"></script>
    <script src="{{ asset('lib/backbone.localStorage/backbone.localStorage-min.js') }}"></script>

    <script src="{{ asset('lib/d3/d3.min.js') }}"></script>
    <script src="{{ asset('lib/nvd3/build/nv.d3.min.js') }}"></script>

    <!-- page application js -->
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/chat.js') }}"></script>
    <!-- page template -->
    <script type="text/template" id="message-template">
        <div class="sender pull-left">
            <div class="icon">
                <img src="img/2.jpg" class="img-circle" alt="">
            </div>
            <div class="time">
                just now
            </div>
        </div>
        <div class="chat-message-body">
            <span class="arrow"></span>
            <div class="sender"><a href="#">Tikhon Laninga</a></div>
            <div class="text">
                <%- text %>
            </div>
        </div>
    </script>

  </body>
  </html>
