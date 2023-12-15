<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            * {
                box-sizing:border-box;
                padding: 0;
                margin: 0;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
            nav {
                display : flex;
                justify-content: space-between;
                align-items: center;
                background-color: pink;
            }
            nav ul {
                display : flex;
                justify-content: center;
                align-items: center;
            }
            nav ul li a {
                padding: 10px;
                text-decoration: none;
                text-transform: uppercase;
                color: black;
            }
            img {
                display: block;
            }
            ul {
                list-style: none;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav>
             <div>
                 <img src="https://picsum.photos/100/100" alt="logo">
             </div>
             <ul>
                 <li>
                     <a href="{{route('home')}}">
                         home
                     </a>
                 </li>
                 <li>
                     <a href="{{route('about')}}">
                         about
                     </a>
                 </li>
                 <li>
                     <a href="{{route('discover')}}">
                         discover
                     </a>
                 </li>
             </ul>
         </nav>
       <h1 class="text-center">
            Hello Discover!!
       </h1>
       
    </body>
</html>
