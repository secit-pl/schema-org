<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A DeliveryMethod in which an item is collected on site, e.g. in a store or at a box office.
 * 
 * @method OnSitePickupType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OnSitePickupType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OnSitePickupType setDescription(Property\DescriptionProperty $description)
 * @method OnSitePickupType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OnSitePickupType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OnSitePickupType setImage(Property\ImageProperty $image)
 * @method OnSitePickupType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OnSitePickupType setName(Property\NameProperty $name)
 * @method OnSitePickupType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OnSitePickupType setSameAs(Property\SameAsProperty $sameAs)
 * @method OnSitePickupType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OnSitePickupType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OnSitePickupType setUrl(Property\UrlProperty $url)
 */
class OnSitePickupType extends DeliveryMethodType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnSitePickup';
	}
}