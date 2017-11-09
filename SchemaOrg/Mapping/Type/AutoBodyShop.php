<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoBodyShop.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AutoBodyShopType instead.
 * 
 * @method AutoBodyShop setAdditionalType(Property\AdditionalType $additionalType)
 * @method AutoBodyShop setAddress(Property\Address $address)
 * @method AutoBodyShop setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AutoBodyShop setAlternateName(Property\AlternateName $alternateName)
 * @method AutoBodyShop setAlumni(Property\Alumni $alumni)
 * @method AutoBodyShop setAreaServed(Property\AreaServed $areaServed)
 * @method AutoBodyShop setAward(Property\Award $award)
 * @method AutoBodyShop setBrand(Property\Brand $brand)
 * @method AutoBodyShop setContactPoint(Property\ContactPoint $contactPoint)
 * @method AutoBodyShop setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AutoBodyShop setDepartment(Property\Department $department)
 * @method AutoBodyShop setDescription(Property\Description $description)
 * @method AutoBodyShop setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AutoBodyShop setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AutoBodyShop setDuns(Property\Duns $duns)
 * @method AutoBodyShop setEmail(Property\Email $email)
 * @method AutoBodyShop setEmployee(Property\Employee $employee)
 * @method AutoBodyShop setEvent(Property\Event $event)
 * @method AutoBodyShop setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AutoBodyShop setFounder(Property\Founder $founder)
 * @method AutoBodyShop setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AutoBodyShop setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AutoBodyShop setFunder(Property\Funder $funder)
 * @method AutoBodyShop setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AutoBodyShop setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AutoBodyShop setHasPOS(Property\HasPOS $hasPOS)
 * @method AutoBodyShop setIdentifier(Property\Identifier $identifier)
 * @method AutoBodyShop setImage(Property\Image $image)
 * @method AutoBodyShop setIsicV4(Property\IsicV4 $isicV4)
 * @method AutoBodyShop setLegalName(Property\LegalName $legalName)
 * @method AutoBodyShop setLeiCode(Property\LeiCode $leiCode)
 * @method AutoBodyShop setLocation(Property\Location $location)
 * @method AutoBodyShop setLogo(Property\Logo $logo)
 * @method AutoBodyShop setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AutoBodyShop setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AutoBodyShop setMember(Property\Member $member)
 * @method AutoBodyShop setMemberOf(Property\MemberOf $memberOf)
 * @method AutoBodyShop setNaics(Property\Naics $naics)
 * @method AutoBodyShop setName(Property\Name $name)
 * @method AutoBodyShop setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AutoBodyShop setOpeningHours(Property\OpeningHours $openingHours)
 * @method AutoBodyShop setOwns(Property\Owns $owns)
 * @method AutoBodyShop setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AutoBodyShop setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AutoBodyShop setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AutoBodyShop setPriceRange(Property\PriceRange $priceRange)
 * @method AutoBodyShop setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method AutoBodyShop setReview(Property\Review $review)
 * @method AutoBodyShop setSameAs(Property\SameAs $sameAs)
 * @method AutoBodyShop setSeeks(Property\Seeks $seeks)
 * @method AutoBodyShop setSponsor(Property\Sponsor $sponsor)
 * @method AutoBodyShop setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AutoBodyShop setTaxID(Property\TaxID $taxID)
 * @method AutoBodyShop setTelephone(Property\Telephone $telephone)
 * @method AutoBodyShop setUrl(Property\Url $url)
 * @method AutoBodyShop setVatID(Property\VatID $vatID)
 */
class AutoBodyShop extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoBodyShop';
	}
}