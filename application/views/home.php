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

    data-toggle="modal" data-target="#myModal"
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
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FIM PARTE DA TELA DE CONFIRMAÇÃO DE ENVIO DE FORMULARIO MODAL BOOTSTRAP -->









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

