<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<div class="col-md-10">
		<h1 class="page-header">BOLSISTAS</h1>
	</div>
	<div class="col-md-2">
		<a class="btn btn-primary btn-block"  href="<?php base_url()?>Cadastro_Bolsistas">NOVO BOLSISTA</a>
		
	</div>

	<div class="col-md-12">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th>CPF</th>
                                <th>EMAIL</th>
				
				<th></th>
			</tr>
			<?php   foreach ($bolsista as $bol) {?>
			<tr>
				<td><?php echo $bol->idbosistas;?></td>
				<td><?php echo $bol->nome;?></td>
				<td><?php echo $bol->cpf;?></td>
                                <td><?php echo $bol->email;?></td>
				<!--<td><a href="<?//php base_url('usuario/alterar'.$user->id)?>" class="btn btn-primary">Alterar</a></td>
				<td><a href="<?//php base_url('usuario/excluir/'.$user->id) ?>" class="btn btn-danger" onclick="return confirm('Deseja Realmende excluir o Usuario?');">Excluir</a></td> -->
			</tr>
			<?php }?>
 
		</table>
				
		
	</div>
</div>
</div>
</div>

