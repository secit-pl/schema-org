<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NewConditionType.
 * 
 * @method NewConditionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NewConditionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NewConditionType setDescription(Property\DescriptionProperty $description)
 * @method NewConditionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NewConditionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NewConditionType setImage(Property\ImageProperty $image)
 * @method NewConditionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NewConditionType setName(Property\NameProperty $name)
 * @method NewConditionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NewConditionType setSameAs(Property\SameAsProperty $sameAs)
 * @method NewConditionType setUrl(Property\UrlProperty $url)
 */
class NewConditionType extends OfferItemConditionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NewCondition';
	}
}