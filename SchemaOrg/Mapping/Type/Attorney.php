<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Attorney.
 * 
 * @method Attorney setAddress(Property\Address $address)
 * @method Attorney setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Attorney setAlumni(Property\Alumni $alumni)
 * @method Attorney setAreaServed(Property\AreaServed $areaServed)
 * @method Attorney setAward(Property\Award $award)
 * @method Attorney setBrand(Property\Brand $brand)
 * @method Attorney setContactPoint(Property\ContactPoint $contactPoint)
 * @method Attorney setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Attorney setDepartment(Property\Department $department)
 * @method Attorney setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Attorney setDuns(Property\Duns $duns)
 * @method Attorney setEmail(Property\Email $email)
 * @method Attorney setEmployee(Property\Employee $employee)
 * @method Attorney setEvent(Property\Event $event)
 * @method Attorney setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Attorney setFounder(Property\Founder $founder)
 * @method Attorney setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Attorney setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Attorney setFunder(Property\Funder $funder)
 * @method Attorney setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Attorney setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Attorney setHasPOS(Property\HasPOS $hasPOS)
 * @method Attorney setIsicV4(Property\IsicV4 $isicV4)
 * @method Attorney setLegalName(Property\LegalName $legalName)
 * @method Attorney setLeiCode(Property\LeiCode $leiCode)
 * @method Attorney setLocation(Property\Location $location)
 * @method Attorney setLogo(Property\Logo $logo)
 * @method Attorney setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Attorney setMember(Property\Member $member)
 * @method Attorney setMemberOf(Property\MemberOf $memberOf)
 * @method Attorney setNaics(Property\Naics $naics)
 * @method Attorney setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Attorney setOpeningHours(Property\OpeningHours $openingHours)
 * @method Attorney setOwns(Property\Owns $owns)
 * @method Attorney setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Attorney setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Attorney setPriceRange(Property\PriceRange $priceRange)
 * @method Attorney setReview(Property\Review $review)
 * @method Attorney setSeeks(Property\Seeks $seeks)
 * @method Attorney setSponsor(Property\Sponsor $sponsor)
 * @method Attorney setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Attorney setTaxID(Property\TaxID $taxID)
 * @method Attorney setTelephone(Property\Telephone $telephone)
 * @method Attorney setVatID(Property\VatID $vatID)
 */
class Attorney extends LegalService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Attorney';
	}
}