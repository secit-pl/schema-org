<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A series of books. Included books can be indicated with the hasPart property.
 * 
 * @method BookSeriesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BookSeriesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BookSeriesType setDescription(Property\DescriptionProperty $description)
 * @method BookSeriesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BookSeriesType setEndDate(Property\EndDateProperty $endDate)
 * @method BookSeriesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BookSeriesType setImage(Property\ImageProperty $image)
 * @method BookSeriesType setIssn(Property\IssnProperty $issn)
 * @method BookSeriesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BookSeriesType setName(Property\NameProperty $name)
 * @method BookSeriesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BookSeriesType setSameAs(Property\SameAsProperty $sameAs)
 * @method BookSeriesType setStartDate(Property\StartDateProperty $startDate)
 * @method BookSeriesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BookSeriesType setUrl(Property\UrlProperty $url)
 */
class BookSeriesType extends CreativeWorkSeriesType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BookSeries';
	}
}