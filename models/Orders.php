<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $status
 * @property string $fio_kl
 * @property string $time_stamp
 * @property string|null $dismiss
 * @property int $user_id
 * @property int $count
 *
 * @property ProductsOrder[] $productsOrders
 * @property User $user
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['fio_kl', 'user_id','count'], 'required'],
            [['time_stamp'], 'safe'],
            [['user_id','count'], 'integer'],
            [['fio_kl', 'dismiss'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'fio_kl' => 'Fio Kl',
            'time_stamp' => 'Time Stamp',
            'dismiss' => 'Dismiss',
            'count' => 'Count',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[ProductsOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsOrders()
    {
        return $this->hasMany(ProductsOrder::class, ['order_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
