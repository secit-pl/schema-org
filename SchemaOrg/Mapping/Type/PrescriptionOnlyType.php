<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Available by prescription only.
 * 
 * @method PrescriptionOnlyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PrescriptionOnlyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PrescriptionOnlyType setDescription(Property\DescriptionProperty $description)
 * @method PrescriptionOnlyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PrescriptionOnlyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PrescriptionOnlyType setImage(Property\ImageProperty $image)
 * @method PrescriptionOnlyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PrescriptionOnlyType setName(Property\NameProperty $name)
 * @method PrescriptionOnlyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PrescriptionOnlyType setSameAs(Property\SameAsProperty $sameAs)
 * @method PrescriptionOnlyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PrescriptionOnlyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PrescriptionOnlyType setUrl(Property\UrlProperty $url)
 */
class PrescriptionOnlyType extends DrugPrescriptionStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PrescriptionOnly';
	}
}