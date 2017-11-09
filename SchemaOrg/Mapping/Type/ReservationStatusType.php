<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationStatusType.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ReservationStatusType instead.
 * 
 * @method ReservationStatusType setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReservationStatusType setAlternateName(Property\AlternateName $alternateName)
 * @method ReservationStatusType setDescription(Property\Description $description)
 * @method ReservationStatusType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReservationStatusType setIdentifier(Property\Identifier $identifier)
 * @method ReservationStatusType setImage(Property\Image $image)
 * @method ReservationStatusType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReservationStatusType setName(Property\Name $name)
 * @method ReservationStatusType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReservationStatusType setSameAs(Property\SameAs $sameAs)
 * @method ReservationStatusType setUrl(Property\Url $url)
 */
class ReservationStatusType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationStatusType';
	}
}