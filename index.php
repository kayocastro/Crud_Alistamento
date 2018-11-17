<?php 

	include_once 'model/class/Conn.class.php';
	include_once 'model/class/Manager.class.php';

	$manager = new Manager();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> | Exercito - Brasileiro</title>
	<link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/font_awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="shortcut icon" href="view/images/favicon.ico" type="image/x-icon">
</head>
<style type="text/css">
		h2{	
		font-family: 'Ubuntu';
	}
		a:link{
		text-decoration: none;
		font-family: 'Ubuntu';
	}
		thead{
		background-color: #2d2d2d !important;
		font-family: 'Ubuntu';
	}
		th{
		color: #ffffff;
		font-family: 'Ubuntu';
	}
</style>
<body>
	<div class="container" style="margin-top: 20px;">
		<h2 class="text-center" style="color:#000000;"><i class="fa fa-shield"></i> Alistamento Militar <i class="fa fa-shield"></i></h2>
		
		<a href="view/page_register.php">
			<h5 class="text-right"><button class="btn btn-dark" ><i class="fa fa-user-plus" style="color:#ffffff;"></i></button>
			</h5>
		</a>

		<div class="table-responsive">
			<table class="table table-hover table-striped">
				<thead class="thead">
					<tr>
						<!--<th>ID</th>-->
						<th>Nome</th>
						<th>E-mail</th>
						<th>CPF</th>
						<th>Dt. Nascimento</th>
						<th>Endereço</th>
						<th>Telefone</th>
						<th colspan="3">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($manager->listRecruit("registros") as $recruit): ?>
					<tr>
						<!--<td><?php echo $recruit['id']; ?></td>-->
						<td><?php echo $recruit['name']; ?></td>
						<td><?php echo $recruit['email']; ?></td>
						<td><?php echo $recruit['cpf']; ?></td>
						<td><?php echo date("d/m/Y", strtotime($recruit['birth'])); ?></td>
						<td><?php echo $recruit['address']; ?></td>
						<td><?php echo $recruit['phone']; ?></td>
						<td>
							<form action="controller/delete_recruit.php" onclick="return confirm('Você Tem Certeza Que Deseja Fazer Isso');" method="POST">
								<button class="btn btn-md btn-danger btn-block">

									<input type="hidden" name="id" value="<?=$recruit['id'];?>">

									<i class="fa fa-trash-o" style="color: #ffffff;"></i>
								</button>
							</form>
						</td>
						<td>
							<form action="view/page_update.php" method="POST">

									<input type="hidden" name="id" value="<?=$recruit['id'];?>">

								<button class="btn btn-md btn-warning btn-block">
									<i class="fa fa-edit" style="color: #ffffff;"></i>
								</button>
							</form>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</div>
		</div>
</body>
</html>