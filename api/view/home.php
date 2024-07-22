<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Plenus</title>

    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <style>
        #general-content {
            max-width: 1920px;
            padding-right: 0px;
            padding-left: 0px;
            margin-right: auto;
            margin-left: auto;
        }

        #img-fundo-top {
            display: flex;
            flex-direction: row;
            background-size: cover;
            height: 1200px;
            background-image: url(../img/fundo-top-home.png);
            background-repeat: no-repeat;
            background-position: center center;
            color: #fff;
        }

        #card {
            height: 420px;
            background-color: #303058;
            border-radius: 0px;
            border-color: #303058;
            font-size: 16px;
            color: black;
            -webkit-box-shadow: 5px 5px 7px 3px rgba(0, 0, 0, 0.35);
            box-shadow: 10px 10px 7px 3px rgba(0, 0, 0, 0.35);
        }

        #card p {
            font-size: 24px;
            margin-top: 30px;
            margin-left: 15px;
            margin-right: 15px;
            text-align: justify;
            color: white;
            max-height: 200px;
            overflow: auto;
        }

        #card h5 {
            margin-top: 30px;
            font-size: 36px;
            color: white;
            text-align: center;
        }

        #bottom-content {
            flex: 1;
            align-self: flex-end;
        }

        .btn-custom-card {
            background-color: white !important;
            border-color: white !important;
            color: rgba(50, 40, 91, 1) !important;
            font-weight: bold !important;
        }

        .btn-icon-card {
            padding: 10px 10px 10px 2px;
            border-radius: 4px 0 0 5px;
            background-color: #551CAD;
            margin-left: -13px;
        }

        .fa-plus {
            color: white !important;
            margin-left: 10px;
            font-size: 18px !important;
        }

        #img-fundo-center {
            background-size: cover;
            height: 850px;
            background-image: url(../img/fundo-center-home.png);
            background-repeat: no-repeat;
            background-position: center center;
            color: #fff;
        }

        #titulo-fundo-center {
            font-size: 30px;
            margin-top: 70px;
        }

        #center-content {
            max-width: 1920px;
            padding-right: 0px;
            padding-left: 0px;
            margin-right: auto;
            margin-left: auto;
        }

        #titulo-fundo-center {
            margin-bottom: 40px;
            margin-top: 60px;
        }

        form {
            margin: 0px !important;
            padding: 0px !important;
        }

        .search-container {
            display: flex;
            align-items: center;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .search-container input[type=text] {
            flex: 1;
            height: 70px;
            border: none;
            padding: 10px;
            font-size: 16px;
        }

        .search-container .search-button {
            height: 40px;
            width: 95px;
            background-color: #551CAD;
            border: none;
            border-radius: 10px 10px 10px 10px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            outline: none;
            margin-right: 25px;
            font-weight: bold;
        }

        .input-group-text {
            font-size: 16px !important;
            border-radius: 0px !important;
        }

        .container-img-fundo-center {
            display: flex;
            align-items: center;
            margin: 0px;
        }

        .container-img-fundo-center img {
            width: 380px;
            height: 500px;
            margin-top: 39px;
            object-fit: cover;
            clip-path: inset(0px 0px 15px 0px);
        }

        .container-content-cards {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            overflow: hidden;
            margin: 0 auto;
            max-width: 1200px;
            margin-top: -35px;
            margin-bottom: 95px;
        }

        .container-content-cards .card {
            width: 25%;
            transition: all 0.2s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 0px;
            flex-shrink: 1;
        }

        .container-content-cards .card-left {
            height: 375px;
            margin-bottom: 100px;
            background-color: #9678C3;
            border-color: #9678C3;
            box-shadow: 10px 10px 7px 3px rgba(0, 0, 0, 0.35);
        }

        .container-content-cards .card-center {
            height: 375px;
            background-color: #551CAD;
            border-color: #551CAD;
            margin-right: 30px;
            margin-left: 30px;
            margin-bottom: 30px;
            box-shadow: 10px 10px 7px 3px rgba(0, 0, 0, 0.35);
        }

        .container-content-cards .card-right {
            height: 375px;
            margin-bottom: 100px;
            background-color: #9678C3;
            border-color: #9678C3;
            box-shadow: 10px 10px 7px 3px rgba(0, 0, 0, 0.35);
        }

        .container-content-cards .card p {
            max-width: 250px;
            margin: auto;
            text-align: center;
            color: white;
            font-size: 26px;
        }

        .container-content-cards .card:hover {
            width: 26%;
            height: 378px;
        }

        .background-content-bottom {
            height: 100px;
            background-color: #291F38;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
        }

        .img-arrow-bottom {
            height: 150px;
            background-color: white;
            background-image: url(../img/click-here.png);
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            top: -25px;
        }

        .background-content-bottom p {
            margin: 0;
        }

        .img-right-corner {
            position: absolute;
            bottom: 10px;
            right: 10px;
            height: 50px;
            width: 50px;
            z-index: 1;
        }

        #content-bottom-bar {
            margin-bottom: 90px;
        }

        @media screen and (min-width: 768px) {
            #bottom-content {
                margin-bottom: 100px;
            }
        }

        @media screen and (min-width: 1400px) {
            #bottom-content {
                margin-bottom: 60px;
            }

            #img-fundo-top {
                margin-bottom: 50px;
            }
        }

        @media screen and (min-width: 1600px) {
            #bottom-content {
                margin-bottom: 120px;
            }

            #img-fundo-top {
                margin-bottom: 50px;
                height: 1400px;
            }
        }

        @media screen and (min-width: 1800px) {
            #bottom-content {
                margin-bottom: 90px;
            }

            #img-fundo-top {
                margin-bottom: 50px;
                height: 1400px;
            }
        }

        @media screen and (min-width: 2000px) {
            #bottom-content {
                margin-bottom: 80px;
            }

            #img-fundo-top {
                margin-bottom: 50px;
                height: 1400px;
            }
        }
    </style>

    <script src="assets/bootstrap/js/bootstrap.js"></script>
