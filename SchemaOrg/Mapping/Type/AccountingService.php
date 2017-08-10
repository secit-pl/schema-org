<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AccountingService.
 * 
 * @method AccountingService setAddress(Property\Address $address)
 * @method AccountingService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AccountingService setAlumni(Property\Alumni $alumni)
 * @method AccountingService setAreaServed(Property\AreaServed $areaServed)
 * @method AccountingService setAward(Property\Award $award)
 * @method AccountingService setBrand(Property\Brand $brand)
 * @method AccountingService setContactPoint(Property\ContactPoint $contactPoint)
 * @method AccountingService setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AccountingService setDepartment(Property\Department $department)
 * @method AccountingService setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AccountingService setDuns(Property\Duns $duns)
 * @method AccountingService setEmail(Property\Email $email)
 * @method AccountingService setEmployee(Property\Employee $employee)
 * @method AccountingService setEvent(Property\Event $event)
 * @method AccountingService setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AccountingService setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method AccountingService setFounder(Property\Founder $founder)
 * @method AccountingService setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AccountingService setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AccountingService setFunder(Property\Funder $funder)
 * @method AccountingService setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AccountingService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AccountingService setHasPOS(Property\HasPOS $hasPOS)
 * @method AccountingService setIsicV4(Property\IsicV4 $isicV4)
 * @method AccountingService setLegalName(Property\LegalName $legalName)
 * @method AccountingService setLeiCode(Property\LeiCode $leiCode)
 * @method AccountingService setLocation(Property\Location $location)
 * @method AccountingService setLogo(Property\Logo $logo)
 * @method AccountingService setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AccountingService setMember(Property\Member $member)
 * @method AccountingService setMemberOf(Property\MemberOf $memberOf)
 * @method AccountingService setNaics(Property\Naics $naics)
 * @method AccountingService setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AccountingService setOpeningHours(Property\OpeningHours $openingHours)
 * @method AccountingService setOwns(Property\Owns $owns)
 * @method AccountingService setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AccountingService setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AccountingService setPriceRange(Property\PriceRange $priceRange)
 * @method AccountingService setReview(Property\Review $review)
 * @method AccountingService setSeeks(Property\Seeks $seeks)
 * @method AccountingService setSponsor(Property\Sponsor $sponsor)
 * @method AccountingService setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AccountingService setTaxID(Property\TaxID $taxID)
 * @method AccountingService setTelephone(Property\Telephone $telephone)
 * @method AccountingService setVatID(Property\VatID $vatID)
 */
class AccountingService extends FinancialService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AccountingService';
	}
}