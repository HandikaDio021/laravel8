<!DOCTYPE html>
<html>
<head>
  <title>Star Admin Laravel Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="_token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  {!! Html::style('assets/plugins/@mdi/font/css/materialdesignicons.min.css') !!}
  {!! Html::style('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}

  @stack('plugin-styles')

  <!-- main css -->
  {!! Html::style('css/app.css') !!}

  @stack('style')
</head>

<body>

<div class="container-scroller">

    {{-- HEADER --}}
    @include('layout.header')

    <div class="container-fluid page-body-wrapper">

        {{-- SIDEBAR --}}
        @include('layout.sidebar')

        {{-- MAIN CONTENT --}}
        <div class="main-panel">
            <div class="content-wrapper">

                @yield('content')

            </div>

            {{-- FOOTER --}}
            @include('layout.footer')

        </div>

    </div>
</div>

<!-- base js -->
{!! Html::script('js/app.js') !!}
{!! Html::script('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}

@stack('plugin-scripts')

<!-- common js -->
{!! Html::script('assets/js/off-canvas.js') !!}
{!! Html::script('assets/js/hoverable-collapse.js') !!}
{!! Html::script('assets/js/misc.js') !!}
{!! Html::script('assets/js/settings.js') !!}
{!! Html::script('assets/js/todolist.js') !!}

@stack('custom-scripts')

</body>
</html>