<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LowCalorieDietType.
 * 
 * @method LowCalorieDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LowCalorieDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LowCalorieDietType setDescription(Property\DescriptionProperty $description)
 * @method LowCalorieDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LowCalorieDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LowCalorieDietType setImage(Property\ImageProperty $image)
 * @method LowCalorieDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LowCalorieDietType setName(Property\NameProperty $name)
 * @method LowCalorieDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LowCalorieDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method LowCalorieDietType setUrl(Property\UrlProperty $url)
 */
class LowCalorieDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LowCalorieDiet';
	}
}