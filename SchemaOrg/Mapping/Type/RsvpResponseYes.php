<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RsvpResponseYes.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RsvpResponseYesType instead.
 * 
 * @method RsvpResponseYes setAdditionalType(Property\AdditionalType $additionalType)
 * @method RsvpResponseYes setAlternateName(Property\AlternateName $alternateName)
 * @method RsvpResponseYes setDescription(Property\Description $description)
 * @method RsvpResponseYes setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RsvpResponseYes setIdentifier(Property\Identifier $identifier)
 * @method RsvpResponseYes setImage(Property\Image $image)
 * @method RsvpResponseYes setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RsvpResponseYes setName(Property\Name $name)
 * @method RsvpResponseYes setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RsvpResponseYes setSameAs(Property\SameAs $sameAs)
 * @method RsvpResponseYes setUrl(Property\Url $url)
 */
class RsvpResponseYes extends RsvpResponseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RsvpResponseYes';
	}
}