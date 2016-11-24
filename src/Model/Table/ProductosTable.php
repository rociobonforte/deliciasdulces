<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productos Model
 *
 * @method \App\Model\Entity\Producto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Producto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Producto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Producto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Producto findOrCreate($search, callable $callback = null)
 */
class ProductosTable extends Table
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

        $this->table('productos');
        $this->displayField('id');
        $this->displayField('nombre');
        $this->primaryKey('id');

         $this->belongsTo('Categorias', [
        'foreignKey' => 'id_categoria',
        'joinType' => 'LEFT'
        ]);

         

        $this->addBehavior('Timestamp');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'foto' => []
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->integer('precio_actual')
            ->requirePresence('precio_actual', 'create')
            ->notEmpty('precio_actual');

        $validator
            ->requirePresence('foto', 'create')
            ->notEmpty('foto');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->integer('id_categoria')
            ->requirePresence('id_categoria', 'create')
            ->notEmpty('id_categoria');

        return $validator;
    }

  

}
