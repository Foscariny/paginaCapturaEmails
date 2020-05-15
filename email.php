<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/style.css" />
    <title>Como ser um bom Designer!</title>
</head>


<body>


<?php 

$GetParam = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($GetParam);

$name = $GetParam['name'];
$email = $GetParam['email'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$arquivo = "
  <style type='text/css'>
  body { 
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666;
}
  </style>

    <html>

        <h2>Como ser um bom Designer!</h2>
        <h3>O maior e melhor dos guias está aqui para você, $name!</h3>

        <p>Criamos um ebook com as melhores dicas e estratégias para 
        ser um ótimo designer, contendo conhecimentos úteis do básico até
        o mais avançado.</p>

        <a href='https://mega.nz/file/DoZUVCRD#BmZaUoot7lseGz5Ny4rveZxGTFUiD7gvBdSJFe_A9H0' target='_blank'>BAIXE O EBOOK!</a>

    </html>";





    // Remove caracteres invalidos
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Valida email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
 

  $assunto = "Seu Ebook está AQUI!";
 
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: Matheus Dias <$email>';
   
  $enviaremail = mail($email, $assunto, $arquivo, $headers);
  if($enviaremail){


    //Salvar no Arquivo

    $criaArq = fopen("emails.txt", "a+");
    $emailRegistrar = $email . "| \n";
    fwrite($criaArq,$emailRegistrar);
    fclose($criaArq);

    echo "<div id='formulario'><h1 id='titulo2' >O seu link está disponível no Email informado!</h1></div>";
    echo " <meta http-equiv='refresh' content='15;URL=index.php'>";
  } else {
    echo "<div id='formulario'><h1 id='titulo2' >Infelizmente ocorreu um erro! tente novamente mais tarde!</h1></div>";
  }

} else {
    echo "<div id='formulario'><h1 id='titulo2' >Infelizmente esse Email é inválido, repita o processo clicando <a href='index.php'>aqui!</a></h1></div>";
}


?>

<img id="livro" src="./imagens/arte.png"/>

</body>
</html>