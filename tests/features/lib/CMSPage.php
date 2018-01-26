<?php
/**
 * JankariTech
 *
 * @author Trainee <jankaritech@gmail.com>
 */
namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * PageObject for the CMS Page
 *
 * @author Trainee <jankaritech@gmail.com>
 *
 */
class CMSPage extends Page {
	
	protected $xpathOfTitle = '//title';
	protected $xpathOfStatusMessage = '//div[@class="statusMessage"]';
	protected $xpathOfTitleElement = '//tr/td[2][text()[normalize-space()="%s"]]';
	protected $xpathOfDateElement = '//tr/td[1][text()[normalize-space()="%s"]]';
	
	/**
	 * 
	 * @return \Behat\Mink\Element\NodeElement|NULL
	 */
	function titlePage() {
		return $this->find('xpath', $this->xpathOfTitle);
	}
	/**
	 * 
	 * @return \Behat\Mink\Element\NodeElement|NULL
	 */
	function getStatusMessage() {
		return $this->find('xpath', $this->xpathOfStatusMessage);
	}
	/**
	 * 
	 * @param string $title
	 * @return string
	 */
	function getTitle($title) {
		$titleXpath = sprintf($this->xpathOfTitleElement, $title);
		return trim($this->find("xpath", $titleXpath)->getHtml());
	}
	/**
	 * 
	 * @param string $date
	 * @return string
	 */
	function getDate($date) {
		$dateXpath = sprintf($this->xpathOfDateElement, $date);
		return trim($this->find("xpath", $dateXpath)->getHtml());
	}
}