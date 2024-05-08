<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 * 
 * @method PaymentStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentStatusType setDescription(Property\DescriptionProperty $description)
 * @method PaymentStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentStatusType setImage(Property\ImageProperty $image)
 * @method PaymentStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentStatusType setName(Property\NameProperty $name)
 * @method PaymentStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PaymentStatusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PaymentStatusType setUrl(Property\UrlProperty $url)
 */
class PaymentStatusType extends StatusEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentStatusType';
	}
}