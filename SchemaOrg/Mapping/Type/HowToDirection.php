<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToDirection.
 * 
 * @method HowToDirection setAdditionalType(Property\AdditionalType $additionalType)
 * @method HowToDirection setAlternateName(Property\AlternateName $alternateName)
 * @method HowToDirection setDescription(Property\Description $description)
 * @method HowToDirection setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HowToDirection setIdentifier(Property\Identifier $identifier)
 * @method HowToDirection setImage(Property\Image $image)
 * @method HowToDirection setItem(Property\Item $item)
 * @method HowToDirection setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HowToDirection setName(Property\Name $name)
 * @method HowToDirection setNextItem(Property\NextItem $nextItem)
 * @method HowToDirection setPosition(Property\Position $position)
 * @method HowToDirection setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HowToDirection setPreviousItem(Property\PreviousItem $previousItem)
 * @method HowToDirection setSameAs(Property\SameAs $sameAs)
 * @method HowToDirection setUrl(Property\Url $url)
 */
class HowToDirection extends ListItem {

	/**
	 * @var Property\AfterMedia
	 */
	private $afterMedia;

	/**
	 * @var Property\BeforeMedia
	 */
	private $beforeMedia;

	/**
	 * @var Property\DuringMedia
	 */
	private $duringMedia;

	/**
	 * @var Property\PerformTime
	 */
	private $performTime;

	/**
	 * @var Property\PrepTime
	 */
	private $prepTime;

	/**
	 * @var Property\Supply
	 */
	private $supply;

	/**
	 * @var Property\Tool
	 */
	private $tool;

	/**
	 * @var Property\TotalTime
	 */
	private $totalTime;

	/**
	 * Get after media.
	 * 
	 * @return Property\AfterMedia
	 */
	public function getAfterMedia() {
		return $this->afterMedia;
	}

	/**
	 * Get before media.
	 * 
	 * @return Property\BeforeMedia
	 */
	public function getBeforeMedia() {
		return $this->beforeMedia;
	}

	/**
	 * Get during media.
	 * 
	 * @return Property\DuringMedia
	 */
	public function getDuringMedia() {
		return $this->duringMedia;
	}

	/**
	 * Get perform time.
	 * 
	 * @return Property\PerformTime
	 */
	public function getPerformTime() {
		return $this->performTime;
	}

	/**
	 * Get prep time.
	 * 
	 * @return Property\PrepTime
	 */
	public function getPrepTime() {
		return $this->prepTime;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToDirection';
	}

	/**
	 * Get supply.
	 * 
	 * @return Property\Supply
	 */
	public function getSupply() {
		return $this->supply;
	}

	/**
	 * Get tool.
	 * 
	 * @return Property\Tool
	 */
	public function getTool() {
		return $this->tool;
	}

	/**
	 * Get total time.
	 * 
	 * @return Property\TotalTime
	 */
	public function getTotalTime() {
		return $this->totalTime;
	}

	/**
	 * Set after media.
	 * 
	 * @param Property\AfterMedia $afterMedia
	 * @return HowToDirection
	 */
	public function setAfterMedia(Property\AfterMedia $afterMedia) {
		$this->afterMedia = $afterMedia;

		return $this;
	}

	/**
	 * Set before media.
	 * 
	 * @param Property\BeforeMedia $beforeMedia
	 * @return HowToDirection
	 */
	public function setBeforeMedia(Property\BeforeMedia $beforeMedia) {
		$this->beforeMedia = $beforeMedia;

		return $this;
	}

	/**
	 * Set during media.
	 * 
	 * @param Property\DuringMedia $duringMedia
	 * @return HowToDirection
	 */
	public function setDuringMedia(Property\DuringMedia $duringMedia) {
		$this->duringMedia = $duringMedia;

		return $this;
	}

	/**
	 * Set perform time.
	 * 
	 * @param Property\PerformTime $performTime
	 * @return HowToDirection
	 */
	public function setPerformTime(Property\PerformTime $performTime) {
		$this->performTime = $performTime;

		return $this;
	}

	/**
	 * Set prep time.
	 * 
	 * @param Property\PrepTime $prepTime
	 * @return HowToDirection
	 */
	public function setPrepTime(Property\PrepTime $prepTime) {
		$this->prepTime = $prepTime;

		return $this;
	}

	/**
	 * Set supply.
	 * 
	 * @param Property\Supply $supply
	 * @return HowToDirection
	 */
	public function setSupply(Property\Supply $supply) {
		$this->supply = $supply;

		return $this;
	}

	/**
	 * Set tool.
	 * 
	 * @param Property\Tool $tool
	 * @return HowToDirection
	 */
	public function setTool(Property\Tool $tool) {
		$this->tool = $tool;

		return $this;
	}

	/**
	 * Set total time.
	 * 
	 * @param Property\TotalTime $totalTime
	 * @return HowToDirection
	 */
	public function setTotalTime(Property\TotalTime $totalTime) {
		$this->totalTime = $totalTime;

		return $this;
	}
}