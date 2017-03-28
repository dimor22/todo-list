<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public $smartie;


	public function __construct()
  {
		parent::__construct();
		$this->smartie = new Smarty();
		$this->load->helper('url');
		$this->load->helper('form');
    $this->load->library('form_validation');
  }

	public function index()
	{
		// show all tasks
		$tasks = ['shopping', 'go running', 'pick up Shaila from school'];

		$this->smartie->assign('title','CI3 TODO LIST');
		$this->smartie->assign('subtitle','Showing All Tasks');
		$this->smartie->assign('tasks', $tasks);
		$this->smartie->display('header.tpl');
		$this->smartie->display('home_page.tpl');
		$this->smartie->display('footer.tpl');

	}

	public function task_get($id)
	{
		// show task
		echo 'task ' . $id;
	}

	public function task_create()
	{
		$this->smartie->assign('title','CI3 CREATE TASK - TODO LIST');
		$this->smartie->assign('subtitle','Create New Task');
		$this->smartie->display('header.tpl');
		$this->smartie->display('create_task.tpl');
		$this->smartie->display('footer.tpl');
	}

	public function task_put()
	{
		// create task
		$this->smartie->assign('title','CI3 TASK CREATED - TODO LIST');
		$this->smartie->assign('subtitle','Task Created!');
		$this->smartie->display('header.tpl');
		$this->smartie->display('task_created_success.tpl');
		$this->smartie->display('footer.tpl');
	}

	public function task_post($id)
	{
		$data['id'] = $id;
		// edit task
		$this->smartie->assign('title','CI3 EDIT TASK - TODO LIST');
		$this->smartie->assign('subtitle','Editing Task' . $id);
		$this->smartie->display('header.tpl');
		$this->smartie->display('edit_task.tpl', $data);
		$this->smartie->display('footer.tpl');
	}

	public function task_delete($id)
	{
		// delete task
		echo 'task ' . $id . ' Deleted';
	}
}
