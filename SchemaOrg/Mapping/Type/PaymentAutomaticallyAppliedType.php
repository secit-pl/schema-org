<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An automatic payment system is in place and will be used.
 * 
 * @method PaymentAutomaticallyAppliedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentAutomaticallyAppliedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentAutomaticallyAppliedType setDescription(Property\DescriptionProperty $description)
 * @method PaymentAutomaticallyAppliedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentAutomaticallyAppliedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentAutomaticallyAppliedType setImage(Property\ImageProperty $image)
 * @method PaymentAutomaticallyAppliedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentAutomaticallyAppliedType setName(Property\NameProperty $name)
 * @method PaymentAutomaticallyAppliedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentAutomaticallyAppliedType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentAutomaticallyAppliedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PaymentAutomaticallyAppliedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PaymentAutomaticallyAppliedType setUrl(Property\UrlProperty $url)
 */
class PaymentAutomaticallyAppliedType extends PaymentStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentAutomaticallyApplied';
	}
}