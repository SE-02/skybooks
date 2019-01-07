<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ManageWarehouse Entity
 *
 * @property int $manage_wh_id
 * @property int $wh_id
 * @property int $product_id
 * @property int $amount
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\ManageWh $manage_wh
 * @property \App\Model\Entity\WareHouse $warehouse
 * @property \App\Model\Entity\Product $product
 */class ManageWarehouse extends Entity
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
        '*' => true,
        'manage_wh_id' => false
    ];
}
