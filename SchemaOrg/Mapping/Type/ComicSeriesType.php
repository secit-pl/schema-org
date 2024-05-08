<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A sequential publication of comic stories under a unifying title, for example "The Amazing Spider-Man" or "Groo the Wanderer".
 * 
 * @method ComicSeriesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ComicSeriesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ComicSeriesType setDescription(Property\DescriptionProperty $description)
 * @method ComicSeriesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ComicSeriesType setEndDate(Property\EndDateProperty $endDate)
 * @method ComicSeriesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ComicSeriesType setImage(Property\ImageProperty $image)
 * @method ComicSeriesType setIssn(Property\IssnProperty $issn)
 * @method ComicSeriesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ComicSeriesType setName(Property\NameProperty $name)
 * @method ComicSeriesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ComicSeriesType setSameAs(Property\SameAsProperty $sameAs)
 * @method ComicSeriesType setStartDate(Property\StartDateProperty $startDate)
 * @method ComicSeriesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ComicSeriesType setUrl(Property\UrlProperty $url)
 */
class ComicSeriesType extends PeriodicalType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComicSeries';
	}
}