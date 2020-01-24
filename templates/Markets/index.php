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
        }
    </style>
</head>
<body>
    <div class="markets index content">
        <?= $this->Html->link(__('New Market'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Markets') ?></h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('market_id') ?></th>
                        <th><?= $this->Paginator->sort('product_name') ?></th>
                        <th><?= $this->Paginator->sort('product_price') ?></th>
                        <th><?= $this->Paginator->sort('product_img') ?></th>
                        <th><?= $this->Paginator->sort('product_info') ?></th>
                        <th><?= $this->Paginator->sort('product_condition') ?></th>
                        <th><?= $this->Paginator->sort('product_exchange') ?></th>
                        <th><?= $this->Paginator->sort('product_recommended') ?></th>
                        <th><?= $this->Paginator->sort('user_id') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($markets as $market): ?>
                    <tr>
                        <td><?= $this->Number->format($market->market_id) ?></td>
                        <td><?= h($market->product_name) ?></td>
                        <td><?= $this->Number->format($market->product_price) ?></td>
                        <td><?= h($market->product_img) ?></td>
                        <td><?= h($market->product_info) ?></td>
                        <td><?= h($market->product_condition) ?></td>
                        <td><?= h($market->product_exchange) ?></td>
                        <td><?= $this->Number->format($market->product_recommended) ?></td>
                        <td><?= $market->has('user') ? $this->Html->link($market->user->name, ['controller' => 'Users', 'action' => 'view', $market->user->user_id]) : '' ?></td>
                        <td><?= h($market->created) ?></td>
                        <td><?= h($market->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $market->market_id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $market->market_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $market->market_id], ['confirm' => __('Are you sure you want to delete # {0}?', $market->market_id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
</body>