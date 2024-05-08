<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Studies carried out on pre-existing data (usually from 'snapshot' surveys), such as that collected by the Census Bureau. Sometimes called Prevalence Studies.
 * 
 * @method CrossSectionalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CrossSectionalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CrossSectionalType setDescription(Property\DescriptionProperty $description)
 * @method CrossSectionalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CrossSectionalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CrossSectionalType setImage(Property\ImageProperty $image)
 * @method CrossSectionalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CrossSectionalType setName(Property\NameProperty $name)
 * @method CrossSectionalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CrossSectionalType setSameAs(Property\SameAsProperty $sameAs)
 * @method CrossSectionalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CrossSectionalType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CrossSectionalType setUrl(Property\UrlProperty $url)
 */
class CrossSectionalType extends MedicalObservationalStudyDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CrossSectional';
	}
}