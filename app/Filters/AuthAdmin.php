<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthAdmin implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null) {
        
        if (! session()->get('admin_id')) {
            session()->setFlashData('error', 'Login to access user page!');
            return redirect('admin_login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        
    }
}