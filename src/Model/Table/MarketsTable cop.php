<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Markets Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Market get($primaryKey, $options = [])
 * @method \App\Model\Entity\Market newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Market[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Market|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Market saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Market patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Market[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Market findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MarketsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('markets');
        $this->setDisplayField('market_id');
        $this->setPrimaryKey('market_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('market_id')
            ->allowEmptyString('market_id', null, 'create');

        $validator
            ->scalar('product_name')
            ->maxLength('product_name', 50)
            ->requirePresence('product_name', 'create')
            // ->notEmptyString('product_name');
            ->allowEmptyString('product_name', null, 'create');

        $validator
            ->integer('product_price')
            ->requirePresence('product_price', 'create')
            // ->notEmptyString('product_price');
            ->allowEmptyString('product_price', null, 'create');

        $validator
            ->scalar('product_img')
            ->maxLength('product_img', 255)
            ->requirePresence('product_img', 'create')
            // ->notEmptyString('product_img');
            ->allowEmptyString('product_img', null, 'create');

        $validator
            ->scalar('product_info')
            ->maxLength('product_info', 255)
            ->requirePresence('product_info', 'create')
            // ->notEmptyString('product_info');
            ->allowEmptyString('product_info', null, 'create');

        $validator
            ->scalar('product_condition')
            ->maxLength('product_condition', 50)
            ->requirePresence('product_condition', 'create')
            // ->notEmptyString('product_condition');
            ->allowEmptyString('product_condition', null, 'create');

        $validator
            ->scalar('product_exchange')
            ->maxLength('product_exchange', 50)
            ->requirePresence('product_exchange', 'create')
            // ->notEmptyString('product_exchange');
            ->allowEmptyString('product_exchange', null, 'create');

        $validator
            ->integer('product_recommended')
            ->requirePresence('product_recommended', 'create')
            // ->notEmptyString('product_recommended');
            ->allowEmptyString('product_recommended', null, 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
