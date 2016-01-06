<?php
class IndexAction extends Action {
    public function index(){
        //$Data = M('data'); // 实例化Data数据模型
        //$this->data = $Data->select();
		//$this->data = 'thinkphp'; // 进行模板变量赋值
        $this->display();
    } 
	public function users(){
        //$Data = M('data'); // 实例化Data数据模型
        //$this->data = $Data->select();
		//$this->data = 'thinkphp'; // 进行模板变量赋值
        $this->display();
    }
	public function user(){
        $this->display();
    }
	public function media(){
        $this->display();
    }
	public function calendar(){
        $this->display();
    }
}