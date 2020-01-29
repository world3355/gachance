<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<head>
    <style>
        body {
            margin-top:100px;
            margin-left:100px;
            background-color:rgb(249, 249, 249);
            overflow:auto;
            font-size:14px;
            margin:0px;
            line-height: 1;
            height: 100vh;
        }
        
        .signup-page {
            display : flex;
            height: 100vh;
            vertical-align: middle;
            justify-content: center;
            align-items: center;
            padding: 100px 0px;
            box-sizing : border-box;
            letter-spacing: -0.5px;
            margin-top: 30px;
        }
            
        .signup-form {
            width:570px;
            background: rgb(255, 255, 255) none repeat scroll 0% 0%;
            padding : 60px 60px 50px 60px;
            box-shadow : rgba(0, 0, 0, 0.1) 0px 3px 6px 0px;
        }
        
        .main {
            height: 100vh;
        }
        
        .signup-title-container {
            display : flex;
            justify-content: center;
            margin-bottom : 45px;
        }
        
        
        .signup-title {
            font-family: 'Vibur', cursive;
            font-size: 65px;
        }
        
        .signup-btn {
            display : flex;
            justify-content: center;
            margin-top: 30px;
        }
                 
        
    </style>
</head>
<body>
    <div class="signup-page">
        <div class="signup-back">
            <div class="signup-card">

               <?= $this->Form->create($user) ?>

                <div class="signup-form">

                   <div class="signup-title-container">
                       <div class="signup-title">Sign Up</div>
                   </div>
                    
                    <hr>

                    <?= $this->Form->control('email', ['label'=>'', 'class'=>'form-control','placeholder'=>'Enter email']) ?>
                    
                    <?= $this->Form->control('password', ['label'=>'', 'class'=>'form-control','placeholder'=>'Enter password']) ?>
                    
                    <?= $this->Form->control('nickname', ['label'=>'', 'class'=>'form-control','placeholder'=>'Enter nickname']) ?>
                    
                    <?= $this->Form->control('name', ['label'=>'', 'class'=>'form-control','placeholder'=>'Enter name']) ?>
                    
                    <?= $this->Form->control('phone', ['label'=>'', 'class'=>'form-control','placeholder'=>'Enter phone']) ?>
                    
                    
                    <?= $this->Form->control('role', ['label' =>'유저권한','options'=>['admin'=>'Admin','staff'=>'Staff'],'default'=>'staff' , 'type'=>'hidden']) ?>
                    
                    
                   <div class="signup-btn">
                    <?= $this->Form->button('Sign Up', ['class'=>'btn btn-success']); ?>
                    <?= $this->Form->end() ?>
                   </div>
                   
                </div>


            </div>
        </div>
    </div>
</body>
