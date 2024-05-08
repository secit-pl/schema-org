<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A system of medicine based on common theoretical concepts that originated in China and evolved over thousands of years, that uses herbs, acupuncture, exercise, massage, dietary therapy, and other methods to treat a wide range of conditions.
 * 
 * @method TraditionalChineseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TraditionalChineseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TraditionalChineseType setDescription(Property\DescriptionProperty $description)
 * @method TraditionalChineseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TraditionalChineseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TraditionalChineseType setImage(Property\ImageProperty $image)
 * @method TraditionalChineseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TraditionalChineseType setName(Property\NameProperty $name)
 * @method TraditionalChineseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TraditionalChineseType setSameAs(Property\SameAsProperty $sameAs)
 * @method TraditionalChineseType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TraditionalChineseType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method TraditionalChineseType setUrl(Property\UrlProperty $url)
 */
class TraditionalChineseType extends MedicineSystemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TraditionalChinese';
	}
}