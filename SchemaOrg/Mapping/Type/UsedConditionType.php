<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the item is used.
 * 
 * @method UsedConditionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UsedConditionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UsedConditionType setDescription(Property\DescriptionProperty $description)
 * @method UsedConditionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UsedConditionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UsedConditionType setImage(Property\ImageProperty $image)
 * @method UsedConditionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UsedConditionType setName(Property\NameProperty $name)
 * @method UsedConditionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UsedConditionType setSameAs(Property\SameAsProperty $sameAs)
 * @method UsedConditionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UsedConditionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method UsedConditionType setUrl(Property\UrlProperty $url)
 */
class UsedConditionType extends OfferItemConditionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UsedCondition';
	}
}