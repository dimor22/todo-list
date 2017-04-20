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
		$this->db->order_by('ts', 'DESC');
		$query = $this->db->get('tasks');
		$data['tasks'] = $query->result();
		$data['total'] = $query->num_rows();
		$this->smartie->display('master_layout.tpl', $data);

	}

	public function task_get($id)
	{
		// show one task
		echo 'task ' . $id;
	}

	public function task_create()
	{
		// create task
		$this->smartie->display('create_task.tpl');
	}

	public function task_put()
	{
		// created task
		$this->db->insert('tasks', ['name' => $this->input->post('task-name')]);
		$this->smartie->display('task_created_success.tpl');
	}

	public function task_edit($id)
	{
		// edit task
		$query = $this->db->get_where('tasks', ['id' => $id]);
		$data['task'] = $query->row();
		$data['id'] = $id;

		$this->smartie->display('edit_task.tpl', $data);
	}

	public function task_update()
	{
		// update task

		$this->db->update('tasks',
				['name' => $this->input->post('task-name')],
				['id' => $this->input->post('id')]);

		redirect('/tasks');
	}

	public function task_delete($id)
	{
		// delete task
		$this->db->delete('tasks', ['id' => $id]);
		echo 'task ' . $id . ' Deleted';
	}
}
