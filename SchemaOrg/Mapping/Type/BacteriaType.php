<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Pathogenic bacteria that cause bacterial infection.
 * 
 * @method BacteriaType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BacteriaType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BacteriaType setDescription(Property\DescriptionProperty $description)
 * @method BacteriaType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BacteriaType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BacteriaType setImage(Property\ImageProperty $image)
 * @method BacteriaType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BacteriaType setName(Property\NameProperty $name)
 * @method BacteriaType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BacteriaType setSameAs(Property\SameAsProperty $sameAs)
 * @method BacteriaType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BacteriaType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method BacteriaType setUrl(Property\UrlProperty $url)
 */
class BacteriaType extends InfectiousAgentClassType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Bacteria';
	}
}