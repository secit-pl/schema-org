<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Female.
 * 
 * @method Female setAdditionalType(Property\AdditionalType $additionalType)
 * @method Female setAlternateName(Property\AlternateName $alternateName)
 * @method Female setDescription(Property\Description $description)
 * @method Female setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Female setIdentifier(Property\Identifier $identifier)
 * @method Female setImage(Property\Image $image)
 * @method Female setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Female setName(Property\Name $name)
 * @method Female setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Female setSameAs(Property\SameAs $sameAs)
 * @method Female setUrl(Property\Url $url)
 */
class Female extends GenderType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Female';
	}
}