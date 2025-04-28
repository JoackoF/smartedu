<?php
// En src/Controller/Admin/DashboardController.php

namespace App\Controller\Admin;

use App\Controller\AppController;

class DashboardController extends AppController
{
    public function index()
    {
        $this->set('title', 'Panel de Administración');
    }
}