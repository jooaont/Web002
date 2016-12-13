<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="Favicon_.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SmartArqui - Automação</title>
	
    
    <?php

	

		if (isset($_POST['INT1ON'])){
			//exec("sudo python ////abregaragem.py");
			echo "Garagem Aberta "; 
		} 
		if (isset($_POST['INT1OFF'])) {
			//exec("sudo python ////fechagaragem.py");
			echo " Garagem Fechada "; 

		} if (isset($_POST['INT2ON'])){
	  //exec("sudo python ////ligasalajantar.py");
        echo " Sala de Jantar ligada "; 
		
		} if (isset($_POST['INT2OFF'])) {
	  //exec("sudo python ////desligasalajantar.py");
        echo " Sala de Jantar desligada"; 

		} if (isset($_POST['INT3ON'])){
	  //exec("sudo python ////ligagaragem.py");
        echo " Garagem ligada "; 
		
		} if (isset($_POST['INT3OFF'])) {
	  //exec("sudo python ////desligagaragem.py");
        echo " Garagem desligada "; 

		} if (isset($_POST['INT4ON'])){
	  //exec("sudo python ////ligaquarto.py");
        echo " Quarto ligado "; 
		
		} if (isset($_POST['INT4OFF'])) {
	  //exec("sudo python ////desligaquarto.py");
        echo " Quarto desligado "; 

		} if (isset($_POST['INT5ON'])){
	  //exec("sudo python ////ligaterraço.py");
        echo " Terraço Ligado "; 
		
		} if (isset($_POST['INT5OFF'])) {
	  //exec("sudo python ////desligaterraço.py");
        echo " Terraço desligado "; 

		} if (isset($_POST['INT6ON'])){
	  //exec("sudo python ////abrejanela.py");
        echo " Janela aberta "; 
		
		} if (isset($_POST['INT6OFF'])) {
	  //exec("sudo python ////fechajanela.py");
        echo " Janela fechada "; 

		}if (isset($_POST['INT7ON'])){
	  //exec("sudo python ////ligasaladeestar.py");
        echo " Sala de Estar ligada "; 
		
		} if (isset($_POST['INT7OFF'])) {
	  //exec("sudo python ////desligasaladeestar.py");
        echo " Sala de Estar desligada "; 

		} if (isset($_POST['INT8ON'])){
	  //exec("sudo python ////ligacozinha.py");
        echo " Cozinha ligada "; 
		
		} if (isset($_POST['INT8OFF'])) {
	  //exec("sudo python ////desligacozinha.py");
        echo " Cozinha desligada "; 

		} if (isset($_POST['EXT1ON'])){
	  //exec("sudo python ////ligaareadelazer.py");
        echo " Área de Lazer Ligada "; 
		
		} if (isset($_POST['EXT1OFF'])) {
	  //exec("sudo python ////desligaareadelazer.py");
        echo " Área de Lazer Desligada "; 

		} if (isset($_POST['EXT2ON'])){
	  //exec("sudo python ////ligapiscina.py");
        echo " Piscina Ligada "; 
		
		} if (isset($_POST['EXT2OFF'])) {
	  //exec("sudo python ////desligapiscina.py");
        echo " Piscina Desligada "; 

		} if (isset($_POST['EXT3ON'])){
	  //exec("sudo python ////ligatomada.py");
        echo " Tomada Ligada "; 
		
		} if (isset($_POST['EXT3OFF'])) {
	  //exec("sudo python ////desligatomada.py");
        echo " Tomada Ligada "; 

		} if (isset($_POST['EXT4ON'])){
	  //exec("sudo python ////abreportao.py");
        echo " Abre Portão "; 
		
		} if (isset($_POST['EXT4OFF'])) {
	  //exec("sudo python ////fechaportao.py");
        echo " Fecha Portão "; 

		}
			
    ?>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- application Core CSS -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <script src="https://use.fontawesome.com/d1a2bd6b35.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
				img { 
					width:100%; 
				}
			</style>
