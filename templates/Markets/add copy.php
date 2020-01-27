<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Market $market
 */
?>
<head>
    <style>
        body {
            margin-top:100px;
            margin-left:100px;
        }
    </style>
</head>
<body>
    <div class="row">
        <!-- <aside class="column">
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('List Markets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside> -->
        <div class="column-responsive column-80">
            <div class="markets form content">
                <?= $this->Form->create($market, ['type'=>'file']) ?>
                <fieldset>
                    <legend><?= __('Add Market') ?></legend>
                    <?php
                        echo $this->Form->control('product_name');
                        echo $this->Form->control('product_price');
                        echo '아이콘설정';
                        echo $this->Form->file('product_img', ['name'=>'product_img']);
                        echo $this->Form->control('product_info');
                        echo $this->Form->control('product_condition');
                        echo $this->Form->control('product_exchange');
                        echo $this->Form->control('product_recommended', [ 'type' => 'hidden', 'value' => 0 ]);
                        echo $this->Form->control('user_id' , [ 'label' => '작성자' , 'type' => 'hidden' , 'id' => 'user_id' , 'value' => $user_id ]);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>