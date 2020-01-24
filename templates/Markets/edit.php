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
        <aside class="column">
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $market->market_id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $market->market_id), 'class' => 'side-nav-item']
                ) ?>
                <?= $this->Html->link(__('List Markets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
        <div class="column-responsive column-80">
            <div class="markets form content">
                <?= $this->Form->create($market) ?>
                <fieldset>
                    <legend><?= __('Edit Market') ?></legend>
                    <?php
                        echo $this->Form->control('product_name');
                        echo $this->Form->control('product_price');
                        echo $this->Form->control('product_img');
                        echo $this->Form->control('product_info');
                        echo $this->Form->control('product_condition');
                        echo $this->Form->control('product_exchange');
                        echo $this->Form->control('product_recommended');
                        echo $this->Form->control('user_id', ['options' => $users]);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>