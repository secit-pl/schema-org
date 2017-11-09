<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VegetarianDietType.
 * 
 * @method VegetarianDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VegetarianDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VegetarianDietType setDescription(Property\DescriptionProperty $description)
 * @method VegetarianDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VegetarianDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VegetarianDietType setImage(Property\ImageProperty $image)
 * @method VegetarianDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VegetarianDietType setName(Property\NameProperty $name)
 * @method VegetarianDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VegetarianDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method VegetarianDietType setUrl(Property\UrlProperty $url)
 */
class VegetarianDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VegetarianDiet';
	}
}