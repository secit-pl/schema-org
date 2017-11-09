<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LowFatDietType.
 * 
 * @method LowFatDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LowFatDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LowFatDietType setDescription(Property\DescriptionProperty $description)
 * @method LowFatDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LowFatDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LowFatDietType setImage(Property\ImageProperty $image)
 * @method LowFatDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LowFatDietType setName(Property\NameProperty $name)
 * @method LowFatDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LowFatDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method LowFatDietType setUrl(Property\UrlProperty $url)
 */
class LowFatDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LowFatDiet';
	}
}