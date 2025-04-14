<?php

namespace App\Domain\Entities;

class Beneficiary
{
    /**
     * @var
     * Beneficiary ID
     */
    private $id;

    /**
     * @var
     * First name of the beneficiary
     */
    private $firstName;

    /**
     * @var
     * Middle name of the beneficiary
     */
    private $middleName;

    /**
     * @var
     * Last name of the beneficiary
     */
    private $lastName;

    /**
     * @var
     * Suffix of the beneficiary's name (e.g., Jr., Sr.)
     */
    private $suffix;

    /**
     * @var
     * Preferred name of the beneficiary
     */
    private $preferredName;

    /**
     * @var
     * Status of the beneficiary (e.g., active, inactive)
     */
    private $status;

    /**
     * @var
     * Email address of the beneficiary
     */
    private $email;

    /**
     * @var
     * Phone number of the beneficiary
     */
    private $phone;

    /**
     * @var
     * Address of the beneficiary
     */
    private $address;

    /**
     * @var
     * Relationship to the user (e.g., spouse, child)
     */
    private $relationship;

    /**
     * @var
     * Registration date of the beneficiary
     */
    private $registrationDate;

    /**
     * Beneficiary constructor.
     * @param $firstName
     * @param $middleName
     * @param $lastName
     * @param $suffix
     * @param $preferredName
     * @param $status
     * @param $email
     * @param $phone
     * @param $address
     * @param $relationship
     * @param $registrationDate
     */
    public function __construct($firstName, $middleName, $lastName, $suffix, $preferredName, $status, $email, $phone, $address, $relationship, $registrationDate)
    {
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->suffix = $suffix;
        $this->preferredName = $preferredName;
        $this->status = $status;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->relationship = $relationship;
        $this->registrationDate = $registrationDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param mixed $middleName
     */
    public function setMiddleName($middleName): void
    {
        $this->middleName = $middleName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param mixed $suffix
     */
    public function setSuffix($suffix): void
    {
        $this->suffix = $suffix;
    }

    /**
     * @return mixed
     */
    public function getPreferredName()
    {
        return $this->preferredName;
    }

    /**
     * @param mixed $preferredName
     */
    public function setPreferredName($preferredName): void
    {
        $this->preferredName = $preferredName;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param mixed $relationship
     */
    public function setRelationship($relationship): void
    {
        $this->relationship = $relationship;
    }

    /**
     * @return mixed
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * @param mixed $registrationDate
     */
    public function setRegistrationDate($registrationDate): void
    {
        $this->registrationDate = $registrationDate;
    }


}
