<?php

namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    protected $table = 'tasks';
	
	public function getTasks()
    {
		return $this->findAll();
	}
}