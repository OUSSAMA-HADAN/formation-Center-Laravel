<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {
    use HasFactory;

    protected $fillable = [
        'email', 'first_name', 'last_name', 'birth_date', 'birth_place',
        'id_card_number', 'phone_number', 'marital_status',
        'years_of_experience', 'education_level', 
    ];
}