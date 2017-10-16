<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PotentialActionStatus.
 * 
 * @method PotentialActionStatus setAdditionalType(Property\AdditionalType $additionalType)
 * @method PotentialActionStatus setAlternateName(Property\AlternateName $alternateName)
 * @method PotentialActionStatus setDescription(Property\Description $description)
 * @method PotentialActionStatus setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PotentialActionStatus setIdentifier(Property\Identifier $identifier)
 * @method PotentialActionStatus setImage(Property\Image $image)
 * @method PotentialActionStatus setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PotentialActionStatus setName(Property\Name $name)
 * @method PotentialActionStatus setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PotentialActionStatus setSameAs(Property\SameAs $sameAs)
 * @method PotentialActionStatus setUrl(Property\Url $url)
 */
class PotentialActionStatus extends ActionStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PotentialActionStatus';
	}
}