<?php

class Homepages extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];

        $this->view('homepages/index', $data);
    }
}