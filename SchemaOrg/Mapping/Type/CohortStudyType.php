<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Also known as a panel study. A cohort study is a form of longitudinal study used in medicine and social science. It is one type of study design and should be compared with a cross-sectional study. A cohort is a group of people who share a common characteristic or experience within a defined period (e.g., are born, leave school, lose their job, are exposed to a drug or a vaccine, etc.). The comparison group may be the general population from which the cohort is drawn, or it may be another cohort of persons thought to have had little or no exposure to the substance under investigation, but otherwise similar. Alternatively, subgroups within the cohort may be compared with each other.
 * 
 * @method CohortStudyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CohortStudyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CohortStudyType setDescription(Property\DescriptionProperty $description)
 * @method CohortStudyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CohortStudyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CohortStudyType setImage(Property\ImageProperty $image)
 * @method CohortStudyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CohortStudyType setName(Property\NameProperty $name)
 * @method CohortStudyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CohortStudyType setSameAs(Property\SameAsProperty $sameAs)
 * @method CohortStudyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CohortStudyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CohortStudyType setUrl(Property\UrlProperty $url)
 */
class CohortStudyType extends MedicalObservationalStudyDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CohortStudy';
	}
}