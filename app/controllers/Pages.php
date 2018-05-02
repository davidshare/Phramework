<?php
	class Pages extends Controller{
		public function __construct(){
			$this->postModel = $this->model('Post');
		}

		public function index(){
			$data = ['title'=>'Homepage'];
			$this->view('pages/index', $data);
		}

		public function about(){
			$data = ['title'=>'About us'];
			$this->view('pages/about', $data);
		}
	}
?>