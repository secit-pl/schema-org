<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Book format: Ebook.
 * 
 * @method EBookType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EBookType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EBookType setDescription(Property\DescriptionProperty $description)
 * @method EBookType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EBookType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EBookType setImage(Property\ImageProperty $image)
 * @method EBookType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EBookType setName(Property\NameProperty $name)
 * @method EBookType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EBookType setSameAs(Property\SameAsProperty $sameAs)
 * @method EBookType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EBookType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EBookType setUrl(Property\UrlProperty $url)
 */
class EBookType extends BookFormatType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EBook';
	}
}