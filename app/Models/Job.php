<?php

namespace App\Models;

class Job
{
    public static function all()
    {
        return  [
            [
                'id' => 1,
                'title' => 'Trybe',
                'description' => 'Bla bla bla',
            ],
            [
                'id' => 2,
                'title' => 'xp',
                'description' => 'Bla bla bla',
            ],
        ];
    }

    public static function find($id)
    {
        $jobs = self::all();

        foreach ($jobs as $job) {
            if ($job['id'] == $id) {
                return $job;
            }
        }
        
    }
}
