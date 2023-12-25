<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $fillable = [
        'tutor_name', 'subject', 'unit_name','learning_outcomes', 'topic_name',
        'description', 'tutor_image'];

}
