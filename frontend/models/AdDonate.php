<?php

namespace frontend\models;

use common\components\db\ActiveRecord;
use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%ad_donate}}".
 *
 * @property integer $donate_id
 * @property integer $donate_user_id
 * @property integer $donate_status
 * @property string $donate_description
 * @property string $donate_qr_code
 * @property integer $donate_create
 * @property integer $donate_update
 */
class AdDonate extends MyActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_DELETE = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_donate}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['donate_user_id'], 'required'],
            ['donate_qr_code', 'required', 'on' => 'create'],
            [['donate_user_id', 'donate_status', 'donate_create', 'donate_update'], 'integer'],
            [['donate_qr_code'], 'file', 'extensions' => 'gif, jpg, png', 'maxSize' => 1024 * 1024 * 2, 'tooBig' => \Yii::t('app', 'File has to be smaller than 2MB')],
            [['donate_description', 'donate_qr_code'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'donate_id' => Yii::t('app', 'ID'),
            'donate_user_id' => Yii::t('app', 'User ID'),
            'donate_status' => Yii::t('app', 'Status'),
            'donate_description' => Yii::t('app', 'Description'),
            'donate_qr_code' => Yii::t('app', 'Qr Code'),
            'donate_create' => Yii::t('app', 'Created At'),
            'donate_update' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * Process upload of image
     *
     * @return mixed the uploaded image instance
     */
    public function uploadImage()
    {
        // get the uploaded file instance. for multiple file uploads
        // the following data will return an array (you may need to use
        // getInstances method)
        $image = UploadedFile::getInstance($this, 'donate_qr_code');

        // if no image was uploaded abort the upload
        if (empty($image)) {
            return false;
        }

        // generate a unique file name
        $this->donate_qr_code = \Yii::$app->security->generateRandomString() . ".{$image->extension}";
        // the uploaded image instance
        return $image;
    }

    /**
     * Process deletion of image
     *
     * @return boolean the status of deletion
     */
    public function deleteImage()
    {
        if (!isset($this->oldAttributes['donate_qr_code']) || !$this->oldAttributes['donate_qr_code']) {
            return false;
        }

        $file = \Yii::$app->basePath . \Yii::$app->params['qrCodePath'] . $this->oldAttributes['donate_qr_code'];
        // check if file exists on server
        if (empty($file) || !file_exists($file)) {
            return false;
        }

        // check if uploaded file can be deleted on server
        if (!unlink($file)) {
            return false;
        }

        return true;
    }

    public static function getStatuses()
    {
        return [
            1 => '开启',
            0 => '停用',
        ];
    }
}
