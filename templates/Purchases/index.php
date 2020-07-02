<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Purchase[]|\Cake\Collection\CollectionInterface $purchases
 */
?>
<div class="purchases index content">
    <?= $this->Html->link(__('New Purchase'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Purchases') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('provider_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($purchases as $purchase): ?>
                <tr>
                    <td><?= $this->Number->format($purchase->id) ?></td>
                    <td><?= $purchase->has('provider') ? $this->Html->link($purchase->provider->name, ['controller' => 'Providers', 'action' => 'view', $purchase->provider->id]) : '' ?></td>
                    <td><?= h($purchase->date) ?></td>
                    <td><?= $purchase->has('user') ? $this->Html->link($purchase->user->name, ['controller' => 'Users', 'action' => 'view', $purchase->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $purchase->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $purchase->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $purchase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchase->id)]) ?>
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
