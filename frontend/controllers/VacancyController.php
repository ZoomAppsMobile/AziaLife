<?php
namespace frontend\controllers;
use common\models\AreDistinguished;
use common\models\NewVacancy;
use yii\web\Controller;
use backend\models\Vacancy;
use yii\web\UploadedFile;

class VacancyController extends Controller
{
	public function actionIndex()
    {
    	$vacancy=Vacancy::find()->where(['status'=>1, 'main'=>1])->all();
        return $this->render('index',['vacancy'=>$vacancy]);
    }
    public function actionDetail($id)
    {
        $model = new AreDistinguished();

        if ($model->load(\Yii::$app->request->post())) {
            $model->doc = UploadedFile::getInstance($model, 'doc');
            $path = \Yii::$app->params['pathUploads'] . '/';
            $time = time();
            $model->doc->saveAs( $path . $time.$model->doc);

            $model->doc = $time.$model->doc;
            $model->save(false);

            \Yii::$app->session->setFlash('success', 'Спасибо за отклик.');

            return $this->goHome();
        }

    	$vacancy=Vacancy::find()->where(['status'=>1, 'id'=>$id])->one();
        return $this->render('detail',['vacancy'=>$vacancy, 'model' => $model]);
    }

    public function actionOurVacancies()
    {
        $vacancy=Vacancy::find()->where(['status'=>1])->all();
        return $this->render('our-vacancies',['vacancy'=>$vacancy]);
    }
}
?>