
        <div class="blog-details-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-details-inner">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="latest-blog-single blog-single-full-view">
                                        <div class="blog-details blog-sig-details">
                                            <div class="blog-details blog-sig-details">
                                                
                                                <h3 class="blue" data-unidade="<?php echo $id?>" data-item="2">B. Grammar 
                                                    <audio controls controlsList="nodownload">
                                                        <source src="<?php echo base_url(); ?>assets/audio/unit1/grammar/grammar.ogg" type="audio/ogg">
                                                    </audio>
                                                    <?php 
                                                        //echo $matricula;
                                                    ?>
                                                </h3>                                                
                                                <div class="col-md-6" style="margin-top:50px;">
                                                    <p class="blue text-center"><strong> Aﬃrmative </strong></p>
                                                    <p class="text-center" >I <span class="blue"> <strong> am </strong> </span> a photographer. </p>
                                                    <p class="text-center" >You <span class="blue"><strong> are </strong> </span> a designer. </p>
                                                    <p class="text-center" >He <span class="blue"> <strong> is </strong> </span> an illustrator. </p>
                                                    <p class="text-center" >She <span class="blue"><strong> is  </strong></span> a game designer. </p> 
                                                    <p class="text-center" >We  <span class="blue"><strong> are </strong></span>  students.</p>  
                                                    <p class="text-center" >They  <span class="blue"><strong> are </strong></span> web designers. </p> 
                                                    <p class="text-center" >It <span class="blue"><strong> is </strong></span> Photoshop. </p>
                                                </div>
                                                <div class="col-md-6" style="margin-top:50px;">
                                                    <p class="blue text-center"><strong> Interrogative </strong> </p>
                                                    <p class="text-center" > <span class="blue"><strong> Am  </strong></span> I a photographer?</p>
                                                    <p class="text-center" > <span class="blue"><strong> Are  </strong></span>  you a designer? </p>
                                                    <p class="text-center" > <span class="blue"><strong> Is   </strong></span>  he an illustrator?  </p>
                                                    <p class="text-center" > <span class="blue"><strong> Is   </strong></span>  she a game designer?   </p>
                                                    <p class="text-center" > <span class="blue"><strong> Are   </strong></span>  we students? </p>
                                                    <p class="text-center" > <span class="blue"><strong> Are   </strong></span>  they web designers? </p>
                                                    <p class="text-center" > <span class="blue"><strong> Is    </strong></span>  it Photoshop? </p>
                                                </div>
                                            </div>
                                            <!-- </?php foreach($respostas as $row){?>
                                             </?php       if($row->atividade_id ==1){                       ?>
                                             </?php      echo ($row->resposta_respostas); ?>
                                            </?php     }}                         ?> -->
                                            <div class="col-md-12" style="margin-top:50px;">
                                             <div >                                             
                                             <p class="blue"><strong>A.Complete the sentences using the verb to be.</strong> </p> <!-- if(empty($respostas[0]->resposta_respostas){ echo ""; }else {echo $respostas[0]->resposta_respostas;} -->
                                                <form id="atividade1" class="form-inline" method="POST"  action='<?php echo base_url(); ?>exercicio/exercicioAction/<?php echo $id?>'>
                                                        <input type="hidden" name="mRespostas" value='<?php foreach($respostas as $row){ if($row->atividade_id == 1 ) { echo $row->resposta_respostas; }} ?>'>   
                                                        <div class="form-group col-md-12">
                                                        <label style="font-weight:normal; font-size: 18px;"><span class="blue"> <strong> Professor Ludemann:</strong> </span> Bruna, what</label>
                                                            <input type="text" name='resposta_1' class="form-control mx-sm-3 linha" size="20" autocomplete="off" required>
                                                            <label style="font-weight:normal; font-size: 18px;">your job?</label>
                                                        </div>
                                                        <div class="form-group col-md-12" style="margin-top:20px;">
                                                            <label  style="font-weight:normal; font-size: 18px;"> <span class="blue"> <strong> Bruno: </strong> </span> I</label>
                                                            <input type="text" name='resposta_2' class="form-control mx-sm-3 linha" size="20" autocomplete="off" required>
                                                            <label style="font-weight:normal; font-size: 18px;">your job?</label>
                                                        </div>
                                                        <div class="form-group col-md-12" style="margin-top:20px;">
                                                            <label  style="font-weight:normal; font-size: 18px;"> <span class="blue"> <strong> Professor Ludemann: </strong> </span></label>
                                                            <input type="text" name='resposta_3' class="form-control mx-sm-3 linha" size="20" autocomplete="off" required>
                                                            <label style="font-weight:normal; font-size: 18px;"> Photoshop important in your area? </label>
                                                        </div>
                                                        <div class="form-group col-md-12" style="margin-top:20px;">
                                                            <label  style="font-weight:normal; font-size: 18px;"><span class="blue"> <strong> Bruno: </strong> </span>  Yes, it  </label>
                                                            <input type="text" name='resposta_4' class="form-control mx-sm-3 linha" size="20" autocomplete="off" required>
                                                            <label style="font-weight:normal; font-size: 18px;">  very important. </label>
                                                        </div>
                                                        <div class="form-group col-md-12" style="margin-top:20px;">
                                                            <label  style="font-weight:normal; font-size: 18px;"> <span class="blue"> <strong> Professor Ludemann: </strong></span>   João, why  </label>
                                                            <input type="text" name='resposta_5' class="form-control mx-sm-3 linha" size="20" autocomplete="off" required>
                                                            <label style="font-weight:normal; font-size: 18px;">   Photoshop important in Bruna’s work?  </label>
                                                        </div>
                                                        <div class="form-group col-md-12" style="margin-top:20px;">
                                                            <label  style="font-weight:normal; font-size: 18px;"><span class="blue"> <strong> João: </strong> </span> It </label>
                                                            <input type="text" name='resposta_6' class="form-control mx-sm-3 linha" size="20" autocomplete="off" required>
                                                            <label style="font-weight:normal; font-size: 18px;">  necessary because she can use it to develop the layout of the
                                                            website.  </label>
                                                            <div class="col-md-12">
                                                            <!-- echo date('d/m/Y \à\s H:i:s'); -->
                                                            <input type="hidden" name="urlFormulario" value="<?php echo current_url();?>">
                                                            <input type="hidden" name="usuario_id" value="<?php echo $user?>">
                                                            <input type="hidden" name="atividade_id" value="1">                                                                                                                        
                                                            <input type="hidden" name="unidade_id" value="<?php echo $id?>">
                                                            <input type="hidden" name="resposta_data" value="<?php echo date('Y/m/d');?>">
                                                            <input type="hidden" name="resposta_id" value="<?php foreach($respostas as $row){ if($row->atividade_id == 1 ) { echo $row->resposta_id; }} ?>">
                                                            <?php 
                                                            date_default_timezone_set('America/Fortaleza');
                                                            ?>
                                                            <input type="hidden" name="resposta_hora" value="<?php echo date('H:i:s');?>">
                                                            <input type="hidden" name="respostas_respostas" value="">
                                                            <input type='submit' class="btn btn-success" value='Salvar Resposta' style="margin-top:10px;">
                                                            </div>
                                                            
                                                        <br>
                                                        </form> 

                                                        <script>                                                           
                                                            $("#atividade1").on("submit",function(){
                                                                var r1 = $('#atividade1 input[name="resposta_1"]').val();
                                                                var r2 = $('#atividade1 input[name="resposta_2"]').val();
                                                                var r3 = $('#atividade1 input[name="resposta_3"]').val();
                                                                var r4 = $('#atividade1 input[name="resposta_4"]').val();
                                                                var r5 = $('#atividade1 input[name="resposta_5"]').val();
                                                                var r6 = $('#atividade1 input[name="resposta_6"]').val();
                                                                
                                                                var respostas = '{"r1":"'+r1+'","r2":"'+r2+'","r3":"'+r3+'","r4":"'+r4+'","r5":"'+r5+'","r6":"'+r6+'"}';
                                                                $('#atividade1 input[name="respostas_respostas"]').attr("value", respostas);
                                                            });
                                                            
                                                            $(document).ready(function(){
                                                                var respostas = JSON.parse($('#atividade1 input[name="mRespostas"]').val());
                                                                $('#atividade1 input[name="resposta_1"]').val(respostas.r1).attr("value", respostas.r1);
                                                                $('#atividade1 input[name="resposta_2"]').val(respostas.r2).attr("value", respostas.r2);
                                                                $('#atividade1 input[name="resposta_3"]').val(respostas.r3).attr("value", respostas.r3);
                                                                $('#atividade1 input[name="resposta_4"]').val(respostas.r4).attr("value", respostas.r4);
                                                                $('#atividade1 input[name="resposta_5"]').val(respostas.r5).attr("value", respostas.r5);
                                                                $('#atividade1 input[name="resposta_6"]').val(respostas.r6).attr("value", respostas.r6);
                                                                
                                                            });
                                                            
                                                        </script>     
                                                                                                        
                                                        </div>
                                                    </div>
                                                    
                                                    </div>
                                                    <div class="col-md-12" style="margin-top:50px;">                                                   
                                                    <p class="blue"><strong>B.Use the correct punctuati on at the end of the sentences. Use “?” or “.”. </p> </strong>
                                                    </div>                                                    
                                                    <form id="atividade2" class="form-inline" method="POST"  action='<?php echo base_url(); ?>exercicio/exercicioAction/<?php echo $id?>'>
                                                        <div class="container">
                                                            <div class="form-group col-md-12">
                                                                <input type="hidden" name="mRespostas" value='<?php foreach($respostas as $row){ if($row->atividade_id == 2 ) { echo $row->resposta_respostas; }} ?>'>
                                                                <label style="font-weight:normal; font-size: 18px;">1. Is Professor Ludemann from Germany</label>
                                                                <input type="text" name='resposta_1' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>                                                            
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label style="font-weight:normal; font-size: 18px;">2. Bruna is a web designer</label>
                                                                <input type="text" name='resposta_2' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>                                                            
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label style="font-weight:normal; font-size: 18px;">3. Is João a professional photographer</label>
                                                                <input type="text" name='resposta_3' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>                                                            
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label style="font-weight:normal; font-size: 18px;">4. Is Bruno’s hobby photography</label>
                                                                <input type="text" name='resposta_4' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>                                                            
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label style="font-weight:normal; font-size: 18px;">5. Photoshop is a soft ware with innumerous tools</label>
                                                                <input type="text" name='resposta_5' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>                                                            
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                            <input type="hidden" name="urlFormulario" value="<?php echo current_url();?>">
                                                            <input type="hidden" name="usuario_id" value="<?php echo $user?>">
                                                            <input type="hidden" name="atividade_id" value="2">                                                                                                                        
                                                            <input type="hidden" name="unidade_id" value="<?php echo $id?>">
                                                            <input type="hidden" name="resposta_data" value="<?php echo date('Y/m/d');?>">
                                                            <input type="hidden" name="resposta_id" value="<?php foreach($respostas as $row){ if($row->atividade_id == 2 ) { echo $row->resposta_id; }} ?>">
                                                            <?php 
                                                                date_default_timezone_set('America/Fortaleza');
                                                            ?>
                                                            <input type="hidden" name="resposta_hora" value="<?php echo date('H:i:s');?>">
                                                            <input type="hidden" name="respostas_respostas" value="">
                                                            <input type='submit' class="btn btn-success" value='Salvar Resposta' style="margin-top:10px;">
                                                            </div>
                                                     </form>
                                                        </div>
                                                        <script>                                                           
                                                            $("#atividade2").on("submit",function(){
                                                                var r1 = $('#atividade2 input[name="resposta_1"]').val();
                                                                var r2 = $('#atividade2 input[name="resposta_2"]').val();
                                                                var r3 = $('#atividade2 input[name="resposta_3"]').val();
                                                                var r4 = $('#atividade2 input[name="resposta_4"]').val();
                                                                var r5 = $('#atividade2 input[name="resposta_5"]').val();
                                                                                                                                
                                                                var respostas = '{"r1":"'+r1+'","r2":"'+r2+'","r3":"'+r3+'","r4":"'+r4+'","r5":"'+r5+'"}';
                                                                $('#atividade2 input[name="respostas_respostas"]').attr("value", respostas);
                                                            });
                                                            
                                                            $(document).ready(function(){
                                                                var respostas = JSON.parse($('#atividade2 input[name="mRespostas"]').val());
                                                                $('#atividade2 input[name="resposta_1"]').val(respostas.r1).attr("value", respostas.r1);
                                                                $('#atividade2 input[name="resposta_2"]').val(respostas.r2).attr("value", respostas.r2);
                                                                $('#atividade2 input[name="resposta_3"]').val(respostas.r3).attr("value", respostas.r3);
                                                                $('#atividade2 input[name="resposta_4"]').val(respostas.r4).attr("value", respostas.r4);
                                                                $('#atividade2 input[name="resposta_5"]').val(respostas.r5).attr("value", respostas.r5);
                                                                
                                                            });
                                                            
                                                        </script>
                                                        
                                                    
                                        <div class="col-md-12" style="margin-top:15px;">
                                        <form id="atividade3" class="form-inline" method="POST"  action='<?php echo base_url(); ?>exercicio/exercicioAction/<?php echo $id?>'>
                                            <input type="hidden" name="mRespostas" value='<?php foreach($respostas as $row){ if($row->atividade_id == 3 ) { echo $row->resposta_respostas; }} ?>'>
                                            <p class="blue"><strong>C.Connect the questi ons to the correct answers.</strong> </p>
                                             <div class="col-md-6">
                                                <p class="pergunta" style="margin-bottom:70px;">1. What is the professional photographer’s name? </p>
                                                <p class="pergunta" style="margin-bottom:70px;"> 2. What does Bruno do?</p>
                                                <p class="pergunta" style="margin-bottom:70px;">3. When did the professor move to Brazil?</p>
                                                <p class="pergunta" style="margin-bottom:70px;">4. Where is the professor from? </p>
                                                <p class="pergunta" style="margin-bottom:70px;">5. Why does João need Photoshop? </p>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="row" style="margin-bottom:50px;">
                                                    <span class="titulo">
                                                    <input type="text" name='resposta_1' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>     
                                                    His name is João.</span>
                                                </div>
                                                <div class="row mt-20" style="margin-bottom:50px;">
                                                    <span class="titulo">
                                                    <input type="text" name='resposta_2' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>     
                                                    To edit his photos.</span>
                                                </div>
                                                <div class="row mt-20" style="margin-bottom:50px;">
                                                    <span class="titulo">
                                                    <input type="text" name='resposta_3' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>     
                                                    He is a photographer</span>
                                                </div>
                                                <div class="row mt-20" style="margin-bottom:50px;">
                                                    <span class="titulo">
                                                    <input type="text" name='resposta_4' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>     
                                                    He is from Canada.</span>
                                                </div>
                                                <div class="row mt-20" style="margin-bottom:50px;">
                                                    <span class="titulo">
                                                    <input type="text" name='resposta_5' class="form-control mx-sm-3 linha" size="1" autocomplete="off" required>     
                                                    5 years ago.</span>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <input type="hidden" name="urlFormulario" value="<?php echo current_url();?>">
                                                <input type="hidden" name="usuario_id" value="<?php echo $user?>">
                                                <input type="hidden" name="atividade_id" value="3">                                                                                                                        
                                                <input type="hidden" name="unidade_id" value="<?php echo $id?>">
                                                <input type="hidden" name="resposta_data" value="<?php echo date('Y/m/d');?>">
                                                <input type="hidden" name="resposta_id" value="<?php foreach($respostas as $row){ if($row->atividade_id == 3 ) { echo $row->resposta_id; }} ?>">
                                                <?php 
                                                    date_default_timezone_set('America/Fortaleza');
                                                ?>
                                                <input type="hidden" name="resposta_hora" value="<?php echo date('H:i:s');?>">
                                                <input type="hidden" name="respostas_respostas" value="">
                                                <input type='submit' class="btn btn-success" value='Salvar Resposta'>
                                            </div>
                                            </form>
                                            <script>                                                           
                                                $("#atividade3").on("submit",function(){
                                                    var r1 = $('#atividade3 input[name="resposta_1"]').val();
                                                    var r2 = $('#atividade3 input[name="resposta_2"]').val();
                                                    var r3 = $('#atividade3 input[name="resposta_3"]').val();
                                                    var r4 = $('#atividade3 input[name="resposta_4"]').val();
                                                    var r5 = $('#atividade3 input[name="resposta_5"]').val();
                                                                                                                    
                                                    var respostas = '{"r1":"'+r1+'","r2":"'+r2+'","r3":"'+r3+'","r4":"'+r4+'","r5":"'+r5+'"}';
                                                    $('#atividade3 input[name="respostas_respostas"]').attr("value", respostas);
                                                });
                                                
                                                $(document).ready(function(){
                                                    var respostas = JSON.parse($('#atividade3 input[name="mRespostas"]').val());
                                                    $('#atividade3 input[name="resposta_1"]').val(respostas.r1).attr("value", respostas.r1);
                                                    $('#atividade3 input[name="resposta_2"]').val(respostas.r2).attr("value", respostas.r2);
                                                    $('#atividade3 input[name="resposta_3"]').val(respostas.r3).attr("value", respostas.r3);
                                                    $('#atividade3 input[name="resposta_4"]').val(respostas.r4).attr("value", respostas.r4);
                                                    $('#atividade3 input[name="resposta_5"]').val(respostas.r5).attr("value", respostas.r5);
                                                    
                                                });
                                                
                                            </script>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>