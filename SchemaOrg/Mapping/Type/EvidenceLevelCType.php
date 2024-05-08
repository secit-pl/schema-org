<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Only consensus opinion of experts, case studies, or standard-of-care.
 * 
 * @method EvidenceLevelCType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EvidenceLevelCType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EvidenceLevelCType setDescription(Property\DescriptionProperty $description)
 * @method EvidenceLevelCType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EvidenceLevelCType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EvidenceLevelCType setImage(Property\ImageProperty $image)
 * @method EvidenceLevelCType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EvidenceLevelCType setName(Property\NameProperty $name)
 * @method EvidenceLevelCType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EvidenceLevelCType setSameAs(Property\SameAsProperty $sameAs)
 * @method EvidenceLevelCType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EvidenceLevelCType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EvidenceLevelCType setUrl(Property\UrlProperty $url)
 */
class EvidenceLevelCType extends MedicalEvidenceLevelType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EvidenceLevelC';
	}
}