<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HalalDietType.
 * 
 * @method HalalDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HalalDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HalalDietType setDescription(Property\DescriptionProperty $description)
 * @method HalalDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HalalDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HalalDietType setImage(Property\ImageProperty $image)
 * @method HalalDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HalalDietType setName(Property\NameProperty $name)
 * @method HalalDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HalalDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method HalalDietType setUrl(Property\UrlProperty $url)
 */
class HalalDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HalalDiet';
	}
}