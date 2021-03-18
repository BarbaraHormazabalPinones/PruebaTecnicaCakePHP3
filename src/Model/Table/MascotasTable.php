<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mascotas Model
 *
 * @method \App\Model\Entity\Mascota get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mascota newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mascota[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mascota|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mascota saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mascota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mascota[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mascota findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MascotasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('mascotas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Duenos', [
            'foreignKey' => 'id_dueno',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->integer('edad')
            ->requirePresence('edad', 'create')
            ->notEmptyString('edad');

        $validator
            ->scalar('especie')
            ->maxLength('especie', 255)
            ->requirePresence('especie', 'create')
            ->notEmptyString('especie');

        $validator
            ->scalar('raza')
            ->maxLength('raza', 255)
            ->requirePresence('raza', 'create')
            ->notEmptyString('raza');

        $validator
            ->scalar('color')
            ->maxLength('color', 255)
            ->requirePresence('color', 'create')
            ->notEmptyString('color');

        $validator
            ->integer('id_dueno')
            ->requirePresence('id_dueno', 'create')
            ->notEmptyString('id_dueno');

        return $validator;
    }
}
