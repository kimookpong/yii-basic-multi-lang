<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movie_cat".
 *
 * @property int $id
 * @property string $name
 * @property string $name_en
 * @property int|null $status
 * @property string $created_at
 * @property string|null $updated_at
 * @property int|null $created_user
 * @property int|null $updated_user
 */
class MovieCat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie_cat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'name_en'], 'required'],
            [['status', 'created_user', 'updated_user'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'name_en' => Yii::t('app', 'Name En'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_user' => Yii::t('app', 'Created User'),
            'updated_user' => Yii::t('app', 'Updated User'),
        ];
    }
}
