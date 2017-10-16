<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Thursday.
 * 
 * @method Thursday setAdditionalType(Property\AdditionalType $additionalType)
 * @method Thursday setAlternateName(Property\AlternateName $alternateName)
 * @method Thursday setDescription(Property\Description $description)
 * @method Thursday setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Thursday setIdentifier(Property\Identifier $identifier)
 * @method Thursday setImage(Property\Image $image)
 * @method Thursday setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Thursday setName(Property\Name $name)
 * @method Thursday setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Thursday setSameAs(Property\SameAs $sameAs)
 * @method Thursday setUrl(Property\Url $url)
 */
class Thursday extends DayOfWeek {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Thursday';
	}
}