<?php

namespace App\Controllers;

use App\Models\TasksModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Tasks extends BaseController
{
	public function index()
    {
        $model = model(TasksModel::class);

        $data = [
			'tasks_list'	=> $model->getTasks(),
			'title'		=> "Tasks",
		];
		
		return view('tasks/templates/header', $data)
			. view('tasks/index')
			. view('tasks/templates/footer');
    }
}