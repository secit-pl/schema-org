<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Male.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MaleType instead.
 * 
 * @method Male setAdditionalType(Property\AdditionalType $additionalType)
 * @method Male setAlternateName(Property\AlternateName $alternateName)
 * @method Male setDescription(Property\Description $description)
 * @method Male setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Male setIdentifier(Property\Identifier $identifier)
 * @method Male setImage(Property\Image $image)
 * @method Male setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Male setName(Property\Name $name)
 * @method Male setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Male setSameAs(Property\SameAs $sameAs)
 * @method Male setUrl(Property\Url $url)
 */
class Male extends GenderType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Male';
	}
}