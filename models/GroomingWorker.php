<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grooming_worker".
 *
 * @property int $id
 * @property string $name
 * @property string $position
 *
 * @property GroomingRecords[] $groomingRecords
 */
class GroomingWorker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grooming_worker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'position'], 'required'],
            [['name', 'position'], 'string', 'max' => 50],
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
            'position' => 'Position',
        ];
    }

    /**
     * Gets query for [[GroomingRecords]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroomingRecords()
    {
        return $this->hasMany(GroomingRecords::class, ['worker' => 'id']);
    }
}
