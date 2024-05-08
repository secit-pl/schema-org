<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A step in the instructions for how to achieve a result. It is an ordered list with HowToDirection and/or HowToTip items.
 * 
 * @method HowToStepType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HowToStepType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HowToStepType setDescription(Property\DescriptionProperty $description)
 * @method HowToStepType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HowToStepType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HowToStepType setImage(Property\ImageProperty $image)
 * @method HowToStepType setItem(Property\ItemProperty $item)
 * @method HowToStepType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HowToStepType setName(Property\NameProperty $name)
 * @method HowToStepType setNextItem(Property\NextItemProperty $nextItem)
 * @method HowToStepType setPosition(Property\PositionProperty $position)
 * @method HowToStepType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HowToStepType setPreviousItem(Property\PreviousItemProperty $previousItem)
 * @method HowToStepType setSameAs(Property\SameAsProperty $sameAs)
 * @method HowToStepType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HowToStepType setUrl(Property\UrlProperty $url)
 */
class HowToStepType extends ListItemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToStep';
	}
}