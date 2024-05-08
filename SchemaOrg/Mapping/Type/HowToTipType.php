<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An explanation in the instructions for how to achieve a result. It provides supplementary information about a technique, supply, author's preference, etc. It can explain what could be done, or what should not be done, but doesn't specify what should be done (see HowToDirection).
 * 
 * @method HowToTipType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HowToTipType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HowToTipType setDescription(Property\DescriptionProperty $description)
 * @method HowToTipType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HowToTipType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HowToTipType setImage(Property\ImageProperty $image)
 * @method HowToTipType setItem(Property\ItemProperty $item)
 * @method HowToTipType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HowToTipType setName(Property\NameProperty $name)
 * @method HowToTipType setNextItem(Property\NextItemProperty $nextItem)
 * @method HowToTipType setPosition(Property\PositionProperty $position)
 * @method HowToTipType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HowToTipType setPreviousItem(Property\PreviousItemProperty $previousItem)
 * @method HowToTipType setSameAs(Property\SameAsProperty $sameAs)
 * @method HowToTipType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HowToTipType setUrl(Property\UrlProperty $url)
 */
class HowToTipType extends ListItemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToTip';
	}
}