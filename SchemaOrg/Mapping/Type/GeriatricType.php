<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that is concerned with the diagnosis and treatment of diseases, debilities and provision of care to the aged.
 * 
 * @method GeriatricType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GeriatricType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GeriatricType setDescription(Property\DescriptionProperty $description)
 * @method GeriatricType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GeriatricType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GeriatricType setImage(Property\ImageProperty $image)
 * @method GeriatricType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GeriatricType setName(Property\NameProperty $name)
 * @method GeriatricType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GeriatricType setSameAs(Property\SameAsProperty $sameAs)
 * @method GeriatricType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GeriatricType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method GeriatricType setUrl(Property\UrlProperty $url)
 */
class GeriatricType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Geriatric';
	}
}