<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParkingMapType.
 * 
 * @method ParkingMapType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ParkingMapType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ParkingMapType setDescription(Property\DescriptionProperty $description)
 * @method ParkingMapType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ParkingMapType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ParkingMapType setImage(Property\ImageProperty $image)
 * @method ParkingMapType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ParkingMapType setName(Property\NameProperty $name)
 * @method ParkingMapType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ParkingMapType setSameAs(Property\SameAsProperty $sameAs)
 * @method ParkingMapType setUrl(Property\UrlProperty $url)
 */
class ParkingMapType extends MapCategoryType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ParkingMap';
	}
}