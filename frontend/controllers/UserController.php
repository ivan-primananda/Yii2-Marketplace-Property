<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Agents;
use frontend\models\Properties;
use frontend\models\Login;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use aryelds\sweetalert\SweetAlert;
use yii\web\Session;

/**
 * UserController implements the CRUD actions for Agent model.
 */
class UserController extends Controller
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

    /**
     
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new Login();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $session = Yii::$app->session;
            $agent = Agents::find()->where(['email' => $model->email])->one();
            $properti = Properties::find()->where(['id_agent' => $session->get('id')])->all();
            
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
            return $this->redirect('index.php?r=agent%2Findex');
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionIndex()
    {
        $properti = Properties::find()->all();
        return $this->render('index', compact('properti'));
    }

    public function actionSale()
    {
        $model = new Agents();
        
        if ($model->load(Yii::$app->request->post())) {
            
            $gambar = UploadedFile::getInstance($model, 'picture');
            $file = UploadedFile::getInstance($model, 'file_cv');
 
            if ($model->validate()) {
                if (!empty($gambar) && !empty($file)) {
                    $gambar->saveAs(Yii::getAlias('@frontend/web/picture/') . $gambar->baseName . '.' . $gambar->extension);
                    $file->saveAs(Yii::getAlias('@frontend/web/file-cv/') . $file->baseName . '.' . $file->extension);
                    $model->picture = $gambar->baseName . '.' . $gambar->extension;
                    $model->file_cv = $file->baseName . '.' . $file->extension;
                    // $model->save(FALSE);
                    $model->password = md5($model->password);
                    $model->save();
                    return $this->goHome();
                } else {
                    return $this->render('sale', compact('model'));  
                }
            } else {
                return $this->render('sale', compact('model'));  
            }
        } else {
            return $this->render('sale', compact('model'));
        } 

    }

    public function actionProperties()
    {
        $properti = Properties::find()->all();

        return $this->render('properties', compact('properti'));
    }

    public function actionListAgent()
    {
        $agent = Agents::find()->orderBy('name')->all();
        return $this->render('listAgent', compact('agent'));
    }

    public function actionDetailAgent($id)
    {
        $detail = Agents::findOne($id);

        return $this->render('detailAgent', compact('detail'));
    }

}
