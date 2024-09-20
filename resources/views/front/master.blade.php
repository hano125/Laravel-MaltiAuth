<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('assets-front')}}/"
  data-template="vertical-menu-template-free"
>
 @include("front.partial.head")

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      @include('front.partial.sideBar')

        <!-- Layout container -->
        <div class="layout-page">
    @include('front.partial.header')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

           @yield('content')
    </div>

@include('front.partial.scripts')
  </body>
</html>
