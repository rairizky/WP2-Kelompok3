<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminHandler implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null) {
        if (!session()->get('admin_id') == '') {
            return redirect('admin_dashboard');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        
    }
}