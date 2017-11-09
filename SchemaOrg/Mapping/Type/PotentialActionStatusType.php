<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PotentialActionStatusType.
 * 
 * @method PotentialActionStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PotentialActionStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PotentialActionStatusType setDescription(Property\DescriptionProperty $description)
 * @method PotentialActionStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PotentialActionStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PotentialActionStatusType setImage(Property\ImageProperty $image)
 * @method PotentialActionStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PotentialActionStatusType setName(Property\NameProperty $name)
 * @method PotentialActionStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PotentialActionStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method PotentialActionStatusType setUrl(Property\UrlProperty $url)
 */
class PotentialActionStatusType extends ActionStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PotentialActionStatus';
	}
}