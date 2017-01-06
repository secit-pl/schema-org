<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Brewery.
 * 
 * @method Brewery setAcceptsReservations(Property\AcceptsReservations $acceptsReservations)
 * @method Brewery setAdditionalType(Property\AdditionalType $additionalType)
 * @method Brewery setAddress(Property\Address $address)
 * @method Brewery setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Brewery setAlternateName(Property\AlternateName $alternateName)
 * @method Brewery setAlumni(Property\Alumni $alumni)
 * @method Brewery setAreaServed(Property\AreaServed $areaServed)
 * @method Brewery setAward(Property\Award $award)
 * @method Brewery setBrand(Property\Brand $brand)
 * @method Brewery setContactPoint(Property\ContactPoint $contactPoint)
 * @method Brewery setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Brewery setDepartment(Property\Department $department)
 * @method Brewery setDescription(Property\Description $description)
 * @method Brewery setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Brewery setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Brewery setDuns(Property\Duns $duns)
 * @method Brewery setEmail(Property\Email $email)
 * @method Brewery setEmployee(Property\Employee $employee)
 * @method Brewery setEvent(Property\Event $event)
 * @method Brewery setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Brewery setFounder(Property\Founder $founder)
 * @method Brewery setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Brewery setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Brewery setFunder(Property\Funder $funder)
 * @method Brewery setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Brewery setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Brewery setHasPOS(Property\HasPOS $hasPOS)
 * @method Brewery setImage(Property\Image $image)
 * @method Brewery setIsicV4(Property\IsicV4 $isicV4)
 * @method Brewery setLegalName(Property\LegalName $legalName)
 * @method Brewery setLeiCode(Property\LeiCode $leiCode)
 * @method Brewery setLocation(Property\Location $location)
 * @method Brewery setLogo(Property\Logo $logo)
 * @method Brewery setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Brewery setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Brewery setMember(Property\Member $member)
 * @method Brewery setMemberOf(Property\MemberOf $memberOf)
 * @method Brewery setMenu(Property\Menu $menu)
 * @method Brewery setNaics(Property\Naics $naics)
 * @method Brewery setName(Property\Name $name)
 * @method Brewery setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Brewery setOpeningHours(Property\OpeningHours $openingHours)
 * @method Brewery setOwns(Property\Owns $owns)
 * @method Brewery setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Brewery setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Brewery setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Brewery setPriceRange(Property\PriceRange $priceRange)
 * @method Brewery setReview(Property\Review $review)
 * @method Brewery setSameAs(Property\SameAs $sameAs)
 * @method Brewery setSeeks(Property\Seeks $seeks)
 * @method Brewery setServesCuisine(Property\ServesCuisine $servesCuisine)
 * @method Brewery setSponsor(Property\Sponsor $sponsor)
 * @method Brewery setStarRating(Property\StarRating $starRating)
 * @method Brewery setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Brewery setTaxID(Property\TaxID $taxID)
 * @method Brewery setTelephone(Property\Telephone $telephone)
 * @method Brewery setUrl(Property\Url $url)
 * @method Brewery setVatID(Property\VatID $vatID)
 */
class Brewery extends FoodEstablishment {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Brewery';
	}
}