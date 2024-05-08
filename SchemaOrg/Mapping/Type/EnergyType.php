<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Properties that take Energy as values are of the form ' '.
 * 
 * @method EnergyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EnergyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EnergyType setDescription(Property\DescriptionProperty $description)
 * @method EnergyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EnergyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EnergyType setImage(Property\ImageProperty $image)
 * @method EnergyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EnergyType setName(Property\NameProperty $name)
 * @method EnergyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EnergyType setSameAs(Property\SameAsProperty $sameAs)
 * @method EnergyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EnergyType setUrl(Property\UrlProperty $url)
 */
class EnergyType extends QuantityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Energy';
	}
}