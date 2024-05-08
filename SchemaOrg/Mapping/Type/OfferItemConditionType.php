<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A list of possible conditions for the item.
 * 
 * @method OfferItemConditionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OfferItemConditionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OfferItemConditionType setDescription(Property\DescriptionProperty $description)
 * @method OfferItemConditionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OfferItemConditionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OfferItemConditionType setImage(Property\ImageProperty $image)
 * @method OfferItemConditionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OfferItemConditionType setName(Property\NameProperty $name)
 * @method OfferItemConditionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OfferItemConditionType setSameAs(Property\SameAsProperty $sameAs)
 * @method OfferItemConditionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OfferItemConditionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OfferItemConditionType setUrl(Property\UrlProperty $url)
 */
class OfferItemConditionType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfferItemCondition';
	}
}