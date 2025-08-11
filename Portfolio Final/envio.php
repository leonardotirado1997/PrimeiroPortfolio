<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Obrigado</title>
    <style>
        .container { /*CENTRALIZA E AJUSTA OS ELEMENTOS*/
            display: flex;
            /* Define um layout flexível para o container */
            flex-direction: column;
            /* Alinha os elementos filhos verticalmente (em coluna) */
            align-items: center;
            /* Centraliza os elementos filhos horizontalmente */
            justify-content: center;
            /* Centraliza os elementos filhos verticalmente */
            height: 100vh;
            /* Define a altura do container como 100% da altura da janela de visualização */
        }

        .container h1,
        .container p,
        .container .btn { /*ESPACAMENTO ENTRE OS ELEMENTOS*/
            margin-bottom: 20px;
            /* Adiciona um espaçamento inferior de 20px entre os elementos (título, parágrafo e botão) */
        }

        .btn { /*ESTILIZAÇÃO DO BOTAO*/
            padding: 10px 20px;
            /* Define o preenchimento interno do botão (10px laterais superiores/inferiores, 20px nlaterais esquerda/direita) */
            background-color: #088a3e;
            /* Define a cor de fundo do botão */
            color: #171a20;
            /* Define a cor do texto do botão */
            border: none;
            /* Remove a borda padrão do botão */
            border-radius: 20px;
            /* Arredonda os cantos do botão com um raio de 20px */
            cursor: pointer;
            /* Altera o cursor para indicar que o botão é clicável */
            text-align: center;
            /* Centraliza o texto dentro do botão */
        }

        .btn:hover { /*ESTILIZAÇÃO AO PASSAR O MOUSE NO BOTÃO SOMBRA */
            background-color: white;
            /* Altera a cor de fundo do botão quando o mouse passa sobre ele */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Obrigado por entrar em contato!</h1>
        <h3>Em breve responderei</h3>
        <a href="index.php" class="btn">Voltar ao Portfolio!</a>
    </div>

</body>

</html>