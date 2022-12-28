<?php

class LoginController extends user
{
    public function index()
    {

        $data["msg"] = "";
        if (isset($_POST['login'])) {

            $email = ($_POST['email']);
            $password = ($_POST['password']);
            $result = $this->user_login($email, $password);
            if ($result == 1) {
                $_SESSION['email'] = $email;
                header("location:/booking");
            } else {
                $data["msg"] = "Password or Email is incorrect";
            }







        }
        view::load('login', $data);

    }

}