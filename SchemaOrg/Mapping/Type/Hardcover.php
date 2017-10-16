<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Hardcover.
 * 
 * @method Hardcover setAdditionalType(Property\AdditionalType $additionalType)
 * @method Hardcover setAlternateName(Property\AlternateName $alternateName)
 * @method Hardcover setDescription(Property\Description $description)
 * @method Hardcover setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Hardcover setIdentifier(Property\Identifier $identifier)
 * @method Hardcover setImage(Property\Image $image)
 * @method Hardcover setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Hardcover setName(Property\Name $name)
 * @method Hardcover setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Hardcover setSameAs(Property\SameAs $sameAs)
 * @method Hardcover setUrl(Property\Url $url)
 */
class Hardcover extends BookFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hardcover';
	}
}