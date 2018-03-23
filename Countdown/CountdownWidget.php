<?php
namespace common\widgets\Countdown;

use Yii;
use yii\bootstrap\Widget;

class CountdownWidget extends Widget{
	public $target=null;	
	public function run(){
		if (isset($this->target)){
			return $this->render('index',['target'=>$this->target]);
		}
		
	}
}