<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserHandler implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null) {
        if (!session()->get('user_id') == '') {
            return redirect('landing_index');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        
    }
}