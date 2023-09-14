<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grooming_records".
 *
 * @property int $id
 * @property int $client
 * @property int $worker
 * @property string $date_time
 *
 * @property GroomingClient $client0
 * @property GroomingWorker $worker0
 */
class GroomingRecords extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grooming_records';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client', 'worker', 'date_time'], 'required'],
            [['client', 'worker'], 'integer'],
            [['date_time'], 'safe'],
            [['client'], 'exist', 'skipOnError' => true, 'targetClass' => GroomingClient::class, 'targetAttribute' => ['client' => 'id']],
            [['worker'], 'exist', 'skipOnError' => true, 'targetClass' => GroomingWorker::class, 'targetAttribute' => ['worker' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client' => 'Client',
            'worker' => 'Worker',
            'date_time' => 'Date Time',
        ];
    }

    /**
     * Gets query for [[Client0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient0()
    {
        return $this->hasOne(GroomingClient::class, ['id' => 'client']);
    }

    /**
     * Gets query for [[Worker0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorker0()
    {
        return $this->hasOne(GroomingWorker::class, ['id' => 'worker']);
    }
}
