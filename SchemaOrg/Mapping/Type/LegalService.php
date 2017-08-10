<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LegalService.
 * 
 * @method LegalService setAddress(Property\Address $address)
 * @method LegalService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method LegalService setAlumni(Property\Alumni $alumni)
 * @method LegalService setAreaServed(Property\AreaServed $areaServed)
 * @method LegalService setAward(Property\Award $award)
 * @method LegalService setBrand(Property\Brand $brand)
 * @method LegalService setContactPoint(Property\ContactPoint $contactPoint)
 * @method LegalService setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method LegalService setDepartment(Property\Department $department)
 * @method LegalService setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method LegalService setDuns(Property\Duns $duns)
 * @method LegalService setEmail(Property\Email $email)
 * @method LegalService setEmployee(Property\Employee $employee)
 * @method LegalService setEvent(Property\Event $event)
 * @method LegalService setFaxNumber(Property\FaxNumber $faxNumber)
 * @method LegalService setFounder(Property\Founder $founder)
 * @method LegalService setFoundingDate(Property\FoundingDate $foundingDate)
 * @method LegalService setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method LegalService setFunder(Property\Funder $funder)
 * @method LegalService setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method LegalService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method LegalService setHasPOS(Property\HasPOS $hasPOS)
 * @method LegalService setIsicV4(Property\IsicV4 $isicV4)
 * @method LegalService setLegalName(Property\LegalName $legalName)
 * @method LegalService setLeiCode(Property\LeiCode $leiCode)
 * @method LegalService setLocation(Property\Location $location)
 * @method LegalService setLogo(Property\Logo $logo)
 * @method LegalService setMakesOffer(Property\MakesOffer $makesOffer)
 * @method LegalService setMember(Property\Member $member)
 * @method LegalService setMemberOf(Property\MemberOf $memberOf)
 * @method LegalService setNaics(Property\Naics $naics)
 * @method LegalService setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method LegalService setOpeningHours(Property\OpeningHours $openingHours)
 * @method LegalService setOwns(Property\Owns $owns)
 * @method LegalService setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method LegalService setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method LegalService setPriceRange(Property\PriceRange $priceRange)
 * @method LegalService setReview(Property\Review $review)
 * @method LegalService setSeeks(Property\Seeks $seeks)
 * @method LegalService setSponsor(Property\Sponsor $sponsor)
 * @method LegalService setSubOrganization(Property\SubOrganization $subOrganization)
 * @method LegalService setTaxID(Property\TaxID $taxID)
 * @method LegalService setTelephone(Property\Telephone $telephone)
 * @method LegalService setVatID(Property\VatID $vatID)
 */
class LegalService extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LegalService';
	}
}