</head>
<body>

    <?php include '/api/view/menu.php'; ?>

    <div class="row" id="general-content">
        <div class="container-fluid" id="img-fundo-top">
            <div id="bottom-content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-1"></div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="card" id="card">
                            <div class="card-body">
                                <h5 class="card-title">PLENUS GESTÃO DE TALENTOS</h5>
                                <p class="card-text">Constituída em 17 de maio de 2020, com o propósito de
                                    prestar serviço diferenciado, tem como foco atender as empresas com agilidade,
                                    desenvolvendo e qualificando o mercado de trabalho, através da contratação de
                                    profissionais efetivos, treinamento e consultoria em Recursos Humanos.</p>
                                <div class="row">
                                    <div class="col-lg-9 col-md-1 col-sm-1"></div>
                                    <div class="col-lg-3 col-md-11 col-sm-11">
                                        <button type="submit" class="btn btn-custom-card">
                                            <span class="btn-icon-card"><i class="fa fa-plus"></i></span>
                                            Saiba mais
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2"></div>
            </div>
        </div>

        <form>
            <div class="container-fluid" id="img-fundo-center">
                <div class="row" id="center-content">
                    <div class="col-lg-12">
                        <h1 id="titulo-fundo-center">Encontre sua vaga de emprego</h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="search-container">
                            <input type="text" placeholder="Digite um cargo do seu interesse">
                            <button type="submit" class="search-button"><i class="fa fa-search"> Buscar</i></button>
                        </div>
                    </div>
                    <div class="container-img-fundo-center">
                        <img src="assets/img/fundo-1.png" alt="Image">
                    </div>
                </div>
            </div>
        </form>

        <div class="container-content-card-full">
            <div class="container-content-cards">
                <div class="card card-left">
                    <p>Vagas de emprego para todos os perfis</p>
                </div>
                <div class="card card-center">
                    <p>Grandes empresas estão aqui na Plenus</p>
                </div>
                <div class="card card-right">
                    <p>Oportunidades para sua carreira</p>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="content-bottom-bar">
            <div class="row">
                <div class="col-2 img-arrow-bottom"></div>
                <div class="col-10 background-content-bottom">
                    <p>Clique aqui e cadastre seu currículo</p>
                </div>
            </div>
        </div>
    </div>

    <?php include '/view/footer.php'; ?>

    <script>
        window.onload = function() {
            var element = document.getElementById("card");
            element.scrollIntoView({ behavior: 'smooth', block: 'center', inline: 'nearest'});
        };
    </script>
</body>
</html>
