<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Province $province
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Province'), ['action' => 'edit', $province->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Province'), ['action' => 'delete', $province->id], ['confirm' => __('Are you sure you want to delete # {0}?', $province->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Provinces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Province'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="provinces view content">
            <h3><?= h($province->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $province->has('department') ? $this->Html->link($province->department->name, ['controller' => 'Departments', 'action' => 'view', $province->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($province->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($province->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Districts') ?></h4>
                <?php if (!empty($province->districts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Province Id') ?></th>
                            <th><?= __('Department Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($province->districts as $districts) : ?>
                        <tr>
                            <td><?= h($districts->id) ?></td>
                            <td><?= h($districts->province_id) ?></td>
                            <td><?= h($districts->department_id) ?></td>
                            <td><?= h($districts->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Districts', 'action' => 'view', $districts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Districts', 'action' => 'edit', $districts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Districts', 'action' => 'delete', $districts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $districts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Providers') ?></h4>
                <?php if (!empty($province->providers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('District Id') ?></th>
                            <th><?= __('Province Id') ?></th>
                            <th><?= __('Department Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($province->providers as $providers) : ?>
                        <tr>
                            <td><?= h($providers->id) ?></td>
                            <td><?= h($providers->name) ?></td>
                            <td><?= h($providers->email) ?></td>
                            <td><?= h($providers->district_id) ?></td>
                            <td><?= h($providers->province_id) ?></td>
                            <td><?= h($providers->department_id) ?></td>
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
