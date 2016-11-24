<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Compras Model
 *
 * @method \App\Model\Entity\Compra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Compra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Compra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Compra|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Compra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Compra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Compra findOrCreate($search, callable $callback = null)
 */
class ComprasTable extends Table
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

        $this->table('compras');
        $this->displayField('id');
        $this->primaryKey('id');


        $this->belongsTo('Productos', [
        'foreignKey' => 'id_producto',
        'joinType' => 'LEFT'
        ]);

        $this->belongsTo('Users', [
        'foreignKey' => 'id_user',
        'joinType' => 'LEFT'
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
            ->allowEmpty('id', 'create');

        $validator
            ->integer('cantidad')
            ->requirePresence('cantidad', 'create')
            ->notEmpty('cantidad');

         $validator
            ->integer('precio')
            ->requirePresence('precio', 'create')
            ->notEmpty('precio');

        $validator
            ->integer('id_producto')
            ->requirePresence('id_producto', 'create')
            ->notEmpty('id_producto');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmpty('id_user');

        return $validator;
    }
}
