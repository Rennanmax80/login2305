<?php
    session_start();
    if(!empty($_SESSION['usuarioId'])){
		echo "Bem vindo: ". $_SESSION['usuarioNome']. "<br>";
		echo "<a href='sair.php'>Sair</a>";
	}else{
		$_SESSION['logindeslogado'] = "Área restrita! <br> Logue com seu usuário.";
		header("Location: index.php");
	}
		
?>