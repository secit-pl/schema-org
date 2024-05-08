<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The invitee will not attend.
 * 
 * @method RsvpResponseNoType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RsvpResponseNoType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RsvpResponseNoType setDescription(Property\DescriptionProperty $description)
 * @method RsvpResponseNoType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RsvpResponseNoType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RsvpResponseNoType setImage(Property\ImageProperty $image)
 * @method RsvpResponseNoType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RsvpResponseNoType setName(Property\NameProperty $name)
 * @method RsvpResponseNoType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RsvpResponseNoType setSameAs(Property\SameAsProperty $sameAs)
 * @method RsvpResponseNoType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RsvpResponseNoType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RsvpResponseNoType setUrl(Property\UrlProperty $url)
 */
class RsvpResponseNoType extends RsvpResponseType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RsvpResponseNo';
	}
}