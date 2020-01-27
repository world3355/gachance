<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Market $market
 */
?>
<head>

    <script>
        window.onload = function(){
        
            $('#img-input').change(function(){
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
                 {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#holder').attr('src', e.target.result);
                    }
                   reader.readAsDataURL(input.files[0]);
                }
                else
                {
                  $('#img').attr('src', '/assets/no_preview.png');
                }
            });
        }
        
    </script>
   
    <style>
        body {
            margin-top:100px;
        }
        
        
        

        .product-select {
            
/*            justify-content: center;*/
            margin-left: 0px;
        }
        
        .product-condi {
            margin-right: 30px;
        }
        

    </style>
    
    
    
</head>
<body>
    <div class="container" >
        <div class="bs-docs-section">
          <?= $this->Form->create($market, ['type'=>'file' , 'class'=>'']) ?>
          
          
          
          
           <div class = "row">
                <div class="col-lg-7">
                     <div class="bs-component">


                        <h4>상품사진 업로드</h4>
                        <hr />

                            <div class="form-group text-center">
                                <img class="" id="holder" alt="d" width="360px" height="360px" src="<?php echo $this->Url->image('default_image.jpg'); ?>" >
                            </div>
                            <fieldset>
                                <?php
                                    echo $this->Form->file('product_img', ['name'=>'product_img' , 'id' => 'img-input']);
                                ?>
                            </fieldset>


                    </div>
                </div>


                <div class="col-lg-5">
                     <div class="bs-component">

                       <h4>정보입력</h4>
                       <hr />
                            
                            

                            <fieldset>
                                <?php
                                    echo $this->Form->control('product_name', ['class'=>'form-control','placeholder'=>'Enter product name']);
                                    echo $this->Form->control('product_price', ['class'=>'form-control','placeholder'=>'Enter product price']);
                                    echo $this->Form->control('product_info', ['class'=>'form-control form-control-sm','placeholder'=>'Enter product information', 'type'=>'textarea', 'escape' => false]);
                                ?>
                            </fieldset>
                            
                            <fieldset class="row product-select">
                               <div class="product-condi">
                                    <?php
                                        echo $this->Form->control('product_condition', [ 'class'=>'form-control product-condi', 'type' => 'select', 'options' => ['최상','보통','최저'] ]);
                                    ?>
                               </div>
                                    <?php
                                        echo $this->Form->control('product_exchange', [ 'class'=>'form-control product-excha', 'type' => 'select' ,'options' => ['가능','불가능'] ]);
                                        echo $this->Form->control('product_recommended', [ 'type' => 'hidden', 'value' => 0 ]);
                                        echo $this->Form->control('user_id' , [ 'label' => '작성자' , 'type' => 'hidden' , 'id' => 'user_id' , 'value' => $user_id ]);
                                    ?>
                            </fieldset>
                            
                            <?= $this->Form->button(__('Submit')) ?>
                            <?= $this->Form->end() ?>
                        </div>

                </div> 

            </div>
            
            
            
            
        </div>
    </div>
</body>