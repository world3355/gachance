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
    <style>

        .gachance {
          font-family: 'Vibur', cursive;
          font-size: 25px;
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
              <a class="nav-link" href="">Market</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Sell</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Register</a>
            </li>
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
