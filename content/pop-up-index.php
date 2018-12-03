<?php 
function pop_up_index(){
    ?>
        <div class="modal fade" id="modal_subscribeform" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-arteref-pop-up">
                <div class="modal-header">
                    <h1 class="modal-title">Quer saber como a pessoas compraram arte em 2017-2018?</h1>
                    <button type="button" id="close_pop_up_arteref" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>O Arteref fez um resumo do relatório mundial de negócios online de arte, você quer receber? </p>
                    <!-- <a href="http://arteref.com/downloads/relatorio%20de%20tedencias.pdf" download>Baixe aqui!</a> -->
                    <?php echo do_shortcode("[sibwp_form id=2]");?>
                </div>
                </div>
            </div>
        </div>

    <?php
}