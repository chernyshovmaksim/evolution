<?php namespace EvolutionCMS\Services;

use EvolutionCMS\Exceptions\ServiceValidationException;
use \EvolutionCMS\Models\User;
use EvolutionCMS\Services\Users\UserRegistration;

class UserManager
{
    public $validate = [
        'username' => ['required', 'unique:users'],
        'email' => ['required', 'unique:user_attributes'],
    ];

    /**
     * @var array
     */
    public $messages = [
        'required' => 'Поле обязательно',
        'username.min' => 'Имя не меньше 5 символов',
        'username.unique' => 'Имя пользователя должно быть уникальным',
        'email.unique' => 'Email должен быть уникальным',
    ];

    public function get($id)
    {
        return User::find($id);
    }

    public function create(array $userData)
    {
        $registration = new UserRegistration($userData);
        try {
            $registration->process();
        } catch (ServiceValidationException $e) {
            $exception = new ServiceValidationException();
            $exception->setValidationErrors($e->getValidationErrors());
            throw $exception;
        }
    }

    public function edit($id, $userData)
    {

    }

    public function delete($id)
    {

    }

    public function dropPassword($userData)
    {

    }

    public function changePassword($userData)
    {

    }

    public function setRole($userData)
    {

    }

    public function setGroup($userData)
    {

    }

    public function login($userData)
    {

    }

    public function logout($userData)
    {

    }

}
