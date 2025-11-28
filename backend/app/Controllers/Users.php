<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing');
    }

    public function moodBoard()
    {
        return view('user/moodBoard');
    }

    public function roadMap()
    {
        return view('user/roadMap');
    }

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UsersModel();
    }

    public function userProfile()
    {
        $session = session();
        $userId = $session->get('user')['id']; // Assuming session stores ['user' => ['id'=>..., 'email'=>...]]

        $userModel = new UsersModel();
        $data['user'] = $userModel->find($userId);

        return view('user/userProfile', $data);
    }

    public function updateDetails()
    {
        $session = session();
        $userId = $session->get('user')['id'];

        $userModel = new \App\Models\UsersModel();

        $data = [
            'first_name'  => $this->request->getPost('first_name'),
            'middle_name' => $this->request->getPost('middle_name'),
            'last_name'   => $this->request->getPost('last_name'),
            'email'       => $this->request->getPost('email'),
        ];

        $userModel->update($userId, $data);

        // Update session data
        $updatedUser = $userModel->find($userId);
        $session->set('user', [
            'id'          => $updatedUser->id,
            'first_name'  => $updatedUser->first_name,
            'middle_name' => $updatedUser->middle_name,
            'last_name'   => $updatedUser->last_name,
            'email'       => $updatedUser->email,
        ]);

        return redirect()->back()->with('message', 'Profile updated successfully.');
    }



    public function deleteAccount()
    {
        $session = session();
        $userId = $session->get('user')['id'];

        $userModel = new UsersModel();
        $userModel->delete($userId);

        $session->destroy(); // Log out user

        return redirect()->to('/')->with('message', 'Account deleted successfully');
    }
}
