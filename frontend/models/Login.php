<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\validators\Validator;
use frontend\models\Agents;
use yii\web\Session;
// use yii\web\IdentityInterface;


class Login extends Model
{
    public $picture;
    public $name;
    public $id;
    public $email;
    public $password;
    public $phone;
    public $domisili;
    public $file_cv;
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

            [['email', 'password'], 'required'],           

        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    public function findIdentity($id)
    {
        $agent = Agents::findOne($id);
        if (count($agent)) {
            return new static($agent);
        }
        return null;
    }

    public function findByUsername($email)
    {
        $agent = Agents::find()->where(['email' => $email])->one();
        if (count($agent)) {
            return new static($agent);
        }
        return null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function login()
    {
        $agent = Agents::find()->where(['email' => $this->email])->one();
        if ($agent) {
            if (md5($this->password) == $agent->password){
                return new static($agent);
            }
            return null;
        }
        return null;   
    }

}
