<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable = [
        'soal', 'jawaban_a','jawaban_b','jawaban_c','jawaban_d','jawaban_benar'
    ];
}
