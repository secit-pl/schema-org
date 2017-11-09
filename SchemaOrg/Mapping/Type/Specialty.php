<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Specialty.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\SpecialtyType instead.
 * 
 * @method Specialty setAdditionalType(Property\AdditionalType $additionalType)
 * @method Specialty setAlternateName(Property\AlternateName $alternateName)
 * @method Specialty setDescription(Property\Description $description)
 * @method Specialty setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Specialty setIdentifier(Property\Identifier $identifier)
 * @method Specialty setImage(Property\Image $image)
 * @method Specialty setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Specialty setName(Property\Name $name)
 * @method Specialty setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Specialty setSameAs(Property\SameAs $sameAs)
 * @method Specialty setUrl(Property\Url $url)
 */
class Specialty extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Specialty';
	}
}