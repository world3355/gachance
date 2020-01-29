<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Market[]|\Cake\Collection\CollectionInterface $markets
 */
?>
<head>
    <style>
        body {
            margin-top:100px;
            margin-left:100px;
            background-color:#F9F9F9;
        }
        
        #ls-container {
            width: 100%;
        }
        
        .ls-box {
			background-color:white;
			display:inline-block;
			width:220px;
			height:330px;
			margin : 0 1.5% 6% 1.5%;
            border-color:dimgray;
        }
        
       .ls-box .space{
            margin-top:4px;
        }
        
        .ls-box-image {
		width: 100%;
		height: 100%;
	    }
        
        .ls-box-image2 {
            width: 100%;
        }

        .ls-image {
            /* border: solid black 1px; */
            width: 100%;
            height: 220px;
            color: green;
        }
        
        .ls-imgbox {
            position: relative;
            display: block;
            margin: 0 auto;
            cursor: pointer;
        }

        .ls-title { 
            margin-left:15px;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
		}
        
	    .ls-price {
			margin-top:5px;
            margin-left:15px;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
            color:#d60d0d;
		}
        
        .yen {
            margin-top:12px;
            margin-left:5px;
        }
        
        
        
        
        
    </style>
</head>
<body>
    <div class="markets index content">
        <div class="container">
        
            <div class="head">
            </div>
            
            <hr>
            
            <div class="ls-container">
               
               <?php foreach ($markets as $market): ?>
                    <div class="ls-box">

                        <div class = "ls-imgbox">               
                            <div class = "ls-image">
                                <?= $this->Html->image($market->product_img, ['class'=>'ls-box-image']) ?>
                            </div>
                        </div>
                        
                        <hr>

                        <div class="space"></div>
                        <h6 class="ls-title"><?= h($market->product_name) ?></h6>

                        <div class="row ls-price">
                        <h3 class=""><?= $this->Number->format($market->product_price) ?></h3>
                        <h6 class="yen">円</h6>
                        </div>

                        <div class="space"></div>

                    </div>

                <?php endforeach; ?>
                
            </div>



        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
            </div>
        
        
        
        
        </div>
    </div>
</body>