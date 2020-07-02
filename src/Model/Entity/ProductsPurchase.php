<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsPurchase Entity
 *
 * @property int $id
 * @property int $purchase_id
 * @property int $provider_id
 * @property int $product_id
 * @property int $quantity
 *
 * @property \App\Model\Entity\Purchase $purchase
 * @property \App\Model\Entity\Provider $provider
 * @property \App\Model\Entity\Product $product
 */
class ProductsPurchase extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'purchase_id' => true,
        'provider_id' => true,
        'product_id' => true,
        'quantity' => true,
        'purchase' => true,
        'provider' => true,
        'product' => true,
    ];
}
