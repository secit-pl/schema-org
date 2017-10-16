<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Tuesday.
 * 
 * @method Tuesday setAdditionalType(Property\AdditionalType $additionalType)
 * @method Tuesday setAlternateName(Property\AlternateName $alternateName)
 * @method Tuesday setDescription(Property\Description $description)
 * @method Tuesday setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Tuesday setIdentifier(Property\Identifier $identifier)
 * @method Tuesday setImage(Property\Image $image)
 * @method Tuesday setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Tuesday setName(Property\Name $name)
 * @method Tuesday setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Tuesday setSameAs(Property\SameAs $sameAs)
 * @method Tuesday setUrl(Property\Url $url)
 */
class Tuesday extends DayOfWeek {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Tuesday';
	}
}