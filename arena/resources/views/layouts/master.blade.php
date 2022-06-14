<html>
<head>
    <meta name="csrf-token" content ="{{csrf_token()}}" charset="utf-8">
    <script src="{{asset('js/app.js')}}"> </script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

        @include('layouts.header')
        
        @include('layouts.hero')

        @include('layouts.content-left')

        @include('layouts.case-fields')

        @include('layouts.content-right')

        @include('layouts.midle-double')

        @include('layouts.footer')
  
</body>
</html>