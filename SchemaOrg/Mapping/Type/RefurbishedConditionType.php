<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the item is refurbished.
 * 
 * @method RefurbishedConditionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RefurbishedConditionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RefurbishedConditionType setDescription(Property\DescriptionProperty $description)
 * @method RefurbishedConditionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RefurbishedConditionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RefurbishedConditionType setImage(Property\ImageProperty $image)
 * @method RefurbishedConditionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RefurbishedConditionType setName(Property\NameProperty $name)
 * @method RefurbishedConditionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RefurbishedConditionType setSameAs(Property\SameAsProperty $sameAs)
 * @method RefurbishedConditionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RefurbishedConditionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RefurbishedConditionType setUrl(Property\UrlProperty $url)
 */
class RefurbishedConditionType extends OfferItemConditionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RefurbishedCondition';
	}
}