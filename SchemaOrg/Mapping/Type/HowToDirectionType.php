<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToDirectionType.
 * 
 * @method HowToDirectionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HowToDirectionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HowToDirectionType setDescription(Property\DescriptionProperty $description)
 * @method HowToDirectionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HowToDirectionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HowToDirectionType setImage(Property\ImageProperty $image)
 * @method HowToDirectionType setItem(Property\ItemProperty $item)
 * @method HowToDirectionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HowToDirectionType setName(Property\NameProperty $name)
 * @method HowToDirectionType setNextItem(Property\NextItemProperty $nextItem)
 * @method HowToDirectionType setPosition(Property\PositionProperty $position)
 * @method HowToDirectionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HowToDirectionType setPreviousItem(Property\PreviousItemProperty $previousItem)
 * @method HowToDirectionType setSameAs(Property\SameAsProperty $sameAs)
 * @method HowToDirectionType setUrl(Property\UrlProperty $url)
 */
class HowToDirectionType extends ListItemType {

	/**
	 * @var Property\AfterMediaProperty
	 */
	private $afterMedia;

	/**
	 * @var Property\BeforeMediaProperty
	 */
	private $beforeMedia;

	/**
	 * @var Property\DuringMediaProperty
	 */
	private $duringMedia;

	/**
	 * @var Property\PerformTimeProperty
	 */
	private $performTime;

	/**
	 * @var Property\PrepTimeProperty
	 */
	private $prepTime;

	/**
	 * @var Property\SupplyProperty
	 */
	private $supply;

	/**
	 * @var Property\ToolProperty
	 */
	private $tool;

	/**
	 * @var Property\TotalTimeProperty
	 */
	private $totalTime;

	/**
	 * Get after media.
	 * 
	 * @return Property\AfterMediaProperty
	 */
	public function getAfterMedia() {
		return $this->afterMedia;
	}

	/**
	 * Get before media.
	 * 
	 * @return Property\BeforeMediaProperty
	 */
	public function getBeforeMedia() {
		return $this->beforeMedia;
	}

	/**
	 * Get during media.
	 * 
	 * @return Property\DuringMediaProperty
	 */
	public function getDuringMedia() {
		return $this->duringMedia;
	}

	/**
	 * Get perform time.
	 * 
	 * @return Property\PerformTimeProperty
	 */
	public function getPerformTime() {
		return $this->performTime;
	}

	/**
	 * Get prep time.
	 * 
	 * @return Property\PrepTimeProperty
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
	 * @return Property\SupplyProperty
	 */
	public function getSupply() {
		return $this->supply;
	}

	/**
	 * Get tool.
	 * 
	 * @return Property\ToolProperty
	 */
	public function getTool() {
		return $this->tool;
	}

	/**
	 * Get total time.
	 * 
	 * @return Property\TotalTimeProperty
	 */
	public function getTotalTime() {
		return $this->totalTime;
	}

	/**
	 * Set after media.
	 * 
	 * @param Property\AfterMediaProperty $afterMedia
	 * @return HowToDirectionType
	 */
	public function setAfterMedia(Property\AfterMediaProperty $afterMedia) {
		$this->afterMedia = $afterMedia;

		return $this;
	}

	/**
	 * Set before media.
	 * 
	 * @param Property\BeforeMediaProperty $beforeMedia
	 * @return HowToDirectionType
	 */
	public function setBeforeMedia(Property\BeforeMediaProperty $beforeMedia) {
		$this->beforeMedia = $beforeMedia;

		return $this;
	}

	/**
	 * Set during media.
	 * 
	 * @param Property\DuringMediaProperty $duringMedia
	 * @return HowToDirectionType
	 */
	public function setDuringMedia(Property\DuringMediaProperty $duringMedia) {
		$this->duringMedia = $duringMedia;

		return $this;
	}

	/**
	 * Set perform time.
	 * 
	 * @param Property\PerformTimeProperty $performTime
	 * @return HowToDirectionType
	 */
	public function setPerformTime(Property\PerformTimeProperty $performTime) {
		$this->performTime = $performTime;

		return $this;
	}

	/**
	 * Set prep time.
	 * 
	 * @param Property\PrepTimeProperty $prepTime
	 * @return HowToDirectionType
	 */
	public function setPrepTime(Property\PrepTimeProperty $prepTime) {
		$this->prepTime = $prepTime;

		return $this;
	}

	/**
	 * Set supply.
	 * 
	 * @param Property\SupplyProperty $supply
	 * @return HowToDirectionType
	 */
	public function setSupply(Property\SupplyProperty $supply) {
		$this->supply = $supply;

		return $this;
	}

	/**
	 * Set tool.
	 * 
	 * @param Property\ToolProperty $tool
	 * @return HowToDirectionType
	 */
	public function setTool(Property\ToolProperty $tool) {
		$this->tool = $tool;

		return $this;
	}

	/**
	 * Set total time.
	 * 
	 * @param Property\TotalTimeProperty $totalTime
	 * @return HowToDirectionType
	 */
	public function setTotalTime(Property\TotalTimeProperty $totalTime) {
		$this->totalTime = $totalTime;

		return $this;
	}
}