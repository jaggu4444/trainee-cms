<?php
/**
 * JankariTech
 *
 * @author Trainee <jankaritech@gmail.com>
 */
namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * PageObject for the Admin Page
 *
 * @author Trainee <jankaritech@gmail.com>
 *
 */
class AdminPage extends Page {
	
	protected $xpathOfAddArticle = '//a[@href="admin.php?action=newArticle"]';
	protected $xpathOfOpenArticle = '//td[text()[normalize-space() = "%s"]]';
	/**
	 * 
	 * @param string $title
	 * 
	 * @return void
	 */
	function openArticle($title) {
		$titleof = sprintf($this->xpathOfOpenArticle, $title);
		$this->find("xpath", $titleof)->click();
	}
	
	/**
	 * @return void
	 */
	function addArticle() {
		$this->find('xpath', $this->xpathOfAddArticle)->click();
	}
}