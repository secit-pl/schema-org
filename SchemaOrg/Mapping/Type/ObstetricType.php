<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that specializes in the care of women during the prenatal and postnatal care and with the delivery of the child.
 * 
 * @method ObstetricType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ObstetricType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ObstetricType setDescription(Property\DescriptionProperty $description)
 * @method ObstetricType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ObstetricType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ObstetricType setImage(Property\ImageProperty $image)
 * @method ObstetricType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ObstetricType setName(Property\NameProperty $name)
 * @method ObstetricType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ObstetricType setSameAs(Property\SameAsProperty $sameAs)
 * @method ObstetricType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ObstetricType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ObstetricType setUrl(Property\UrlProperty $url)
 */
class ObstetricType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Obstetric';
	}
}