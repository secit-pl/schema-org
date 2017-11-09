<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParkingMap.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ParkingMapType instead.
 * 
 * @method ParkingMap setAdditionalType(Property\AdditionalType $additionalType)
 * @method ParkingMap setAlternateName(Property\AlternateName $alternateName)
 * @method ParkingMap setDescription(Property\Description $description)
 * @method ParkingMap setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ParkingMap setIdentifier(Property\Identifier $identifier)
 * @method ParkingMap setImage(Property\Image $image)
 * @method ParkingMap setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ParkingMap setName(Property\Name $name)
 * @method ParkingMap setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ParkingMap setSameAs(Property\SameAs $sameAs)
 * @method ParkingMap setUrl(Property\Url $url)
 */
class ParkingMap extends MapCategoryType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ParkingMap';
	}
}