<?php

class Employee extends BaseModel
{
    public function homepageEmployees()
    {
        return $this->get('select `name`, `job`, `description`, `img`
                                from `employees`
                                order by `name` asc
                                limit 4;');
    }
}