<?php

require_once("../api/UsersInterface.php");
require_once("../etc/Conection.php");

class query implements UsersInterface{

    const MAIN_TABLE = 'usuarios';

    private Conection $conection;

    private string $name;

    private string $lastname;

    private string $nickname;

    private string $email;

    private string $password;

    private int $age;

    private string $gender;

    private int $nphone;

    public function __construct(
        Conection $conection
    )
    {
        $this->conection= $conection;   
    }
    public function register($data)
    {
        $query = "INSERT INTO " . self::MAIN_TABLE . " (name, lastname, nickname, email, password, age, gender, nphone) VALUES ('" . $data['name'] . "', '" . $data['lastname'] . "', '" . $data['nickname'] . "', '" . $data['email'] . "', '" . $data['password'] . "', '" . $data['age'] . "', '" . $data['gender'] . "', '" . $data['nphone'] . "')";
        $this->conection->makequerys($query);
    }

    public function update($data)
    {
        $query = "UPDATE " . self::MAIN_TABLE . " SET name = '" . $data['name'] . "', '" . $data['lastName'] . "', '" . $data['nickname'] . "', '" . $data['email'] . "', '" . $data['password'] . "', '" . $data['age'] . "', '" . $data['gender'] . "', '" . $data['nphone'] . "'";
        $this->conection->makequerys($query);
    }

    public function deleteUserbyId($id)
    {
        $query = "DELETE FROM " . self::MAIN_TABLE . " WHERE id = '" . $id . "'";
        $this->conection->makequerys($query);
    }

    public function getUserbyid($id)
    {
        $query = "SELECT * FROM " . self::MAIN_TABLE . " WHERE id = '" . $id . "'";
        return $this->conection->makequerys($query, true);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setNickname(string $nickname)
    {
        $this->nickname = $nickname;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setNphone(int $nphone)
    {
        $this->nphone = $nphone;
    }

    public function getNphone(): int
    {
        return $this->nphone;
    }

    public function getListusers()
    {
        return $this->conection->makequerys("SELECT * FROM usuarios", true);
    }

}