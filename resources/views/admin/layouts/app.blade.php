<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/mystyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
@if(Auth::User())
    @include('admin.partials._topnav')
@endif
<main class="py-4 mt-lg-5">
    <div class="container-fluid">
        @yield('content')
    </div>
</main>
</div>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{asset('js/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('js/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

</body>
</html>
