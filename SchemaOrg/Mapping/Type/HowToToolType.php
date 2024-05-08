<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A tool used (but not consumed) when performing instructions for how to achieve a result.
 * 
 * @method HowToToolType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HowToToolType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HowToToolType setDescription(Property\DescriptionProperty $description)
 * @method HowToToolType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HowToToolType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HowToToolType setImage(Property\ImageProperty $image)
 * @method HowToToolType setItem(Property\ItemProperty $item)
 * @method HowToToolType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HowToToolType setName(Property\NameProperty $name)
 * @method HowToToolType setNextItem(Property\NextItemProperty $nextItem)
 * @method HowToToolType setPosition(Property\PositionProperty $position)
 * @method HowToToolType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HowToToolType setPreviousItem(Property\PreviousItemProperty $previousItem)
 * @method HowToToolType setRequiredQuantity(Property\RequiredQuantityProperty $requiredQuantity)
 * @method HowToToolType setSameAs(Property\SameAsProperty $sameAs)
 * @method HowToToolType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HowToToolType setUrl(Property\UrlProperty $url)
 */
class HowToToolType extends HowToItemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToTool';
	}
}