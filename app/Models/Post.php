<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
//    만약 테이블 명과 class가 다르다면
//    protected $table = 'posts';

// 이렇게 하면 업데이트를 할 수 있다.
    protected $fillable = [

        'title',
        'content'

    ];
}
