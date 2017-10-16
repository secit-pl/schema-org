<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationCancelled.
 * 
 * @method ReservationCancelled setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReservationCancelled setAlternateName(Property\AlternateName $alternateName)
 * @method ReservationCancelled setDescription(Property\Description $description)
 * @method ReservationCancelled setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReservationCancelled setIdentifier(Property\Identifier $identifier)
 * @method ReservationCancelled setImage(Property\Image $image)
 * @method ReservationCancelled setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReservationCancelled setName(Property\Name $name)
 * @method ReservationCancelled setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReservationCancelled setSameAs(Property\SameAs $sameAs)
 * @method ReservationCancelled setUrl(Property\Url $url)
 */
class ReservationCancelled extends ReservationStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationCancelled';
	}
}