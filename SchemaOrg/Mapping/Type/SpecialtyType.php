<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SpecialtyType.
 * 
 * @method SpecialtyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SpecialtyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SpecialtyType setDescription(Property\DescriptionProperty $description)
 * @method SpecialtyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SpecialtyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SpecialtyType setImage(Property\ImageProperty $image)
 * @method SpecialtyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SpecialtyType setName(Property\NameProperty $name)
 * @method SpecialtyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SpecialtyType setSameAs(Property\SameAsProperty $sameAs)
 * @method SpecialtyType setUrl(Property\UrlProperty $url)
 */
class SpecialtyType extends EnumerationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Specialty';
	}
}