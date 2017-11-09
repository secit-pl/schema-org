<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToSupply.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\HowToSupplyType instead.
 * 
 * @method HowToSupply setAdditionalType(Property\AdditionalType $additionalType)
 * @method HowToSupply setAlternateName(Property\AlternateName $alternateName)
 * @method HowToSupply setDescription(Property\Description $description)
 * @method HowToSupply setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HowToSupply setIdentifier(Property\Identifier $identifier)
 * @method HowToSupply setImage(Property\Image $image)
 * @method HowToSupply setItem(Property\Item $item)
 * @method HowToSupply setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HowToSupply setName(Property\Name $name)
 * @method HowToSupply setNextItem(Property\NextItem $nextItem)
 * @method HowToSupply setPosition(Property\Position $position)
 * @method HowToSupply setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HowToSupply setPreviousItem(Property\PreviousItem $previousItem)
 * @method HowToSupply setRequiredQuantity(Property\RequiredQuantity $requiredQuantity)
 * @method HowToSupply setSameAs(Property\SameAs $sameAs)
 * @method HowToSupply setUrl(Property\Url $url)
 */
class HowToSupply extends HowToItem {

	/**
	 * @var Property\EstimatedCost
	 */
	private $estimatedCost;

	/**
	 * Get estimated cost.
	 * 
	 * @return Property\EstimatedCost
	 */
	public function getEstimatedCost() {
		return $this->estimatedCost;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToSupply';
	}

	/**
	 * Set estimated cost.
	 * 
	 * @param Property\EstimatedCost $estimatedCost
	 * @return HowToSupply
	 */
	public function setEstimatedCost(Property\EstimatedCost $estimatedCost) {
		$this->estimatedCost = $estimatedCost;

		return $this;
	}
}