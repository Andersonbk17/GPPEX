<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <?php
    /*
                    CODIGO DE VALIDAÇÕES
     */
    if(validation_errors() !=NULL){        //se tiver erros na validação mostrar essa parada aki
        echo "<br />";
	echo "<div class='alert alert-danger' role='alert'> ";
		 validation_errors();
	echo "</div>";
    }
    
    
    ?>
    
    <div class="col-md-12">
        <h1 class="page-header">NOVO BOLSISTA</h1>
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



<!-- <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->

    <script type="text/javascript">
        //Códigos de mascaras com bibliotecas externas
        jQuery(function ($) {
            $("#nascimentoBolsista").mask("99/99/9999");


        });
    </script>



    <script type="text/javascript" >
        //$("#navegacao").toggleClass("active");
        $('#home').attr('class', 'active');



        //if($('#localTrabalhoBolsista').val().get() == );
    </script>

    <script type="text/javascript">

        $(document).ready(function () {
            $("#cpfBolsista").mask("999.999.999-99");
            $("#dataExpedicaoBolsista").mask("99/99/9999");
            $("#cpfBolsista").mask("999.999.999-99");
            $("#cpfMae").mask("999.999.999-99");
            $("#cpfResponsavel").mask("999.999.999-99");
        });
    </script>

    <script type="text/javascript">

        $(document).ready(function () {


            $("form").submit(function (event) {
               // $("#myModal").modal("show");//mostra o modal
               //confirm("Você Tem certeza que deseja salvar?");
            });


        });
    </script>





    <script type="text/javascript">
        /*
         * 
         * TENTATIVA USO AJAX 1.1 FAILLLL
         */
        /*
         $(document).ready(function() {
         $('#estadoBolsista').change(function() {
         
         var controller = 'Cadastro_Bolsista';
         var base_url = '<?//php echo base_url(); //you have to load the "url_helper" to use this function    ?>';
         var idEstado = $('#estadoBolsista').val();
         //alert(idEstado);
         function load_data_ajax(type) {
         $.ajax({
         
         'url': base_url + controller + '/buscarCidadeAjax/' + idEstado,
         'type': 'POST', //the way you want to send data to your URL
         'data': {'type': type},
         'success': function(data) { //probably this request will return anything, it'll be put in var "data"
         var container = $('#container'); //jquery selector (get element by id)
         if (data) {
         container.html(data);
         }
         }
         });
         
         }
         
         
         
         
         });
         });
         
         
         */

    </script>

    <div class="col-md-12" >
        <form  id="form" action="<?php base_url() ?>Cadastro_Bolsistas/cadastro" method="post">
            <!-- BARRA DE NAVEGAÇÃO BOOTSTRAP-->
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#dadosAluno" data-toggle="tab">Dados do Aluno</a>
                </li>
                <li><a href="#documentos" data-toggle="tab">Documentos</a></li>
                <li><a href="#dadosPais" data-toggle="tab">Dados dos Pais</a></li>
                <li><a href="#outrosDados" data-toggle="tab">Outros Dados</a></li>
            </ul>
            <div class="tab-content">

                <!-- ABA 1 DADOS DO BOLSISTA-->
                <div id="dadosAluno" class="tab-pane active">
                    <div class="form-group col-md-7">
                        <label for="nomeBolsista">Nome*</label>
                        <input type="text" maxlength="100" class="form-control" id="nomeBolsista" name="nomeBolsista" placeholder="Nome Completo" required="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="matriculaBolsista">Matricula*</label>
                        <input type="text" class="form-control" id="matriculaBolsista" name="matriculaBolsista" placeholder="Número de Matricula" required="">
                    </div>

                    <!-- LINHA 2 -->

                    <div class="form-group col-md-7">
                        <label for="cursoBolsista">Curso*</label>
                        <select class="form-control" name="cursoBolsista" id="cursoBolsista" required="">
                            <option value="0">Selecione ..</option>
                            <?php
                            foreach ($cursos as $value) {
                                echo "<option value='" . $value->idcurso . "'>" . $value->nome . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="campusBolsista">Campus*</label>
                        <select class="form-control" name="campusBolsista" id="campusBolsista" required="">
                            <option>Selecione ..</option>
                            <?php
                            foreach ($campus as $value) {
                                echo "<option value='" . $value->idCampus . "'>" . $value->nome . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <!-- LINHA 3 -->
                    <div class="form-group col-md-4">
                        <label for="nascimentoBolsista">Data de Nascimento*</label>
                        <input type="text" class="form-control" id="nascimentoBolsista" name="nascimentoBolsista" placeholder="dd/mm/aaaa" required="">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="naturalidadeBolsista">Naturalidade UF*</label>
                        <select class="form-control" name="naturalidadeBolsista" id="naturalidadeBolsista" required="">
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

                    <div class="form-group col-md-4">
                        <label for="nacionalidadeBolsista">Nacionalidade UF*</label>
                        <select class="form-control" name="nacionalidadeBolsista" id="nacionalidadeBolsista" required="">
                            <option>Selecione ..</option>
                            <?php
                            foreach ($nacionalidades as $value) {
                                echo "<option value='" . $value->id . "'>" . $value->nome . "</option>";
                            }
                            ?>

                        </select>
                    </div>

                    <!-- LINHA 4 -->

                    <div class="form-group col-md-7">
                        <label for="enderecoBolsista">Endereço*</label>
                        <input type="text" class="form-control" id="enderecoBolsista" name="enderecoBolsista" placeholder="Avenida, Rua, Estrada" required="">
                    </div>

                    <div class="form-group col-md-5">
                        <label for="complementoEnderecoBolsista">Complemento</label>
                        <input type="text" class="form-control" id="complementoEnderecoBolsista" name="complementoEnderecoBolsista" placeholder="Casa, Bloco,Apartamento" >
                    </div>
                    <!-- LINHA 5 -->
                    <div class="form-group col-md-4">
                        <label for="bairroEnderecoBolsista">Bairro*</label>
                        <input type="text" class="form-control" id="bairroEnderecoBolsista" name="bairroEnderecoBolsista" placeholder="Bairro" required="" >
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


                    <div class="form-group col-md-4">
                        <label for="cidadeBolsista">Cidade</label>
                        <select class="form-control" name="cidadeBolsista" id="cidadeBolsista" required="">
                            <option>Selecione ..</option>


                        </select>
                    </div>






                </div>


                <!-- ABA 2 DOCUMENTOS-->
                <div id="documentos" class="tab-pane">

                    <!-- linha 1 -->
                    <div class="form-group col-md-5">
                        <label for="identidadeBolsista">RG*</label>
                        <input type="text" class="form-control" id="identidadeBolsista" name="identidadeBolsista" placeholder="Carteira de Identidade " required="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="orgaoExpedidorBolsista">Orgão Expedidor*</label>
                        <input type="text" class="form-control" id="orgaoExpedidorBolsista" name="orgaoExpedidorBolsista" placeholder="Orgão Expedidor " required="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dataExpedicaoBolsista">Data da Expedição*</label>
                        <input type="text" class="form-control" id="dataExpedicaoBolsista" name="dataExpedicaoBolsista" placeholder="DD/MM/AAAA " required="">
                    </div>

                    <!-- linha 2 -->
                    <div class="form-group col-md-5">
                        <label for="tituloEletitorBolsista">Titulo Eleitoral</label>
                        <input type="text" class="form-control" id="tituloEletitorBolsista" name="tituloEletitorBolsista" placeholder="Número do titulo Eleitoral " >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="secaoEleitoralBolsista">Seção Eleitoral</label>
                        <input type="text" class="form-control" id="secaoEleitoralBolsista" name="secaoEleitoralBolsista" placeholder="Número da seção Eleitoral " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zonaEleitoralBolsista">Zona Eleitoral</label>
                        <input type="text" class="form-control" id="zonaEleitoralBolsista" name="zonaEleitoralBolsista" placeholder="Número da zona Eleitoral " >
                    </div>
                    <!-- linha3 -->
                    <div class="form-group col-md-5">
                        <label for="cpfBolsista">CPF*</label>
                        <input type="text" class="form-control" id="cpfBolsista" name="cpfBolsista" placeholder="xxx.xxx.xxx.-xx " required="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="situacaoMilitarBolsista">Situação Militar</label>
                        <input type="text" class="form-control" id="situacaoMilitarBolsista" name="situacaoMilitarBolsista" placeholder="Situação Militar" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="certidaoMilitarBolsista">Certidao Militar</label>
                        <input type="text" class="form-control" id="certidaoMilitarBolsista" name="certidaoMilitarBolsista" placeholder="Número da certidão Militar " >
                    </div>


                </div>



                <!-- ABA 3 DADOS DOS PAIS-->

                <div id="dadosPais" class="tab-pane">
                    <!-- linha! -->
                    <div class="form-group col-md-7">
                        <label for="nomeResponsavel">Nome Responsável*</label>
                        <input type="text" class="form-control" id="nomeResponsavel" name="nomeResponsavel" placeholder="Pai ou Responsável" required="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="cpfResponsavel">CPF Responsável*</label>
                        <input type="text" class="form-control" id="cpfResponsavel" name="cpfResponsavel" placeholder="XXX.XXX.XXX-XX" required="">
                    </div>



                    <!-- linha3 -->
                    <div class="form-group col-md-7">
                        <label for="numeroRgResponsavel">RG*</label>
                        <input type="text" class="form-control" id="numeroRgResponsavel" name="numeroRgResponsavel" placeholder="Carteira de Identidade Responsável" required="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="orgaoExpedidorResponsavel">Orgão Expedidor*</label>
                        <input type="text" class="form-control" id="orgaoExpedidorResponsavel" name="orgaoExpedidorResponsavel" placeholder="Orgão Expedidor Responsável" required="">
                    </div>

                    <!-- PARTE MAE! -->
                    <div class="form-group col-md-7">
                        <label for="nomeMae">Nome Mãe*</label>
                        <input type="text" class="form-control" id="nomeMae" name="nomeMae" placeholder="Nome da Mãe" required="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="cpfMae">CPF Mãe*</label>
                        <input type="text" class="form-control" id="cpfMae" name="cpfMae" placeholder="XXX.XXX.XXX-XX" required="">
                    </div>



                    <!-- linha3 -->
                    <div class="form-group col-md-7">
                        <label for="numeroRgMae">RG Mãe*</label>
                        <input type="text" class="form-control" id="numeroRgMae" name="numeroRgMae" placeholder="Carteira de Identidade Mãe" required="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="orgaoExpedidorMae">Orgão Expedidor*</label>
                        <input type="text" class="form-control" id="orgaoExpedidorMae" name="orgaoExpedidorMae" placeholder="Orgão Expedidor Mãe" required="">
                    </div>


                    <!-- linha3 -->
                </div>




                <!-- ABA 4 OUTROS DADOS-->

                <div id="outrosDados" class="tab-pane ">

                    <!--
                    <div class="form-group col-md-5">
                        <label for="trabalhaBosista">Bolsista Trabalha?*</label>
                        <select class="form-control" name="trabalhaBosista" id="trabalhaBosista" required="">
                            <option selected="">Selecione ..</option>
                            <option value="1">SIM</option>
                            <option value="0">NÃO</option>

                        </select>
                    </div>
-->
                    <div class="form-group col-md-7">
                        <label for="localTrabalhoBolsista">Local de Trabalho (se houver)</label>
                        <input type="text" class="form-control" id="localTrabalhoBolsista" name="localTrabalhoBolsista" placeholder="Local de Trabalho">
                    </div>
                </div>


            </div>



    </div>



    <!-- BOTOES DE ENVIO E CANCELAMENTO-->
    <div style="text-align: right; alignment-adjust: baseline;  ">
        <button type="submit" id="salvar" class="btn btn-success" >
            <!-- <button type="submit" id="salvar" class="btn btn-success" data-toggle="modal" data-target="#myModal"> -->
            Enviar
        </button>
        <button type="reset" class="btn btn-default">
            Cancelar
        </button>
    </div>





    <!-- PARTE DA TELA DE CONFIRMAÇÃO DE ENVIO DE FORMULARIO MODAL BOOTSTRAP -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Verificar Informações</h4>
                </div>
                <div class="modal-body">
                    Você Tem certeza que deseja salvar o bosista?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FIM PARTE DA TELA DE CONFIRMAÇÃO DE ENVIO DE FORMULARIO MODAL BOOTSTRAP -->

</form>
</div>

</div>
</div>
</div>