</head>
<div class="looogo"><div style="padding: 5px;"><img src="loogo.png" height="45%" width="100%"></div></div>
<body>

    <div class="container-fluid">
    <!-- Page Content -->
        <header class="header">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Controle Sistema de Automação</h1></center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </header>
        <!-- /.row -->
        <main >
            <form method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center><b> Ambiente Interno </b></center>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Garagem (Portão)</td>
                                            <td>
                                                <button  class="btn btn-success" name="INT1ON">
                                                    Abre
                                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button  class="btn btn-danger" name="INT1OFF">
                                                    Fecha
                                                  <!--   <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                            <!--<td><span class="label label-success">Ativo</span></td> -->
											<td>Sala de jantar (Luz)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="INT2ON">
                                                    Liga
                                               <!--      <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="INT2OFF">
                                                    Desliga
                                                <!--     <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                            <!--<td><span class="label label-success">Ativo</span></td> -->
                                        </tr>
                                        <tr>
                                            <td>Garagem (Luz)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="INT3ON">
                                                    Liga
                                                  <!--   <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="INT3OFF">
                                                    Desliga
                                                  <!--   <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                            <!--<td><span class="label label-success">Ativo</span></td>-->
											<td>Quarto (Luz)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="INT4ON">
                                                    Liga
                                               <!--      <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="INT4OFF">
                                                    Desliga
                                                <!--     <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                           <!-- <td><span class="label label-success">Ativo</span></td> -->
                                        </tr>
                                        <tr>
                                            <td>Terraço (Luz)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="INT5ON">
                                                    Liga
                                                   <!--  <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="INT5OFF">
                                                    Desliga
                                                   <!-- <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                           <!-- <td><span class="label label-success">Ativo</span></td> -->
										   
										   <td>Quarto (Janela)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="INT6ON">
                                                    Abre
                                               <!--      <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="INT6OFF">
                                                    Fecha
                                                <!--     <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                           <!-- <td><span class="label label-success">Ativo</span></td> -->
                                        </tr>
                                        <tr>
                                            <td>Sala de estar (Luz)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="INT7ON">
                                                    Liga
                                                  <!--   <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="INT7OFF">
                                                    Desliga
                                                 <!--    <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                           <!-- <td><span class="label label-success">Ativo</span></td> -->
										   <td>Cozinha (Luz)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="INT8ON">
                                                    Liga
                                               <!--      <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="INT8OFF">
                                                    Desliga
                                                <!--     <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                           <!-- <td><span class="label label-success">Ativo</span></td> -->
                                        </tr>
								
                                    </tbody>
                                </table>
                            </div>   
						   <!-- /.panel-body -->
						   
                        </div>
                        <!-- /.panel -->
						
						</Div>
						<!-- EXTERNO -->
						
						<div class="col-lg-6">
						 <div class="panel panel-default">
                            <div class="panel-heading">
                                 <center><b>Ambiente Externo</b></center>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Área de lazer (Luz)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="EXT1ON">
                                                    Liga
                                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="EXT1OFF">
                                                    Desliga
                                                  <!--   <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                            <!--<td><span class="label label-success">Ativo</span></td> -->
                                        </tr>
                                        <tr>
                                            <td>Piscina (Golfinho)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="EXT2ON">
                                                    Liga
                                                  <!--   <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="EXT2OFF">
                                                    Desliga
                                                  <!--   <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                            <!--<td><span class="label label-success">Ativo</span></td>-->
                                        </tr>
                                        <tr>
                                            <td>Portão Externo</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="EXT3ON">
                                                    Abre
                                                   <!--  <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="EXT3OFF">
                                                    Fecha
                                                   <!-- <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                           <!-- <td><span class="label label-success">Ativo</span></td> -->
                                        </tr>
                                        <tr>
                                            <td>Tomada (220v)</td>
                                            <td>
                                                <button type="submit"  class="btn btn-success" name="EXT4ON">
                                                    Liga
                                                  <!--   <i class="fa fa-star" aria-hidden="true"></i> -->
                                                </button>
                                                <button type="submit"  class="btn btn-danger" name="EXT4OFF">
                                                    Desliga
                                                 <!--    <i class="fa fa-star-half-o" aria-hidden="true"></i> -->
                                                </button>
                                            </td>
                                           <!-- <td><span class="label label-success">Ativo</span></td> -->
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>   
						   <!-- /.panel-body -->
                        </div>
                       
					   
					   
					   
					   
					   <!-- APAGAR -->
					   
                 
                </div>
                <!-- /.row -->
            </form>
        </main>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
