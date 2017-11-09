<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TuesdayType.
 * 
 * @method TuesdayType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TuesdayType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TuesdayType setDescription(Property\DescriptionProperty $description)
 * @method TuesdayType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TuesdayType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TuesdayType setImage(Property\ImageProperty $image)
 * @method TuesdayType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TuesdayType setName(Property\NameProperty $name)
 * @method TuesdayType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TuesdayType setSameAs(Property\SameAsProperty $sameAs)
 * @method TuesdayType setUrl(Property\UrlProperty $url)
 */
class TuesdayType extends DayOfWeekType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Tuesday';
	}
}