<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RsvpResponseMaybe.
 * 
 * @method RsvpResponseMaybe setAdditionalType(Property\AdditionalType $additionalType)
 * @method RsvpResponseMaybe setAlternateName(Property\AlternateName $alternateName)
 * @method RsvpResponseMaybe setDescription(Property\Description $description)
 * @method RsvpResponseMaybe setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RsvpResponseMaybe setIdentifier(Property\Identifier $identifier)
 * @method RsvpResponseMaybe setImage(Property\Image $image)
 * @method RsvpResponseMaybe setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RsvpResponseMaybe setName(Property\Name $name)
 * @method RsvpResponseMaybe setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RsvpResponseMaybe setSameAs(Property\SameAs $sameAs)
 * @method RsvpResponseMaybe setUrl(Property\Url $url)
 */
class RsvpResponseMaybe extends RsvpResponseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RsvpResponseMaybe';
	}
}