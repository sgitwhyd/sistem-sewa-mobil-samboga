<?php

namespace App\Filters;

use App\Models\Users;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthorizationFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $userModel = new Users();
        // Get the authenticated user ID
        $userId = session('user')['id'];

        // Check if the user has the necessary permissions (e.g., role-based access)
        if (!$userModel->hasPermission($userId, $arguments[0])) {
            // You can redirect to an error page or show a forbidden message
            return redirect()->to('/error');
        }
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No action after processing the request
        return $response;
    }
}
