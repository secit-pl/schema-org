<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Results are available.
 * 
 * @method ResultsAvailableType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ResultsAvailableType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ResultsAvailableType setDescription(Property\DescriptionProperty $description)
 * @method ResultsAvailableType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ResultsAvailableType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ResultsAvailableType setImage(Property\ImageProperty $image)
 * @method ResultsAvailableType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ResultsAvailableType setName(Property\NameProperty $name)
 * @method ResultsAvailableType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ResultsAvailableType setSameAs(Property\SameAsProperty $sameAs)
 * @method ResultsAvailableType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ResultsAvailableType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ResultsAvailableType setUrl(Property\UrlProperty $url)
 */
class ResultsAvailableType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ResultsAvailable';
	}
}