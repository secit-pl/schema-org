<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfferItemCondition.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OfferItemConditionType instead.
 * 
 * @method OfferItemCondition setAdditionalType(Property\AdditionalType $additionalType)
 * @method OfferItemCondition setAlternateName(Property\AlternateName $alternateName)
 * @method OfferItemCondition setDescription(Property\Description $description)
 * @method OfferItemCondition setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OfferItemCondition setIdentifier(Property\Identifier $identifier)
 * @method OfferItemCondition setImage(Property\Image $image)
 * @method OfferItemCondition setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OfferItemCondition setName(Property\Name $name)
 * @method OfferItemCondition setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OfferItemCondition setSameAs(Property\SameAs $sameAs)
 * @method OfferItemCondition setUrl(Property\Url $url)
 */
class OfferItemCondition extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfferItemCondition';
	}
}