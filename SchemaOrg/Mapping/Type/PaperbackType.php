<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Book format: Paperback.
 * 
 * @method PaperbackType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaperbackType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaperbackType setDescription(Property\DescriptionProperty $description)
 * @method PaperbackType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaperbackType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaperbackType setImage(Property\ImageProperty $image)
 * @method PaperbackType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaperbackType setName(Property\NameProperty $name)
 * @method PaperbackType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaperbackType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaperbackType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PaperbackType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PaperbackType setUrl(Property\UrlProperty $url)
 */
class PaperbackType extends BookFormatType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Paperback';
	}
}