<?php 



function logMsg( $msg, $level = 'info', $file = 'main.log' )
{
    // variável que vai armazenar o nível do log (INFO, WARNING ou ERROR)
    $levelStr = '';

    // verifica o nível do log
    switch ( $level )
    {
        case 'info':
            // nível de informação
            $levelStr = 'INFO';
            break;

        case 'warning':
            // nível de aviso
            $levelStr = 'WARNING';
            break;

        case 'error':
            // nível de erro
            $levelStr = 'ERROR';
            break;
    }

    date_default_timezone_set('America/Sao_Paulo');

    // data atual
    $date = date( 'Y-m-d H:i:s' );

    // formata a mensagem do log
    // 1o: data atual
    // 2o: nível da mensagem (INFO, WARNING ou ERROR)
    // 3o: a mensagem propriamente dita
    // 4o: uma quebra de linha
    // $msg = sprintf( "[%s] [%s]: %s%s", $date, $levelStr, $msg, PHP_EOL );

    // escreve o log no arquivo
    // é necessário usar FILE_APPEND para que a mensagem seja escrita no final do arquivo, preservando o conteúdo antigo do arquivo
    file_put_contents( $file, $msg, FILE_APPEND );

    $con=  mysqli_connect("localhost","root","","trabalho2b");


    // $idReg = $_SESSION['id']
    $idReg = 33;

    $sqlInsertLogging="insert into logging (dateLogging, level, msg, fk_reg) values ('$date' , '$levelStr', '$msg', '$idReg');";    
    // $sqlInsertLogging="insert into logging (dateLogging, level, msg, fk_reg) values ('2021-04-29 11:39:42' , 'INFO', 'Teste DB v1', 3);";    
    mysqli_query($con, $sqlInsertLogging);

    // CREATE table logging (
    //     idLogging int primary key auto_increment,
    //     dateLogging datetime not null,
    //     level varchar(100) not null,
    //     msg varchar(1000) not null,
    //     fk_reg int not null,
    //     FOREIGN key (fk_reg) REFERENCES reg (id)
    // );
}



logMsg( "Executando a tarefa X..." );

logMsg( "Isto é um aviso.... a operação X pode falhar...", 'warning' );

logMsg( "Isto é um erro. A operação X falhou", 'error' );


?> 

<?php
    include 'connect.php';
?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login e Registro com HTML5 e CSS3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>


     <a class="links" id="paralogin"></a>
     
    <div class="content">    


  <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action=""> 

          <h1>Logger Resgistrado com sucesso!!!</h1> 

  <p> 
       <img src="i2.jpeg" width="150" height="150" align="middle">
       <img src="i3.jpeg" width="150" height="150" align="right">
</p>

<p>
    <a href="home1.php">Ir para o home</a>
</p>
<p>
    <a href="home.php">Voltar para seu perfil</a>
</p>
<p>
    <a href="viewallLOGER.php">Ver viewall das pessoas logadas</a>
</p>
</div>
  </div>  
</body>
</html>