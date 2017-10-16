<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Saturday.
 * 
 * @method Saturday setAdditionalType(Property\AdditionalType $additionalType)
 * @method Saturday setAlternateName(Property\AlternateName $alternateName)
 * @method Saturday setDescription(Property\Description $description)
 * @method Saturday setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Saturday setIdentifier(Property\Identifier $identifier)
 * @method Saturday setImage(Property\Image $image)
 * @method Saturday setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Saturday setName(Property\Name $name)
 * @method Saturday setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Saturday setSameAs(Property\SameAs $sameAs)
 * @method Saturday setUrl(Property\Url $url)
 */
class Saturday extends DayOfWeek {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Saturday';
	}
}