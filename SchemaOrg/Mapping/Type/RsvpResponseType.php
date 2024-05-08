<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * RsvpResponseType is an enumeration type whose instances represent responding to an RSVP request.
 * 
 * @method RsvpResponseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RsvpResponseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RsvpResponseType setDescription(Property\DescriptionProperty $description)
 * @method RsvpResponseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RsvpResponseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RsvpResponseType setImage(Property\ImageProperty $image)
 * @method RsvpResponseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RsvpResponseType setName(Property\NameProperty $name)
 * @method RsvpResponseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RsvpResponseType setSameAs(Property\SameAsProperty $sameAs)
 * @method RsvpResponseType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RsvpResponseType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RsvpResponseType setUrl(Property\UrlProperty $url)
 */
class RsvpResponseType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RsvpResponseType';
	}
}