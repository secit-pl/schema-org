<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Discontinued.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DiscontinuedType instead.
 * 
 * @method Discontinued setAdditionalType(Property\AdditionalType $additionalType)
 * @method Discontinued setAlternateName(Property\AlternateName $alternateName)
 * @method Discontinued setDescription(Property\Description $description)
 * @method Discontinued setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Discontinued setIdentifier(Property\Identifier $identifier)
 * @method Discontinued setImage(Property\Image $image)
 * @method Discontinued setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Discontinued setName(Property\Name $name)
 * @method Discontinued setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Discontinued setSameAs(Property\SameAs $sameAs)
 * @method Discontinued setUrl(Property\Url $url)
 */
class Discontinued extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Discontinued';
	}
}