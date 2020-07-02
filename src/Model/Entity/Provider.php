<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Provider Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property int $district_id
 * @property int $province_id
 * @property int $department_id
 * @property string $direction
 *
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\Province $province
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Phone[] $phones
 * @property \App\Model\Entity\ProductsPurchase[] $products_purchases
 * @property \App\Model\Entity\Purchase[] $purchases
 */
class Provider extends Entity
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
        'name' => true,
        'email' => true,
        'district_id' => true,
        'province_id' => true,
        'department_id' => true,
        'direction' => true,
        'district' => true,
        'province' => true,
        'department' => true,
        'phones' => true,
        'products_purchases' => true,
        'purchases' => true,
    ];
}
