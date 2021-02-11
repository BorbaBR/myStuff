<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>EDITOR DE ROTINA</title>

    <style>
        /*parte de css - estilização*/

        * {
            /* o uso de * indica TODAS as tags html! */
            padding: 0;
            margin: 0;
        }

        /* bloco background */
        .mainBlock {
            background-image: url("fundotabela.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            font-size: 20px;
            opacity: 0.85;
            padding: 15px;
            padding-bottom: 40px;
            padding-top: 40px;
        }

        h1 {
            font-family: "Times New Roman", Times, serif;
            font-size: 40px;
            font-weight: bold;
        }

        /* BLOCO ROTINA */

        .containerRotina {
            display: block;
            font-size: 20px;
            width: 90%;
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: cornsilk;
            margin: 0 auto;
            margin-bottom: 30px;
            -webkit-box-shadow: 0px 10px 13px -7px #000000, 0px 0px 20px 19px rgba(0, 0, 0, 0.19);
            box-shadow: 0px 10px 13px -7px #000000, 0px 0px 20px 19px rgba(0, 0, 0, 0.19);
            border: solid gray 1px;
            border-radius: 20px;
            text-align: center;
            max-width: 800px;
        }

        /* TABELA AFAZERES */

        .afazeres {
            display: block;
            background-color: rgb(129, 193, 214);
            padding-top: 30px;
            padding-bottom: 30px;
            color: black;
            text-align: center;
            width: 90%;
            margin: 0 auto;
            -webkit-box-shadow: 0px 10px 13px -7px #000000, 0px 0px 20px 19px rgba(0, 0, 0, 0.19);
            box-shadow: 0px 10px 13px -7px #000000, 0px 0px 20px 19px rgba(0, 0, 0, 0.19);
            border: solid gray 1px;
            border-radius: 20px;
            max-width: 800px;
        }

        /* footer */

        .barraFooter {
            font-family: "Times New Roman", Times, serif;
            text-align: center;
            padding: 25px;
            background-color: black;
            color: white;
            opacity: 0.8;
        }

        /* divs */
        .divTable {
            display: table;
            margin: 0 auto;
            color: black;
            background: white;
            text-align: center;
            width: 90%;
        }

        .divTableRow {
            display: table-row;
        }

        .divTableHeading {
            display: table-header-group;
            font-weight: bold;
            background: cyan;
        }

        .divTableCell,
        .divTableHead {
            display: table-cell;
            padding: 5px;
            border: solid gray 1px;
        }

        .divTableHeading {
            display: table-header-group;
        }

        .divTableFoot {
            display: table-footer-group;
        }

        .divTableBody {
            display: table-row-group;
        }

        /* INPUT */

        input[type=text] {
            width: 90%; 
            margin-bottom: 4px;           
        }
    </style>

</head>

<body>



    <!--bloco primário -->

    <div class="mainBlock">

        <!-- QUADRO ROTINA -->
        <div class="containerRotina">
            <h1>CRIE SUA ROTINA!</h1>
            <br>
            <!-- TESTE TABELA 1 -->
            <div class="divTable ">
                <div class="divTableHeading">
                    <div class="divTableRow">
                        <div class="divTableHead">Hora</div>
                        <div class="divTableHead">Compromisso</div>
                    </div>
                </div>

                <div class="divTableBody">

                    <?php
                    $hora = 0;
                    while ($hora < 24) {
                        echo '
                            <div class="divTableRow">
                        <div class="divTableCell">'.sprintf("%02d", $hora).':00</div>  
                        <div class="divTableCell">
                        <form>
                        <input type="text">
                        <input type="hidden" value="submit">
                        </form>
                        </div>
                            </div>   
                        ';
                        // '.$hora.' invoca a var dentro do echo
                        // () transforma a var 
                        // sprintf("%02d", $hora) adiciona se necessario o zero na esquerda
                        $hora++;
                    }
                    ?>     
                                   
                </div>
            </div>
            <!-- tr = linha nova, th = table header, td =  -->

            <!-- COMO FAZER PARA O USER SALVAR EM PDF APÓS FINALIZAR? -->

        </div>
        <div class="afazeres">
            <h1>Lista de Afazeres</h1>
            <input type="text" style="display: inline-block;">
            <button onclick="botaoAdd()" style="display: inline-block;">Add</button>
            <div id="linhaNova" style="padding: 15px; display: block; background-color: lightblue; margin-top: 10px;">
                ahhaha
            </div>
        </div>

    </div>
    <footer class="barraFooter">Site desenvolvido por borba. Todos os direitos reservados. </footer>
</body>

</html>
