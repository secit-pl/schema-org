<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The day of the week between Sunday and Tuesday.
 * 
 * @method MondayType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MondayType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MondayType setDescription(Property\DescriptionProperty $description)
 * @method MondayType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MondayType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MondayType setImage(Property\ImageProperty $image)
 * @method MondayType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MondayType setName(Property\NameProperty $name)
 * @method MondayType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MondayType setSameAs(Property\SameAsProperty $sameAs)
 * @method MondayType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MondayType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MondayType setUrl(Property\UrlProperty $url)
 */
class MondayType extends DayOfWeekType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Monday';
	}
}