<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="icon" type="image/png" href="./imagens/logo.png">
    <title>Como ser um bom Designer!</title>
</head>

<body>



<form id="formulario" action="email.php" method="POST" enctype="multipart/form-data">
<img id="logo" src='./imagens/logo.png'/>
    <h1 id='titulo' >Como ser um bom Designer!</h1>
    <a id='explic' >    Um Ebook completamente gratuito de como ser um bom designer, contendo uma série de dicas e atributos importantes para quem quer começar carreira!</a>
<!-- Email -->
<label id='textos' for="email">Preencha o formulário para fazer o Download:</label><br>
<input class="campos" type="text" required="required" name="name" Placeholder="Nome" ><br>
<input class="campos" type="email" required="required" name="email" Placeholder="Seu melhor email" ><br>

<!-- Botão -->
<input class="bot"type="submit" name="enviar-formulario" value="BAIXE O EBOOK!">

</form>

<img id="livro" src="./imagens/arte.png"/>

</body>
</html>


