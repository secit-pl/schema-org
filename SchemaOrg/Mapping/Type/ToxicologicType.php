<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that is concerned with poisons, their nature, effects and detection and involved in the treatment of poisoning.
 * 
 * @method ToxicologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ToxicologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ToxicologicType setDescription(Property\DescriptionProperty $description)
 * @method ToxicologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ToxicologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ToxicologicType setImage(Property\ImageProperty $image)
 * @method ToxicologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ToxicologicType setName(Property\NameProperty $name)
 * @method ToxicologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ToxicologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method ToxicologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ToxicologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ToxicologicType setUrl(Property\UrlProperty $url)
 */
class ToxicologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Toxicologic';
	}
}