<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Vibur&display=swap" rel="stylesheet"> 
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->HTML->css('bootstrap/css/bootstrap.min.css') ?>
    <?= $this->HTML->css('bootstrap/css/home.css') ?>
    <?= $this->HTML->script('bootstrap.min.js') ?>
    <?= $this->HTML->script('popper.min.js') ?>
    <?= $this->HTML->script('app.js') ?>
    <?= $this->HTML->script('creative.js') ?>
    <?= $this->HTML->script('creative.min.js') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <style>

        .gachance {
          font-family: 'Vibur', cursive;
          font-size: 25px;
        }

        .dropdown {
            position: relative;
            display:flex;
        }
        
        .navbar-nav {
            list-style:none;
        }
        
        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
        }
        
        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute;
        }
        
        .dropdown-menu.show {
            display: block;
        }
        
        
        .dropdown-menu-right {
            right: 0;
            left: auto;
        }
        
        .dropdown-menu {
            top: 100%;
            z-index: 1000;
            min-width: 10rem;
            padding : 0.5rem 0;
            margin: 0.125rem 0 0 ;
            background-color: #fff;
            border: 1px solid black;
            border-radius: 0.25rem;
        }
        
        .dropdown-item { 
            display: block;
            width: 100%;
            padding: 0.25rem 1.5rem;
            clear: both;
            color: #212529;
            text-align: inherit;
        }
        
        .dropdown-toggle {
            text-decoration: none;
        }
        
        .email-icon {
            margin-top:9px;
            margin-right:11px;
        }
    
        

    </style>
  
</head>
<body>
<div class="top-nav">
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light py-3" id="mainNav">
      <div class="container">

        <!-- <a href="http://localhost:80/gachance/" class="navbar-brand gachance">gachance!</a> -->
        <?php echo $this->Html->link('gachance!', ['controller' => 'Home', 'action' => 'index'], ['class' => 'navbar-brand gachance']); ?>
        <!-- <a href="../" class="navbar-brand gachance">gachance!</a> -->

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarResponsive">
         
         
          <ul class="navbar-nav mr-auto my-2 my-lg-0">
            <li class="nav-item">
            <?php echo $this->Html->link('Market', ['controller' => 'Markets', 'action' => 'index'], ['class' => 'nav-link']); ?>
            </li>
            <li class="nav-item">
            <?php echo $this->Html->link('Sell', ['controller' => 'Markets', 'action' => 'add'], ['class' => 'nav-link']); ?>
            </li>
          </ul>
          
          
<!--
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Register</a>
            </li>
          </ul>
          
          
-->
          <ul class="navbar-nav ml-auto">
          
          <?php if($this->getRequest()->getSession()->read('Auth')) { ?>

            <div class="dropdown nav-item">
                
                <?php echo $this->Html->link(
                            $this->Html->image('email_icon.png',['width' => '30' , 'height' => '22', 'class'=>'email-icon']),
                            array(
                            'controller' => 'Home', 
                            'action' => 'index'
                            ), array('escape' => false)
                        ); ?>
                                             
               
                <a class="dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <?php echo($Auth->user('nickname')) ?> 
                    <span class="caret"></span></a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">회원정보수정</a>
                    <a class="dropdown-item" href="#">내 활동</a>
                    <?php echo $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'dropdown-item']); ?>
                </div>
            </div>

          <?php } else { ?>  
                                                                          
            <li class="nav-item">
              <?php echo $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link']); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link('Register', ['controller' => 'Users', 'action' => 'add'], ['class' => 'nav-link']); ?>
            </li>
                                                                      
          <?php } ?>

          </ul>
                                



          
        </div>
      </div>
    </nav>
    </div>


    <main class="main">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
    </main>
    
    

    <footer class="footer shadow-sm">
      <div class="container">
          <div class="row align-items-center text-center">
              <div class="col-md-12">
                  <span class="copyright">&copy; Gachance 2020</span>
              </div>
          </div>
      </div>
  </footer>


</body>
</html>
