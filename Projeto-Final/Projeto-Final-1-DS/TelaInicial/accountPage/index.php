<?php
session_start();
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$telefone = $_SESSION['telefone'];

?>
              

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Configurações</title>
</head>
<body>

    <header class="headerPage">
        <div class="flex-unit">
            <div class="open-menu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <a href="../index.php"> <img class="logo-img" src="../Imagens/Logogolbet.header.png" ></a>
        </div>
     
       
        <nav class="nav">
          <a class="selected-link" href="../index.php">Apostar</a>
          <a href="#">Histórico de Apostas</a>
          <a href="#">Próximos jogos</a>
          <a href="#">Depositar</a>
         
          <div class="img-box">
              
              <a href="#"><img class="carrinho-img" src="../Imagens/carrinho-removebg-preview.png"></a>    
              <a href="#"><img class="account-icon" src="../Imagens/reload-removebg-preview.png"></a>
              <a class="img-button" href="#"><img class="account-icon" src="../Imagens/iconeConta.png"></a>
     
          </div>       
        </nav>

      </header>
    
    <main class="site-container">
        <nav class="lateral-navigation">
            <div class="top-nav">
            
                <p class="back-button">X</p>

              
                <div class="account-card">
                    
                    <img class="account-img" src="https://www.pellarin.com.br/wp-content/uploads/2022/08/artigoBannerMobile767x716_homem-com-papada-como-eliminar.jpg" >
                    
                    <div>
                        
                        <?php
                        echo '<p class="other-subtitle">'. $nome .'</p>'
                        ?>
                        <?php
                        echo '<p class="paragraph-text">'. $email .'</p>'
                        ?>

                    </div>
                
                   
                   
                </div>
    
                <div class="buttons-container">
                    <a href="#" class="nav-button">
                        <img src="./images/accountIcon.png" >
                        <p>Editar Perfil</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="./images/card.png" >
                        <p>Saldo</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="./images/icons8-plus-50.png" >
                        <p>Depósitos</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="./images/icons8-minus-32.png" >
                        <p>Saques</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="../Imagens/setting.png" >
                        <p>Configurações</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="../Imagens/saldoIcon.png" >
                        <p>Aparência</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="../Imagens/saldoIcon.png" >
                        <p>Idiomas</p>
                    </a>
            
                </div>
            </div>
          
    
           
            <div class="bottom-nav">
                <a href="#" class="nav-button">
                    <img src="../Imagens/iconeConta.png" >
                    <p>Ajuda e Suporte</p>
                </a>
        
                <a href="#" class="nav-button">
                    <img src="../Imagens/logout.png" >
                    <p>Sair</p>
                </a>
            </div>
    
    
        </nav>
    
        <div class="right-frame">

            <div class="right-container">
            

            <div class="settings-container">
                <div class="text-box">
                    <h1 class="title">Editar Perfil</h1>
                    <p>Gerencie seus dados e preferências pessoais aqui.</p>
                </div>

                <h1 class="subtitle">Meu Perfil</h1>

                <div class="profile-manage">
                   
                    <div class="manage-content">
                        <h1 class="other-subtitle" >Nome de usuário:</h1>
                        <div class="flex">
                            <p class="grey-txt" id="username-text">Lucas Moreira</p>
                            <p id="username-edit" class="purple-text">Editar</p>
                        </div>
                    
                    </div>

                  

                    <div class="manage-content">
                        <div>
                            <p class="other-subtitle">Foto de perfil</p>
                            <p id="text" class="grey-txt">Personalize seu perfil com uma foto!</p>
                        </div>
                   
                        
                        <div class="flex">
                            <img class="account-img" id="photo" src="https://www.pellarin.com.br/wp-content/uploads/2022/08/artigoBannerMobile767x716_homem-com-papada-como-eliminar.jpg">
                            <div class="group">
                                <p class="delete-button">Deletar</p>
                                <label id="upload-btn" class="purple-text" for="file">Mudar foto</label>
                                <input  type="file" id="file">
                           
                            </div>
                          
                        </div>
                 
                    </div>

                    <div class="manage-content">
                        <p class="other-subtitle">Telefone:</p>
                        <div class="flex">
                            <p class="grey-txt" id="tel-text">+55 (11) 92323-2323</p>
                            <p class="purple-text" id="tel-edit">Editar</p>
                        </div>
                    
                    </div>

                    <div class="manage-content">
                        <p class="other-subtitle">Senha:</p>
                        <div class="flex">
                            <p class="grey-txt">********</p>
                            <div  class="group">
                              
                                <p id="pass-edit" class="purple-text">Editar</p>
                            </div>                     
                        </div>         
                    </div>
                </div>
            </div>

         

        </div>

            </div>

          

        
        

        

    </main>


    <div class="mobile-nav">
        <a href="../index.php" class="link-content">
            <img src="../imagens/homeIcon.png">
            <p>Início</p>
        </a>
    
        <div class="link-content">
            <img src="../imagens/thunderIcon.png">
            <p>Jogos</p>
        </div>
    
        <div class="link-content">
            <img src="../imagens/searchIcon.png">
            <p>Explorar</p>
        </div>
    
        <div class="link-content">
            <img src="../imagens/carrinho-removebg-preview.png">
            
            <p>Carrinho</p>
        </div>
    
    
    
    </div>

    
    <div class="popup-container">
        <div class="change-popup" id="pass-popup">
            <p class="close-button">X</p>
            <p class="title">Editar Senha</p> 
            <div class="inputs-container">
                
            <div class="input-bo">
                <input type="text" placeholder="Senha Atual">
                <img src="https://jonbet.com/static/media/eye.fdf3ae46.svg">
            </div>
    
            
            <div class="input-bo">
                <input type="text" placeholder="Nova Senha">
                <img src="https://jonbet.com/static/media/eye.fdf3ae46.svg">
            </div>
    
            <div class="input-bo">
                <input type="text" placeholder="Repita a Nova Senha">
                <img src="https://jonbet.com/static/media/eye.fdf3ae46.svg">
            </div>
    
            <button class="button">Salvar</button>
    
    
        </div>
    
        </div>
    
        <div class="change-popup" id="username-popup">
            <p class="close-button">X</p>
            <p class="title">Como você quer que agente te chame? </p>
             <p class="other-subtitle">Todas as pessoas que interagirem com você no Golbet verão o nome que você escolher.</p>
             <p class="other-subtitle">Somente usaremos o nome que consta em seu documento de identidade se for necessário por motivos legais.</p>
    
            <div class="inputs-container">
                
            <div class="input-bo">
                <input type="text" id="user-input" placeholder="Digite seu novo nome">
            </div>
    
         
        
    
    
        </div>


            <button class="button" id="username-enviar">Salvar</button>
  

       
    
        </div>

        <div class="change-popup" id="tel-popup">
            <p class="close-button">X</p>
            <p class="title">Editar número de telefone</p>
    
            <div class="inputs-container">
                
            <div class="input-bo">
                <input type="text" id="tel-input" placeholder="Digite seu número junto com o código DDD">
            </div>

            
    
            
         
    
    
        </div>
        
        <button class="button" id="tel-enviar">Salvar</button>
    
        </div>
    </div>



   

    <script src="./javascriptFolder/passwordPopup.js"></script>
    <script src="./javascriptFolder/usernamePopup.js"></script>
    <script src="./javascriptFolder/telPopup.js"></script>
    <script src="./javascriptFolder/importPhoto.js"></script>
    <script src="./javascriptFolder/lateralMenu.js"></script>
 
</body>
</html>