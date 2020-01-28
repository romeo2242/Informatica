<?php
	if(isset($_REQUEST["cognome"])){
		$cognome = $_REQUEST["cognome"];
	}
    if(isset($_REQUEST["nome"])){

		$nome = $_REQUEST["nome"];
	}
?>

<!doctype html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Gjokaj">
		<meta name="description" content="Tabella">
		<title>Tabella</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<script href="vendor/bootstrap/js/bootstrap.js"></script>
		<script type="application/javascript" src="js/script.js"></script>
		<script type="application/javascript" src="vendor/jquery/jquery-3.4.1.js"></script>			
	</head>

	<body>
		<div class="container-fluid">
			<div class="row" style="margin-top: 20px">
				<div class="col-sm-4">						
				</div>
				<div class="col-sm-4">
					<form method="GET" action="filtro.php"> 
						<div class="form-group input-group">
							<input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" />
						</div>
						<div class="form-group input-group">
							<input type="text" id="cognome" name="cognome" class="form-control" placeholder="Cognome" />
						</div>
						<div class="form-group input-group">
							<input type="text" id="id" name="id" class="form-control" placeholder="Id" />
						</div>
						<div class="form-group input-group">
							<input type="text" id="tempo" name="tempo" class="form-control" placeholder="Tempo" />
						</div>
						<div class="form-group input-group">
							<input type="text" id="costo" name="costo" class="form-control" placeholder="Costo" />
						</div>
						<div class="form-group">
							<input type="submit" value="Filtra" class="btn btn-secondary form-control"/> 
						</div>

					</form>
				</div>
				<div class="col-sm-4">						
				</div>
			</div>
		</div>
	</body>
</html>

<div class="container-fluid">
				<div class="row" style="margin-top: 20px">
					<div class="col-sm-5">						
					</div>
<?php
        $string = file_get_contents("./json/ombrelloni.json");
        $json_a=json_decode($string,true);
		?>

<table border="1" cellpadding="10">
    <thead><tr><th>Nome</th> <th>Cognome</th><th>Id</th><th>Tempo</th><th>Costo</th></tr></thead>
    <tbody>

	<tr>
		<td><?php 
				if(isset($nome)){
					if($value[0]==$nome){
						echo $value[0];
					}
				}else{
					echo $value[0];
				} 
		 ?></td>
		<td><?php 
				if(isset($cognome)){
					if($value[1]==$cognome){
						echo $value[1];
					}
				}else{
					echo $value[1];
				}
		 ?></td>
		 <td><?php 
				if(isset($id)){
					if($value[2]==$id){
						echo $value[2];
					}
				}else{
					echo $value[2];
				}
		 ?></td>
		 <td><?php 
				if(isset($tempo)){
					if($value[3]==$tempo){
						echo $value[3];
					}
				}else{
					echo $value[3];
				}
		 ?></td>
		 <td><?php 
				if(isset($costo)){
					if($value[4]==$costo){
						echo $value[4];
					}
				}else{
					echo $value[4];
				}
		 ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</div>
	<div class="col-sm-4">						
	</div>
</div>