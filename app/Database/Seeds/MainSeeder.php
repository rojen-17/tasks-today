<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $now = date('Y-m-d H:i:s');

        $tasks = [
            [
                'title'      => 'Review lecture notes',
                'status'     => 'pending',
                'task_date'  => $today,
                'created_at' => $now,
            ],
            [
                'title'      => 'Complete CodeIgniter activity',
                'status'     => 'pending',
                'task_date'  => $today,
                'created_at' => $now,
            ],
            [
                'title'      => 'Submit laboratory report',
                'status'     => 'completed',
                'task_date'  => date('Y-m-d', strtotime('+1 day')),
                'created_at' => $now,
            ],
            [
                'title'      => 'Study database relationships',
                'status'     => 'pending',
                'task_date'  => date('Y-m-d', strtotime('+1 day')),
                'created_at' => $now,
            ],
            [
                'title'      => 'Prepare presentation',
                'status'     => 'pending',
                'task_date'  => date('Y-m-d', strtotime('+2 days')),
                'created_at' => $now,
            ],
            [
                'title'      => 'Practice PHP coding',
                'status'     => 'completed',
                'task_date'  => date('Y-m-d', strtotime('+2 days')),
                'created_at' => $now,
            ],
            [
                'title'      => 'Read CodeIgniter documentation',
                'status'     => 'pending',
                'task_date'  => date('Y-m-d', strtotime('-1 day')),
                'created_at' => $now,
            ],
            [
                'title'      => 'Organize project files',
                'status'     => 'completed',
                'task_date'  => date('Y-m-d', strtotime('-1 day')),
                'created_at' => $now,
            ],
        ];

        $this->db->table('tasks')->insertBatch($tasks);

        $user = [
            'username'   => 'student01',
            'full_name'  => 'Rojen Antonio',
            'email'      => 'raantonio@fit.edu.ph',
            'created_at' => $now,
        ];

        $this->db->table('users')->insert($user);
    }
}