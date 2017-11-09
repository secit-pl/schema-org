<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationPendingType.
 * 
 * @method ReservationPendingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReservationPendingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReservationPendingType setDescription(Property\DescriptionProperty $description)
 * @method ReservationPendingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReservationPendingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReservationPendingType setImage(Property\ImageProperty $image)
 * @method ReservationPendingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReservationPendingType setName(Property\NameProperty $name)
 * @method ReservationPendingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReservationPendingType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReservationPendingType setUrl(Property\UrlProperty $url)
 */
class ReservationPendingType extends ReservationStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationPending';
	}
}