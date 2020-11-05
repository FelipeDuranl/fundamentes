<?php
	session_start();
	require('conecta.php');

	$email = !empty($_REQUEST['email'])?$_REQUEST['email']:'';
	$senha = !empty($_REQUEST['senha'])?$_REQUEST['senha']:'';
	$nivel = !empty($_REQUEST['nivel'])?$_REQUEST['nivel']:'';

	$_SESSION['teste'] = $nivel;


/*==================================================*/
	if($nivel==3){
		if($email&&$senha){
			
			$consulta = "SELECT * FROM aluno WHERE email = '$email' AND senha = '$senha'";
			$resultado = $conexao->query($consulta);
			$registros = $resultado->num_rows;
			$resultado_usuario = mysqli_fetch_assoc($resultado);
			

			if($registros<>0){
				echo "VALIDADO COM SUCESSO!";
				$_SESSION['codigo_aluno'] = $resultado_usuario['codaluno'];
				$_SESSION['nome_aluno'] = $resultado_usuario['nomealuno'];
				$_SESSION['email'] = $resultado_usuario['email'];
					
				header('Location: conteudo.html');	
			}
			else{
				//echo "ERRO NO LOGIN!";
				header('Location: login.html');
			}
		}
		else{
				//echo "ERRO: CAMPOS VAZIOS!";
				header('Location: login.html');
			}
		}
	
	else{
/*==================================================*/
		if($nivel==2){
		if($email&&$senha){
			
			$consulta = "SELECT * FROM professor WHERE email = '$email' AND senha = '$senha'";
			$resultado = $conexao->query($consulta);
			$registros = $resultado->num_rows;
			$resultado_usuario = mysqli_fetch_assoc($resultado);
			

			if($registros<>0){
				echo "VALIDADO COM SUCESSO!";
				$_SESSION['codigo_professor'] = $resultado_usuario['codpro'];
				$_SESSION['nome'] = $resultado_usuario['nomepro'];
				$_SESSION['email'] = $resultado_usuario['email'];

						header('Location: prof.php');
			}
			else{
				//echo "ERRO NO LOGIN!";
				header('Location: login.html');
			}
		}
		else{
				//echo "ERRO: CAMPOS VAZIOS!";
				header('Location: login.html');
			}
	}


	if($nivel==1){
		if($email&&$senha){
			
			$consulta = "SELECT * FROM administrador WHERE email = '$email' AND senha = '$senha'";
			$resultado = $conexao->query($consulta);
			$registros = $resultado->num_rows;
			$resultado_usuario = mysqli_fetch_assoc($resultado);
			

			if($registros<>0){
				echo "VALIDADO COM SUCESSO!";
				$_SESSION['codigo_adm'] = $resultado_usuario['codadm'];
				$_SESSION['nome'] = $resultado_usuario['nomeadm'];
				$_SESSION['email'] = $resultado_usuario['email'];
					
					
						header('Location: adm.php');	
			}
			else{
				//echo "ERRO NO LOGIN!";
				header('Location: login.html');
			}
		}
		else{
				//echo "ERRO: CAMPOS VAZIOS!";
				header('Location: login.html');
			}
}
}



?>