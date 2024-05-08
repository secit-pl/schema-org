<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An item used as either a tool or supply when performing the instructions for how to achieve a result.
 * 
 * @method HowToItemType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HowToItemType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HowToItemType setDescription(Property\DescriptionProperty $description)
 * @method HowToItemType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HowToItemType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HowToItemType setImage(Property\ImageProperty $image)
 * @method HowToItemType setItem(Property\ItemProperty $item)
 * @method HowToItemType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HowToItemType setName(Property\NameProperty $name)
 * @method HowToItemType setNextItem(Property\NextItemProperty $nextItem)
 * @method HowToItemType setPosition(Property\PositionProperty $position)
 * @method HowToItemType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HowToItemType setPreviousItem(Property\PreviousItemProperty $previousItem)
 * @method HowToItemType setSameAs(Property\SameAsProperty $sameAs)
 * @method HowToItemType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HowToItemType setUrl(Property\UrlProperty $url)
 */
class HowToItemType extends ListItemType {

	/**
	 * @var Property\RequiredQuantityProperty
	 */
	private $requiredQuantity;

	/**
	 * Get required quantity.
	 *
	 * @return Property\RequiredQuantityProperty
	 */
	public function getRequiredQuantity() {
		return $this->requiredQuantity;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToItem';
	}

	/**
	 * Set required quantity.
	 *
	 * @param Property\RequiredQuantityProperty $requiredQuantity
	 * @return HowToItemType
	 */
	public function setRequiredQuantity(Property\RequiredQuantityProperty $requiredQuantity) {
		$this->requiredQuantity = $requiredQuantity;

		return $this;
	}
}