<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A sub-grouping of steps in the instructions for how to achieve a result (e.g. steps for making a pie crust within a pie recipe).
 * 
 * @method HowToSectionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HowToSectionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HowToSectionType setDescription(Property\DescriptionProperty $description)
 * @method HowToSectionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HowToSectionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HowToSectionType setImage(Property\ImageProperty $image)
 * @method HowToSectionType setItem(Property\ItemProperty $item)
 * @method HowToSectionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HowToSectionType setName(Property\NameProperty $name)
 * @method HowToSectionType setNextItem(Property\NextItemProperty $nextItem)
 * @method HowToSectionType setPosition(Property\PositionProperty $position)
 * @method HowToSectionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HowToSectionType setPreviousItem(Property\PreviousItemProperty $previousItem)
 * @method HowToSectionType setSameAs(Property\SameAsProperty $sameAs)
 * @method HowToSectionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HowToSectionType setUrl(Property\UrlProperty $url)
 */
class HowToSectionType extends ListItemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToSection';
	}
}