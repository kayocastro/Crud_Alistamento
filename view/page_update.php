<?php 

	include_once '../model/class/Conn.class.php';
	include_once '../model/class/Manager.class.php';

	$manager = new Manager();

	$id = $_POST['id'];
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> | Exercito - Brasileiro</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font_awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<style type="text/css">
		h2{	
		font-family: 'Ubuntu';
	}
		span{	
		font-family: 'Ubuntu';
		font-weight: bold;
	}
		a:link{
			text-decoration: none;
		}
</style>
<body>
<div class="container" style="margin-top: 20px;">

		<h2 style="color:#000000;">
			<i class="fa fa-pencil"></i>
			 	Editar Dados Do Militar 
			 <i class=""></i>
		</h2><hr>

		<form action="../controller/update_recruit.php" method="POST">
		<div class="form-row">

			<?php foreach($manager->infoRecruit("registros", $id) as $recruit_info): ?>

			<div class="col-md-6">
				<i class="fa fa-user-o"></i> <span> Nome </span>
				<input class="form-control" type="text" name="name" value="<?=$recruit_info['name']?>" required autofocus><br>
			</div>


			<div class="col-md-6">
				<i class="fa fa-envelope-o"></i> <span> E-mail </span>
				<input class="form-control" type="email" name="email" value="<?=$recruit_info['email']?>" required><br>
			</div>

			<div class="col-md-4">
				<i class="fa fa-envelope-o"></i> <span> CPF </span>
				<input class="form-control" type="text" name="cpf" id="cpf" value="<?=$recruit_info['cpf']?>" required><br>
			</div>

			<div class="col-md-4">
				<i class="fa fa-calendar"></i> <span> Dt. De Nascimento </span>
				<input class="form-control" type="date" name="birth" value="<?=$recruit_info['birth']?>" required><br>
			</div>

			<div class="col-md-4">
				<i class="fa fa-mobile"></i> <span> Telefone </span>
				<input class="form-control" type="text" name="phone" id="tell" value="<?=$recruit_info['phone']?>" required><br>
			</div>

			<div class="col-md-12">
				<i class="fa fa-street-view"></i> <span> Endereço </span>
				<input class="form-control" type="text" name="address" value="<?=$recruit_info['address']?>" required><br>
			</div>

			<div class="col-md-4">

				<input type="hidden" name="id" value="<?=$recruit_info['id']?>">

				<?php endforeach; ?>

				<button class="btn btn-warning btn-lg">
					<i class="fa fa-cloud-download"></i> <span>Atualizar</span>
				</button><br><br>

				<a href="../index.php"><span> Voltar </span></a>

			</div>
			
		</div>
</div>
</form>
<script type="text/javascript" src="jQuery-Mask/src/jquery.min.js"></script>
<script type="text/javascript" src="jQuery-Mask/dist/jquery.mask.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("cpf").mask("000.000.000-000");
		$("tell").mask("(00) 0000-000");
	});
</script>
</body>
</html>