<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GasStation.
 * 
 * @method GasStation setAddress(Property\Address $address)
 * @method GasStation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GasStation setAlumni(Property\Alumni $alumni)
 * @method GasStation setAreaServed(Property\AreaServed $areaServed)
 * @method GasStation setAward(Property\Award $award)
 * @method GasStation setBrand(Property\Brand $brand)
 * @method GasStation setContactPoint(Property\ContactPoint $contactPoint)
 * @method GasStation setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method GasStation setDepartment(Property\Department $department)
 * @method GasStation setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method GasStation setDuns(Property\Duns $duns)
 * @method GasStation setEmail(Property\Email $email)
 * @method GasStation setEmployee(Property\Employee $employee)
 * @method GasStation setEvent(Property\Event $event)
 * @method GasStation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GasStation setFounder(Property\Founder $founder)
 * @method GasStation setFoundingDate(Property\FoundingDate $foundingDate)
 * @method GasStation setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method GasStation setFunder(Property\Funder $funder)
 * @method GasStation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GasStation setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GasStation setHasPOS(Property\HasPOS $hasPOS)
 * @method GasStation setIsicV4(Property\IsicV4 $isicV4)
 * @method GasStation setLegalName(Property\LegalName $legalName)
 * @method GasStation setLeiCode(Property\LeiCode $leiCode)
 * @method GasStation setLocation(Property\Location $location)
 * @method GasStation setLogo(Property\Logo $logo)
 * @method GasStation setMakesOffer(Property\MakesOffer $makesOffer)
 * @method GasStation setMember(Property\Member $member)
 * @method GasStation setMemberOf(Property\MemberOf $memberOf)
 * @method GasStation setNaics(Property\Naics $naics)
 * @method GasStation setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method GasStation setOpeningHours(Property\OpeningHours $openingHours)
 * @method GasStation setOwns(Property\Owns $owns)
 * @method GasStation setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method GasStation setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method GasStation setPriceRange(Property\PriceRange $priceRange)
 * @method GasStation setReview(Property\Review $review)
 * @method GasStation setSeeks(Property\Seeks $seeks)
 * @method GasStation setSponsor(Property\Sponsor $sponsor)
 * @method GasStation setSubOrganization(Property\SubOrganization $subOrganization)
 * @method GasStation setTaxID(Property\TaxID $taxID)
 * @method GasStation setTelephone(Property\Telephone $telephone)
 * @method GasStation setVatID(Property\VatID $vatID)
 */
class GasStation extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GasStation';
	}
}