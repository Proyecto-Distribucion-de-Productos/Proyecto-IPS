<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsPurchase[]|\Cake\Collection\CollectionInterface $productsPurchases
 */
?>
<div class="productsPurchases index content">
    <?= $this->Html->link(__('New Products Purchase'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Products Purchases') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('purchase_id') ?></th>
                    <th><?= $this->Paginator->sort('provider_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productsPurchases as $productsPurchase): ?>
                <tr>
                    <td><?= $this->Number->format($productsPurchase->id) ?></td>
                    <td><?= $productsPurchase->has('purchase') ? $this->Html->link($productsPurchase->purchase->id, ['controller' => 'Purchases', 'action' => 'view', $productsPurchase->purchase->id]) : '' ?></td>
                    <td><?= $productsPurchase->has('provider') ? $this->Html->link($productsPurchase->provider->name, ['controller' => 'Providers', 'action' => 'view', $productsPurchase->provider->id]) : '' ?></td>
                    <td><?= $productsPurchase->has('product') ? $this->Html->link($productsPurchase->product->name, ['controller' => 'Products', 'action' => 'view', $productsPurchase->product->id]) : '' ?></td>
                    <td><?= $this->Number->format($productsPurchase->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productsPurchase->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsPurchase->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsPurchase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsPurchase->id)]) ?>
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
