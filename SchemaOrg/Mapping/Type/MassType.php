<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Properties that take Mass as values are of the form ' '. E.g., '7 kg'.
 * 
 * @method MassType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MassType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MassType setDescription(Property\DescriptionProperty $description)
 * @method MassType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MassType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MassType setImage(Property\ImageProperty $image)
 * @method MassType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MassType setName(Property\NameProperty $name)
 * @method MassType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MassType setSameAs(Property\SameAsProperty $sameAs)
 * @method MassType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MassType setUrl(Property\UrlProperty $url)
 */
class MassType extends QuantityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Mass';
	}
}