<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\District $district
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit District'), ['action' => 'edit', $district->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete District'), ['action' => 'delete', $district->id], ['confirm' => __('Are you sure you want to delete # {0}?', $district->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Districts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New District'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="districts view content">
            <h3><?= h($district->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Province') ?></th>
                    <td><?= $district->has('province') ? $this->Html->link($district->province->name, ['controller' => 'Provinces', 'action' => 'view', $district->province->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $district->has('department') ? $this->Html->link($district->department->name, ['controller' => 'Departments', 'action' => 'view', $district->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($district->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($district->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Providers') ?></h4>
                <?php if (!empty($district->providers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('District Id') ?></th>
                            <th><?= __('Province Id') ?></th>
                            <th><?= __('Department Id') ?></th>
                            <th><?= __('Direction') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($district->providers as $providers) : ?>
                        <tr>
                            <td><?= h($providers->id) ?></td>
                            <td><?= h($providers->name) ?></td>
                            <td><?= h($providers->email) ?></td>
                            <td><?= h($providers->district_id) ?></td>
                            <td><?= h($providers->province_id) ?></td>
                            <td><?= h($providers->department_id) ?></td>
                            <td><?= h($providers->direction) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Providers', 'action' => 'view', $providers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Providers', 'action' => 'edit', $providers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Providers', 'action' => 'delete', $providers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $providers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
