<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'rnlabez_myGuest';

     public function getGuest()
    {
        return $this->findAll();
    }
}