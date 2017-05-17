<?php
namespace App\Controllers;
use App\Core\Controller;

class BooksController extends Controller{
	
	public function index(){
		$this->all();
	}
	public function show($id){
		$data=array();
		$book_mapper=$this->container['book_mapper'];
		$book = $book_mapper->create()->getWithId($id);
		$data['book']=$book;
		$data['authors']=$book->getAuthors();
		$data['genres']=$book->getGenres();
		$this->view->title.=' | '.$book->title;
		$this->view->render('book_item',$data);
	}
	public function all() {
		$this->view->title.=' | Books list';
		$data=array();
		$mapper=$this->container['book_mapper'];
		$data['books'] = $mapper->create()->all();
		$this->view->render('books_list',$data);
	}
}
