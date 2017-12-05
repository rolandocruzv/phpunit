<?php


namespace App\Models;

class User{
	public $first_name;
	public $last_name;
	public $email;
	
	

 public function setFirstName($firstName){
		$this->first_name = $firstName;
	
 }
 
 public function setLastName($LastName){
		$this->last_name = $LastName;
	
 }
 
  public function setEmail($email){
		$this->email = $email;
	
 }
 
 public function getEmail(){
	return $this->email;
 } 
 
 
 public function getFirstName(){
	return $this->first_name;
 }
 
 public function getLastName(){
	return $this->last_name;
 }
 
  public function getFullName(){
	return $this->first_name.' '.$this->last_name;
 }
 
  public function getEmailVariables(){
	return [
		'full_name'=>$this->getFullName(),
		'email'=>$this->getEmail()
	];
 }
 
 
}

?>