<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthUser implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null) {
        
        if (! session()->get('user_id')) {
            session()->setFlashData('error', 'Login to access admin page!');
            return redirect('user_login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        
    }
}