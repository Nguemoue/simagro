<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $guarded = [];

    public function projectMembers(): HasMany
    {
        return $this->hasMany(ProjectMember::class, 'project_id');
    }
}
