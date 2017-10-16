<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DamagedCondition.
 * 
 * @method DamagedCondition setAdditionalType(Property\AdditionalType $additionalType)
 * @method DamagedCondition setAlternateName(Property\AlternateName $alternateName)
 * @method DamagedCondition setDescription(Property\Description $description)
 * @method DamagedCondition setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DamagedCondition setIdentifier(Property\Identifier $identifier)
 * @method DamagedCondition setImage(Property\Image $image)
 * @method DamagedCondition setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DamagedCondition setName(Property\Name $name)
 * @method DamagedCondition setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DamagedCondition setSameAs(Property\SameAs $sameAs)
 * @method DamagedCondition setUrl(Property\Url $url)
 */
class DamagedCondition extends OfferItemCondition {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DamagedCondition';
	}
}