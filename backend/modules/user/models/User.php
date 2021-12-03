<?php

namespace app\modules\user\models;

use app\modules\user\Module;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 */
class User extends \common\models\User
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'                   => Module::t('module', 'ATTRIBUTE_USER_ID'),
            'username'             => Module::t('module', 'ATTRIBUTE_USER_USERNAME'),
            'auth_key'             => Module::t('module', 'ATTRIBUTE_AUTH_KEY'),
            'password_hash'        => Module::t('module', 'ATTRIBUTE_PASSWORD_HASH'),
            'password_reset_token' => Module::t('module', 'ATTRIBUTE_PASSWORD_RESET_TOKEN'),
            'email'                => Module::t('module', 'ATTRIBUTE_USER_EMAIL'),
            'status'               => Module::t('module', 'ATTRIBUTE_USER_STATUS'),
            'created_at'           => Module::t('module', 'ATTRIBUTE_USER_CREATED_AT'),
            'updated_at'           => Module::t('module', 'ATTRIBUTE_USER_UD_DATED_AT'),
            'verification_token'   => Module::t('module', 'ATTRIBUTE_USER_VERIFICATION_TOKEN'),
        ];
    }
}
