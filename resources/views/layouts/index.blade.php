<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>Document</title>
   <style>

       #image {
            background-image: url('https://images.unsplash.com/photo-1574285013029-29296a71930e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmVydGljYWx8ZW58MHx8MHx8&w=1000&q=80');
            background-size: 100%;
            height :auto ;
            width:40% ;
        }
        .yield {
            width : 100%
        }
    </style>
</head>
<body>

    <div class="flex">
        <div>
            @yield('gallerie')
        </div>
    </div>

    <div>
        @yield('image')
    </div>


    <div class="flex justify-center item-center ">
        <div class="img">
        </div>
        <div class="yield">
            @yield('content')
        </div>
    </div>
    @yield('categorie')
<script src={{asset('js/app.js')}}></script>
<script src={{asset('js/test.js')}}></script>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="../path/to/flowbite/dist/flowbite.js"></script>


</body>
</html>
