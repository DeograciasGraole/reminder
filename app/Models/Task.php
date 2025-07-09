<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
 use HasFactory;
 protected $fillable=['Title','category'];

 public function ToggleCompleted(){
    $this->completed=!$this->completed;
    $this->save();
 }
}
