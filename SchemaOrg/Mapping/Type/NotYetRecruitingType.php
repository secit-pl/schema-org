<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Not yet recruiting.
 * 
 * @method NotYetRecruitingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NotYetRecruitingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NotYetRecruitingType setDescription(Property\DescriptionProperty $description)
 * @method NotYetRecruitingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NotYetRecruitingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NotYetRecruitingType setImage(Property\ImageProperty $image)
 * @method NotYetRecruitingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NotYetRecruitingType setName(Property\NameProperty $name)
 * @method NotYetRecruitingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NotYetRecruitingType setSameAs(Property\SameAsProperty $sameAs)
 * @method NotYetRecruitingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NotYetRecruitingType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method NotYetRecruitingType setUrl(Property\UrlProperty $url)
 */
class NotYetRecruitingType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NotYetRecruiting';
	}
}