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
            <?= $this->Html->link(__('Edit Provider'), ['action' => 'edit', $provider->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Provider'), ['action' => 'delete', $provider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Providers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Provider'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="providers view content">
            <h3><?= h($provider->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($provider->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($provider->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('District') ?></th>
                    <td><?= $provider->has('district') ? $this->Html->link($provider->district->name, ['controller' => 'Districts', 'action' => 'view', $provider->district->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Province') ?></th>
                    <td><?= $provider->has('province') ? $this->Html->link($provider->province->name, ['controller' => 'Provinces', 'action' => 'view', $provider->province->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $provider->has('department') ? $this->Html->link($provider->department->name, ['controller' => 'Departments', 'action' => 'view', $provider->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($provider->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Phones') ?></h4>
                <?php if (!empty($provider->phones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Provider Id') ?></th>
                            <th><?= __('Number') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($provider->phones as $phones) : ?>
                        <tr>
                            <td><?= h($phones->id) ?></td>
                            <td><?= h($phones->provider_id) ?></td>
                            <td><?= h($phones->number) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Phones', 'action' => 'view', $phones->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Phones', 'action' => 'edit', $phones->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Phones', 'action' => 'delete', $phones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phones->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Products Purchases') ?></h4>
                <?php if (!empty($provider->products_purchases)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Purchase Id') ?></th>
                            <th><?= __('Provider Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($provider->products_purchases as $productsPurchases) : ?>
                        <tr>
                            <td><?= h($productsPurchases->id) ?></td>
                            <td><?= h($productsPurchases->purchase_id) ?></td>
                            <td><?= h($productsPurchases->provider_id) ?></td>
                            <td><?= h($productsPurchases->product_id) ?></td>
                            <td><?= h($productsPurchases->quantity) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProductsPurchases', 'action' => 'view', $productsPurchases->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsPurchases', 'action' => 'edit', $productsPurchases->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsPurchases', 'action' => 'delete', $productsPurchases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsPurchases->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Purchases') ?></h4>
                <?php if (!empty($provider->purchases)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Provider Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($provider->purchases as $purchases) : ?>
                        <tr>
                            <td><?= h($purchases->id) ?></td>
                            <td><?= h($purchases->provider_id) ?></td>
                            <td><?= h($purchases->date) ?></td>
                            <td><?= h($purchases->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Purchases', 'action' => 'view', $purchases->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Purchases', 'action' => 'edit', $purchases->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Purchases', 'action' => 'delete', $purchases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchases->id)]) ?>
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
