<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to diagnosis and treatment of disorders of digestive system.
 * 
 * @method GastroenterologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GastroenterologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GastroenterologicType setDescription(Property\DescriptionProperty $description)
 * @method GastroenterologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GastroenterologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GastroenterologicType setImage(Property\ImageProperty $image)
 * @method GastroenterologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GastroenterologicType setName(Property\NameProperty $name)
 * @method GastroenterologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GastroenterologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method GastroenterologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GastroenterologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method GastroenterologicType setUrl(Property\UrlProperty $url)
 */
class GastroenterologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Gastroenterologic';
	}
}