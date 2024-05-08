<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to study of anesthetics and their application.
 * 
 * @method AnesthesiaType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AnesthesiaType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AnesthesiaType setDescription(Property\DescriptionProperty $description)
 * @method AnesthesiaType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AnesthesiaType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AnesthesiaType setImage(Property\ImageProperty $image)
 * @method AnesthesiaType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AnesthesiaType setName(Property\NameProperty $name)
 * @method AnesthesiaType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AnesthesiaType setSameAs(Property\SameAsProperty $sameAs)
 * @method AnesthesiaType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AnesthesiaType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method AnesthesiaType setUrl(Property\UrlProperty $url)
 */
class AnesthesiaType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Anesthesia';
	}
}