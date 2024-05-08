<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A payment method is a standardized procedure for transferring the monetary amount for a purchase. Payment methods are characterized by the legal and technical structures used, and by the organization or group carrying out the transaction. Commonly used values: http://purl.org/goodrelations/v1#ByBankTransferInAdvance http://purl.org/goodrelations/v1#ByInvoice http://purl.org/goodrelations/v1#Cash http://purl.org/goodrelations/v1#CheckInAdvance http://purl.org/goodrelations/v1#COD http://purl.org/goodrelations/v1#DirectDebit http://purl.org/goodrelations/v1#GoogleCheckout http://purl.org/goodrelations/v1#PayPal http://purl.org/goodrelations/v1#PaySwarm
 * 
 * @method PaymentMethodType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentMethodType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentMethodType setDescription(Property\DescriptionProperty $description)
 * @method PaymentMethodType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentMethodType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentMethodType setImage(Property\ImageProperty $image)
 * @method PaymentMethodType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentMethodType setName(Property\NameProperty $name)
 * @method PaymentMethodType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentMethodType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentMethodType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PaymentMethodType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PaymentMethodType setUrl(Property\UrlProperty $url)
 */
class PaymentMethodType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentMethod';
	}
}