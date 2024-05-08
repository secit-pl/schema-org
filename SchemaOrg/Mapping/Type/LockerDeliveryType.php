<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A DeliveryMethod in which an item is made available via locker.
 * 
 * @method LockerDeliveryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LockerDeliveryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LockerDeliveryType setDescription(Property\DescriptionProperty $description)
 * @method LockerDeliveryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LockerDeliveryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LockerDeliveryType setImage(Property\ImageProperty $image)
 * @method LockerDeliveryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LockerDeliveryType setName(Property\NameProperty $name)
 * @method LockerDeliveryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LockerDeliveryType setSameAs(Property\SameAsProperty $sameAs)
 * @method LockerDeliveryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LockerDeliveryType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method LockerDeliveryType setUrl(Property\UrlProperty $url)
 */
class LockerDeliveryType extends DeliveryMethodType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LockerDelivery';
	}
}