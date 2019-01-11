<?php


namespace app\modules\admin\components;
use Yii;

class BaseDAL
{
	
	public function load_to_yii_model($model){
		foreach ($model->attributes as $attr_key => $attr_value) {
			// xdebug_break();
			if(!isset($this->{$attr_key}) || $model->tableSchema->primaryKey == $attr_key)
				continue;

			$model->{$attr_key} = $this->{$attr_key} ;
		}
	}

	public function load_from_yii_model($model){
		foreach ($model->attributes as $attr_key => $attr_value) {
			// xdebug_break();
			if(!isset($this->{$attr_key}) || $model->tableSchema->primaryKey == $attr_key)
				continue;

			$this->{$attr_key} = $model->{$attr_key};
		}
	}	
}
