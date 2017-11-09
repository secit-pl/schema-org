<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DayOfWeekType.
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