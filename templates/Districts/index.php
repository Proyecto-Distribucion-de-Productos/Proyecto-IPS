<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\District[]|\Cake\Collection\CollectionInterface $districts
 */
?>
<div class="districts index content">
    <?= $this->Html->link(__('New District'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Districts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('province_id') ?></th>
                    <th><?= $this->Paginator->sort('department_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($districts as $district): ?>
                <tr>
                    <td><?= $this->Number->format($district->id) ?></td>
                    <td><?= $district->has('province') ? $this->Html->link($district->province->name, ['controller' => 'Provinces', 'action' => 'view', $district->province->id]) : '' ?></td>
                    <td><?= $district->has('department') ? $this->Html->link($district->department->name, ['controller' => 'Departments', 'action' => 'view', $district->department->id]) : '' ?></td>
                    <td><?= h($district->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $district->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $district->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $district->id], ['confirm' => __('Are you sure you want to delete # {0}?', $district->id)]) ?>
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
