<?php

namespace App\Models;

class Job  
{
    public static function all(): array
    {
        return [
            ["id"=> 1, "name"=> "Fahd", "salary"=> "$20000"],
            ["id"=> 2, "name"=> "oussama", "salary"=> "$20000"]
        ];
    } 
}