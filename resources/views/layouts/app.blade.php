<!DOCTYPE html>
<html lang="en">
<head>
    <title>BrainWired</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="header">
        <div class="row">
        @include('includes.navbar')
        </div>
    </div>
    @yield('content')
</body>
</html>