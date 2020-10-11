<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food and restaurent/login.blade.php");
    $this->click("name=user");
    $this->waitForPageToLoad("30000");
    $this->type("id=email-id", "Name@gmail.com");
    $this->type("id=password", "Nik@12345678");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
  }
}
?>
 


<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food and restaurent/login.php");
    $this->click("name=user");
    $this->waitForPageToLoad("30000");
    $this->type("id=email-id", "Name@gmail.com");
    $this->type("id=password", "Nik@12345678");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
  }
}
?>
 



<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food and restaurent/addCategory.php");
    $this->click("//section[@id='login-homepage-bg']/div/p/a[2]/button");
    $this->waitForPageToLoad("30000");
    $this->type("id=username", "Name@gmail.com");
    $this->type("id=password", "Nik@12345678");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->click("link=add category");
    $this->waitForPageToLoad("30000");
    $this->click("css=button.close");
    $this->click("link=ADD CATEGORY NAME");
    $this->waitForPageToLoad("30000");
    $this->type("id=C_name", "xyz");
    $this->type("id=C_items", "ANY FOOD");
    $this->type("id=C-edit", "ANY@gmail.com");
    $this->type("id=u_contact_no", "045206420");
    $this->select("id=C_name", "label=TAJ HOTEL");
    $this->select("id=C_items", "label=PASTA");
    $this->select("id=C_edit", "label=RESTAURENT NAME");
    $this->click("name=submit");
    $this->waitForPageToLoad("30000");
    $this->click("link=Log Out");
    $this->waitForPageToLoad("30000");
  }
}
?>
 


<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food & restaurent/admin/index.php");
    $this->type("name=Email-id", "anydummy@gmail.com");
    $this->type("name=password", "123456");
    $this->click("//button[@type='submit']");
    $this->waitForPageToLoad("30000");
  }
}
?>
 



<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food and restaurent/register.php");
    $this->click("//section[@id='login-homepage-bg']/div/p/a[2]/button");
    $this->waitForPageToLoad("30000");
    $this->type("id=email-id", "Name@gmail.com");
    $this->type("id=password", "Nik@12345678");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->click("link=View more");
    $this->waitForPageToLoad("30000");
    $this->click("link=Log Out");
    $this->waitForPageToLoad("30000");
  }
}
?>
 

 

<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food and restaurent/index.php");
    $this->click("//section[@id='login-homepage-bg']/div/p/a[2]/button");
    $this->waitForPageToLoad("30000");
    $this->click("link=Book seat");
    $this->waitForPageToLoad("30000");
    $this->type("id=Username", "Aksh");
    $this->type("id=emailid", "Aksh@gmail.com");
    $this->type("id=passwordsignup", "Aksh@123456");
    $this->type("id=Phone Number", "0542359897");
    $this->type("id=Calender", "25 oct,11:30 pm");
    $this->type("id=Select People", "2");
    $this->click("css=input[type=\"Make reservation\"]");
    $this->waitForPageToLoad("30000");
  }
}
?>
 


<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food & restaurent/index.php");
    $this->click("name=restaurent list");
    $this->waitForPageToLoad("30000");
    $this->type("id=username", "Name@gmail.com");
    $this->type("id=password", "Nik@12345678");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->select("id=Restaurent_list", "label=Restaurent");
    $this->click("id=press enter");
  }
}
?>
 

<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food and restaurent/changepassword.php");
    $this->click("name=user");
    $this->waitForPageToLoad("30000");
  
    $this->type("id=old password", "Nik@12345678");
    $this->type("id=password", "Nik@123456789");
    $this->type("id=repeat password", "Nik@123456789");
    $this->click("css=input[type=\"save\"]");
    $this->waitForPageToLoad("30000");
  }
}
?>
 


<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food and restaurent/forgotpassword.php");
    $this->click("name=user");
    $this->waitForPageToLoad("30000");
    $this->click("link=exact:Forgot Password");
    $this->waitForPageToLoad("30000");
    $this->type("id=email id", "Name@@gmail.com");
    $this->click("css=input[type=\"save\"]");
    $this->waitForPageToLoad("30000");
  }
}
?>


 


<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food and restaurent/register.php");
    $this->click("//section[@id='login-homepage-bg']/div/p/a[2]/button");
    $this->waitForPageToLoad("30000");
    $this->click("link=register");
    $this->waitForPageToLoad("30000");
    $this->type("id=first name", "Name");
    $this->type("id=last name", "Karma");
    $this->type("id=email-id", "Name@12345678");
    $this->type("id=password", "Nik@12345678");
    $this->type("id=repeat password", "Nik@12345678");
    $this->click("css=input[type=\"register\"]");
    $this->waitForPageToLoad("30000");
  }
}
?>
 
 

<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://onlinefood.dedezigners.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/food and restaurent/add reservation.php");
    $this->click("name=user");
    $this->waitForPageToLoad("30000");
    $this->click("link=Join us");
    $this->waitForPageToLoad("30000");
    $this->type("id=Name", "xyz");
    $this->type("id=phonenumber", "045813325");
    $this->type("id=NO. of seats", "6");
    $this->type("expected time", "14 oct, 11.20 am");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
  }
}
?>
