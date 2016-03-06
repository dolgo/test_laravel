<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    public static $unguarded = true;
    public $timestamps = false;
}