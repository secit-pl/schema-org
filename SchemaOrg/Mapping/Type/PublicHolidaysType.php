<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PublicHolidaysType.
 * 
 * @method PublicHolidaysType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PublicHolidaysType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PublicHolidaysType setDescription(Property\DescriptionProperty $description)
 * @method PublicHolidaysType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PublicHolidaysType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PublicHolidaysType setImage(Property\ImageProperty $image)
 * @method PublicHolidaysType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PublicHolidaysType setName(Property\NameProperty $name)
 * @method PublicHolidaysType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PublicHolidaysType setSameAs(Property\SameAsProperty $sameAs)
 * @method PublicHolidaysType setUrl(Property\UrlProperty $url)
 */
class PublicHolidaysType extends DayOfWeekType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PublicHolidays';
	}
}