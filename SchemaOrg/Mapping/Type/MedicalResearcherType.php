<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Medical researchers.
 * 
 * @method MedicalResearcherType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalResearcherType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalResearcherType setDescription(Property\DescriptionProperty $description)
 * @method MedicalResearcherType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalResearcherType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalResearcherType setImage(Property\ImageProperty $image)
 * @method MedicalResearcherType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalResearcherType setName(Property\NameProperty $name)
 * @method MedicalResearcherType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalResearcherType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalResearcherType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalResearcherType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalResearcherType setUrl(Property\UrlProperty $url)
 */
class MedicalResearcherType extends MedicalAudienceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalResearcher';
	}
}