<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 5/15/17
 * Time: 9:25 PM
 */

namespace App;


class user_info
{
    private  $id;
private $fname;
private $lname;
private $username;
private $address;
private $phonenumbers=array();
private $emails=array();
private $passport_no;
private $passportphotocopy;
private $birth_certificate_no;
private $birth_certificate_photocopy;
private $national_id_no;
private $national_id_photocopy;

public function setname($fname,$lname,$username)
{
    $this->fname=$fname;
    $this->lname=$lname;
    $this->username=$username;

}

public function setLname($lname)
{
    $this->lname=$lname;


}

    public function setFname($fname)
    {
        $this->fname=$fname;


    }
    public function setUsername($uname)
    {
        $this->username=$uname;


    }

    public function addPhoneNumbers(array $phonenumbers)
    {
        for($i=0;$i<count($phonenumbers);$i++)
        {
            $this->phonenumbers[$i]=$phonenumbers[$i];
        }

    }
    public function addEmails(array $emails)
    {
        for($i=0;$i<count($emails);$i++)
        {
            $this->emails[$i]=$emails[$i];
        }

    }

    public function addBirthCertificate(array $birth_info)
    {

        $this->birth_certificate_no=$birth_info[0]->birth_certificate_no;
        $this->birth_certificate_photocopy=$birth_info[0]->birth_certificate_photocopy;

    }

    public function addPassport(array $passport_info)
    {
        $this->passport_no=$passport_info[0]->passport_no;
        $this->passportphotocopy=$passport_info[0]->passport_photo;
    }

    public function addNationalId(array $national_id_info)
    {
        $this->national_id_no=$national_id_info[0]->national_id_no;
        $this->national_id_photocopy=$national_id_info[0]->national_id_photocopy;
    }

    public function setAddress($add)
    {
        $this->address=$add;


    }

    public function getFname()
    {
        return $this->fname;
    }
    public function getLname()
    {
        return $this->lname;
    }
    public function getUname()
    {
        return $this->username;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getPhoneNumbers()
    {
        return $this->phonenumbers;
    }
    public function getEmails()
    {
        return $this->emails;
    }
    public function getBirthCertificateNo()
    {
        return $this->birth_certificate_no;
    }
    public function getBirthCertificatePhotocopy()
    {
        return $this->birth_certificate_photocopy;
    }
    public function getPassportNo()
    {
        return $this->passport_no;
    }
    public function getPassportPhotocopy()
    {
        return $this->passportphotocopy;
    }
    public function getNationalIdNo()
    {
        return $this->national_id_no;
    }
    public function getNationalIdPhotocopy()
    {
        return $this->national_id_photocopy;
    }
    public function setId($id)
    {
        $this->id=$id;
    }
    public function getId()
    {
        return $this->id;
    }
}