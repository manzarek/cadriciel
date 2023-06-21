<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilePost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_fr',
        'filename',
        'user_id',
        'language_id'
    ];

    public function filePostHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
