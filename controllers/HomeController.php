<?php

use Couchbase\View;

class HomeController extends BaseController
{
    public function show()
    {
        return $this->view('home', [
            'supTitle' => 'Bienevue chez Chocolatte',
            'title' => 'Chocolatte',
            'employees' => Employee::getHomepageEmployees(),
        ]);
    }
}
