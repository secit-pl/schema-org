<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EmergencyService.
 * 
 * @method EmergencyService setAddress(Property\Address $address)
 * @method EmergencyService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method EmergencyService setAlumni(Property\Alumni $alumni)
 * @method EmergencyService setAreaServed(Property\AreaServed $areaServed)
 * @method EmergencyService setAward(Property\Award $award)
 * @method EmergencyService setBrand(Property\Brand $brand)
 * @method EmergencyService setContactPoint(Property\ContactPoint $contactPoint)
 * @method EmergencyService setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method EmergencyService setDepartment(Property\Department $department)
 * @method EmergencyService setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method EmergencyService setDuns(Property\Duns $duns)
 * @method EmergencyService setEmail(Property\Email $email)
 * @method EmergencyService setEmployee(Property\Employee $employee)
 * @method EmergencyService setEvent(Property\Event $event)
 * @method EmergencyService setFaxNumber(Property\FaxNumber $faxNumber)
 * @method EmergencyService setFounder(Property\Founder $founder)
 * @method EmergencyService setFoundingDate(Property\FoundingDate $foundingDate)
 * @method EmergencyService setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method EmergencyService setFunder(Property\Funder $funder)
 * @method EmergencyService setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method EmergencyService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method EmergencyService setHasPOS(Property\HasPOS $hasPOS)
 * @method EmergencyService setIsicV4(Property\IsicV4 $isicV4)
 * @method EmergencyService setLegalName(Property\LegalName $legalName)
 * @method EmergencyService setLeiCode(Property\LeiCode $leiCode)
 * @method EmergencyService setLocation(Property\Location $location)
 * @method EmergencyService setLogo(Property\Logo $logo)
 * @method EmergencyService setMakesOffer(Property\MakesOffer $makesOffer)
 * @method EmergencyService setMember(Property\Member $member)
 * @method EmergencyService setMemberOf(Property\MemberOf $memberOf)
 * @method EmergencyService setNaics(Property\Naics $naics)
 * @method EmergencyService setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method EmergencyService setOpeningHours(Property\OpeningHours $openingHours)
 * @method EmergencyService setOwns(Property\Owns $owns)
 * @method EmergencyService setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method EmergencyService setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method EmergencyService setPriceRange(Property\PriceRange $priceRange)
 * @method EmergencyService setReview(Property\Review $review)
 * @method EmergencyService setSeeks(Property\Seeks $seeks)
 * @method EmergencyService setSponsor(Property\Sponsor $sponsor)
 * @method EmergencyService setSubOrganization(Property\SubOrganization $subOrganization)
 * @method EmergencyService setTaxID(Property\TaxID $taxID)
 * @method EmergencyService setTelephone(Property\Telephone $telephone)
 * @method EmergencyService setVatID(Property\VatID $vatID)
 */
class EmergencyService extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EmergencyService';
	}
}