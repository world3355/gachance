<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
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
    <nav class="large-2 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('유저추가'), ['action' => 'add']) ?></li>
            <li>
                <?php
                    if($this->getRequest()->getSession()->read('Auth')) {
                        echo $this->Html->link(__($Auth->user('nickname') .'님' . ' 로그아웃'), [ 'action' =>
                        'logout']);
                    } else {
                        echo $this->Html->link(__('로그인'), ['action' => 'login']);
                    }
                ?>
            </li>
        </ul>
    </nav>
    <div class="users index content">
        <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Users') ?></h3>
        
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('user_id') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('password') ?></th>
                        <th><?= $this->Paginator->sort('nickname') ?></th>
                        <th><?= $this->Paginator->sort('name') ?></th>
                        <th><?= $this->Paginator->sort('phone') ?></th>
                        <th><?= $this->Paginator->sort('role') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->user_id) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->password) ?></td>
                        <td><?= h($user->nickname) ?></td>
                        <td><?= h($user->name) ?></td>
                        <td><?= h($user->phone) ?></td>
                        <td><?= h($user->role) ?></td>
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
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