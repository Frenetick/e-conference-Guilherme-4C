<body>

<div id="container_guiga">
	<h1 class="h1_guiga">
		Olá, <?php 
				echo $usuario->getNome; 
//				echo $this->session->userdata('usuario'); 
			 ?> 
	</h1>

	<div id="body_guiga">
		<h1>PLACA</h1>
		<?php
			echo form_open('veiculo/entradaDePlaca');
			
			$inputPlaca = array(
								'nome'=>'placa',
								'id'=>'placa',
								'maxlength'=>'8',
								'style'=>'width:40%;font-size:100px');
			
			echo form_input($inputPlaca);
			?>
			<button type="submit" style="width:150px;height:75px" class="btn btn-default">Entrou / Saiu</button>
			<?php
			/*echo "<br>";

			$img_delete = array(
					'src' => 'assets/img/delete_32x32.png',
					'alt' => 'Delete'
			);
			
			$img_detalhes = array(
					'src' => 'assets/img/detalhes_32x32.png',
					'alt' => 'Detalhes'
			);
			
			$img_editar = array(
					'src' => 'assets/img/editar_32x32.png',
					'alt' => 'Editar'
			);
			
			
			$this->table->set_heading(array('Nome','Ver','Editar','Excluir'));
			
			foreach ($usuarios as $usuario){
				$this->table->add_row(array(
						$usuario->username,
						anchor('welcome', img($img_delete)),
						anchor('welcome', img($img_detalhes)),
						anchor('welcome', img($img_editar))
						));
			}
			
			echo $this->table->generate();
		*/?>
		
<!-- 		<table class="table-striped" > -->
<!-- 		<tr> -->
<!-- 			<td>Teste</td> -->
<!-- 			<td>Teste</td> -->
<!-- 		</tr> -->
<!-- 		<tr> -->
<!-- 			<td>Teste</td> -->
<!-- 			<td>Teste</td> -->
<!-- 		</tr>		 -->
<!-- 		</table> -->
	</div>