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
        
        .login-page {
            display : flex;
            height: 100vh;
            vertical-align: middle;
            justify-content: center;
            align-items: center;
            padding: 100px 0px;
            box-sizing : border-box;
            letter-spacing: -0.5px;
        }
            
        .login-form {
            width:570px;
            background: rgb(255, 255, 255) none repeat scroll 0% 0%;
            padding : 60px 60px 50px 60px;
            box-shadow : rgba(0, 0, 0, 0.1) 0px 3px 6px 0px;
        }
        
        .main {
            height: 100vh;
        }
        
        .login-title-container {
            display : flex;
            justify-content: center;
            margin-bottom : 45px;
        }
        
        
        .login-title {
            font-family: 'Vibur', cursive;
            font-size: 65px;
        }
        
        .login-btn {
            display : flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        
        
        
    </style>
</head>
<body>
    <div class="login-page">
        <div class="login-back">
            <div class="login-card">

               <?= $this->Flash->render() ?>
               <?= $this->Form->create() ?>

                <div class="login-form">

                   <div class="login-title-container">
                       <div class="login-title">Login</div>
                   </div>
                    
                    <hr>

                    <?= $this->Form->control('email', ['label'=>'', 'class'=>'form-control','placeholder'=>'Enter id']) ?>
                    <?= $this->Form->control('password', ['label'=>'', 'class'=>'form-control','placeholder'=>'Enter password']) ?>

                   <div class="login-btn">
                    <?= $this->Form->button('Login', ['class'=>'btn btn-primary']); ?>
                    <?= $this->Form->end() ?>
                   </div>
                   
                </div>


            </div>
        </div>
    </div>
</body>
































