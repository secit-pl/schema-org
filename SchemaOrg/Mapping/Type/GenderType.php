<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GenderType.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\GenderType instead.
 * 
 * @method GenderType setAdditionalType(Property\AdditionalType $additionalType)
 * @method GenderType setAlternateName(Property\AlternateName $alternateName)
 * @method GenderType setDescription(Property\Description $description)
 * @method GenderType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GenderType setIdentifier(Property\Identifier $identifier)
 * @method GenderType setImage(Property\Image $image)
 * @method GenderType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GenderType setName(Property\Name $name)
 * @method GenderType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GenderType setSameAs(Property\SameAs $sameAs)
 * @method GenderType setUrl(Property\Url $url)
 */
class GenderType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GenderType';
	}
}