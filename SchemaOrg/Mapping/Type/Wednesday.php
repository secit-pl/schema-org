<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Wednesday.
 * 
 * @method Wednesday setAdditionalType(Property\AdditionalType $additionalType)
 * @method Wednesday setAlternateName(Property\AlternateName $alternateName)
 * @method Wednesday setDescription(Property\Description $description)
 * @method Wednesday setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Wednesday setIdentifier(Property\Identifier $identifier)
 * @method Wednesday setImage(Property\Image $image)
 * @method Wednesday setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Wednesday setName(Property\Name $name)
 * @method Wednesday setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Wednesday setSameAs(Property\SameAs $sameAs)
 * @method Wednesday setUrl(Property\Url $url)
 */
class Wednesday extends DayOfWeek {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Wednesday';
	}
}