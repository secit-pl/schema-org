<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HousePainter.
 * 
 * @method HousePainter setAddress(Property\Address $address)
 * @method HousePainter setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HousePainter setAlumni(Property\Alumni $alumni)
 * @method HousePainter setAreaServed(Property\AreaServed $areaServed)
 * @method HousePainter setAward(Property\Award $award)
 * @method HousePainter setBrand(Property\Brand $brand)
 * @method HousePainter setContactPoint(Property\ContactPoint $contactPoint)
 * @method HousePainter setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method HousePainter setDepartment(Property\Department $department)
 * @method HousePainter setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HousePainter setDuns(Property\Duns $duns)
 * @method HousePainter setEmail(Property\Email $email)
 * @method HousePainter setEmployee(Property\Employee $employee)
 * @method HousePainter setEvent(Property\Event $event)
 * @method HousePainter setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HousePainter setFounder(Property\Founder $founder)
 * @method HousePainter setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HousePainter setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HousePainter setFunder(Property\Funder $funder)
 * @method HousePainter setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HousePainter setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HousePainter setHasPOS(Property\HasPOS $hasPOS)
 * @method HousePainter setIsicV4(Property\IsicV4 $isicV4)
 * @method HousePainter setLegalName(Property\LegalName $legalName)
 * @method HousePainter setLeiCode(Property\LeiCode $leiCode)
 * @method HousePainter setLocation(Property\Location $location)
 * @method HousePainter setLogo(Property\Logo $logo)
 * @method HousePainter setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HousePainter setMember(Property\Member $member)
 * @method HousePainter setMemberOf(Property\MemberOf $memberOf)
 * @method HousePainter setNaics(Property\Naics $naics)
 * @method HousePainter setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HousePainter setOpeningHours(Property\OpeningHours $openingHours)
 * @method HousePainter setOwns(Property\Owns $owns)
 * @method HousePainter setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HousePainter setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method HousePainter setPriceRange(Property\PriceRange $priceRange)
 * @method HousePainter setReview(Property\Review $review)
 * @method HousePainter setSeeks(Property\Seeks $seeks)
 * @method HousePainter setSponsor(Property\Sponsor $sponsor)
 * @method HousePainter setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HousePainter setTaxID(Property\TaxID $taxID)
 * @method HousePainter setTelephone(Property\Telephone $telephone)
 * @method HousePainter setVatID(Property\VatID $vatID)
 */
class HousePainter extends HomeAndConstructionBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HousePainter';
	}
}