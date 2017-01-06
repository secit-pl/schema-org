<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BarOrPub.
 * 
 * @method BarOrPub setAcceptsReservations(Property\AcceptsReservations $acceptsReservations)
 * @method BarOrPub setAdditionalType(Property\AdditionalType $additionalType)
 * @method BarOrPub setAddress(Property\Address $address)
 * @method BarOrPub setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BarOrPub setAlternateName(Property\AlternateName $alternateName)
 * @method BarOrPub setAlumni(Property\Alumni $alumni)
 * @method BarOrPub setAreaServed(Property\AreaServed $areaServed)
 * @method BarOrPub setAward(Property\Award $award)
 * @method BarOrPub setBrand(Property\Brand $brand)
 * @method BarOrPub setContactPoint(Property\ContactPoint $contactPoint)
 * @method BarOrPub setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method BarOrPub setDepartment(Property\Department $department)
 * @method BarOrPub setDescription(Property\Description $description)
 * @method BarOrPub setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BarOrPub setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method BarOrPub setDuns(Property\Duns $duns)
 * @method BarOrPub setEmail(Property\Email $email)
 * @method BarOrPub setEmployee(Property\Employee $employee)
 * @method BarOrPub setEvent(Property\Event $event)
 * @method BarOrPub setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BarOrPub setFounder(Property\Founder $founder)
 * @method BarOrPub setFoundingDate(Property\FoundingDate $foundingDate)
 * @method BarOrPub setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method BarOrPub setFunder(Property\Funder $funder)
 * @method BarOrPub setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BarOrPub setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BarOrPub setHasPOS(Property\HasPOS $hasPOS)
 * @method BarOrPub setImage(Property\Image $image)
 * @method BarOrPub setIsicV4(Property\IsicV4 $isicV4)
 * @method BarOrPub setLegalName(Property\LegalName $legalName)
 * @method BarOrPub setLeiCode(Property\LeiCode $leiCode)
 * @method BarOrPub setLocation(Property\Location $location)
 * @method BarOrPub setLogo(Property\Logo $logo)
 * @method BarOrPub setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BarOrPub setMakesOffer(Property\MakesOffer $makesOffer)
 * @method BarOrPub setMember(Property\Member $member)
 * @method BarOrPub setMemberOf(Property\MemberOf $memberOf)
 * @method BarOrPub setMenu(Property\Menu $menu)
 * @method BarOrPub setNaics(Property\Naics $naics)
 * @method BarOrPub setName(Property\Name $name)
 * @method BarOrPub setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method BarOrPub setOpeningHours(Property\OpeningHours $openingHours)
 * @method BarOrPub setOwns(Property\Owns $owns)
 * @method BarOrPub setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method BarOrPub setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method BarOrPub setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BarOrPub setPriceRange(Property\PriceRange $priceRange)
 * @method BarOrPub setReview(Property\Review $review)
 * @method BarOrPub setSameAs(Property\SameAs $sameAs)
 * @method BarOrPub setSeeks(Property\Seeks $seeks)
 * @method BarOrPub setServesCuisine(Property\ServesCuisine $servesCuisine)
 * @method BarOrPub setSponsor(Property\Sponsor $sponsor)
 * @method BarOrPub setStarRating(Property\StarRating $starRating)
 * @method BarOrPub setSubOrganization(Property\SubOrganization $subOrganization)
 * @method BarOrPub setTaxID(Property\TaxID $taxID)
 * @method BarOrPub setTelephone(Property\Telephone $telephone)
 * @method BarOrPub setUrl(Property\Url $url)
 * @method BarOrPub setVatID(Property\VatID $vatID)
 */
class BarOrPub extends FoodEstablishment {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BarOrPub';
	}
}