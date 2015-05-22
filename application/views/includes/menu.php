
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SGPPEX</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Configurações</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="<?php base_url()?>login">Sair</a></li>
          </ul>
            <!--
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Busca...">
          </form>
            -->
        </div>
      </div>
    </nav>


<!-- MENU LATERAL criar outro arquivo depos </-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li <?php if($opcaoLateral == "principal") {echo 'class="active"';}?>><a href="<?php base_url() ?>Principal">Tela Inicial <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Relatórios</a></li>
            <li <?php if($opcaoLateral == "bolsistas") {echo 'class="active"';}?>><a href="<?php base_url() ?>Bolsistas">Bolsistas</a></li>
            <li <?php if($opcaoLateral == "pesquisa") {echo 'class="active"';}?>><a href="<?php base_url() ?>Pesquisa">Pesquisas</a></li>
            </ul>
            
            
         
        <!--
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </-->      
        </div>
    