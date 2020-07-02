<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Measurement $measurement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $measurement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $measurement->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Measurements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="measurements form content">
            <?= $this->Form->create($measurement) ?>
            <fieldset>
                <legend><?= __('Edit Measurement') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
