<?php 

class SearchWidget extends CWidget{
	public function init(){

	}

	public function run(){
		$model=new Post();
		$this->render('search',array('model'=>$model));
	}
}