<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Winery.
 * 
 * @method Winery setAcceptsReservations(Property\AcceptsReservations $acceptsReservations)
 * @method Winery setAdditionalType(Property\AdditionalType $additionalType)
 * @method Winery setAddress(Property\Address $address)
 * @method Winery setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Winery setAlternateName(Property\AlternateName $alternateName)
 * @method Winery setAlumni(Property\Alumni $alumni)
 * @method Winery setAreaServed(Property\AreaServed $areaServed)
 * @method Winery setAward(Property\Award $award)
 * @method Winery setBrand(Property\Brand $brand)
 * @method Winery setContactPoint(Property\ContactPoint $contactPoint)
 * @method Winery setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Winery setDepartment(Property\Department $department)
 * @method Winery setDescription(Property\Description $description)
 * @method Winery setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Winery setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Winery setDuns(Property\Duns $duns)
 * @method Winery setEmail(Property\Email $email)
 * @method Winery setEmployee(Property\Employee $employee)
 * @method Winery setEvent(Property\Event $event)
 * @method Winery setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Winery setFounder(Property\Founder $founder)
 * @method Winery setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Winery setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Winery setFunder(Property\Funder $funder)
 * @method Winery setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Winery setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Winery setHasPOS(Property\HasPOS $hasPOS)
 * @method Winery setImage(Property\Image $image)
 * @method Winery setIsicV4(Property\IsicV4 $isicV4)
 * @method Winery setLegalName(Property\LegalName $legalName)
 * @method Winery setLeiCode(Property\LeiCode $leiCode)
 * @method Winery setLocation(Property\Location $location)
 * @method Winery setLogo(Property\Logo $logo)
 * @method Winery setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Winery setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Winery setMember(Property\Member $member)
 * @method Winery setMemberOf(Property\MemberOf $memberOf)
 * @method Winery setMenu(Property\Menu $menu)
 * @method Winery setNaics(Property\Naics $naics)
 * @method Winery setName(Property\Name $name)
 * @method Winery setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Winery setOpeningHours(Property\OpeningHours $openingHours)
 * @method Winery setOwns(Property\Owns $owns)
 * @method Winery setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Winery setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Winery setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Winery setPriceRange(Property\PriceRange $priceRange)
 * @method Winery setReview(Property\Review $review)
 * @method Winery setSameAs(Property\SameAs $sameAs)
 * @method Winery setSeeks(Property\Seeks $seeks)
 * @method Winery setServesCuisine(Property\ServesCuisine $servesCuisine)
 * @method Winery setSponsor(Property\Sponsor $sponsor)
 * @method Winery setStarRating(Property\StarRating $starRating)
 * @method Winery setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Winery setTaxID(Property\TaxID $taxID)
 * @method Winery setTelephone(Property\Telephone $telephone)
 * @method Winery setUrl(Property\Url $url)
 * @method Winery setVatID(Property\VatID $vatID)
 */
class Winery extends FoodEstablishment {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Winery';
	}
}