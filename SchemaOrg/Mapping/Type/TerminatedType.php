<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Terminated.
 * 
 * @method TerminatedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TerminatedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TerminatedType setDescription(Property\DescriptionProperty $description)
 * @method TerminatedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TerminatedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TerminatedType setImage(Property\ImageProperty $image)
 * @method TerminatedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TerminatedType setName(Property\NameProperty $name)
 * @method TerminatedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TerminatedType setSameAs(Property\SameAsProperty $sameAs)
 * @method TerminatedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TerminatedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method TerminatedType setUrl(Property\UrlProperty $url)
 */
class TerminatedType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Terminated';
	}
}