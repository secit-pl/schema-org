<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The practice of treatment of disease, injury, or deformity by physical methods such as massage, heat treatment, and exercise rather than by drugs or surgery.
 * 
 * @method PhysiotherapyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PhysiotherapyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PhysiotherapyType setDescription(Property\DescriptionProperty $description)
 * @method PhysiotherapyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PhysiotherapyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PhysiotherapyType setImage(Property\ImageProperty $image)
 * @method PhysiotherapyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PhysiotherapyType setName(Property\NameProperty $name)
 * @method PhysiotherapyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PhysiotherapyType setSameAs(Property\SameAsProperty $sameAs)
 * @method PhysiotherapyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PhysiotherapyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PhysiotherapyType setUrl(Property\UrlProperty $url)
 */
class PhysiotherapyType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Physiotherapy';
	}
}