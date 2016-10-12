<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'organization_url',
        'repository_url',
        'commit_id',
        'hours',
        'title'
    ];
}
