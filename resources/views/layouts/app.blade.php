<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Project</title>
</head>
<body>

    @if(count($errors) > 0)
        @foreach($errors->all() as $err)
            <div class="alert">
                {{$err}}
            </div>
        @endforeach
    @endif
    @yield('content')
</body>
</html>