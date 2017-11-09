<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RsvpResponseNo.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RsvpResponseNoType instead.
 * 
 * @method RsvpResponseNo setAdditionalType(Property\AdditionalType $additionalType)
 * @method RsvpResponseNo setAlternateName(Property\AlternateName $alternateName)
 * @method RsvpResponseNo setDescription(Property\Description $description)
 * @method RsvpResponseNo setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RsvpResponseNo setIdentifier(Property\Identifier $identifier)
 * @method RsvpResponseNo setImage(Property\Image $image)
 * @method RsvpResponseNo setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RsvpResponseNo setName(Property\Name $name)
 * @method RsvpResponseNo setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RsvpResponseNo setSameAs(Property\SameAs $sameAs)
 * @method RsvpResponseNo setUrl(Property\Url $url)
 */
class RsvpResponseNo extends RsvpResponseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RsvpResponseNo';
	}
}