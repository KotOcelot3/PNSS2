<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Spec extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'spec';
    protected $fillable = [
        'id',
        'title',
        'doctors'
    ];

}