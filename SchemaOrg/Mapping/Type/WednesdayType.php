<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WednesdayType.
 * 
 * @method WednesdayType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WednesdayType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WednesdayType setDescription(Property\DescriptionProperty $description)
 * @method WednesdayType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WednesdayType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WednesdayType setImage(Property\ImageProperty $image)
 * @method WednesdayType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WednesdayType setName(Property\NameProperty $name)
 * @method WednesdayType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WednesdayType setSameAs(Property\SameAsProperty $sameAs)
 * @method WednesdayType setUrl(Property\UrlProperty $url)
 */
class WednesdayType extends DayOfWeekType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Wednesday';
	}
}