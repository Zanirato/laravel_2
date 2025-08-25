<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

        <title>Venda de Peixes</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap');@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background: linear-gradient(rgba(0, 0, 0, 0.703), rgba(0, 0, 0, 0.703)), 
                            url("https://i.pinimg.com/originals/e9/04/15/e904152f727d70e777066bd122c7f2dd.gif"); 
                background-position: center; 
                background-size: cover; 
                height: calc(100vh - 60px); /* supondo que o menu tenha 60px de altura */
                position: relative; /* IMPORTANTE para posicionamentos absolutos */
                display: flex;
                justify-content: center; /* centraliza o texto */
                align-items: center;
                color: var(--text-color);
            }

            .logo{
                height: 150px;
            }

            h2{
                font-weight: bold;
                font-family: 'Comic Sans MS', 'Poppins', sans-serif;
            }
            .central-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: white;
                }

            .central-text h1 {
                font-size: 32px;
                font-weight: bold;
            }

            .central-text p {
                font-size: 20px;
                margin-top: 10px;
            }
            .pagina {
                background-color: #306EBF;
                color: #c2d9edff;
                border: none;
                border-radius: 25px;
                padding: 10px 0;
                font-size: 1.1rem;
                font-weight: bold;
                margin-top: 20px;
                width: 40%;
                cursor: pointer;
                transition: all 0.3s ease;
                display: inline-block;
                text-decoration: none;
            }

            .pagina:hover {
                background-color: #c2d9edff;
                color: #306EBF;
                transform: scale(1.05);
            }

        </style>

    </head>
    <body>
        <header>   
            <div class="central-text">
                <img src="https://img.pikbest.com/png-images/20241025/a-coloring-fish-logo_10996597.png!w700wp" class="logo" alt="logo do site">
                <h2>NA PESCA</h2>
                <h1>Sabor autêntico, qualidade incomparável. </h1>
                <p>Experimente o melhor dos mares</p>
                <a href="{{ route('users.create') }}" class="pagina">Página Inicial</a>
            </div>
        </header>
    </body>
</html>
