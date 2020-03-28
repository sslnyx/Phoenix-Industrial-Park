<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ config('app.name') }}
        @isset($title)
        | {{ $title }}
        @endisset
    </title>

    <link href="https://fonts.googleapis.com/css?family=Anton|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/all.css">

</head>

<body>

    <main>
        @yield('content')
    </main>


    <script>
        const js_data = `{!! json_encode(config('data')) !!}`;
        const js_obj_data = JSON.parse(js_data);
    </script>

    <script src="{{asset('js/all.js')}}"></script>
</body>

</html>