<?php

namespace App\Helpers\Contracts;

Interface GithubContract
{
    public function repos();
    public function commits();
    public function orgs();
}
