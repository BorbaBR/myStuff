<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RoutineX</title>

    <!-- CSS -->
    <style>
        * {
            /* o uso de * indica TODAS as tags html! */
            padding: 0;
            margin: 0;
        }

        /*Background*/
        .mainPosition {
            background-color: burlywood;
            background-image: url("notes.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh;
            opacity: 0.85;                        
        }

        /* caixa de texto */
        .mainText {
            position: relative;
            top: 10%;
            left: 37%;
            padding: 50px;
            text-align: center;
            font-size: 28px;
            width: 450px;
            /* GLASS BOX */
            background: rgba(255, 255, 255, 0.7);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);   
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        

        /*BOTÃO ROTINA*/
        .botaoRotina {
            box-shadow: inset 0px 1px 0px 0px #bdbdbd;
            background: linear-gradient(to bottom, #9c999c 5%, #525252 100%);            
            border-radius: 10px;            
            cursor: pointer;
            color: #000000;
            font-family: Arial;
            font-size: 20px;
            font-weight: bold;
            padding: 21px 32px;
            text-decoration: none;    
            display: block;
            width: 50%;        
            margin: 0 auto;
            margin-top: 10px;
            margin-bottom: -20px;
        }

        .botaoRotina:hover {
            background: linear-gradient(to bottom, #525252 5%, #9c999c 100%);
            border-radius: 10px;            
        }

        .botaoRotina:active {
            position: relative;
            top: 1px;
        }



        /*BARRA FOOTER*/

        .barraFooter {
            font-family: "Times New Roman", Times, serif;
            text-align: center;
            padding: 25px;
            background-color: black;
            color: white;
            opacity: 0.8;            
        }
    </style>


</head>

<body>
    <!-- MAIN PAGE background-->
    <div class="mainPosition">

        <!-- BARRA DE NAVEGAÇÃO -->
       
        <!-- CAIXA DE TEXTO / GLASS EFFECT-->
        <div class="mainText">            
            <h1>Sua rotina está bagunçada?</h1>
            <br>
            <p>Com o RoutineX, organize sua rotina ou até mesmo crie uma nova, de maneira prática e rápida!</p>
            <br>
            <p>Descubra uma maneira inovadora de organizar seu dia a dia!</p>
            <br>
            <p>Vamos criar uma nova rotina para você?</p>
            <br>
            <a href="editRotina.php" class="botaoRotina">Criar nova rotina!</a>
            <br>
        </div>
    </div>

    <!-- criar um pequeno quadrado com imagem exemplo à direita do mainText. (iframe?) -->
    <div>

    </div>
    <!-- PÁGINA CRIE SUA PRÓPRIA ROTINA: Tabela editável, SEG-DOM, 24h - fazer href editRotina.html -->
    <footer class="barraFooter">Site desenvolvido por borba. Todos os direitos reservados. </footer>

</body>


</html>