<?php
namespace App\Http\Middleware;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    //指定表名
    protected $table='student';

}