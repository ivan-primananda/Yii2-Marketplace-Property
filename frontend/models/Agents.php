<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yii\validators\Validator;

/**
 * This is the model class for table "agents".
 *
 * @property int $id
 * @property string $picture
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $domisili
 * @property string $file_cv
 *
 * @property Property[] $properties
 */
class Agents extends ActiveRecord
{
    // public $picture;
    // public $name;
    // public $email;
    // public $password;
    // public $phone;
    // public $domisili;
    // public $file_cv;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['picture'], 'file', 'extensions' => 'jpg, jpeg'],

            ['name', 'trim'],
            ['name', 'required'],
            ['name', 'string', 'min' => 2, 'max' => 255],
            
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['phone', 'required'],

            ['domisili', 'required'],
            ['domisili', 'string'],

            [['file_cv'], 'file', 'extensions' => 'pdf'],

            // [['picture'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, jpeg, svg, png'],
            // [['picture', 'name', 'email', 'password', 'phone', 'domisili', 'file_cv'], 'required'],
            // [['email'], 'unique'],
            // [['email'], 'email'],
            

        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'picture' => 'Picture',
            'name' => 'Full Name',
            'email' => 'Email',
            'password' => 'Password',
            'phone' => 'Phone',
            'domisili' => 'Domisili',
            'file_cv' => 'File Cv',
        ];
    }

}
