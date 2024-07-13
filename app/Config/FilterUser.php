<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterUser implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if user is not logged in or not an admin
        if (!session()->get('isLoggedIn') || session()->get('level') !== 'admin') {
            // Redirect to login page
            return redirect()->to('/auth/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here if needed
    }
}
