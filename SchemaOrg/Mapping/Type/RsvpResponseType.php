<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RsvpResponseType.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RsvpResponseType instead.
 * 
 * @method RsvpResponseType setAdditionalType(Property\AdditionalType $additionalType)
 * @method RsvpResponseType setAlternateName(Property\AlternateName $alternateName)
 * @method RsvpResponseType setDescription(Property\Description $description)
 * @method RsvpResponseType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RsvpResponseType setIdentifier(Property\Identifier $identifier)
 * @method RsvpResponseType setImage(Property\Image $image)
 * @method RsvpResponseType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RsvpResponseType setName(Property\Name $name)
 * @method RsvpResponseType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RsvpResponseType setSameAs(Property\SameAs $sameAs)
 * @method RsvpResponseType setUrl(Property\Url $url)
 */
class RsvpResponseType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RsvpResponseType';
	}
}