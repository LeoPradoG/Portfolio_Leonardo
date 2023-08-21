<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icones/icon_programing.png" type="image/x-icon"/>
    <title>Portfolio</title>

    <!--incluindo styles-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--incluindo Font Awesome -->
    <script src="https://kit.fontawesome.com/302b2cb8e2.js" crossorigin="anonymous"></script>

    <!--incluindo jquery -->
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>

    <!--incluindo javascript bootstrap-->  
    <script src="bootstrap/js/bootstrap.min.js"></script> 


</head>
<body class="body">

    <?php

        include 'navbar/navbar.php';

    ?>


    <div class="espaco"></div>

    <div class="container">

        <div class="espaco"></div>

        <div style="display: flex; justify-content: right; color: white; font-size: 25px; gap: 10px;">
            <i onclick="direcionar_usuario_redes(1)" style="cursor: pointer;" class="fa-brands fa-whatsapp"></i>
            <i onclick="direcionar_usuario_redes(2)" style="cursor: pointer;" class="fa-brands fa-github"></i>
            <i onclick="direcionar_usuario_redes(3)" style="cursor: pointer;" class="fa-brands fa-linkedin"></i>
            <i onclick="direcionar_usuario_redes(4)" style="cursor: pointer;" class="fa-brands fa-instagram"></i>

        </div>


        <div class="espaco"></div>

        <div class="centralizar">

            <div class="foto"></div>


        </div>

        <div class="espaco"></div>

        <div class="centralizar" style="font-size: 20px; color: white;"><b>Olá, Meu nome é Leonardo e eu sou Programador!</b></div>
        <div class="espaco_pequeno"></div>
        <div class="centralizar" style="font-size: 15px; color: white; text-align: center;">Explore o meu diversificado portfólio de projetos, onde eu aplico minha paixão pela tecnologia no contexto único de um ambiente hospitalar. Com uma abordagem voltada para a inovação, colaboração e impacto positivo na área da saúde, cada projeto é uma jornada rumo à excelência.</div>

        <div class="espaco"></div>

        <div style="font-size: 20px; color: white;" class="centralizar">

           Projetos:

        </div>

        <div class="espaco"></div>

        <div class="row justify-content-center" style="padding-left: 50px;"> 
            
            <div class="col-md-3 mb-4" style="color: white;">
                <div class="foto1"></div>
                Portal Relatórios
                
            </div>

            <div class="col-md-3 mb-4" style="color: white;">
                <div class="foto1"></div>
                Nucleo de Infomações
            </div>

            <div class="col-md-3 mb-4" style="color: white;">
                <div class="foto1"></div>
                Check Car
            </div>

            <div class="col-md-3 mb-4" style="color: white;">
                <div class="foto1"></div>
                Portal Sesmet
            </div>

            <div class="col-md-3 mb-4" style="color: white;">
                <div class="foto1"></div>
                Registro Acomodação
            </div>

            <div class="col-md-3 mb-4" style="color: white;">
                <div class="foto1"></div>
                Portal Treinamento
            </div>

            <div class="col-md-3 mb-4" style="color: white;">
                <div class="foto1"></div>
                Passagem Plantão
            </div>

            <div class="col-md-3 mb-4" style="color: white;">
                <div class="foto1"></div>
                Portal Projetos
            </div>
            
        </div>







 


        <div class="espaco"></div>
        <div class="espaco"></div>

    </div>


    <!--SCRIPTS DA PAGINA-->
    <script defer>

        function direcionar_usuario_redes(tp_rede){

            if(tp_rede == 1){

                window.open('https://wa.me/5511964116459?text=Ol%C3%A1,%20Vi%20seu%20portfolio%20e%20gostaria%20de%20uma%20conversa%20com%20voc%C3%AA!', '_blank');

            }else if(tp_rede == 2){

                window.open('https://github.com/LeoPradoG', '_blank');


            }else if(tp_rede == 3){

                window.open('https://www.linkedin.com/in/leonardo-prado-gomes-53737723b/', '_blank');

            }else{

                window.open('https://instagram.com/leo_pradog?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D', '_blank');


            }


        }


    </script>



    <!--COMPONENTES DO BOOTSTRAP-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>

<script>



</script>


</html>