<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A publication containing information about varied topics that are pertinent to general information, a geographic area, or a specific subject matter (i.e. business, culture, education). Often published daily.
 * 
 * @method NewspaperType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NewspaperType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NewspaperType setDescription(Property\DescriptionProperty $description)
 * @method NewspaperType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NewspaperType setEndDate(Property\EndDateProperty $endDate)
 * @method NewspaperType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NewspaperType setImage(Property\ImageProperty $image)
 * @method NewspaperType setIssn(Property\IssnProperty $issn)
 * @method NewspaperType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NewspaperType setName(Property\NameProperty $name)
 * @method NewspaperType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NewspaperType setSameAs(Property\SameAsProperty $sameAs)
 * @method NewspaperType setStartDate(Property\StartDateProperty $startDate)
 * @method NewspaperType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NewspaperType setUrl(Property\UrlProperty $url)
 */
class NewspaperType extends PeriodicalType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Newspaper';
	}
}