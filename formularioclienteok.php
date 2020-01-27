<?php


//capturando infos do GET//
//$numero = $_GET['numero'];
//$cep = $_GET['cep'];

//levantar o endereço a partir do cep

//$str = file_get_contents("https://viacep.com.br/ws/$cep/json");


//transformando a string JSOn em um array associativo
//$endereco = json_decode($str,true);

// adicionar o numero do endereco nas informacoes
//$endereco['numero']=$numero;

// transformando o array associativo em uma string
//$str = json_encode($endereco);

//salvando a string num arquivo
//file_put_contents ('endereco.json', $str);

//echo $str;


//print_r ($endereco);//

//Criptografando a senha

//$inserirsenha = $_POST["senha"];
//$senha = password_hash($inserirsenha, PASSWORD_DEFAULT);
//$guardarsenhas = file_put_contents ('senhas.txt', $inserirsenha);






?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body>
    
      <div class="container">
    <form action="./form_post.php" method="post" enctype="multipart/form-data">
        <div class="col">
       <h1>Faça seu cadastro</h1>
        <!--nome e Sobrenome--> 

        <div class="form-row">
          <div class="col-md-6">
            <label for="Nome">Nome</label>
            <input name="nome" type="text" class="form-control" placeholder="Nome" required> 
          </div>

          <div class="col-md-6">
            <label for="Sobrenome">Sobrenome</label>
            <input name="sobrenome" type="text" class="form-control" placeholder="Sobrenome" required>
          </div>
        </div>

        <!-- inserindo telefone-->

        <div class="form-row">
          <div class="form-group col-md-6">
          <label for="inputFone">Telefone</label>
          <input name="telefone1" type="text" class="form-control" id="inputFone" placeholder="Telefone" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$">
</div> 
          <div class="form-group col-md-6">
          <label for="inputFone" class="control-label">Telefone</label>
          <input name="telefone2" type="text" class="form-control" id="inputFone" placeholder="Telefone" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$">
  </div>
</div>

          <!--inserindo email-->

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              
              
              <!--inserindo senha-->


              <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input name="senha" type="password" class="form-control" id="inputPassword4" placeholder="Senha">
              </div>
            </div>
            

             <!--inserindo endereco 1 com CEP - principal -->
             <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCEP">CEP</label>
              <input name="cep1" type="text" class="form-control" id="inputCEP">
            </div>

          <div class="form-group col-md-6">
             <label for="inputBairro">Bairro</label>
              <input type="text" class="form-control" placeholder="Bairro">
          </div>
          </div>

            <div class="form-group col">
              <label for="inputAddress">Endereço</label>
              <input name="endereco1" type="text" class="form-control" id="inputAddress" placeholder="Digite seu endereço" required>
            </div>


    <!--Inserir complemento - numero e apartamento bairro-->
        <div class="form-row">

          <div class="form-group col-md-4">
            <label for="inputNum">Número</label>
            <input name="numero" type="text" class="form-control" placeholder="Número">
          </div>

          <div class="form-group col-md-8">
            <label for="inputComplemento">Complemento</label>
            <input name="complemento" type="text" class="form-control" placeholder="Complemento">
         </div>

        

        </div>

            <!--inserir endereco 2
            <div class="form-group col-md-4">
              <label for="inputCEP">CEP</label>
              <input name="cep2" type="text" class="form-control" id="inputCEP">
            </div>
            
            <div class="form-group col">
              <label for="inputAddress2">Endereço 2</label>
              <input name="endereco2" type="text" class="form-control" id="inputAddress2" placeholder="Trabalho, casa de parente, entre outros">
            </div>
            -->
            
            <!-- inserir cidade -->
            <div class="form-row">
              <div class="form-group col-md-7">
                <label for="inputCity">Cidade</label>
                <input name="cidade" type="text" class="form-control" id="inputCity">
              </div>
              
            </div>
            
  
           
          
          <button name="enviar" type="submit" class="btn btn-primary">Entrar</button>
          
        </div>
      </div>
      </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>