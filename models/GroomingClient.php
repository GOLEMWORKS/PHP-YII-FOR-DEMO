<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grooming_client".
 *
 * @property int $id
 * @property string $name
 * @property int $telephone
 * @property string $animal
 *
 * @property GroomingRecords[] $groomingRecords
 */
class GroomingClient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grooming_client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'telephone', 'animal'], 'required'],
            [['telephone'], 'integer'],
            [['name', 'animal'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'telephone' => 'Telephone',
            'animal' => 'Animal',
        ];
    }

    /**
     * Gets query for [[GroomingRecords]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroomingRecords()
    {
        return $this->hasMany(GroomingRecords::class, ['client' => 'id']);
    }
}
