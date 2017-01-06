<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NewCondition.
 * 
 * @method NewCondition setAdditionalType(Property\AdditionalType $additionalType)
 * @method NewCondition setAlternateName(Property\AlternateName $alternateName)
 * @method NewCondition setDescription(Property\Description $description)
 * @method NewCondition setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
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