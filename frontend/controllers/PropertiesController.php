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


class PropertiesController extends Controller
{
    public function actionDetail($id)
    {
        $session = Yii::$app->session;
        $model = Properties::findOne($id);
        $agent = Agents::find()->where(['id' => $model->id_agent])->one();

        return $this->render('detail', compact('model', 'agent'));
    }

    public function actionEdit($id)
    {
        $model = Properties::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            $gambar = UploadedFile::getInstance($model, 'images');
            if ($model->validate()) {
                if (!empty($gambar)) {
                    $gambar->saveAs(Yii::getAlias('@frontend/web/properties/') . $gambar->baseName . '.' . $gambar->extension);
                    $model->images = $gambar->baseName . '.' . $gambar->extension;
                    $model->save();
                    // $model->save(FALSE);
                    return $this->redirect(['detail', 'id' => $model->id]);
                } else {
                    return $this->render('detail', compact('model'));  
                }
            } else {
                return $this->render('sale', compact('model'));  
            }                        
        }

        return $this->render('update', compact(['model', 'id' => $model->id]));
    }

    public function actionDelete($id)
    {
        $model = Properties::findOne($id)->delete();

        // return $this->render('agent/dashboard');
        return $this->redirect('index.php?r=agent%2Findex');
    }
}







?>