<?php
namespace App\Helpers;

use Auth;
use App\Helpers\Contracts\GithubContract;

class Github implements GithubContract
{
    public function repos($user)
    {
        dd($user);
    }
    public function commits()
    {
        // return commits
    }
    public function orgs()
    {
        //return orgs
    }
}
