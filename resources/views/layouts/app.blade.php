<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('яндекс')</title>
    @section ('яндекс') Яндекс  @endsection
    <link rel="stylesheet" href="/app/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
@include ('inc.header')
@include ('inc.aside')
@include ('inc.footer')
@yield ('content')

</body>
</html>


