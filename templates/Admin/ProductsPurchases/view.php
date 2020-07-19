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
            <?= $this->Html->link(__('Edit Products Purchase'), ['action' => 'edit', $productsPurchase->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Products Purchase'), ['action' => 'delete', $productsPurchase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsPurchase->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products Purchases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Products Purchase'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsPurchases view content">
            <h3><?= h($productsPurchase->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Purchase') ?></th>
                    <td><?= $productsPurchase->has('purchase') ? $this->Html->link($productsPurchase->purchase->id, ['controller' => 'Purchases', 'action' => 'view', $productsPurchase->purchase->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Provider') ?></th>
                    <td><?= $productsPurchase->has('provider') ? $this->Html->link($productsPurchase->provider->name, ['controller' => 'Providers', 'action' => 'view', $productsPurchase->provider->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productsPurchase->has('product') ? $this->Html->link($productsPurchase->product->name, ['controller' => 'Products', 'action' => 'view', $productsPurchase->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productsPurchase->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($productsPurchase->quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
