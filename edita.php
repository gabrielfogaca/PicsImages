<?php


$erro = false;

if(!$_GET['id']){
	$erro = "Registro não informado";
	
}	
else{
	$id = $_GET['id'];

	include('conecta.php');

	$sql = "SELECT nome, email, menssagem FROM pessoas WHERE id=$id";
	

	$resultado = mysqli_query($id_conexao, $sql);
	$row = mysqli_fetch_row($resultado);

	
	if(mysqli_num_rows($resultado) == 1){
		echo $row['nome'];
		$nome  = $row[0];
		$email = $row[1];
		$menssagem  = $row[2];
		$arq   = "atualiza.php";
		include('contact.php');
		mysqli_free_result($resultado);
	}
	else{
		$erro = "Registro não encontrado";
	}
}


if($erro){
	echo $erro;
	echo "<br/><a href='contact.php'>Voltar</a>";
}


?>
