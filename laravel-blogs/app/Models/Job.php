<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{

    public function __construct(
        public int $id,
        public string $title,
        public string $company
    ) {}


    public static function all(): array
    {

        return  [
            ['id' => 1, 'title' => 'Software Engineer', 'company' => 'Tech Co'],
            ['id' => 2, 'title' => 'Web Developer', 'company' => 'Web Solutions'],
            ['id' => 3, 'title' => 'Data Analyst', 'company' => 'Data Insights'],
            ['id' => 4, 'title' => 'Project Manager', 'company' => 'Management Inc'],
            ['id' => 5, 'title' => 'UX Designer', 'company' => 'Design Studio'],
            ['id' => 6, 'title' => 'DevOps Engineer', 'company' => 'Cloud Services'],
            ['id' => 7, 'title' => 'QA Tester', 'company' => 'Testing Solutions'],
            ['id' => 8, 'title' => 'System Administrator', 'company' => 'IT Support'],
            ['id' => 9, 'title' => 'Database Administrator', 'company' => 'Data Management'],
            ['id' => 10, 'title' => 'Network Engineer', 'company' => 'Network Solutions']

        ];
    }
    public static function find(int $id): array
    {

        return Arr::first(static::all(), fn($job) => $job['id'] == $id)
            ?? abort(404, 'Job not found');
    }
}
