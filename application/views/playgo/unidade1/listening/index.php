
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
                                                
                                                <h3 class="blue" data-unidade="<?php echo $id?>" data-item="3">3.PRONUNCIATION
                                                <audio controls controlsList="nodownload">
                                                        <source src="<?php echo base_url(); ?>assets/audio/unit1/pronuciation/pronuciation.ogg" type="audio/ogg">
                                                    </audio>
                                                </h3>
                                                <div class="col-md-12" style="margin-top:20px;">
                                                <p style="margin-left:-15px;" class="blue"> <strong>A.Observe how the sound of the letters “PH” resembles an “F”. 
                                                    Practice by repeating the words below.<strong></p>                                                    
                                                        <div class="col-md-1">
                                                            <p >Photo</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>Graph</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>Phone</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>Laugh</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>harmacy</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>Alphabet</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>Pamphlet</p>
                                                        </div>
                                                   <div>
                                                    <div class="row" style="margin-top:60px;">
                                                    <p  class="blue"> <strong>B.Listen to your teacher say the words bellow and repeat after him. 
                                                            Observe the pronunciation of the suffixtion.</strong></p>
                                                       
                                                        <div class="col-md-1">
                                                            <p >  Production  </p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>  Edition  </p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>  Solution  </p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>   Position  </p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>   Option  </p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>   Introduction  </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <p  class="blue"> <strong> C.Read the following sentence to practice pronunciation. Observe the underlined letters.</strong></p>
                                                        <p class="container">Photoshop is for the edition of photos and other graphic designing production.</p>
                                                    
                                                        
                                                        <br>
                                                        <h3 class="blue">4.LISTENING
                                                        <audio controls controlsList="nodownload">
                                                         <source src="<?php echo base_url(); ?>assets/audio/unit1/listining/listining_a.ogg" type="audio/ogg">
                                                        </audio></h3>
                                                        
                                                        <p class="blue"><strong>A.Listen and write the words you hear on the lines.</strong>                                                         
                                                        </p>
                                                        <p>Graphic design is an important <span class="blue"> <strong> tool </strong> </span> that enhances how you <span class="blue"> <strong> communicate </strong> </span> with people.
                                                        It is used to <span class="blue"> <strong> transmit </strong> </span> ideas in an effective and beautiful way. Professionally designed
                                                        graphics cause positive opinions about your <span class="blue"> <strong> product </strong> </span>, service or <span class="blue"> <strong> brand </strong> </span>.</p>
                                                        <p class="blue"><strong>B.List the professionals who use Photoshop.</strong>
                                                        <audio controls controlsList="nodownload">
                                                         <source src="<?php echo base_url(); ?>assets/audio/unit1/listining/listining_b.ogg" type="audio/ogg">
                                                        </audio>
                                                        </p>
                                                        <p>Photoshop is an important tool used by many professionals of different areas. It is extremely
                                                        important for photographers, web designers, game designers, illustrators and many others.</p>

                                                        <form id="atividade4" class="form-inline" method="POST"  action='<?php echo base_url(); ?>exercicio/exercicioAction/<?php echo $id?>'>
                                                            <span class="titulo">
                                                                1.
                                                                <input type="text" name='resposta_1' class="form-control mx-sm-3 linha" size="20">     
                                                            </span>
                                                            <span class="titulo">
                                                                2.
                                                                <input type="text" name='resposta_2' class="form-control mx-sm-3 linha" size="20">     
                                                            </span>
                                                            <span class="titulo">
                                                                3.
                                                                <input type="text" name='resposta_3' class="form-control mx-sm-3 linha" size="20">     
                                                            </span>
                                                            <span class="titulo">
                                                                4.
                                                                <input type="text" name='resposta_4' class="form-control mx-sm-3 linha" size="20">     
                                                            </span>
                                                            <input type="hidden" name="mRespostas" value='<?php foreach($respostas as $row){ if($row->atividade_id == 4 ) { echo $row->resposta_respostas; }} ?>'>
                                                            <input type="hidden" name="urlFormulario" value="<?php echo current_url();?>">
                                                            <input type="hidden" name="usuario_id" value="<?php echo $user?>">
                                                            <input type="hidden" name="atividade_id" value="4">                                                                                                                        
                                                            <input type="hidden" name="unidade_id" value="<?php echo $id?>">
                                                            <input type="hidden" name="resposta_data" value="<?php echo date('Y/m/d');?>">
                                                            <input type="hidden" name="resposta_id" value="<?php foreach($respostas as $row){ if($row->atividade_id == 4 ) { echo $row->resposta_id; }} ?>">
                                                            <?php 
                                                                date_default_timezone_set('America/Fortaleza');
                                                            ?>
                                                            <input type="hidden" name="resposta_hora" value="<?php echo date('H:i:s');?>">
                                                            <input type="hidden" name="respostas_respostas" value="">
                                                            <input type="submit" value="Salvar" class="btn btn-success">
                                                        </form>
                                                        <script>                                                           
                                                            $("#atividade4").on("submit",function(){
                                                                var r1 = $('#atividade4 input[name="resposta_1"]').val();
                                                                var r2 = $('#atividade4 input[name="resposta_2"]').val();
                                                                var r3 = $('#atividade4 input[name="resposta_3"]').val();
                                                                var r4 = $('#atividade4 input[name="resposta_4"]').val();                                                                
                                                                                                                                
                                                                var respostas = '{"r1":"'+r1+'","r2":"'+r2+'","r3":"'+r3+'","r4":"'+r4+'"}';
                                                                $('#atividade4 input[name="respostas_respostas"]').attr("value", respostas);
                                                            });
                                                            
                                                            $(document).ready(function(){
                                                                var respostas = JSON.parse($('#atividade4 input[name="mRespostas"]').val());
                                                                $('#atividade4 input[name="resposta_1"]').val(respostas.r1).attr("value", respostas.r1);
                                                                $('#atividade4 input[name="resposta_2"]').val(respostas.r2).attr("value", respostas.r2);
                                                                $('#atividade4 input[name="resposta_3"]').val(respostas.r3).attr("value", respostas.r3);
                                                                $('#atividade4 input[name="resposta_4"]').val(respostas.r4).attr("value", respostas.r4);                                                                
                                                                
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
                </div>
            </div>
        </div>