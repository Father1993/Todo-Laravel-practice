<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pushall 
{
    private $apiKey;
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}
