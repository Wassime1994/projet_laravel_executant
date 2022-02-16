<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>Document</title>
    <style>
        .img {
            background-image: url('https://w0.peakpx.com/wallpaper/368/217/HD-wallpaper-settings-clock-gear-mechanic.jpg');
            background-size: 100%;
            height :auto ;
            width:40% ;
            background-color: red
        }
        .yield {
            width : 100%
        }
    </style>
</head>
<body>
    <div class="flex justify-center item-center">
        <div class="img">
        </div>
        <div class="yield">
            @yield('content')
        </div>
    </div>

<script src={{asset('js/app.js')}}></script>
<script src={{asset('js/test.js')}}></script>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="../path/to/flowbite/dist/flowbite.js"></script>


</body>
</html>
