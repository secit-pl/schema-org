<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to the health care of women, particularly in the diagnosis and treatment of disorders affecting the female reproductive system.
 * 
 * @method GynecologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GynecologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GynecologicType setDescription(Property\DescriptionProperty $description)
 * @method GynecologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GynecologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GynecologicType setImage(Property\ImageProperty $image)
 * @method GynecologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GynecologicType setName(Property\NameProperty $name)
 * @method GynecologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GynecologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method GynecologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GynecologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method GynecologicType setUrl(Property\UrlProperty $url)
 */
class GynecologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Gynecologic';
	}
}