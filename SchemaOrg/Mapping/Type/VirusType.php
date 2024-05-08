<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Pathogenic virus that causes viral infection.
 * 
 * @method VirusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VirusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VirusType setDescription(Property\DescriptionProperty $description)
 * @method VirusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VirusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VirusType setImage(Property\ImageProperty $image)
 * @method VirusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VirusType setName(Property\NameProperty $name)
 * @method VirusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VirusType setSameAs(Property\SameAsProperty $sameAs)
 * @method VirusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VirusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method VirusType setUrl(Property\UrlProperty $url)
 */
class VirusType extends InfectiousAgentClassType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Virus';
	}
}