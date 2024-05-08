<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A delivery method is a standardized procedure for transferring the product or service to the destination of fulfillment chosen by the customer. Delivery methods are characterized by the means of transportation used, and by the organization or group that is the contracting party for the sending organization or person. Commonly used values: http://purl.org/goodrelations/v1#DeliveryModeDirectDownload http://purl.org/goodrelations/v1#DeliveryModeFreight http://purl.org/goodrelations/v1#DeliveryModeMail http://purl.org/goodrelations/v1#DeliveryModeOwnFleet http://purl.org/goodrelations/v1#DeliveryModePickUp http://purl.org/goodrelations/v1#DHL http://purl.org/goodrelations/v1#FederalExpress http://purl.org/goodrelations/v1#UPS
 * 
 * @method DeliveryMethodType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DeliveryMethodType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DeliveryMethodType setDescription(Property\DescriptionProperty $description)
 * @method DeliveryMethodType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DeliveryMethodType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DeliveryMethodType setImage(Property\ImageProperty $image)
 * @method DeliveryMethodType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DeliveryMethodType setName(Property\NameProperty $name)
 * @method DeliveryMethodType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DeliveryMethodType setSameAs(Property\SameAsProperty $sameAs)
 * @method DeliveryMethodType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DeliveryMethodType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DeliveryMethodType setUrl(Property\UrlProperty $url)
 */
class DeliveryMethodType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeliveryMethod';
	}
}