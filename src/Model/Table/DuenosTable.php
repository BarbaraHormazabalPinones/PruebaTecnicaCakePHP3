<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Duenos Model
 *
 * @method \App\Model\Entity\Dueno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dueno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dueno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dueno|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dueno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dueno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dueno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dueno findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DuenosTable extends Table
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

        $this->setTable('duenos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->hasMany('Mascotas', [
            'foreignKey' => 'id_dueno'
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
            ->scalar('rut')
            ->maxLength('rut', 13)
            ->requirePresence('rut', 'create')
            ->notEmptyString('rut')
            ->add('rut', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 255)
            ->requirePresence('direccion', 'create')
            ->notEmptyString('direccion');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 255)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono')
            ->add('telefono', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('correo')
            ->maxLength('correo', 255)
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo')
            ->add('correo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['rut']));
        $rules->add($rules->isUnique(['telefono']));
        $rules->add($rules->isUnique(['correo']));

        return $rules;
    }
}
