<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A publication in any medium issued in successive parts bearing numerical or chronological designations and intended to continue indefinitely, such as a magazine, scholarly journal, or newspaper. See also blog post.
 * 
 * @method PeriodicalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PeriodicalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PeriodicalType setDescription(Property\DescriptionProperty $description)
 * @method PeriodicalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PeriodicalType setEndDate(Property\EndDateProperty $endDate)
 * @method PeriodicalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PeriodicalType setImage(Property\ImageProperty $image)
 * @method PeriodicalType setIssn(Property\IssnProperty $issn)
 * @method PeriodicalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PeriodicalType setName(Property\NameProperty $name)
 * @method PeriodicalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PeriodicalType setSameAs(Property\SameAsProperty $sameAs)
 * @method PeriodicalType setStartDate(Property\StartDateProperty $startDate)
 * @method PeriodicalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PeriodicalType setUrl(Property\UrlProperty $url)
 */
class PeriodicalType extends CreativeWorkSeriesType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Periodical';
	}
}