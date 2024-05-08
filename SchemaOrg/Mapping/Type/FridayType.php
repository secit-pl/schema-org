<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The day of the week between Thursday and Saturday.
 * 
 * @method FridayType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FridayType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FridayType setDescription(Property\DescriptionProperty $description)
 * @method FridayType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FridayType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FridayType setImage(Property\ImageProperty $image)
 * @method FridayType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FridayType setName(Property\NameProperty $name)
 * @method FridayType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FridayType setSameAs(Property\SameAsProperty $sameAs)
 * @method FridayType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FridayType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FridayType setUrl(Property\UrlProperty $url)
 */
class FridayType extends DayOfWeekType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Friday';
	}
}