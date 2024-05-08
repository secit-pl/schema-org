<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A field of public health focusing on improving health characteristics of a defined population in relation with their geographical or environment areas.
 * 
 * @method CommunityHealthType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CommunityHealthType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CommunityHealthType setDescription(Property\DescriptionProperty $description)
 * @method CommunityHealthType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CommunityHealthType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CommunityHealthType setImage(Property\ImageProperty $image)
 * @method CommunityHealthType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CommunityHealthType setName(Property\NameProperty $name)
 * @method CommunityHealthType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CommunityHealthType setSameAs(Property\SameAsProperty $sameAs)
 * @method CommunityHealthType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CommunityHealthType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CommunityHealthType setUrl(Property\UrlProperty $url)
 */
class CommunityHealthType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CommunityHealth';
	}
}