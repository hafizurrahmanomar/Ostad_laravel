<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllTaskController extends Controller
{
    // Define the tasks array
    private $myTasks = [
        [
            'id' => 1,
            'title' => 'Learn Laravel Basics',
            'description' => 'Understand routing, controllers, and views.',
            'status' => 'in-progress',
            'priority' => 'high',
        ],
        [
            'id' => 2,
            'title' => 'Set Up Database',
            'description' => 'Configure database and run migrations.',
            'status' => 'pending',
            'priority' => 'medium',
        ],
        [
            'id' => 3,
            'title' => 'Create Authentication System',
            'description' => 'Build login, register, and password reset features.',
            'status' => 'completed',
            'priority' => 'high',
        ],
        [
            'id' => 4,
            'title' => 'Build Task Management',
            'description' => 'Develop CRUD functionality for tasks.',
            'status' => 'in-progress',
            'priority' => 'high',
        ],
        [
            'id' => 5,
            'title' => 'Implement Notifications',
            'description' => 'Add email and in-app notifications.',
            'status' => 'pending',
            'priority' => 'low',
        ],
    ];

    // Method to display tasks with user info
    public function allTask(Request $request)
    {
        $name = 'John Doe';
        $age = 35;

        // Pass tasks and user data to the view
        $tasks = $this->myTasks;

        return view('task.allTask', compact('name', 'age', 'tasks'));
    }

    // Placeholder for another method
    public function allTask2(Request $request)
    {
        // Implement functionality here
    }
}