<?php

class UserTest extends \PHPUnit_Framework_TestCase{


protected $user;
	
public function setUp(){

	$this->user = new \App\Models\User;

}

	public function testThatWeCanGetTheFirstName(){
		
		
		$this->user->setFirstName('Rolando');
		
		$this->assertEquals($this->user->getFirstName(), 'Rolando');
		
		$this->assertTrue(true);
	
	}
	
	public function testThatWeCanGetTheLastName(){
		
		
		$this->user->setLastName('Cruz');
		
		$this->assertEquals($this->user->getLastName(), 'Cruz');
		
		//$this->assertTrue(true);
	
	}
	
	public function testFullnameIsReturned(){
	
		
		$this->user->setFirstName('Rolando');
		$this->user->setLastName('Cruz');
	
		$this->assertEquals($this->user->getFullname(), 'Rolando Cruz');
	}
	
	public function testEmailAdressCanBeSet(){
		
		
		$this->user->setEmail('rolandojanet2012@gmail.com');
		$this->assertEquals($this->user->getEmail(),'rolandojanet2012@gmail.com');
	
	}
	
	public function testEmailVariablesContainCorrectValues(){
		
		$this->user->setFirstName('Rolando');
		$this->user->setLastName('Cruz');
		$this->user->setEmail('rolandojanet2012@gmail.com');
		
		$emailVariables = $this->user->getEmailVariables();
		
		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);
		
		$this->assertEquals($emailVariables['full_name'], 'Rolando Cruz');
		$this->assertEquals($emailVariables['email'], 'rolandojanet2012@gmail.com');
		
		
	}	


}


?>
