<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HardwareStore.
 * 
 * @method HardwareStore setAddress(Property\Address $address)
 * @method HardwareStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HardwareStore setAlumni(Property\Alumni $alumni)
 * @method HardwareStore setAreaServed(Property\AreaServed $areaServed)
 * @method HardwareStore setAward(Property\Award $award)
 * @method HardwareStore setBrand(Property\Brand $brand)
 * @method HardwareStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method HardwareStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method HardwareStore setDepartment(Property\Department $department)
 * @method HardwareStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HardwareStore setDuns(Property\Duns $duns)
 * @method HardwareStore setEmail(Property\Email $email)
 * @method HardwareStore setEmployee(Property\Employee $employee)
 * @method HardwareStore setEvent(Property\Event $event)
 * @method HardwareStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HardwareStore setFounder(Property\Founder $founder)
 * @method HardwareStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HardwareStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HardwareStore setFunder(Property\Funder $funder)
 * @method HardwareStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HardwareStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HardwareStore setHasPOS(Property\HasPOS $hasPOS)
 * @method HardwareStore setIsicV4(Property\IsicV4 $isicV4)
 * @method HardwareStore setLegalName(Property\LegalName $legalName)
 * @method HardwareStore setLeiCode(Property\LeiCode $leiCode)
 * @method HardwareStore setLocation(Property\Location $location)
 * @method HardwareStore setLogo(Property\Logo $logo)
 * @method HardwareStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HardwareStore setMember(Property\Member $member)
 * @method HardwareStore setMemberOf(Property\MemberOf $memberOf)
 * @method HardwareStore setNaics(Property\Naics $naics)
 * @method HardwareStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HardwareStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method HardwareStore setOwns(Property\Owns $owns)
 * @method HardwareStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HardwareStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method HardwareStore setPriceRange(Property\PriceRange $priceRange)
 * @method HardwareStore setReview(Property\Review $review)
 * @method HardwareStore setSeeks(Property\Seeks $seeks)
 * @method HardwareStore setSponsor(Property\Sponsor $sponsor)
 * @method HardwareStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HardwareStore setTaxID(Property\TaxID $taxID)
 * @method HardwareStore setTelephone(Property\Telephone $telephone)
 * @method HardwareStore setVatID(Property\VatID $vatID)
 */
class HardwareStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HardwareStore';
	}
}