<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = ['title', 'description', 'owner_id'];

    public function tasks(){
        return $this->hasMany(Task::class);
        // return $this->hasMany( 'App\Task');
    }

    public function addTask($description){
        return $this->tasks()->create($description);
    // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description,
        // ]);
        // return $this->tasks()->create(compact($description));
        // return $this->tasks()->create(['description' => $description]);
    }

    public function author(){
        return $this->belongsTo(User::class, 'owner_id');
    }
}
