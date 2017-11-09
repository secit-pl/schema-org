<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NewCondition.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\NewConditionType instead.
 * 
 * @method NewCondition setAdditionalType(Property\AdditionalType $additionalType)
 * @method NewCondition setAlternateName(Property\AlternateName $alternateName)
 * @method NewCondition setDescription(Property\Description $description)
 * @method NewCondition setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method NewCondition setIdentifier(Property\Identifier $identifier)
 * @method NewCondition setImage(Property\Image $image)
 * @method NewCondition setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method NewCondition setName(Property\Name $name)
 * @method NewCondition setPotentialAction(Property\PotentialAction $potentialAction)
 * @method NewCondition setSameAs(Property\SameAs $sameAs)
 * @method NewCondition setUrl(Property\Url $url)
 */
class NewCondition extends OfferItemCondition {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NewCondition';
	}
}