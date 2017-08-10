<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutomatedTeller.
 * 
 * @method AutomatedTeller setAddress(Property\Address $address)
 * @method AutomatedTeller setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AutomatedTeller setAlumni(Property\Alumni $alumni)
 * @method AutomatedTeller setAreaServed(Property\AreaServed $areaServed)
 * @method AutomatedTeller setAward(Property\Award $award)
 * @method AutomatedTeller setBrand(Property\Brand $brand)
 * @method AutomatedTeller setContactPoint(Property\ContactPoint $contactPoint)
 * @method AutomatedTeller setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AutomatedTeller setDepartment(Property\Department $department)
 * @method AutomatedTeller setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AutomatedTeller setDuns(Property\Duns $duns)
 * @method AutomatedTeller setEmail(Property\Email $email)
 * @method AutomatedTeller setEmployee(Property\Employee $employee)
 * @method AutomatedTeller setEvent(Property\Event $event)
 * @method AutomatedTeller setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AutomatedTeller setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method AutomatedTeller setFounder(Property\Founder $founder)
 * @method AutomatedTeller setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AutomatedTeller setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AutomatedTeller setFunder(Property\Funder $funder)
 * @method AutomatedTeller setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AutomatedTeller setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AutomatedTeller setHasPOS(Property\HasPOS $hasPOS)
 * @method AutomatedTeller setIsicV4(Property\IsicV4 $isicV4)
 * @method AutomatedTeller setLegalName(Property\LegalName $legalName)
 * @method AutomatedTeller setLeiCode(Property\LeiCode $leiCode)
 * @method AutomatedTeller setLocation(Property\Location $location)
 * @method AutomatedTeller setLogo(Property\Logo $logo)
 * @method AutomatedTeller setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AutomatedTeller setMember(Property\Member $member)
 * @method AutomatedTeller setMemberOf(Property\MemberOf $memberOf)
 * @method AutomatedTeller setNaics(Property\Naics $naics)
 * @method AutomatedTeller setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AutomatedTeller setOpeningHours(Property\OpeningHours $openingHours)
 * @method AutomatedTeller setOwns(Property\Owns $owns)
 * @method AutomatedTeller setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AutomatedTeller setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AutomatedTeller setPriceRange(Property\PriceRange $priceRange)
 * @method AutomatedTeller setReview(Property\Review $review)
 * @method AutomatedTeller setSeeks(Property\Seeks $seeks)
 * @method AutomatedTeller setSponsor(Property\Sponsor $sponsor)
 * @method AutomatedTeller setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AutomatedTeller setTaxID(Property\TaxID $taxID)
 * @method AutomatedTeller setTelephone(Property\Telephone $telephone)
 * @method AutomatedTeller setVatID(Property\VatID $vatID)
 */
class AutomatedTeller extends FinancialService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutomatedTeller';
	}
}