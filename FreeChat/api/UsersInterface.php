<?php

interface UsersInterface{

    public function setName(string $name);

    public function getName(): string;

    public function setLastname(string $lastname);

    public function getLastname(): string;

    public function setNickname(string $nickname);

    public function getNickname(): string;

    public function setEmail(string $email);

    public function getEmail(): string;

    public function setPassword(string $password);

    public function getPassword(): string;

    public function setAge(int $age);
    
    public function getAge(): int;

    public function setGender(string $gender);

    public function getGender(): string;

    public function setNphone(int $nphone);

    public function getNphone(): int;

}