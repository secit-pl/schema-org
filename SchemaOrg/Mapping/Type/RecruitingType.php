<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Recruiting participants.
 * 
 * @method RecruitingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RecruitingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RecruitingType setDescription(Property\DescriptionProperty $description)
 * @method RecruitingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RecruitingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RecruitingType setImage(Property\ImageProperty $image)
 * @method RecruitingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RecruitingType setName(Property\NameProperty $name)
 * @method RecruitingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RecruitingType setSameAs(Property\SameAsProperty $sameAs)
 * @method RecruitingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RecruitingType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RecruitingType setUrl(Property\UrlProperty $url)
 */
class RecruitingType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Recruiting';
	}
}