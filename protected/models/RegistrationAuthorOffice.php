<?php

class RegistrationAuthorOffice extends CFormModel {
// attributes
// for bio
public $author_name;
public $id_office;
public $email_author;
public $phone_author;
public $username;
public $password;
public $repassword;
// applied rules for validation
public function rules() {
    return array(
    // safe attributes are assigned-able in all scenario types
        array('author_name, id_office, email_author, phone_author 
        username, password, repassword', 'safe'),
        //array('author_name','phone_author','username','password','repassword','required'),
    );
}
// sets attribute labels for view labeling
public function attributeLabels() {
return array(
'author_name' => 'Author Name',
'id_office' => 'Office',
'email_author' => 'Email Author',
'phone_author' => 'Phone Author',
'username' => 'Username',
'password' => 'Password',
'repassword' => 'Retype password',
);
}
}
?>