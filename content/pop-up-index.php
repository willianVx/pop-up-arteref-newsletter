<?php 
function pop_up_index(){
    ?>
        <div class="modal fade" id="modal_subscribeform" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-arteref-pop-up">

                    <div class="modal-header">
                        <h1 class="modal-title">Como fazer marketing da sua galeria de arte</h1>
                        <button type="button" id="close_pop_up_arteref" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p>Baixe aqui o novo e-book do arteref</p>
                        <div class="arteref_modal_content">
                            <div>
                                <!-- <a href="http://arteref.com/downloads/relatorio%20de%20tedencias.pdf" download>Baixe aqui!</a> -->
                                <?php echo do_shortcode("[sibwp_form id=2]");?>
                            </div>

                            <div>
                                <div class="img_ebook">
                                    <img src="https://arteref.com/wp-content/uploads/2019/02/banner-e-book.jpg" alt="Imagem e-book Arteref">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    <?php
}