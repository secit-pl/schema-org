<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Restaurant.
 * 
 * @method Restaurant setAcceptsReservations(Property\AcceptsReservations $acceptsReservations)
 * @method Restaurant setAdditionalType(Property\AdditionalType $additionalType)
 * @method Restaurant setAddress(Property\Address $address)
 * @method Restaurant setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Restaurant setAlternateName(Property\AlternateName $alternateName)
 * @method Restaurant setAlumni(Property\Alumni $alumni)
 * @method Restaurant setAreaServed(Property\AreaServed $areaServed)
 * @method Restaurant setAward(Property\Award $award)
 * @method Restaurant setBrand(Property\Brand $brand)
 * @method Restaurant setContactPoint(Property\ContactPoint $contactPoint)
 * @method Restaurant setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Restaurant setDepartment(Property\Department $department)
 * @method Restaurant setDescription(Property\Description $description)
 * @method Restaurant setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Restaurant setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Restaurant setDuns(Property\Duns $duns)
 * @method Restaurant setEmail(Property\Email $email)
 * @method Restaurant setEmployee(Property\Employee $employee)
 * @method Restaurant setEvent(Property\Event $event)
 * @method Restaurant setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Restaurant setFounder(Property\Founder $founder)
 * @method Restaurant setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Restaurant setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Restaurant setFunder(Property\Funder $funder)
 * @method Restaurant setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Restaurant setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Restaurant setHasPOS(Property\HasPOS $hasPOS)
 * @method Restaurant setImage(Property\Image $image)
 * @method Restaurant setIsicV4(Property\IsicV4 $isicV4)
 * @method Restaurant setLegalName(Property\LegalName $legalName)
 * @method Restaurant setLeiCode(Property\LeiCode $leiCode)
 * @method Restaurant setLocation(Property\Location $location)
 * @method Restaurant setLogo(Property\Logo $logo)
 * @method Restaurant setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Restaurant setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Restaurant setMember(Property\Member $member)
 * @method Restaurant setMemberOf(Property\MemberOf $memberOf)
 * @method Restaurant setMenu(Property\Menu $menu)
 * @method Restaurant setNaics(Property\Naics $naics)
 * @method Restaurant setName(Property\Name $name)
 * @method Restaurant setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Restaurant setOpeningHours(Property\OpeningHours $openingHours)
 * @method Restaurant setOwns(Property\Owns $owns)
 * @method Restaurant setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Restaurant setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Restaurant setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Restaurant setPriceRange(Property\PriceRange $priceRange)
 * @method Restaurant setReview(Property\Review $review)
 * @method Restaurant setSameAs(Property\SameAs $sameAs)
 * @method Restaurant setSeeks(Property\Seeks $seeks)
 * @method Restaurant setServesCuisine(Property\ServesCuisine $servesCuisine)
 * @method Restaurant setSponsor(Property\Sponsor $sponsor)
 * @method Restaurant setStarRating(Property\StarRating $starRating)
 * @method Restaurant setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Restaurant setTaxID(Property\TaxID $taxID)
 * @method Restaurant setTelephone(Property\Telephone $telephone)
 * @method Restaurant setUrl(Property\Url $url)
 * @method Restaurant setVatID(Property\VatID $vatID)
 */
class Restaurant extends FoodEstablishment {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Restaurant';
	}
}