<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXT</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/index.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/lead.css">
</head>
<section class="cabecalho">
    <div class="container">
        <div class="row pd-row text-center">
            <div class="col-md-12 aula1">
                <!-- <p>AULA 1 LIBERADA</p>   -->
            </div>
            <div class="col-md-12 aula1">
                <h1>Semana JVL começa do dia 3 ao dia 9 de setembto</h1> 
            </div>
        </div>
    </div>
</section>


    <section class="inicio ">
         <div class="container">
                <div class="row justify-content-center mt-5">
                        <div class="embed-responsive embed-responsive-16by9  ">
                             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bQVCYA_KRcc" allowfullscreen></iframe>
                        </div>
                </div>
         </div>
    </section>
    <section class="section form">
        <div class="container">
                <form method="POST" action="./controller/insert.php">
                    <div class="form-group">
                        <div class="col-md-12 mt-4">
                                <h4 class="text-lead">Insira seus dados para receber <br> conteúdo exclusivo!</h4>
                        </div>
                        <div class="col-md-12 mt-3">
                            <input type="text" name="nome" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="Insira seu nome" required>
                        </div>
                        <div class="col-md-12 mt-4 mb-4">
                             <input type="text" name="telefone" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="Insira seu whatsapp" required>
                        </div>
                       <div class="col-md-12">
                         <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu melhor e-mail" required>
                       </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                           <input type="submit" name="btn-cadastrar" type="submit" value="CADASTRAR" class="btn-lead">
                    </div>
            </form>
        </div>
    </section>
  

