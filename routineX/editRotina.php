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
            font-size: 18px;
            width: 50%;
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: cornsilk;
            margin: 0 auto;
            margin-bottom: 30px;
            -webkit-box-shadow: 0px 10px 13px -7px #000000, 0px 0px 20px 19px rgba(0, 0, 0, 0.19);
            box-shadow: 0px 10px 13px -7px #000000, 0px 0px 20px 19px rgba(0, 0, 0, 0.19);
            border: solid gray 1px;
            border-radius: 20px;
            text-align: center;
            min-width: 300px;
            max-width: 800px;
            opacity: 0.93;            
        }

        /* TABELA AFAZERES */

        .afazeres {
            display: block;
            background-color: cornsilk;
            padding-top: 30px;
            padding-bottom: 30px;
            color: black;
            text-align: center;
            width: 50%;
            margin: 0 auto;
            -webkit-box-shadow: 0px 10px 13px -7px #000000, 0px 0px 20px 19px rgba(0, 0, 0, 0.19);
            box-shadow: 0px 10px 13px -7px #000000, 0px 0px 20px 19px rgba(0, 0, 0, 0.19);
            border: solid gray 1px;
            border-radius: 20px;
            min-width: 300px;
            max-width: 800px;
            opacity: 0.93;
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
            line-height: 15px;           
        }

        .divTableHeading {
            display: table-header-group;
            font-weight: bold;
            background: cyan;
        }

        .divTableCell,
        .divTableHead {
            
            display: table-cell;
            padding: 4px; /* muda o tamanho dos blocos das colunas*/
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
            line-height: 2px ;
        }

        /* Input Bar */

        input[type=text] {
            width: 95%;                                   
        }
    </style>

</head>

<body>



    <!--bloco primário -->

    <div class="mainBlock">

        <!-- QUADRO ROTINA -->
        <div class="containerRotina">
            <h1>RoutineX</h1>
            <p>Insira os dados desejados, clique em salvar e baixe o arquivo em .pdf!</p>
            <br>

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
            
            <!-- COMO FAZER PARA O USER SALVAR EM PDF APÓS FINALIZAR? -->

        </div>
        <div class="afazeres">
            <h1>Lista de Afazeres</h1>
            <input type="text" style="display: inline-block; width: 40%;">  <!-- O STYLE MUDA O BLOCO DE INPUT! -->
            <button onclick="botaoAdd()" style="display: inline-block;">Add</button>
            <div id="linhaNova" style="padding: 15px; display: block; margin-top: 10px;">
                ahhaha
            </div>
        </div>

    </div>
    <footer class="barraFooter">Site desenvolvido por borba. Todos os direitos reservados. </footer>
</body>

</html>
