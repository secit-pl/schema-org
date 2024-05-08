<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The day of the week, e.g. used to specify to which day the opening hours of an OpeningHoursSpecification refer. Originally, URLs from GoodRelations were used (for Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday plus a special entry for PublicHolidays); these have now been integrated directly into schema.org.
 * 
 * @method DayOfWeekType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DayOfWeekType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DayOfWeekType setDescription(Property\DescriptionProperty $description)
 * @method DayOfWeekType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DayOfWeekType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DayOfWeekType setImage(Property\ImageProperty $image)
 * @method DayOfWeekType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DayOfWeekType setName(Property\NameProperty $name)
 * @method DayOfWeekType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DayOfWeekType setSameAs(Property\SameAsProperty $sameAs)
 * @method DayOfWeekType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DayOfWeekType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DayOfWeekType setUrl(Property\UrlProperty $url)
 */
class DayOfWeekType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DayOfWeek';
	}
}