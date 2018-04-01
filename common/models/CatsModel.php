<?php

namespace common\models;

use Yii;
use common\models\base\BaseModel;
/**
 * This is the model class for table "cats".
 *
 * @property integer $id
 * @property string $cat_name
 *
 * @property Posts[] $posts
 */
class CatsModel extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name'], 'required'],
            [['cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => '分类名称',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Posts::className(), ['cat_id' => 'id']);
    }

    public static function getAllCats(){

        $cat = ['0' => '请选择'];
        $res = self::find()->asArray()->all();
        
        if($res){

            foreach($res as $k => $list){

                $cat[$list['id']] = $list['cat_name'];
            }
        }
       
        return $cat;
    }


}
