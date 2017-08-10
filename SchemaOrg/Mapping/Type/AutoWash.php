<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoWash.
 * 
 * @method AutoWash setAddress(Property\Address $address)
 * @method AutoWash setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AutoWash setAlumni(Property\Alumni $alumni)
 * @method AutoWash setAreaServed(Property\AreaServed $areaServed)
 * @method AutoWash setAward(Property\Award $award)
 * @method AutoWash setBrand(Property\Brand $brand)
 * @method AutoWash setContactPoint(Property\ContactPoint $contactPoint)
 * @method AutoWash setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AutoWash setDepartment(Property\Department $department)
 * @method AutoWash setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AutoWash setDuns(Property\Duns $duns)
 * @method AutoWash setEmail(Property\Email $email)
 * @method AutoWash setEmployee(Property\Employee $employee)
 * @method AutoWash setEvent(Property\Event $event)
 * @method AutoWash setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AutoWash setFounder(Property\Founder $founder)
 * @method AutoWash setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AutoWash setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AutoWash setFunder(Property\Funder $funder)
 * @method AutoWash setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AutoWash setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AutoWash setHasPOS(Property\HasPOS $hasPOS)
 * @method AutoWash setIsicV4(Property\IsicV4 $isicV4)
 * @method AutoWash setLegalName(Property\LegalName $legalName)
 * @method AutoWash setLeiCode(Property\LeiCode $leiCode)
 * @method AutoWash setLocation(Property\Location $location)
 * @method AutoWash setLogo(Property\Logo $logo)
 * @method AutoWash setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AutoWash setMember(Property\Member $member)
 * @method AutoWash setMemberOf(Property\MemberOf $memberOf)
 * @method AutoWash setNaics(Property\Naics $naics)
 * @method AutoWash setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AutoWash setOpeningHours(Property\OpeningHours $openingHours)
 * @method AutoWash setOwns(Property\Owns $owns)
 * @method AutoWash setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AutoWash setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AutoWash setPriceRange(Property\PriceRange $priceRange)
 * @method AutoWash setReview(Property\Review $review)
 * @method AutoWash setSeeks(Property\Seeks $seeks)
 * @method AutoWash setSponsor(Property\Sponsor $sponsor)
 * @method AutoWash setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AutoWash setTaxID(Property\TaxID $taxID)
 * @method AutoWash setTelephone(Property\Telephone $telephone)
 * @method AutoWash setVatID(Property\VatID $vatID)
 */
class AutoWash extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoWash';
	}
}