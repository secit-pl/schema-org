<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Results are not available.
 * 
 * @method ResultsNotAvailableType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ResultsNotAvailableType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ResultsNotAvailableType setDescription(Property\DescriptionProperty $description)
 * @method ResultsNotAvailableType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ResultsNotAvailableType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ResultsNotAvailableType setImage(Property\ImageProperty $image)
 * @method ResultsNotAvailableType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ResultsNotAvailableType setName(Property\NameProperty $name)
 * @method ResultsNotAvailableType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ResultsNotAvailableType setSameAs(Property\SameAsProperty $sameAs)
 * @method ResultsNotAvailableType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ResultsNotAvailableType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ResultsNotAvailableType setUrl(Property\UrlProperty $url)
 */
class ResultsNotAvailableType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ResultsNotAvailable';
	}
}