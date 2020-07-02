<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Phone $phone
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Phone'), ['action' => 'edit', $phone->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Phone'), ['action' => 'delete', $phone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Phones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Phone'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="phones view content">
            <h3><?= h($phone->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Provider') ?></th>
                    <td><?= $phone->has('provider') ? $this->Html->link($phone->provider->name, ['controller' => 'Providers', 'action' => 'view', $phone->provider->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= h($phone->number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($phone->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
