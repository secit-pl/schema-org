<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Enrolling participants by invitation only.
 * 
 * @method EnrollingByInvitationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EnrollingByInvitationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EnrollingByInvitationType setDescription(Property\DescriptionProperty $description)
 * @method EnrollingByInvitationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EnrollingByInvitationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EnrollingByInvitationType setImage(Property\ImageProperty $image)
 * @method EnrollingByInvitationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EnrollingByInvitationType setName(Property\NameProperty $name)
 * @method EnrollingByInvitationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EnrollingByInvitationType setSameAs(Property\SameAsProperty $sameAs)
 * @method EnrollingByInvitationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EnrollingByInvitationType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EnrollingByInvitationType setUrl(Property\UrlProperty $url)
 */
class EnrollingByInvitationType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EnrollingByInvitation';
	}
}