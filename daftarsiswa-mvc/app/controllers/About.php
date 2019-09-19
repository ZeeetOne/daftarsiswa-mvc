<?php

class About extends Controller
{
    public function index($name = 'Daffa', $job = 'Junior Programmer', $age = 16)
    {
        $data['name'] = $name;
        $data['job'] = $job;
        $data['age'] = $age;

        $data['title'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
