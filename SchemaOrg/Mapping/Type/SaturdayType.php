<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SaturdayType.
 * 
 * @method SaturdayType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SaturdayType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SaturdayType setDescription(Property\DescriptionProperty $description)
 * @method SaturdayType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SaturdayType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SaturdayType setImage(Property\ImageProperty $image)
 * @method SaturdayType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SaturdayType setName(Property\NameProperty $name)
 * @method SaturdayType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SaturdayType setSameAs(Property\SameAsProperty $sameAs)
 * @method SaturdayType setUrl(Property\UrlProperty $url)
 */
class SaturdayType extends DayOfWeekType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Saturday';
	}
}