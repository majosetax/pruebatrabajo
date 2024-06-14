<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/prueba.js') }}"></script>
    <title>Document</title>
    <style>

.modulo {
    text-transform: uppercase;
    width: 140px;
}

        .circulo {
    width: 120px;
    height: 120px;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    border: solid 3px #3B4480;
    display: flex;
    margin: auto;
    margin-top: 60px;
        }

        .icono{
    width: 9.6em;
    margin-left: -19px;
    margin-top: -19PX;
        }

        .texto{

            color: rgb(59, 68, 128);
        }
    </style>
</head>
<body>

    <div class="modulo" onmouseover="mouse(true,1)" onmouseout="mouse(false,1)">
        <div class="circulo circulo1">
           <h6 class="texto texto1">prueba</h6>
           <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/PNG_transparency_demonstration_1.png/640px-PNG_transparency_demonstration_1.png" class="icono icono1">
        </div>

    </div>



</body>
</html>
