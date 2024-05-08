<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A card payment method of a particular brand or name. Used to mark up a particular payment method and/or the financial product/service that supplies the card account. Commonly used values: http://purl.org/goodrelations/v1#AmericanExpress http://purl.org/goodrelations/v1#DinersClub http://purl.org/goodrelations/v1#Discover http://purl.org/goodrelations/v1#JCB http://purl.org/goodrelations/v1#MasterCard http://purl.org/goodrelations/v1#VISA
 * 
 * @method CreditCardType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CreditCardType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CreditCardType setDescription(Property\DescriptionProperty $description)
 * @method CreditCardType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CreditCardType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CreditCardType setImage(Property\ImageProperty $image)
 * @method CreditCardType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CreditCardType setName(Property\NameProperty $name)
 * @method CreditCardType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CreditCardType setSameAs(Property\SameAsProperty $sameAs)
 * @method CreditCardType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CreditCardType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CreditCardType setUrl(Property\UrlProperty $url)
 */
class CreditCardType extends PaymentCardType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CreditCard';
	}
}