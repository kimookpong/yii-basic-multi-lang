<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $fullname
 * @property string|null $fullname_en
 * @property string|null $birth_date
 * @property string|null $birth_place
 * @property string|null $weight
 * @property string|null $height
 * @property string|null $spouse
 * @property string|null $child
 * @property string|null $job
 * @property string|null $description
 * @property string|null $description_eng
 * @property string|null $image_path
 * @property int|null $status
 * @property string $created_at
 * @property string|null $updated_at
 * @property int|null $created_user
 * @property int|null $updated_user
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname'], 'required'],
            [['birth_date', 'created_at', 'updated_at'], 'safe'],
            [['description', 'description_eng'], 'string'],
            [['status', 'created_user', 'updated_user'], 'integer'],
            [['fullname', 'fullname_en', 'birth_place', 'weight', 'height', 'spouse', 'child', 'job', 'image_path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fullname' => Yii::t('app', 'Fullname'),
            'fullname_en' => Yii::t('app', 'Fullname En'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'birth_place' => Yii::t('app', 'Birth Place'),
            'weight' => Yii::t('app', 'Weight'),
            'height' => Yii::t('app', 'Height'),
            'spouse' => Yii::t('app', 'Spouse'),
            'child' => Yii::t('app', 'Child'),
            'job' => Yii::t('app', 'Job'),
            'description' => Yii::t('app', 'Description'),
            'description_eng' => Yii::t('app', 'Description Eng'),
            'image_path' => Yii::t('app', 'Image Path'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_user' => Yii::t('app', 'Created User'),
            'updated_user' => Yii::t('app', 'Updated User'),
        ];
    }

    public function upload($model, $attribute)
    {
        $photo  = UploadedFile::getInstance($model, $attribute);
        $path = 'upload/person/';
        if ($photo) {
            $fileName = md5($photo->baseName . time()) . '.' . $photo->extension;
            if ($photo->saveAs('@app/web/' . $path . $fileName)) {
                return $path . $fileName;
            }
        }
        return $model->getOldAttribute($attribute) ? $model->getOldAttribute($attribute) : null;
    }
    public function path($attribute)
    {
        if (empty($attribute)) {
            return 0;
        } else {
            return Yii::$app->homeUrl . $attribute;
        }
    }

    public function viewPath($attribute)
    {
        if (empty($attribute)) {
            return Yii::getAlias('@web') . '/images/noimage.png';
        } else {
            return $this->path($attribute);
        }
    }
}
