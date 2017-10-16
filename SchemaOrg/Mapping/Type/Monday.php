<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Monday.
 * 
 * @method Monday setAdditionalType(Property\AdditionalType $additionalType)
 * @method Monday setAlternateName(Property\AlternateName $alternateName)
 * @method Monday setDescription(Property\Description $description)
 * @method Monday setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Monday setIdentifier(Property\Identifier $identifier)
 * @method Monday setImage(Property\Image $image)
 * @method Monday setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Monday setName(Property\Name $name)
 * @method Monday setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Monday setSameAs(Property\SameAs $sameAs)
 * @method Monday setUrl(Property\Url $url)
 */
class Monday extends DayOfWeek {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Monday';
	}
}