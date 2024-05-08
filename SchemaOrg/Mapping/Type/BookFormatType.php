<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The publication format of the book.
 * 
 * @method BookFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BookFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BookFormatType setDescription(Property\DescriptionProperty $description)
 * @method BookFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BookFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BookFormatType setImage(Property\ImageProperty $image)
 * @method BookFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BookFormatType setName(Property\NameProperty $name)
 * @method BookFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BookFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method BookFormatType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BookFormatType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method BookFormatType setUrl(Property\UrlProperty $url)
 */
class BookFormatType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BookFormatType';
	}
}