<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <script type="text/javascript">

        $(document).ready(function () {
            if ($.cookie('primeiroAcesso') == "false") {
                $.cookie('primeiroAcesso', 'true', {expires: 1});
                $("#myModal").modal("show");//mostra o modal
            }


            $('#botaoSair').click(function () {//ao clickar em sair remove o coockie
                $.removeCookie('primeiroAcesso');

            })



        });

    </script>


    <!-- PARTE QUE VAI MOSTRAR AVISOS DE MENSAGENS MODAL BOOTSTRAP -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Verificar Informações</h4>
                </div>
                <div class="modal-body">
                    Você Tem relatórios pendentes!

                    <br /><br /><b>Verificar caixa de mensagens</b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

                </div>
            </div>
        </div>
    </div>

    <!-- FIM PARTE DA TELA DE CONFIRMAÇÃO DE ENVIO DE FORMULARIO MODAL BOOTSTRAP -->



    <!-- CONTEUDO -->


    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">EDITAIS DE PESQUISAS</div>

        <!-- Table -->

        <table class="table table-striped">
            <tr class="table tab-pane" >
                <th >EDITAL Nº</th>
                <th>DATA INÍCIO INSCRIÇÕES</th>
                <th>DATA FIM INSCRIÇÕES</th>
                <th>TIPO</th>
                <th>LINK</th>
                
            </tr>
            <tr class="table">
                <td>1/2015</td>
                <td>12/2/2015</td>
                <td>20/2/2015</td>
                <td>PIBIC/IFNMG</td>
                <td><a href="<td><a>http://www.ifnmg.edu.br/programas-jan/pibic/pibic-2015</a></td>">link</a></td>
                
            </tr>
            <tr class="table">
                <td>2/2015</td>
                <td>12/2/2015</td>
                <td>20/2/2015</td>
                <td>FAPEMIG</td>
                <td><a href="http://www.ifnmg.edu.br/programas-jan/pibic/pibic-2015"></a></td>
            </tr>
            
            <tr class="table" >
                <td>2/2015</td>
                <td>12/2/2015</td>
                <td>20/2/2015</td>
                <td>PIBEX</td>
                <td><a href="http://www.ifnmg.edu.br/programas-jan/pibex/2014">link</a></td>
            </tr>
            
            <tr class="table">
                <td>2/2015</td>
                <td>12/2/2015</td>
                <td>20/2/2015</td>
                <td>PIBEX</td>
                <td><a href="http://www.ifnmg.edu.br/programas-jan/pibex/2014">link</a></td>
            </tr>
           

        </table>

    </div>






    <!-- FIM CONTEUDO -->


    <!-- 
     <h1 class="page-header">Tela Inicial</h1>
 
         <div class="row placeholders">
                 <div class="col-xs-6 col-sm-3 placeholder">
                         <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                         <h4>Label</h4>
                         <span class="text-muted">Something else</span>
                 </div>
                 <div class="col-xs-6 col-sm-3 placeholder">
                         <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                         <h4>Label</h4>
                         <span class="text-muted">Something else</span>
                 </div>
                 <div class="col-xs-6 col-sm-3 placeholder">
                         <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                         <h4>Label</h4>
                         <span class="text-muted">Something else</span>
                 </div>
                 <div class="col-xs-6 col-sm-3 placeholder">
                         <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                         <h4>Label</h4>
                         <span class="text-muted">Something else</span>
                 </div>
         </div>
    -->
</div>
</div>
</div>

