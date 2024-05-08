<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Classes of agents or pathogens that transmit infectious diseases. Enumerated type.
 * 
 * @method InfectiousAgentClassType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InfectiousAgentClassType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InfectiousAgentClassType setDescription(Property\DescriptionProperty $description)
 * @method InfectiousAgentClassType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InfectiousAgentClassType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InfectiousAgentClassType setImage(Property\ImageProperty $image)
 * @method InfectiousAgentClassType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InfectiousAgentClassType setName(Property\NameProperty $name)
 * @method InfectiousAgentClassType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InfectiousAgentClassType setSameAs(Property\SameAsProperty $sameAs)
 * @method InfectiousAgentClassType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method InfectiousAgentClassType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method InfectiousAgentClassType setUrl(Property\UrlProperty $url)
 */
class InfectiousAgentClassType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InfectiousAgentClass';
	}
}