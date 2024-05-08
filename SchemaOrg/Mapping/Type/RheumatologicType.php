<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that deals with the study and treatment of rheumatic, autoimmune or joint diseases.
 * 
 * @method RheumatologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RheumatologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RheumatologicType setDescription(Property\DescriptionProperty $description)
 * @method RheumatologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RheumatologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RheumatologicType setImage(Property\ImageProperty $image)
 * @method RheumatologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RheumatologicType setName(Property\NameProperty $name)
 * @method RheumatologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RheumatologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method RheumatologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RheumatologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RheumatologicType setUrl(Property\UrlProperty $url)
 */
class RheumatologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Rheumatologic';
	}
}