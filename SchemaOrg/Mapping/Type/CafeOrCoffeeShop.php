<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CafeOrCoffeeShop.
 * 
 * @method CafeOrCoffeeShop setAcceptsReservations(Property\AcceptsReservations $acceptsReservations)
 * @method CafeOrCoffeeShop setAddress(Property\Address $address)
 * @method CafeOrCoffeeShop setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CafeOrCoffeeShop setAlumni(Property\Alumni $alumni)
 * @method CafeOrCoffeeShop setAreaServed(Property\AreaServed $areaServed)
 * @method CafeOrCoffeeShop setAward(Property\Award $award)
 * @method CafeOrCoffeeShop setBrand(Property\Brand $brand)
 * @method CafeOrCoffeeShop setContactPoint(Property\ContactPoint $contactPoint)
 * @method CafeOrCoffeeShop setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method CafeOrCoffeeShop setDepartment(Property\Department $department)
 * @method CafeOrCoffeeShop setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method CafeOrCoffeeShop setDuns(Property\Duns $duns)
 * @method CafeOrCoffeeShop setEmail(Property\Email $email)
 * @method CafeOrCoffeeShop setEmployee(Property\Employee $employee)
 * @method CafeOrCoffeeShop setEvent(Property\Event $event)
 * @method CafeOrCoffeeShop setFaxNumber(Property\FaxNumber $faxNumber)
 * @method CafeOrCoffeeShop setFounder(Property\Founder $founder)
 * @method CafeOrCoffeeShop setFoundingDate(Property\FoundingDate $foundingDate)
 * @method CafeOrCoffeeShop setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method CafeOrCoffeeShop setFunder(Property\Funder $funder)
 * @method CafeOrCoffeeShop setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method CafeOrCoffeeShop setHasMenu(Property\HasMenu $hasMenu)
 * @method CafeOrCoffeeShop setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method CafeOrCoffeeShop setHasPOS(Property\HasPOS $hasPOS)
 * @method CafeOrCoffeeShop setIsicV4(Property\IsicV4 $isicV4)
 * @method CafeOrCoffeeShop setLegalName(Property\LegalName $legalName)
 * @method CafeOrCoffeeShop setLeiCode(Property\LeiCode $leiCode)
 * @method CafeOrCoffeeShop setLocation(Property\Location $location)
 * @method CafeOrCoffeeShop setLogo(Property\Logo $logo)
 * @method CafeOrCoffeeShop setMakesOffer(Property\MakesOffer $makesOffer)
 * @method CafeOrCoffeeShop setMember(Property\Member $member)
 * @method CafeOrCoffeeShop setMemberOf(Property\MemberOf $memberOf)
 * @method CafeOrCoffeeShop setNaics(Property\Naics $naics)
 * @method CafeOrCoffeeShop setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method CafeOrCoffeeShop setOpeningHours(Property\OpeningHours $openingHours)
 * @method CafeOrCoffeeShop setOwns(Property\Owns $owns)
 * @method CafeOrCoffeeShop setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method CafeOrCoffeeShop setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method CafeOrCoffeeShop setPriceRange(Property\PriceRange $priceRange)
 * @method CafeOrCoffeeShop setReview(Property\Review $review)
 * @method CafeOrCoffeeShop setSeeks(Property\Seeks $seeks)
 * @method CafeOrCoffeeShop setServesCuisine(Property\ServesCuisine $servesCuisine)
 * @method CafeOrCoffeeShop setSponsor(Property\Sponsor $sponsor)
 * @method CafeOrCoffeeShop setStarRating(Property\StarRating $starRating)
 * @method CafeOrCoffeeShop setSubOrganization(Property\SubOrganization $subOrganization)
 * @method CafeOrCoffeeShop setTaxID(Property\TaxID $taxID)
 * @method CafeOrCoffeeShop setTelephone(Property\Telephone $telephone)
 * @method CafeOrCoffeeShop setVatID(Property\VatID $vatID)
 */
class CafeOrCoffeeShop extends FoodEstablishment {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CafeOrCoffeeShop';
	}
}