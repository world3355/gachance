<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Market Entity
 *
 * @property int $market_id
 * @property string $product_name
 * @property int $product_price
 * @property string $product_img
 * @property string $product_info
 * @property string $product_condition
 * @property string $product_exchange
 * @property int $product_recommended
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Market extends Entity
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
        'product_name' => true,
        'product_price' => true,
        'product_img' => true,
        'product_info' => true,
        'product_condition' => true,
        'product_exchange' => true,
        'product_recommended' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
