<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 * 
 */
?>
<html>
<head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <?= $this->HTML->script('creative.js') ?>
      <?= $this->HTML->script('creative.min.js') ?>
      
      <link href="https://fonts.googleapis.com/css?family=Vibur&display=swap" rel="stylesheet">



   <style>

      html {
         font-family: sans-serif;
         line-height: 1.15;
         -webkit-text-size-adjust: 100%;
         -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
         }

      article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
         display: block;
         }

      body {
         margin: 0;
         font-family: "Merriweather", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
         font-weight: 400;
         line-height: 1.5;
         color: #212529;
         text-align: left;
         background-color: #fff;
         scroll-snap-type: y mandatory;
         }
         
      .container {
         width: 100%;
         height : auto;
         padding-right: 15px;
         padding-left: 15px;
         margin-right: auto;
         margin-left: auto;
         }

      header.masthead {
         height: 100vh;
         min-height: 40rem;
         padding-top: 72px;
         padding-bottom: 0;
         }

      header.masthead h1 {
         font-size: 5rem;
         }

      @media (min-width: 992px) {
         header.masthead {
            height: 100vh;
            min-height: 40rem;
            padding-top: 72px;
            padding-bottom: 0;
         }
         header.masthead h1 {
            font-size: 9rem;
         }
      }

      @media (min-width: 1200px) {
         header.masthead h1 {
            font-size: 13rem;
         }
      }

      .page-section {
         height: 100vh;
         min-height: 40rem;
         padding: 8rem 0;
         }

      .bg-primary {
         background-color: grey !important;
         }

      .about-botton {
         color: black;
         text-decoration: underline;
         }

      .justify-content-center {
         justify-content: center !important;
         }

      .gachance-index {
         font-family: 'Vibur', cursive;
        }
 
      .main-img {
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
      }



   </style>
</head>
<body id="page-top">

      <header class="masthead">
         <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
            
               <div class="col-lg-10 align-self-end">

                  <h1 class="text-black font-weight-bold gachance-index">gachance!</h1>

               </div>

                <div class="col-lg-8 align-self-baseline">
                     <?= $this->Html->image('blue.png', ['alt' => 'Blue', 'width' => '150px', 'height' => '150px']); ?>
                     <?= $this->Html->image('red.png', ['alt' => 'Red', 'width' => '150px', 'height' => '150px']); ?>
                     <?= $this->Html->image('yellow.png', ['alt' => 'Yellow', 'width' => '150px', 'height' => '150px']); ?>
               </div>

               <div class="col-lg-8 align-self-baseline about-button"><a class="about-botton js-scroll-trigger" href="#about">もっと詳しく</a></div>

            </div>
         </div>
      </header>
   

         <!-- About Section -->
      <section class="page-section bg-primary" id="about">
         <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
               <h2 class="text-black mt-0">gachance!とは？</h2>
               <hr class="divider light my-4">
               <p class="text-black-50 mb-4">ガチャを買ったのにこれ、もうもってんじゃん！！　もしくはこれほしくなかったのに！！悔しい。。。もう一度の機会がほしい。。そこのあなた！このサービスならきっといいことがあるよ！</p>
               <a class="btn btn-light btn-xl js-scroll-trigger">加入する</a>
            </div>
            </div>
         </div>
      </section>


</body>

</html>

