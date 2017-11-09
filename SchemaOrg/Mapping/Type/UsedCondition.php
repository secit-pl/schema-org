<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class UsedCondition.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\UsedConditionType instead.
 * 
 * @method UsedCondition setAdditionalType(Property\AdditionalType $additionalType)
 * @method UsedCondition setAlternateName(Property\AlternateName $alternateName)
 * @method UsedCondition setDescription(Property\Description $description)
 * @method UsedCondition setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method UsedCondition setIdentifier(Property\Identifier $identifier)
 * @method UsedCondition setImage(Property\Image $image)
 * @method UsedCondition setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method UsedCondition setName(Property\Name $name)
 * @method UsedCondition setPotentialAction(Property\PotentialAction $potentialAction)
 * @method UsedCondition setSameAs(Property\SameAs $sameAs)
 * @method UsedCondition setUrl(Property\Url $url)
 */
class UsedCondition extends OfferItemCondition {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UsedCondition';
	}
}