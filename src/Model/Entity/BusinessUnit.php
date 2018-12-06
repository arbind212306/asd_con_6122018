<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BusinessUnit Entity
 *
 * @property int $id
 * @property string $bu_name
 * @property string $bu_desc
 * @property int $status
 */
class BusinessUnit extends Entity
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
        'bu_name' => true,
        'bu_desc' => true,
        'status' => true
    ];
}
