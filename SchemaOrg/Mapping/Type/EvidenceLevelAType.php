<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Data derived from multiple randomized clinical trials or meta-analyses.
 * 
 * @method EvidenceLevelAType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EvidenceLevelAType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EvidenceLevelAType setDescription(Property\DescriptionProperty $description)
 * @method EvidenceLevelAType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EvidenceLevelAType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EvidenceLevelAType setImage(Property\ImageProperty $image)
 * @method EvidenceLevelAType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EvidenceLevelAType setName(Property\NameProperty $name)
 * @method EvidenceLevelAType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EvidenceLevelAType setSameAs(Property\SameAsProperty $sameAs)
 * @method EvidenceLevelAType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EvidenceLevelAType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EvidenceLevelAType setUrl(Property\UrlProperty $url)
 */
class EvidenceLevelAType extends MedicalEvidenceLevelType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EvidenceLevelA';
	}
}