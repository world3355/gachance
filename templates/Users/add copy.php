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
        }
    </style>
</head>
<body>
    <div class="row">
        <aside class="column">
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
        
        
        
        
        
        
        
        <div class="column-responsive column-80">
            <div class="users form content">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Add User') ?></legend>
                    <?php
                        echo $this->Form->control('email');
                        echo $this->Form->control('password');
                        echo $this->Form->control('nickname');
                        echo $this->Form->control('name');
                        echo $this->Form->control('phone');
                        echo $this->Form->control('role', ['label' =>'유저권한','options'=>['admin'=>'Admin','staff'=>'Staff'],'default'=>'staff']);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
        
        
        
        
        
        
        
    </div>
</body>