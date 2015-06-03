<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <div class="col-md-10">
        <h1 class="page-header">Usuários</h1>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary btn-block"  href="<?php base_url() ?>Cadastro_Usuarios">NOVO USUÁRIO</a>

    </div>

    <div class="col-md-12">
        <table class="table table-striped">
            <tr class="table tab-pane">
                <th>ID</th>
                <th>LOGIN</th>


            </tr>
            <?php foreach ($usuarios as $user) { ?>
                <tr>
                    <td><?php echo $user->idUsuario; ?></td>
                    <td><?php echo $user->usuario; ?></td>
                    
                    <td><a href="<?php base_url('Usuarios/alterar'.$user->idUsuario)?>" class="btn btn-primary">Alterar</a></td>
                    <td><a href="<?php base_url('Usuarios/excluir/'.$user->idUsuario) ?>" class="btn btn-danger" onclick="return confirm('Deseja Realmende excluir o Usuario?');">Excluir</a></td>
                </tr>
            <?php } ?>

        </table>


    </div>
</div>
</div>
</div>

