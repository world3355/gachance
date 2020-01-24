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
                <?= $this->Html->link(__('Edit Market'), ['action' => 'edit', $market->market_id], ['class' => 'side-nav-item']) ?>
                <?= $this->Form->postLink(__('Delete Market'), ['action' => 'delete', $market->market_id], ['confirm' => __('Are you sure you want to delete # {0}?', $market->market_id), 'class' => 'side-nav-item']) ?>
                <?= $this->Html->link(__('List Markets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                <?= $this->Html->link(__('New Market'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
        <div class="column-responsive column-80">
            <div class="markets view content">
                <h3><?= h($market->market_id) ?></h3>
                <table>
                    <tr>
                        <th><?= __('Product Name') ?></th>
                        <td><?= h($market->product_name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Product Img') ?></th>
                        <td><?= h($market->product_img) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Product Info') ?></th>
                        <td><?= h($market->product_info) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Product Condition') ?></th>
                        <td><?= h($market->product_condition) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Product Exchange') ?></th>
                        <td><?= h($market->product_exchange) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('User') ?></th>
                        <td><?= $market->has('user') ? $this->Html->link($market->user->name, ['controller' => 'Users', 'action' => 'view', $market->user->user_id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Market Id') ?></th>
                        <td><?= $this->Number->format($market->market_id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Product Price') ?></th>
                        <td><?= $this->Number->format($market->product_price) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Product Recommended') ?></th>
                        <td><?= $this->Number->format($market->product_recommended) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($market->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($market->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>