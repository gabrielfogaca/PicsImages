<h1>Menssagem Cadastrada</h1>
<hr>
<?php

include('conecta.php');

$sql = "SELECT * FROM pessoas";
$query = mysqli_query($id_conexao, $sql);

if(mysqli_num_rows($query) > 0){
	while($row = mysqli_fetch_array($query)){
		echo $row['nome'];
		echo " - <a href='edita.php?id=$row[id]'>Editar</a> |";
		echo " <a href='deleta.php?id=$row[id]'>Deletar</a><br/>";
	}
}
else{
	echo "<p>Nenhuma menssagem enviada</p>";
}
?>
<hr>