<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FastFoodRestaurant.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\FastFoodRestaurantType instead.
 * 
 * @method FastFoodRestaurant setAcceptsReservations(Property\AcceptsReservations $acceptsReservations)
 * @method FastFoodRestaurant setAdditionalType(Property\AdditionalType $additionalType)
 * @method FastFoodRestaurant setAddress(Property\Address $address)
 * @method FastFoodRestaurant setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method FastFoodRestaurant setAlternateName(Property\AlternateName $alternateName)
 * @method FastFoodRestaurant setAlumni(Property\Alumni $alumni)
 * @method FastFoodRestaurant setAreaServed(Property\AreaServed $areaServed)
 * @method FastFoodRestaurant setAward(Property\Award $award)
 * @method FastFoodRestaurant setBrand(Property\Brand $brand)
 * @method FastFoodRestaurant setContactPoint(Property\ContactPoint $contactPoint)
 * @method FastFoodRestaurant setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method FastFoodRestaurant setDepartment(Property\Department $department)
 * @method FastFoodRestaurant setDescription(Property\Description $description)
 * @method FastFoodRestaurant setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FastFoodRestaurant setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method FastFoodRestaurant setDuns(Property\Duns $duns)
 * @method FastFoodRestaurant setEmail(Property\Email $email)
 * @method FastFoodRestaurant setEmployee(Property\Employee $employee)
 * @method FastFoodRestaurant setEvent(Property\Event $event)
 * @method FastFoodRestaurant setFaxNumber(Property\FaxNumber $faxNumber)
 * @method FastFoodRestaurant setFounder(Property\Founder $founder)
 * @method FastFoodRestaurant setFoundingDate(Property\FoundingDate $foundingDate)
 * @method FastFoodRestaurant setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method FastFoodRestaurant setFunder(Property\Funder $funder)
 * @method FastFoodRestaurant setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method FastFoodRestaurant setHasMenu(Property\HasMenu $hasMenu)
 * @method FastFoodRestaurant setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method FastFoodRestaurant setHasPOS(Property\HasPOS $hasPOS)
 * @method FastFoodRestaurant setIdentifier(Property\Identifier $identifier)
 * @method FastFoodRestaurant setImage(Property\Image $image)
 * @method FastFoodRestaurant setIsicV4(Property\IsicV4 $isicV4)
 * @method FastFoodRestaurant setLegalName(Property\LegalName $legalName)
 * @method FastFoodRestaurant setLeiCode(Property\LeiCode $leiCode)
 * @method FastFoodRestaurant setLocation(Property\Location $location)
 * @method FastFoodRestaurant setLogo(Property\Logo $logo)
 * @method FastFoodRestaurant setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FastFoodRestaurant setMakesOffer(Property\MakesOffer $makesOffer)
 * @method FastFoodRestaurant setMember(Property\Member $member)
 * @method FastFoodRestaurant setMemberOf(Property\MemberOf $memberOf)
 * @method FastFoodRestaurant setNaics(Property\Naics $naics)
 * @method FastFoodRestaurant setName(Property\Name $name)
 * @method FastFoodRestaurant setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method FastFoodRestaurant setOpeningHours(Property\OpeningHours $openingHours)
 * @method FastFoodRestaurant setOwns(Property\Owns $owns)
 * @method FastFoodRestaurant setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method FastFoodRestaurant setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method FastFoodRestaurant setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FastFoodRestaurant setPriceRange(Property\PriceRange $priceRange)
 * @method FastFoodRestaurant setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method FastFoodRestaurant setReview(Property\Review $review)
 * @method FastFoodRestaurant setSameAs(Property\SameAs $sameAs)
 * @method FastFoodRestaurant setSeeks(Property\Seeks $seeks)
 * @method FastFoodRestaurant setServesCuisine(Property\ServesCuisine $servesCuisine)
 * @method FastFoodRestaurant setSponsor(Property\Sponsor $sponsor)
 * @method FastFoodRestaurant setStarRating(Property\StarRating $starRating)
 * @method FastFoodRestaurant setSubOrganization(Property\SubOrganization $subOrganization)
 * @method FastFoodRestaurant setTaxID(Property\TaxID $taxID)
 * @method FastFoodRestaurant setTelephone(Property\Telephone $telephone)
 * @method FastFoodRestaurant setUrl(Property\Url $url)
 * @method FastFoodRestaurant setVatID(Property\VatID $vatID)
 */
class FastFoodRestaurant extends FoodEstablishment {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FastFoodRestaurant';
	}
}