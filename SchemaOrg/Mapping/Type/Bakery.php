<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Bakery.
 * 
 * @method Bakery setAcceptsReservations(Property\AcceptsReservations $acceptsReservations)
 * @method Bakery setAddress(Property\Address $address)
 * @method Bakery setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Bakery setAlumni(Property\Alumni $alumni)
 * @method Bakery setAreaServed(Property\AreaServed $areaServed)
 * @method Bakery setAward(Property\Award $award)
 * @method Bakery setBrand(Property\Brand $brand)
 * @method Bakery setContactPoint(Property\ContactPoint $contactPoint)
 * @method Bakery setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Bakery setDepartment(Property\Department $department)
 * @method Bakery setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Bakery setDuns(Property\Duns $duns)
 * @method Bakery setEmail(Property\Email $email)
 * @method Bakery setEmployee(Property\Employee $employee)
 * @method Bakery setEvent(Property\Event $event)
 * @method Bakery setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Bakery setFounder(Property\Founder $founder)
 * @method Bakery setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Bakery setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Bakery setFunder(Property\Funder $funder)
 * @method Bakery setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Bakery setHasMenu(Property\HasMenu $hasMenu)
 * @method Bakery setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Bakery setHasPOS(Property\HasPOS $hasPOS)
 * @method Bakery setIsicV4(Property\IsicV4 $isicV4)
 * @method Bakery setLegalName(Property\LegalName $legalName)
 * @method Bakery setLeiCode(Property\LeiCode $leiCode)
 * @method Bakery setLocation(Property\Location $location)
 * @method Bakery setLogo(Property\Logo $logo)
 * @method Bakery setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Bakery setMember(Property\Member $member)
 * @method Bakery setMemberOf(Property\MemberOf $memberOf)
 * @method Bakery setNaics(Property\Naics $naics)
 * @method Bakery setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Bakery setOpeningHours(Property\OpeningHours $openingHours)
 * @method Bakery setOwns(Property\Owns $owns)
 * @method Bakery setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Bakery setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Bakery setPriceRange(Property\PriceRange $priceRange)
 * @method Bakery setReview(Property\Review $review)
 * @method Bakery setSeeks(Property\Seeks $seeks)
 * @method Bakery setServesCuisine(Property\ServesCuisine $servesCuisine)
 * @method Bakery setSponsor(Property\Sponsor $sponsor)
 * @method Bakery setStarRating(Property\StarRating $starRating)
 * @method Bakery setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Bakery setTaxID(Property\TaxID $taxID)
 * @method Bakery setTelephone(Property\Telephone $telephone)
 * @method Bakery setVatID(Property\VatID $vatID)
 */
class Bakery extends FoodEstablishment {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Bakery';
	}
}