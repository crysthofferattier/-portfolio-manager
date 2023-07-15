<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Investment $investment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Investments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="investments form content">
            <?= $this->Form->create($investment) ?>
            <fieldset>
                <legend><?= __('Add Investment') ?></legend>
                <?php
                    echo $this->Form->control('symbol');
                    echo $this->Form->control('quantity');
                echo $this->Form->control('value');
                echo $this->Form->control('trade_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
