<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsPurchase $productsPurchase
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Products Purchases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsPurchases form content">
            <?= $this->Form->create($productsPurchase) ?>
            <fieldset>
                <legend><?= __('Add Products Purchase') ?></legend>
                <?php
                    echo $this->Form->control('purchase_id', ['options' => $purchases]);
                    echo $this->Form->control('provider_id', ['options' => $providers]);
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
