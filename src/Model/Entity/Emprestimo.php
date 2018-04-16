<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emprestimo Entity
 *
 * @property int $id
 * @property int $pessoa_id
 * @property \Cake\I18n\FrozenDate $datadev
 * @property \Cake\I18n\FrozenDate $dataemp
 * @property int $livro_id
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 * @property \App\Model\Entity\Livro $livro
 */
class Emprestimo extends Entity
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
        'pessoa_id' => true,
        'datadev' => true,
        'dataemp' => true,
        'livro_id' => true,
        'pessoa' => true,
        'livro' => true
    ];
}
