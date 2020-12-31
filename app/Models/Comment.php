<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable =['comment','post_id','email','user'];
    protected $table='coments';

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}