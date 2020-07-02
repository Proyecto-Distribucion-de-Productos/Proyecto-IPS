<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider[]|\Cake\Collection\CollectionInterface $providers
 */
?>
<div class="providers index content">
    <?= $this->Html->link(__('New Provider'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Providers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('district_id') ?></th>
                    <th><?= $this->Paginator->sort('province_id') ?></th>
                    <th><?= $this->Paginator->sort('department_id') ?></th>
                    <th><?= $this->Paginator->sort('direction') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($providers as $provider): ?>
                <tr>
                    <td><?= $this->Number->format($provider->id) ?></td>
                    <td><?= h($provider->name) ?></td>
                    <td><?= h($provider->email) ?></td>
                    <td><?= $provider->has('district') ? $this->Html->link($provider->district->name, ['controller' => 'Districts', 'action' => 'view', $provider->district->id]) : '' ?></td>
                    <td><?= $provider->has('province') ? $this->Html->link($provider->province->name, ['controller' => 'Provinces', 'action' => 'view', $provider->province->id]) : '' ?></td>
                    <td><?= $provider->has('department') ? $this->Html->link($provider->department->name, ['controller' => 'Departments', 'action' => 'view', $provider->department->id]) : '' ?></td>
                    <td><?= h($provider->direction) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $provider->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $provider->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $provider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]) ?>
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
