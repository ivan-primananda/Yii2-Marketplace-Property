<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Agents;
use frontend\models\Properties;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Session;
use yii\web\UploadedFile;
use yii\validators\Validator;
use yii\validators\FileValidator;

/**
 * AgentController implements the CRUD actions for Agent model.
 */
class AgentController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    
    public function actionIndex()
    {
        $session = Yii::$app->session;  
        $model = new Agents(); 
        $agent = Agents::find()->where(['email' => $model->email])->one();
        if ($agent) {
            $session->set('id', $agent->id);
            $session->set('picture', $agent->picture);
            $session->set('name', $agent->name);
            $session->set('email', $agent->email);
            $session->set('password', $agent->password);
            $session->set('phone', $agent->phone);
            $session->set('domisili', $agent->domisili);  
            $session->set('file_cv', $agent->file_cv);  
            $session->open();
        }

        $properti = Properties::find()->where(['id_agent' => $session->get('id')])->all();

        return $this->render('dashboard', compact('session', 'properti'));
    }

    public function actionSale()
    {
        $session = Yii::$app->session;  
        $model = new Agents(); 
        $agent = Agents::find()->where(['email' => $model->email])->one();
        if ($agent) {
            $session->set('id', $agent->id);
            $session->set('picture', $agent->picture);
            $session->set('name', $agent->name);
            $session->set('email', $agent->email);
            $session->set('password', $agent->password);
            $session->set('phone', $agent->phone);
            $session->set('domisili', $agent->domisili);  
            $session->set('file_cv', $agent->file_cv);  
            $session->open();
        } 

        $properti = new Properties();
        if ($properti->load(Yii::$app->request->post())) {
            
            $gambar = UploadedFile::getInstance($properti, 'images');
 
            if ($properti->validate()) {
                if (!empty($gambar)) {
                    $gambar->saveAs(Yii::getAlias('@frontend/web/properties/') . $gambar->baseName . '.' . $gambar->extension);
                    $properti->images = $gambar->baseName . '.' . $gambar->extension;
                    $properti->save();
                    // $model->save(FALSE);
                    // return $this->render('dashboard', compact('session', 'properti', 'model'));
                    return $this->redirect('index.php?r=agent%2Findex');
                } else {
                    return $this->render('sale', compact('model', 'session', 'properti'));  
                }
            } else {
                return $this->render('sale', compact('model', 'session', 'properti'));  
            }

        } 
            return $this->render('sale', compact('model', 'session', 'properti'));
        
    }

    public function actionLogout()
    {
        $session = Yii::$app->session;
        Yii::$app->user->logout();
        $session->close();
        $session->destroy();
        return $this->goHome();

    }

}
