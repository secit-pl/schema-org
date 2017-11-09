<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DiabeticDietType.
 * 
 * @method DiabeticDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DiabeticDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DiabeticDietType setDescription(Property\DescriptionProperty $description)
 * @method DiabeticDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DiabeticDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DiabeticDietType setImage(Property\ImageProperty $image)
 * @method DiabeticDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DiabeticDietType setName(Property\NameProperty $name)
 * @method DiabeticDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DiabeticDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method DiabeticDietType setUrl(Property\UrlProperty $url)
 */
class DiabeticDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DiabeticDiet';
	}
}