<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DayOfWeek.
 * 
 * @method DayOfWeek setAdditionalType(Property\AdditionalType $additionalType)
 * @method DayOfWeek setAlternateName(Property\AlternateName $alternateName)
 * @method DayOfWeek setDescription(Property\Description $description)
 * @method DayOfWeek setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DayOfWeek setIdentifier(Property\Identifier $identifier)
 * @method DayOfWeek setImage(Property\Image $image)
 * @method DayOfWeek setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DayOfWeek setName(Property\Name $name)
 * @method DayOfWeek setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DayOfWeek setSameAs(Property\SameAs $sameAs)
 * @method DayOfWeek setUrl(Property\Url $url)
 */
class DayOfWeek extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DayOfWeek';
	}
}