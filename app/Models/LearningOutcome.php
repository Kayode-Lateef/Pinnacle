<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningOutcome extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id', 'description'];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
