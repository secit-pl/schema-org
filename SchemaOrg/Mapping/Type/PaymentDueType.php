<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The payment is due, but still within an acceptable time to be received.
 * 
 * @method PaymentDueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentDueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentDueType setDescription(Property\DescriptionProperty $description)
 * @method PaymentDueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentDueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentDueType setImage(Property\ImageProperty $image)
 * @method PaymentDueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentDueType setName(Property\NameProperty $name)
 * @method PaymentDueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentDueType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentDueType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PaymentDueType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PaymentDueType setUrl(Property\UrlProperty $url)
 */
class PaymentDueType extends PaymentStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentDue';
	}
}