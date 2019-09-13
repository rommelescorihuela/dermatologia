<?php

namespace app\controllers;

use Yii;
use app\models\Archivos;
use app\models\ArchivosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Unidades;
use app\models\UploadForm;
use yii\web\UploadedFile;


/**
 * ArchivosController implements the CRUD actions for Archivos model.
 */
class ArchivosController extends Controller
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
     * Lists all Archivos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArchivosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Archivos model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Archivos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Archivos();
        $unidad= new Unidades();
        //$archivo =  new UploadForm();
        $n=rand(10,10000);
        $path=Yii::getAlias('@webroot');
        if ($model->load(Yii::$app->request->post())) {
            $model->archivo = UploadedFile::getInstance($model,'archivo');
            $model->archivo->saveAs($path.'/archivos/'.$model->id_paciente.'-'.$n.'.'.$model->archivo->extension);
            $model->archivo='/archivos/'.$model->id_paciente.'-'.$n.'.'.$model->archivo->extension;
            $model->save();
            //var_dump($model->errors);
            //exit();
            return $this->redirect(['view', 'id' => $model->idarc]);
        }

        return $this->render('create', [
            'model' => $model,
            'unidad' => $unidad,
        ]);
    }

    /**
     * Updates an existing Archivos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $unidad= new Unidades();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idarc]);
        }

        return $this->render('update', [
            'model' => $model,
            'unidad' => $unidad,
        ]);
    }

    /**
     * Deletes an existing Archivos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Archivos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Archivos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Archivos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
