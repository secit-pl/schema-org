<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ThursdayType.
 * 
 * @method ThursdayType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ThursdayType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ThursdayType setDescription(Property\DescriptionProperty $description)
 * @method ThursdayType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ThursdayType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ThursdayType setImage(Property\ImageProperty $image)
 * @method ThursdayType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ThursdayType setName(Property\NameProperty $name)
 * @method ThursdayType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ThursdayType setSameAs(Property\SameAsProperty $sameAs)
 * @method ThursdayType setUrl(Property\UrlProperty $url)
 */
class ThursdayType extends DayOfWeekType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Thursday';
	}
}