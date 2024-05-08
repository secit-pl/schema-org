<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Data derived from a single randomized trial, or nonrandomized studies.
 * 
 * @method EvidenceLevelBType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EvidenceLevelBType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EvidenceLevelBType setDescription(Property\DescriptionProperty $description)
 * @method EvidenceLevelBType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EvidenceLevelBType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EvidenceLevelBType setImage(Property\ImageProperty $image)
 * @method EvidenceLevelBType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EvidenceLevelBType setName(Property\NameProperty $name)
 * @method EvidenceLevelBType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EvidenceLevelBType setSameAs(Property\SameAsProperty $sameAs)
 * @method EvidenceLevelBType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EvidenceLevelBType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EvidenceLevelBType setUrl(Property\UrlProperty $url)
 */
class EvidenceLevelBType extends MedicalEvidenceLevelType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EvidenceLevelB';
	}
}