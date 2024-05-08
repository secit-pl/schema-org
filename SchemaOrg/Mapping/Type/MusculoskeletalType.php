<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to diagnosis and treatment of disorders of muscles, ligaments and skeletal system.
 * 
 * @method MusculoskeletalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusculoskeletalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusculoskeletalType setDescription(Property\DescriptionProperty $description)
 * @method MusculoskeletalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusculoskeletalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusculoskeletalType setImage(Property\ImageProperty $image)
 * @method MusculoskeletalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusculoskeletalType setName(Property\NameProperty $name)
 * @method MusculoskeletalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusculoskeletalType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusculoskeletalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MusculoskeletalType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MusculoskeletalType setUrl(Property\UrlProperty $url)
 */
class MusculoskeletalType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Musculoskeletal';
	}
}