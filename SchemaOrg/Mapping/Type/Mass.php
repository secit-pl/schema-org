<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Mass.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MassType instead.
 * 
 * @method Mass setAdditionalType(Property\AdditionalType $additionalType)
 * @method Mass setAlternateName(Property\AlternateName $alternateName)
 * @method Mass setDescription(Property\Description $description)
 * @method Mass setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Mass setIdentifier(Property\Identifier $identifier)
 * @method Mass setImage(Property\Image $image)
 * @method Mass setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Mass setName(Property\Name $name)
 * @method Mass setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Mass setSameAs(Property\SameAs $sameAs)
 * @method Mass setUrl(Property\Url $url)
 */
class Mass extends Quantity {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Mass';
	}
}