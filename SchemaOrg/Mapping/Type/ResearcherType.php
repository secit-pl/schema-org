<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Researchers.
 * 
 * @method ResearcherType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ResearcherType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ResearcherType setAudienceType(Property\AudienceTypeProperty $audienceType)
 * @method ResearcherType setDescription(Property\DescriptionProperty $description)
 * @method ResearcherType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ResearcherType setGeographicArea(Property\GeographicAreaProperty $geographicArea)
 * @method ResearcherType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ResearcherType setImage(Property\ImageProperty $image)
 * @method ResearcherType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ResearcherType setName(Property\NameProperty $name)
 * @method ResearcherType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ResearcherType setSameAs(Property\SameAsProperty $sameAs)
 * @method ResearcherType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ResearcherType setUrl(Property\UrlProperty $url)
 */
class ResearcherType extends AudienceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Researcher';
	}
}