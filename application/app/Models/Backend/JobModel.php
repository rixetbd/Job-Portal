<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{
    use HasFactory;

    protected function getCategory(){
        return $this->belongsTo(JobCategory::class, 'category');
    }
}
