<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * This stands for any day that is a public holiday; it is a placeholder for all official public holidays in some particular location. While not technically a "day of the week", it can be used with OpeningHoursSpecification. In the context of an opening hours specification it can be used to indicate opening hours on public holidays, overriding general opening hours for the day of the week on which a public holiday occurs.
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
 * @method PublicHolidaysType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PublicHolidaysType setSupersededBy(Property\SupersededByProperty $supersededBy)
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