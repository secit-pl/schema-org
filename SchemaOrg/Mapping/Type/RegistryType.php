<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A registry-based study design.
 * 
 * @method RegistryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RegistryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RegistryType setDescription(Property\DescriptionProperty $description)
 * @method RegistryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RegistryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RegistryType setImage(Property\ImageProperty $image)
 * @method RegistryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RegistryType setName(Property\NameProperty $name)
 * @method RegistryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RegistryType setSameAs(Property\SameAsProperty $sameAs)
 * @method RegistryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RegistryType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RegistryType setUrl(Property\UrlProperty $url)
 */
class RegistryType extends MedicalObservationalStudyDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Registry';
	}
}