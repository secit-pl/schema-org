<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PublicHolidays.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PublicHolidaysType instead.
 * 
 * @method PublicHolidays setAdditionalType(Property\AdditionalType $additionalType)
 * @method PublicHolidays setAlternateName(Property\AlternateName $alternateName)
 * @method PublicHolidays setDescription(Property\Description $description)
 * @method PublicHolidays setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PublicHolidays setIdentifier(Property\Identifier $identifier)
 * @method PublicHolidays setImage(Property\Image $image)
 * @method PublicHolidays setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PublicHolidays setName(Property\Name $name)
 * @method PublicHolidays setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PublicHolidays setSameAs(Property\SameAs $sameAs)
 * @method PublicHolidays setUrl(Property\Url $url)
 */
class PublicHolidays extends DayOfWeek {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PublicHolidays';
	}
}