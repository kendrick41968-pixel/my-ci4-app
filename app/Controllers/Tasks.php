<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data = [
            'title' => 'Tasks for Today',
            'tasks' => $model
                ->where('task_date', date('Y-m-d'))
                ->findAll()
        ];

        return view('tasks/today', $data);
    }

    public function all()
    {
        $model = new TaskModel();

        $data = [
            'title' => 'Task List',
            'tasks' => $model
                ->orderBy('task_date', 'ASC')
                ->findAll()
        ];

        return view('tasks/list', $data);
    }

    public function profile()
    {
        $model = new UserModel();

        $data = [
            'title' => 'Profile',
            'user' => $model->first()
        ];

        return view('tasks/profile', $data);
    }

    public function about()
    {
        return view('tasks/about', [
            'title' => 'About'
        ]);
    }
}