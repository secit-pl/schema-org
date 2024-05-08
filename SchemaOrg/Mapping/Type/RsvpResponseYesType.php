<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The invitee will attend.
 * 
 * @method RsvpResponseYesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RsvpResponseYesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RsvpResponseYesType setDescription(Property\DescriptionProperty $description)
 * @method RsvpResponseYesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RsvpResponseYesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RsvpResponseYesType setImage(Property\ImageProperty $image)
 * @method RsvpResponseYesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RsvpResponseYesType setName(Property\NameProperty $name)
 * @method RsvpResponseYesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RsvpResponseYesType setSameAs(Property\SameAsProperty $sameAs)
 * @method RsvpResponseYesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RsvpResponseYesType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RsvpResponseYesType setUrl(Property\UrlProperty $url)
 */
class RsvpResponseYesType extends RsvpResponseType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RsvpResponseYes';
	}
}