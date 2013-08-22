<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	
		echo $this->Html->meta('icon');
		echo $this->Html->script('Jquery');
		echo $this->Html->script('function');
		echo $this->Html->css('cake.generic');
		
	//echo $this->Html->css('Jmobile');
		
		//echo $this->Html->script('Jmobile');
		
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">

<?php echo 	$this->Html->image('cabecalho_logo.jpg', array('alt' => $cakeDescription, 'border' => '0'));	?>
		</div>
		<div id="menu">
		<div id="mfcadastral"><a href="/sites/chamadaOnline/Fcadastrals">Ficha Cadastral</a></div>
		<div id="mcescola"><a href="/sites/chamadaOnline/Cescolas">Cadastro de Escola</a></div>
		<div id="mcoficina"><a href="/sites/chamadaOnline/Coficinas">Cadastro de Oficina</a></div>
		<div id="mcaluno"><a href="/sites/chamadaOnline/Calunos">Ficha de Inscrição</a>	</div>
		<div id="mmarcozero"><a href="/sites/chamadaOnline/MarcoZeros">Avaliação Marco Zero</a></div>
		<div id="mrfacilitador"><a href="/sites/chamadaOnline/Roficineiros">Relatório do Facilitador</a></div>
		<div id="mcfacilitadores"><a href="/sites/chamadaOnline/Cfacilitadors">Cadastro de Facilitadores</a></div>
		<div id="mavaliacaoofc"><a href="/sites/chamadaOnline/Aoficinas">Relatório Criança/Jovem</a></div>
		<div id="mchamada"><a href="/sites/chamadaOnline/Chamadas">Chamada</a></div>
		
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		
		</div>
	</div>
	<?php echo $this->element('sql_dump');
			echo $_SESSION['role'];
 		if ($_SESSION['role'] == 'cf'){
 			//echo '<script></script>';
				echo '<script>$("#mcescola").css("display","none");</script>';
				echo '<script>$("#mofcina").css("display","none");</script>';
				echo '<script>$("#mcaluno").css("display","none");</script>';
				echo '<script>$("#mchamada").css("display","none");</script>';
			
 		}elseif($_SESSION['role'] == 'prof'){
 			echo '<script>$("#mcescola").css("display","none");</script>';
				echo '<script>$("#moficina").css("display","none");</script>';
				echo '<script>$("#mfcadastral").css("display","none");</script>';
				echo '<script>$("#mcaluno").css("display","none");</script>';
				echo '<script>$("#mavaliacaoofc").css("display","none");</script>';
				echo '<script>$("#mmarcozero").css("display","none");</script>';
				echo '<script>$("#mcfacilitadores").css("display","none");</script>';
 			
 		}elseif($_SESSION['role'] == NULL){
			 echo '<script>$("#menu").css("display","none");</script>';			
 		}
		
	 ?>
	
</body>
</html>
