<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Completed.
 * 
 * @method CompletedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CompletedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CompletedType setDescription(Property\DescriptionProperty $description)
 * @method CompletedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CompletedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CompletedType setImage(Property\ImageProperty $image)
 * @method CompletedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CompletedType setName(Property\NameProperty $name)
 * @method CompletedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CompletedType setSameAs(Property\SameAsProperty $sameAs)
 * @method CompletedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CompletedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CompletedType setUrl(Property\UrlProperty $url)
 */
class CompletedType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Completed';
	}
}