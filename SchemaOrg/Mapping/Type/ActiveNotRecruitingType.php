<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Active, but not recruiting new participants.
 * 
 * @method ActiveNotRecruitingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ActiveNotRecruitingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ActiveNotRecruitingType setDescription(Property\DescriptionProperty $description)
 * @method ActiveNotRecruitingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ActiveNotRecruitingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ActiveNotRecruitingType setImage(Property\ImageProperty $image)
 * @method ActiveNotRecruitingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ActiveNotRecruitingType setName(Property\NameProperty $name)
 * @method ActiveNotRecruitingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ActiveNotRecruitingType setSameAs(Property\SameAsProperty $sameAs)
 * @method ActiveNotRecruitingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ActiveNotRecruitingType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ActiveNotRecruitingType setUrl(Property\UrlProperty $url)
 */
class ActiveNotRecruitingType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ActiveNotRecruiting';
	}
}