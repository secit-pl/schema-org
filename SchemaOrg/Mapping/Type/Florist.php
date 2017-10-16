<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Florist.
 * 
 * @method Florist setAdditionalType(Property\AdditionalType $additionalType)
 * @method Florist setAddress(Property\Address $address)
 * @method Florist setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Florist setAlternateName(Property\AlternateName $alternateName)
 * @method Florist setAlumni(Property\Alumni $alumni)
 * @method Florist setAreaServed(Property\AreaServed $areaServed)
 * @method Florist setAward(Property\Award $award)
 * @method Florist setBrand(Property\Brand $brand)
 * @method Florist setContactPoint(Property\ContactPoint $contactPoint)
 * @method Florist setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Florist setDepartment(Property\Department $department)
 * @method Florist setDescription(Property\Description $description)
 * @method Florist setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Florist setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Florist setDuns(Property\Duns $duns)
 * @method Florist setEmail(Property\Email $email)
 * @method Florist setEmployee(Property\Employee $employee)
 * @method Florist setEvent(Property\Event $event)
 * @method Florist setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Florist setFounder(Property\Founder $founder)
 * @method Florist setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Florist setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Florist setFunder(Property\Funder $funder)
 * @method Florist setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Florist setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Florist setHasPOS(Property\HasPOS $hasPOS)
 * @method Florist setIdentifier(Property\Identifier $identifier)
 * @method Florist setImage(Property\Image $image)
 * @method Florist setIsicV4(Property\IsicV4 $isicV4)
 * @method Florist setLegalName(Property\LegalName $legalName)
 * @method Florist setLeiCode(Property\LeiCode $leiCode)
 * @method Florist setLocation(Property\Location $location)
 * @method Florist setLogo(Property\Logo $logo)
 * @method Florist setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Florist setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Florist setMember(Property\Member $member)
 * @method Florist setMemberOf(Property\MemberOf $memberOf)
 * @method Florist setNaics(Property\Naics $naics)
 * @method Florist setName(Property\Name $name)
 * @method Florist setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Florist setOpeningHours(Property\OpeningHours $openingHours)
 * @method Florist setOwns(Property\Owns $owns)
 * @method Florist setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Florist setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Florist setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Florist setPriceRange(Property\PriceRange $priceRange)
 * @method Florist setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Florist setReview(Property\Review $review)
 * @method Florist setSameAs(Property\SameAs $sameAs)
 * @method Florist setSeeks(Property\Seeks $seeks)
 * @method Florist setSponsor(Property\Sponsor $sponsor)
 * @method Florist setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Florist setTaxID(Property\TaxID $taxID)
 * @method Florist setTelephone(Property\Telephone $telephone)
 * @method Florist setUrl(Property\Url $url)
 * @method Florist setVatID(Property\VatID $vatID)
 */
class Florist extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Florist';
	}
}