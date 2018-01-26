<?php
/**
 * JankariTech
 * 
 * @author sushil <sushilkc1997@gmail.com>
 */
namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * PageObject for the LoginPage
 * 
 * @author sushil <sushilkc1997@gmail.com>
 *
 */
class LoginPage extends Page {
	protected $loginBtnXpath = '//div/input[@name="login"]';
	protected $userInputBoxName = "username";
	protected $passwordInputBoxName = "password";
	protected $errorMessageXpath = '//div[@class="errorMessage"]';
	protected $path='/admin.php';
	/**
	 *
	 * @param string $username
	 *
	 * @return void
	 */
	function typeUserName($username) {
		$this->fillField($this->userInputBoxName, $username);
	}
	
	/**
	 * 
	 * @param string $password
	 * 
	 * @return void
	 */
	function typePassword($password) {
		$this->fillField($this->passwordInputBoxName, $password);
	}
	
	/**
	 * @return void
	 */
	function login() {
		$this->find('xpath', $this->loginBtnXpath)->click();
	}
	
	/**
	 * 
	 * @param string $username
	 * @param string $password
	 * 
	 * @return void
	 */
	function loginAs($username, $password) {
		$this->typeUserName($username);
		$this->typePassword($password);
		$this->login();
	}
	
	/**
	 * 
	 * @return string
	 */
	function getErrorMessage() {
		$realErrorMessage = $this->find('xpath', $this->errorMessageXpath);
		return $realErrorMessage->getHtml();
	}
	
}