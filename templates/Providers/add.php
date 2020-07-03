<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider $provider
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Providers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="providers form content">
            <?= $this->Form->create($provider) ?>
            <fieldset>
                <legend><?= __('Add Provider') ?></legend>
                <?php
                    echo $this->Form->control('ruc');
                    echo $this->Form->control('email');
                    echo $this->Form->control('district_id', ['options' => $districts]);
                    echo $this->Form->control('province_id', ['options' => $provinces]);
                    echo $this->Form->control('department_id', ['options' => $departments]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
