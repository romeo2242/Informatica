<?php
	if(isset($_REQUEST["id"])){
		$id = $_REQUEST["id"];
	}
    if(isset($_REQUEST["marcaTastiera"])){
		$marcaTastiera = $_REQUEST["marcaTastiera"];
	}
	if(isset($_REQUEST["marcaVideo"])){
		$marcaVideo = $_REQUEST["marcaVideo"];
	}
	if(isset($_REQUEST["marcaCase"])){
		$marcaCase = $_REQUEST["marcaCase"];
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
							<input type="text" id="id" name="id" class="form-control" placeholder="Id" />
						</div>
						<div class="form-group input-group">
							<input type="text" id="marcaTastiera" name="marcaTastiera" class="form-control" placeholder="MarcaTastiera" />
						</div>
						<div class="form-group input-group">
							<input type="text" id="marcaVideo" name="marcaVideo" class="form-control" placeholder="MarcaVideo" />
						</div>
						<div class="form-group input-group">
							<input type="text" id="marcaCase" name="marcaCase" class="form-control" placeholder="MarcaCase" />
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
        $string = file_get_contents("./json/computer.json");
        $json_a=json_decode($string,true);
		?>

<table border="1" cellpadding="10">
    <thead><tr><th>Id</th> <th>marcaTastiera</th><th>marcaVideo</th><th>marcaTastiera</th></tr></thead>
    <tbody>

	<tr>
		<td><?php 
				if(isset($id)){
					if($value[0]==$id){
						echo $value[0];
					}
				}else{
					echo $value[0];
				} 
		 ?></td>
		<td><?php 
				if(isset($marcaTastiera)){
					if($value[1]==$marcaTastiera){
						echo $value[1];
					}
				}else{
					echo $value[1];
				}
		 ?></td>
		 <td><?php 
				if(isset($marcaVideo)){
					if($value[2]==$marcaVideo){
						echo $value[2];
					}
				}else{
					echo $value[2];
				}
		 ?></td>
		 <td><?php 
				if(isset($marcaCase)){
					if($value[3]==$marcaCase){
						echo $value[3];
					}
				}else{
					echo $value[3];
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