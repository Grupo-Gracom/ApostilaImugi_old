
        <div class="blog-details-area mg-b-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-details-inner">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="latest-blog-single blog-single-full-view">
                                        <div class="blog-details blog-sig-details">
                                            <div class="blog-details blog-sig-details">
                                                
                                                <h3 class="blue" data-unidade="<?php echo $id?>" data-item="4">4.UNDERSTANDING
                                                </h3><br>
                                                
                                            
                                            
                                                <p class="blue"><strong>A.Answer the questions, according to what you have learned in the unit.<strong> </p>
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                    <form id="atividade5" class="form-inline" method="POST"  action='<?php echo base_url(); ?>exercicio/exercicioAction/<?php echo $id?>'>
                                                        <div class="col-md-6" style="margin-top: 25px;">
                                                            <label style="font-weight:normal; font-size: 18px;">1.Where is Professor Ludemann from?</label>
                                                            <input type="text" name='resposta_1' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                                                                                               
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 25px;">                                                       
                                                            <label style="font-weight:normal; font-size: 18px;">2.What is João’s profession?</label>
                                                            <input type="text" name='resposta_2' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                                        
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 25px;">
                                                            <label style="font-weight:normal; font-size: 18px;">3.Why is Photoshop ideal for Bruno?</label>
                                                            <input type="text" name='resposta_3' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                                                                                               
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 25px;">                                                       
                                                            <label style="font-weight:normal; font-size: 18px;">4.Name two professionals who work with Photoshop.</label>
                                                            <input type="text" name='resposta_4' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                                        
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 25px;">
                                                            <label style="font-weight:normal; font-size: 18px;">5.What is João’s personal opinion about Photoshop?</label>
                                                            <input type="text" name='resposta_5' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                                                                                               
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-6">                                                       
                                                            <label style="font-weight:normal; font-size: 18px;">6.According to João, what is the ideal soft ware to use for image editi on?</label>
                                                            <input type="text" name='resposta_6' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                                        
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 25px;">
                                                            <label style="font-weight:normal; font-size: 18px;">7.What did Professor Ludemann do fi ve years ago?</label>
                                                            <input type="text" name='resposta_7' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                                                                                               
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-6">                                                       
                                                            <label style="font-weight:normal; font-size: 18px;">8.Why do professionals of graphic design production have an infinite number of opportunities?</label>
                                                            <input type="text" name='resposta_8' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                                        
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 25px;">
                                                            <label style="font-weight:normal; font-size: 18px;">9.What is Bruno’s hobby?</label>
                                                            <input type="text" name='resposta_9' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                                                                                               
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 25px;">                                                       
                                                            <label style="font-weight:normal; font-size: 18px;">10.What does Professor Ludemann work with?</label>
                                                            <input type="text" name='resposta_10' class="form-control mx-sm-3 linha" size="60" autocomplete="off">                                               
                                                        </div>
                                                        <div class="col-md-12" style="margin-top: 25px;">
                                                            <input type="hidden" name="mRespostas" value='<?php foreach($respostas as $row){ if($row->atividade_id == 5 ) { echo $row->resposta_respostas; }} ?>'>
                                                            <input type="hidden" name="urlFormulario" value="<?php echo current_url();?>">
                                                            <input type="hidden" name="usuario_id" value="<?php echo $user?>">
                                                            <input type="hidden" name="atividade_id" value="5">                                                                                                                        
                                                            <input type="hidden" name="unidade_id" value="<?php echo $id?>">
                                                            <input type="hidden" name="resposta_data" value="<?php echo date('Y/m/d');?>">
                                                            <input type="hidden" name="resposta_id" value="<?php foreach($respostas as $row){ if($row->atividade_id == 5 ) { echo $row->resposta_id; }} ?>">
                                                            <?php 
                                                                date_default_timezone_set('America/Fortaleza');
                                                            ?>
                                                            <input type="hidden" name="resposta_hora" value="<?php echo date('H:i:s');?>">
                                                            <input type="hidden" name="respostas_respostas" value="">
                                                            <input type="submit" value="Salvar" class="btn btn-success">
                                                        </div>
                                                    </form>
                                                    <script>                                                           
                                                        $("#atividade5").on("submit",function(){
                                                            var r1 = $('#atividade5 input[name="resposta_1"]').val();
                                                            var r2 = $('#atividade5 input[name="resposta_2"]').val();
                                                            var r3 = $('#atividade5 input[name="resposta_3"]').val();
                                                            var r4 = $('#atividade5 input[name="resposta_4"]').val();
                                                            var r5 = $('#atividade5 input[name="resposta_1"]').val();
                                                            var r6 = $('#atividade5 input[name="resposta_2"]').val();
                                                            var r7 = $('#atividade5 input[name="resposta_3"]').val();
                                                            var r8 = $('#atividade5 input[name="resposta_4"]').val();
                                                            var r9 = $('#atividade5 input[name="resposta_3"]').val();
                                                            var r10 = $('#atividade5 input[name="resposta_4"]').val();                                                                
                                                                                                                            
                                                            var respostas = '{"r1":"'+r1+'","r2":"'+r2+'","r3":"'+r3+'","r4":"'+r4+'","r5":"'+r5+'","r6":"'+r6+'","r7":"'+r7+'","r8":"'+r8+'","r9":"'+r9+'","r10":"'+r10+'"}';
                                                            $('#atividade5 input[name="respostas_respostas"]').attr("value", respostas);
                                                        });
                                                        
                                                        $(document).ready(function(){
                                                            var respostas = JSON.parse($('#atividade5 input[name="mRespostas"]').val());
                                                            $('#atividade5 input[name="resposta_1"]').val(respostas.r1).attr("value", respostas.r1);
                                                            $('#atividade5 input[name="resposta_2"]').val(respostas.r2).attr("value", respostas.r2);
                                                            $('#atividade5 input[name="resposta_3"]').val(respostas.r3).attr("value", respostas.r3);
                                                            $('#atividade5 input[name="resposta_4"]').val(respostas.r4).attr("value", respostas.r4);
                                                            $('#atividade5 input[name="resposta_5"]').val(respostas.r5).attr("value", respostas.r5);
                                                            $('#atividade5 input[name="resposta_6"]').val(respostas.r6).attr("value", respostas.r6);
                                                            $('#atividade5 input[name="resposta_7"]').val(respostas.r7).attr("value", respostas.r7);
                                                            $('#atividade5 input[name="resposta_8"]').val(respostas.r8).attr("value", respostas.r8);
                                                            $('#atividade5 input[name="resposta_9"]').val(respostas.r9).attr("value", respostas.r9);
                                                            $('#atividade5 input[name="resposta_10"]').val(respostas.r10).attr("value", respostas.r10);                                                                 
                                                            
                                                        });
                                            
                                                    </script>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                                <div class="col-md-6" style="margin-top:100px;">
                                                    <img src="<?php echo base_url();?>assets/img/playgo/unit1/pagina-1.jpg" alt="" style="width:100%;">
                                                </div>
                                                <div class="col-md-6" style="margin-top:100px;">
                                                    <iframe src="<?php echo base_url(); ?>assets/games/2048-master/2048-master/index.html" frameborder="0"
                                                    style="width:100%; height:500px;"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>