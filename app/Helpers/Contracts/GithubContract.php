<?php

namespace App\Helpers\Contracts;

Interface GithubContract
{
    public function repos($user);
    public function commits();
    public function orgs();
}
