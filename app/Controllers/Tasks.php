<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'tasks' => $taskModel->getTodaysTasks(),
            'today' => date('Y-m-d'),
        ];

        return view('welcome', $data);
    }

    public function allTasks()
    {
        $taskModel = new TaskModel();

        $data = [
            'tasks' => $taskModel->getAllTasks(),
        ];

        return view('tasks', $data);
    }

    public function profile()
    {
        $userModel = new UserModel();

        $data = [
            'user' => $userModel->first(),
        ];

        return view('profile', $data);
    }

    public function about()
    {
        return view('about');
    }
}