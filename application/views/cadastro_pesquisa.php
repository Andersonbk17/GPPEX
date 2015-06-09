<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <div class="col-md-12">
        <h1 class="page-header">NOVA PESQUISA</h1>
    </div>
    <!-- MENSAGEM DE CONFIRMAÇÂO
    <div class="col-md-12">
    <!-- Large modal 
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
            Mensagem
    </button>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                            Cadastro Realizado com Sucesso.
                    </div>
            </div>

            <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                    </button>
                    <button type="button" class="btn btn-primary">
                            Save changes
                    </button>
            </div>
    </div>

</div>
    -->



    <script type="text/javascript" >
        //$("#navegacao").toggleClass("active");
        $('#home').attr('class', 'active');


    </script>

    <script type="text/javascript" >
        //mascaras dos campos
        $(document).ready(function() {

            $("#inicioProjeto").mask("99/99/9999");
            $("#terminoPrjeto").mask("99/99/9999");


        });


    </script>



    <div class="col-md-12">
        <form  action="<?php base_url() ?>usuario/cadastrar" method="post">
            <!-- BARRA DE NAVEGAÇÃO BOOTSTRAP-->
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#dadosAluno" data-toggle="tab">Identificação do Projeto</a>
                </li>
                <li><a href="#resumo" data-toggle="tab">Resumo</a></li>
                
                <li><a href="#participantes" data-toggle="tab">Participantes do Projeto</a></li>
            </ul>
            <div class="tab-content">

                <!-- ABA 1 DADOS DO BOLSISTA-->
                <div id="dadosAluno" class="tab-pane active">
                    <div class="form-group col-md-7">
                        <label for="tituloProjeto">Título*</label>
                        <input type="text" class="form-control" id="tituloProjeto" maxlength="120" name="tituloProjeto" placeholder="Título Completo" required="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="cadastroPesquisa">Nº do Cadastro</label>
                        <input type="text" class="form-control" id="cadastroPesquisa" name="cadastroPesquisa" placeholder="" maxlength="7">
                    </div>

                    <!-- LINHA 2 -->

                    <div class="form-group col-md-7">
                        <label for="orientador">Coordenador (Orientador do projeto)*</label>
                        <select class="form-control" name="orientador" id="orientador" required="">
                            <option value="0">Selecione ..</option>
                            <option value="1">Albert Einstein</option>
                            <option value="2">Adriano Antunes</option>
                            <option value="3">Cleiane Oliveira</option>
                            <option value="4">Danilo Magalhaes Nunes</option>
                            <option value="5">Petrônio Candido</option>
                            <option value="6">Joselice Lima</option>




                        </select>
                    </div>


                    <div class="form-group col-md-5">
                        <label for="setorCoordenador">Setor do Coordenador/Campus do IFNMG*</label>
                        <input type="text" class="form-control" maxlength="120" id="setorCoordenador" name="setorCoordenador" placeholder="Ex: Departamento/Setor" >
                    </div>



                    <!-- LINHA 3 -->
                    <div class="form-group col-md-4">
                        <label for="inicioProjeto">Data de Início do Projeto*</label>
                        <input type="text" class="form-control" id="inicioProjeto" name="inicioProjeto" placeholder="dd/mm/aaaa" required="">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="terminoPrjeto">Data de Término do Projeto*</label>
                        <input type="text" class="form-control" id="terminoPrjeto" name="terminoPrjeto" placeholder="dd/mm/aaaa" required="">
                    </div>



                    <div class="form-group col-md-4">
                        <label for="grupoPesquisa">Grupo de Pesquisa </label>
                        <input class="form-control" name="grupoPesquisa" id="grupoPesquisa" placeholder="Se houver" maxlength="70">

                    </div>

                    <!-- LINHA 4 -->

                    <div class="form-group col-md-7">
                        <label for="areaConhecimento">Área  do Conhecimento*</label>
                        <input type="text" class="form-control" id="areaConhecimento" maxlength="120" name="areaConhecimento" placeholder="Consultar tabela CNPq" required="">
                    </div>




                    <div class="form-group col-md-5">
                        <label for="campusBolsista">Campus de Execução do Projeto*</label>
                        <select class="form-control" name="campusBolsista" id="campusBolsista" required="">
                            <option>Selecione ..</option>
                            <?php
                            foreach ($campus as $value) {
                                echo "<option value='" . $value->idCampus . "'>" . $value->nome . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- LINHA 5 -->
                    <div class="form-group col-md-4">
                        <label for="bairroEnderecoBolsista">Bairro*</label>
                        <input type="text" class="form-control" id="bairroEnderecoBolsista" name="bairroEnderecoBolsista" placeholder="Bairro" required="" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="cidadeBolsista">Cidade*</label>
                        <select class="form-control" name="cidadeBolsista" id="cidadeBolsista" required="">
                            <option>Selecione ..</option>


                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="estadoBolsista">Estado*</label>
                        <select class="form-control" name="estadoBolsista" id="estadoBolsista" required="">
                            <?php
                            $estados = array("Selecione", "Acre", "Alagoas", "Amazonas", "Amapa", "Bahia",
                                "Ceara", "Distrito Federal", "Espirito Santo", "Goias", "Maranhao", "Minas Gerais",
                                "Mato Grosso do Sul", "Mato Grosso", "Para", "Paraiba", "Pernambuco", "Piaui", "Parana",
                                "Rio de Janeiro", "Rio Grande do Norte", "Rondonia", "Roraima", "Rio Grande do Sul", "Santa Catarina",
                                "Sergipe", "Sao Paulo", "Tocantins");
                            $valor = 0; //valor do atributo (value) do campo do estado pois o primeiro estado começa com 1
                            foreach ($estados as $value) {
                                echo "<option value='" . $valor . "'>" . $value . "</option>";
                                $valor++;
                            }
                            ?>
                        </select>
                    </div>




                </div>


                <!-- ABA 2 Resumo-->
                <div id="resumo" class="tab-pane">

                    <!-- linha 1 -->
                    <div class="form-group col-md-12 ">
                        <label for="resumo">Resumo do Projeto*</label>
                        <textarea class="form-control" rows="10" id="resumo" name="" required="" placeholder="Inserir um pequeno resumo sobre o projeto"></textarea>
                    </div>


                </div>



                



                <!-- ABA 4 Participantes do Projeto-->

                <div id="participantes" class="tab-pane ">

                    
                    <!-- LINHA 1 -->
                    <div class="form-group col-md-4">
                        <label for="participanteParticipante1">Participante</label>
                        <input type="text" class="form-control" id="participanteParticipante1" name="participanteParticipante1" placeholder="Insira o Nome" >
                    </div>
                    
                     <div class="form-group col-md-2">
                        <label for="titulacaoParticipante1">Titulação</label>
                        <select class="form-control" name="titulacaoParticipante1" id="titulacaoParticipante1" required="">
                            <option value="0">Selecione ..</option>
                            <option value="1">Mestre</option>
                            <option value="2">Doutor</option>
                            <option value="3">Graduando</option>
                            <option value="4">Especialista</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="campusParticipante1">Campus </label>
                        <select class="form-control" name="campusParticipante1" id="campusParticipante1" >
                            <option>Selecione ..</option>
                            <?php
                            foreach ($campus as $value) {
                                echo "<option value='" . $value->idCampus . "'>" . $value->nome . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="observacaoParticipante1">Observação</label>
                        <input type="text" class="form-control" id="observacaoParticipante1" name="observacaoParticipante1" placeholder="" >
                    </div>
                    
                    <!-- FIM LINHA 1 -->
                    
                     <!-- LINHA 2 -->
                    <div class="form-group col-md-4">
                        <label for="participanteParticipante2">Participante</label>
                        <input type="text" class="form-control" id="participanteParticipante2" name="participanteParticipante2" placeholder="Insira o Nome" >
                    </div>
                    
                     <div class="form-group col-md-2">
                        <label for="titulacaoParticipante2">Titulação</label>
                        <select class="form-control" name="titulacaoParticipante2" id="titulacaoParticipante2" required="">
                            <option value="0">Selecione ..</option>
                            <option value="1">Mestre</option>
                            <option value="2">Doutor</option>
                            <option value="3">Graduando</option>
                            <option value="4">Especialista</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="campusParticipante2">Campus </label>
                        <select class="form-control" name="campusParticipante2" id="campusParticipante2" >
                            <option>Selecione ..</option>
                            <?php
                            foreach ($campus as $value) {
                                echo "<option value='" . $value->idCampus . "'>" . $value->nome . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="observacaoParticipante2">Observação</label>
                        <input type="text" class="form-control" id="observacaoParticipante2" name="observacaoParticipante2" placeholder="" >
                    </div>
                    
                    <!-- FIM LINHA 2 -->
                    
                     <!-- LINHA 3 -->
                    <div class="form-group col-md-4">
                        <label for="participanteParticipante3">Participante</label>
                        <input type="text" class="form-control" id="participanteParticipante3" name="participanteParticipante3" placeholder="Insira o Nome" >
                    </div>
                    
                     <div class="form-group col-md-2">
                        <label for="titulacaoParticipante3">Titulação</label>
                        <select class="form-control" name="titulacaoParticipante3" id="titulacaoParticipante3" required="">
                            <option value="0">Selecione ..</option>
                            <option value="1">Mestre</option>
                            <option value="2">Doutor</option>
                            <option value="3">Graduando</option>
                            <option value="4">Especialista</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="campusParticipante3">Campus </label>
                        <select class="form-control" name="campusParticipante3" id="campusParticipante3" >
                            <option>Selecione ..</option>
                            <?php
                            foreach ($campus as $value) {
                                echo "<option value='" . $value->idCampus . "'>" . $value->nome . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="observacaoParticipante3">Observação</label>
                        <input type="text" class="form-control" id="observacaoParticipante3" name="observacaoParticipante3" placeholder="" >
                    </div>
                    
                    <!-- FIM LINHA 3 -->
                    
                     <!-- LINHA 4 -->
                    <div class="form-group col-md-4">
                        <label for="participanteParticipante4">Participante</label>
                        <input type="text" class="form-control" id="participanteParticipante4" name="participanteParticipante4" placeholder="Insira o Nome" >
                    </div>
                    
                     <div class="form-group col-md-2">
                        <label for="titulacaoParticipante4">Titulação</label>
                        <select class="form-control" name="titulacaoParticipante4" id="titulacaoParticipante4" required="">
                            <option value="0">Selecione ..</option>
                            <option value="1">Mestre</option>
                            <option value="2">Doutor</option>
                            <option value="3">Graduando</option>
                            <option value="4">Especialista</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="campusParticipante4">Campus </label>
                        <select class="form-control" name="campusParticipante4" id="campusParticipante4" >
                            <option>Selecione ..</option>
                            <?php
                            foreach ($campus as $value) {
                                echo "<option value='" . $value->idCampus . "'>" . $value->nome . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="observacaoParticipante4">Observação</label>
                        <input type="text" class="form-control" id="observacaoParticipante4" name="observacaoParticipante4" placeholder="" >
                    </div>
                    
                    <!-- FIM LINHA 4 -->
                    
                     <!-- LINHA 5 -->
                    <div class="form-group col-md-4">
                        <label for="participanteParticipante4">Participante</label>
                        <input type="text" class="form-control" id="participanteParticipante4" name="participanteParticipante4" placeholder="Insira o Nome" >
                    </div>
                    
                     <div class="form-group col-md-2">
                        <label for="titulacaoParticipante4">Titulação</label>
                        <select class="form-control" name="titulacaoParticipante4" id="titulacaoParticipante4" required="">
                            <option value="0">Selecione ..</option>
                            <option value="1">Mestre</option>
                            <option value="2">Doutor</option>
                            <option value="3">Graduando</option>
                            <option value="4">Especialista</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="campusParticipante4">Campus </label>
                        <select class="form-control" name="campusParticipante4" id="campusParticipante4" >
                            <option>Selecione ..</option>
                            <?php
                            foreach ($campus as $value) {
                                echo "<option value='" . $value->idCampus . "'>" . $value->nome . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="observacaoParticipante4">Observação</label>
                        <input type="text" class="form-control" id="observacaoParticipante4" name="observacaoParticipante4" placeholder="" >
                    </div>
                    
                    <!-- FIM LINHA 5 -->

                    


            </div>



    </div>



    <!-- BOTOES DE ENVIO E CANCELAMENTO-->
    <div style="text-align: right; alignment-adjust: baseline ">
        <button type="submit" class="btn btn-success">
            Enviar
        </button>
        <button type="reset" class="btn btn-default">
            Cancelar
        </button>
    </div>
</form>
</div>

</div>
</div>
</div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

