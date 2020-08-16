<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Company Map</title>
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link href="https//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</link>
</meta>
</head>

<body>
    @yield('content')
    <script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU58gtiJj06wt/s" src="https://code.jquery.com/jquery-3.1.0.min.js">
    </script>
    <script async="" defer="" src="https://map.googleapis.com/maps/api.js?key=AIzaSyApv83QwAHC66gUdD4-bedoYViYaV1PHqg">
    </script>

    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
