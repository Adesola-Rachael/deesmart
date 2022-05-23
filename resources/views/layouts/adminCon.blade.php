@include('cube.includes.header')

<body class="app">
 <header class="app-header fixed-top">

@include('cube.includes.nav')
@include('cube.includes.aside')
 </header><!--//app-header-->

@section('main')
@show
@include('cube.includes.footer')

