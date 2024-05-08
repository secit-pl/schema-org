<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The day of the week between Saturday and Monday.
 * 
 * @method SundayType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SundayType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SundayType setDescription(Property\DescriptionProperty $description)
 * @method SundayType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SundayType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SundayType setImage(Property\ImageProperty $image)
 * @method SundayType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SundayType setName(Property\NameProperty $name)
 * @method SundayType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SundayType setSameAs(Property\SameAsProperty $sameAs)
 * @method SundayType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SundayType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SundayType setUrl(Property\UrlProperty $url)
 */
class SundayType extends DayOfWeekType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Sunday';
	}
}