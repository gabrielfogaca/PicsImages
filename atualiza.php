<?php
include('conecta.php');

$id			= $_POST['id'];
$nome		= $_POST['nome'];
$email		= $_POST['email'];
$menssagem	= $_POST['menssagem'];

$sql = "UPDATE pessoas SET nome=?, email=?, menssagem=?";


if ($stmt = mysqli_prepare($id_conexao, $sql)) {

	/* bind parametros for markers */
	mysqli_stmt_bind_param($stmt, 'sss', $nome, $email, $menssagem);


	/* executa query */
	if(mysqli_stmt_execute($stmt)){
		echo "Operação realizada com sucesso<br/>";
	}
	else{
		echo "Ocorreu um erro na operação<br/>";
		// mostra o erro do banco
		echo mysqli_error($id_conexao);
	}


	/* close statement */
	mysqli_stmt_close($stmt);
}
else {
	echo mysqli_error($id_conexao);
}
echo "<a href='contact.php'>Voltar</a>";


?>
