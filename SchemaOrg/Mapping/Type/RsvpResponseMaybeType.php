<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RsvpResponseMaybeType.
 * 
 * @method RsvpResponseMaybeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RsvpResponseMaybeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RsvpResponseMaybeType setDescription(Property\DescriptionProperty $description)
 * @method RsvpResponseMaybeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RsvpResponseMaybeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RsvpResponseMaybeType setImage(Property\ImageProperty $image)
 * @method RsvpResponseMaybeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RsvpResponseMaybeType setName(Property\NameProperty $name)
 * @method RsvpResponseMaybeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RsvpResponseMaybeType setSameAs(Property\SameAsProperty $sameAs)
 * @method RsvpResponseMaybeType setUrl(Property\UrlProperty $url)
 */
class RsvpResponseMaybeType extends RsvpResponseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RsvpResponseMaybe';
	}
}