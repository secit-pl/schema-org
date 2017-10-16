<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Enumeration.
 * 
 * @method Enumeration setAdditionalType(Property\AdditionalType $additionalType)
 * @method Enumeration setAlternateName(Property\AlternateName $alternateName)
 * @method Enumeration setDescription(Property\Description $description)
 * @method Enumeration setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Enumeration setIdentifier(Property\Identifier $identifier)
 * @method Enumeration setImage(Property\Image $image)
 * @method Enumeration setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Enumeration setName(Property\Name $name)
 * @method Enumeration setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Enumeration setSameAs(Property\SameAs $sameAs)
 * @method Enumeration setUrl(Property\Url $url)
 */
class Enumeration extends Intangible {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Enumeration';
	}
}