
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
                                                <div class="col-md-6">                                          
                                                    <h3 class="blue" data-unidade="<?php echo $id?>" data-item="2">Grammar 
                                                        <audio controls controlsList="nodownload">
                                                        <source src="<?php echo base_url(); ?>assets/audio/unit2/grammar/grammar.ogg" type="audio/ogg">
                                                        </audio>                                                 
                                                    </h3>                                                    
                                                    <p>a.Answer the questions. Use short answers.</p>
                                                    <p>1. Do you have Photoshop in your computer?</p>
                                                    <p>2. Do you use Photoshop to edit photos?</p>
                                                    <p>3. Do any of your friends use Photoshop for work?</p>
                                                    <p>4. Do you have experience in Photoshop?</p>
                                                    <p>5. Do you need Photoshop now?</p>  
                                                    </div>
                                                    <div class="col-sm-4" style="margin-top:0px;">
                                                    <img  src="<?php echo base_url(); ?>assets\img\playgo\unit2\painel.png" alt="">
                                                    </div>
                                                    <br> 
                                                    <div class="col-md-6">                                        
                                                        <p class="blue"><strong>B.Organize the sentences. Use DO when necessary.</strong></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <form id="atividade6" class="form-group" method="POST"  action='<?php echo base_url(); ?>exercicio/exercicioAction/<?php echo $id?>'>                                                            
                                                            <div class="col-md-6">
                                                                <label style="font-weight:normal; font-size: 18px;" class="blue">1. You/with/work/photography</label>
                                                                <input type="text" name='resposta_b' class="form-control input_radius">
                                                            </div>
                                                            <div class="col-md-6" style="margin-top:0px;">
                                                                <label style="font-weight:normal; font-size: 18px;" class="blue">2. They/a soft ware/need/to edit/photos</label>
                                                                <input type="text" name='resposta_b' class="form-control input_radius">
                                                            </div>
                                                            <br><br>
                                                            <div class="col-md-6" style="margin-top:20px;">
                                                                <label style="font-weight:normal; font-size: 18px;" class="blue">3. Have/you/ a computer</label>
                                                                <input type="text" name='resposta_b' class="form-control input_radius">
                                                            </div>
                                                            <br>
                                                            <div class="col-md-6" style="margin-top:20px;">
                                                                <label style="font-weight:normal; font-size: 18px;" class="blue">4. We/Photoshop/use/for work</label>
                                                                <input type="text" name='resposta_b' class="form-control input_radius">
                                                            </div>
                                                            <div class="col-md-12" style="margin-top: 25px;">
                                                            <input type="hidden" name="mRespostas" value='<?php foreach($respostas as $row){ if($row->atividade_id == 6 ) { echo $row->resposta_respostas; }} ?>'>
                                                            <input type="hidden" name="urlFormulario" value="<?php echo current_url();?>">
                                                            <input type="hidden" name="usuario_id" value="<?php echo $user?>">
                                                            <input type="hidden" name="atividade_id" value="5">                                                                                                                        
                                                            <input type="hidden" name="unidade_id" value="<?php echo $id?>">
                                                            <input type="hidden" name="resposta_data" value="<?php echo date('Y/m/d');?>">
                                                            <input type="hidden" name="resposta_id" value="<?php foreach($respostas as $row){ if($row->atividade_id == 6 ) { echo $row->resposta_id; }} ?>">
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
                                                    
                                                    <div class="col-md-6" style="margin-top:20px;">                                        
                                                        <p class="blue"><strong>C.The punctuati on is correct.</strong></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <form class="form-inline" method="POST"  action='<?php echo base_url(); ?>exercicio/exercicioAction/<?php echo $id?>'>                                                            
                                                            <div class="col-md-6" >
                                                                <label style="font-weight:normal; font-size: 18px;" class="blue">1. You develop websites?</label>
                                                                <input type="text" name='resposta_b' class="form-control input_radius" size="40"><span class="blue">?</span>                                                        
                                                            </div>                                                   
                                                            <div class="col-md-6">
                                                                <label style="font-weight:normal; font-size: 18px;" class="blue">2. Do I use layouts I develop on Photoshop for sites</label>
                                                                <input type="text" name='resposta_b' class="form-control input_radius" size="40"><span class="blue">.</span>                                                        
                                                                <br><br>
                                                            </div>                                                       
                                                            <div class="col-md-6">
                                                                <label style="font-weight:normal; font-size: 18px;" class="blue">3. Thomas and John Knoll are brothers</label>
                                                                <input type="text" name='resposta_b' class="form-control input_radius" size="40"><span class="blue">?</span>                                                        
                                                            </div>
                                                            <div class="col-md-12"> 
                                                            <input type="submit" value="Salvar" class="btn btn-success">
                                                            </div>
                                                            <br>
                                                            
                                                        </form>
                                                    </div>
                                                        

                                                     
                                                    
                                                    
                                                    
                                                    
                                                    <!-- _________________________________________?
                                                    2. Do I use layouts I develop on Photoshop for sites.
                                                    _________________________________________.
                                                    3. Thomas and John Knoll are brothers.
                                                    _________________________________________? -->
                                                    
                                                    
                                                
                                                
                                                
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
            </div>
        </div>