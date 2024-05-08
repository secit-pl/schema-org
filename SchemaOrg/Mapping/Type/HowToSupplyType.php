<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A supply consumed when performing the instructions for how to achieve a result.
 * 
 * @method HowToSupplyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HowToSupplyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HowToSupplyType setDescription(Property\DescriptionProperty $description)
 * @method HowToSupplyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HowToSupplyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HowToSupplyType setImage(Property\ImageProperty $image)
 * @method HowToSupplyType setItem(Property\ItemProperty $item)
 * @method HowToSupplyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HowToSupplyType setName(Property\NameProperty $name)
 * @method HowToSupplyType setNextItem(Property\NextItemProperty $nextItem)
 * @method HowToSupplyType setPosition(Property\PositionProperty $position)
 * @method HowToSupplyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HowToSupplyType setPreviousItem(Property\PreviousItemProperty $previousItem)
 * @method HowToSupplyType setRequiredQuantity(Property\RequiredQuantityProperty $requiredQuantity)
 * @method HowToSupplyType setSameAs(Property\SameAsProperty $sameAs)
 * @method HowToSupplyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HowToSupplyType setUrl(Property\UrlProperty $url)
 */
class HowToSupplyType extends HowToItemType {

	/**
	 * @var Property\EstimatedCostProperty
	 */
	private $estimatedCost;

	/**
	 * Get estimated cost.
	 *
	 * @return Property\EstimatedCostProperty
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
	 * @param Property\EstimatedCostProperty $estimatedCost
	 * @return HowToSupplyType
	 */
	public function setEstimatedCost(Property\EstimatedCostProperty $estimatedCost) {
		$this->estimatedCost = $estimatedCost;

		return $this;
	}
}