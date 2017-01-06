<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class IceCreamShop.
 * 
 * @method IceCreamShop setAcceptsReservations(Property\AcceptsReservations $acceptsReservations)
 * @method IceCreamShop setAdditionalType(Property\AdditionalType $additionalType)
 * @method IceCreamShop setAddress(Property\Address $address)
 * @method IceCreamShop setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method IceCreamShop setAlternateName(Property\AlternateName $alternateName)
 * @method IceCreamShop setAlumni(Property\Alumni $alumni)
 * @method IceCreamShop setAreaServed(Property\AreaServed $areaServed)
 * @method IceCreamShop setAward(Property\Award $award)
 * @method IceCreamShop setBrand(Property\Brand $brand)
 * @method IceCreamShop setContactPoint(Property\ContactPoint $contactPoint)
 * @method IceCreamShop setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method IceCreamShop setDepartment(Property\Department $department)
 * @method IceCreamShop setDescription(Property\Description $description)
 * @method IceCreamShop setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method IceCreamShop setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method IceCreamShop setDuns(Property\Duns $duns)
 * @method IceCreamShop setEmail(Property\Email $email)
 * @method IceCreamShop setEmployee(Property\Employee $employee)
 * @method IceCreamShop setEvent(Property\Event $event)
 * @method IceCreamShop setFaxNumber(Property\FaxNumber $faxNumber)
 * @method IceCreamShop setFounder(Property\Founder $founder)
 * @method IceCreamShop setFoundingDate(Property\FoundingDate $foundingDate)
 * @method IceCreamShop setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method IceCreamShop setFunder(Property\Funder $funder)
 * @method IceCreamShop setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method IceCreamShop setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method IceCreamShop setHasPOS(Property\HasPOS $hasPOS)
 * @method IceCreamShop setImage(Property\Image $image)
 * @method IceCreamShop setIsicV4(Property\IsicV4 $isicV4)
 * @method IceCreamShop setLegalName(Property\LegalName $legalName)
 * @method IceCreamShop setLeiCode(Property\LeiCode $leiCode)
 * @method IceCreamShop setLocation(Property\Location $location)
 * @method IceCreamShop setLogo(Property\Logo $logo)
 * @method IceCreamShop setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method IceCreamShop setMakesOffer(Property\MakesOffer $makesOffer)
 * @method IceCreamShop setMember(Property\Member $member)
 * @method IceCreamShop setMemberOf(Property\MemberOf $memberOf)
 * @method IceCreamShop setMenu(Property\Menu $menu)
 * @method IceCreamShop setNaics(Property\Naics $naics)
 * @method IceCreamShop setName(Property\Name $name)
 * @method IceCreamShop setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method IceCreamShop setOpeningHours(Property\OpeningHours $openingHours)
 * @method IceCreamShop setOwns(Property\Owns $owns)
 * @method IceCreamShop setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method IceCreamShop setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method IceCreamShop setPotentialAction(Property\PotentialAction $potentialAction)
 * @method IceCreamShop setPriceRange(Property\PriceRange $priceRange)
 * @method IceCreamShop setReview(Property\Review $review)
 * @method IceCreamShop setSameAs(Property\SameAs $sameAs)
 * @method IceCreamShop setSeeks(Property\Seeks $seeks)
 * @method IceCreamShop setServesCuisine(Property\ServesCuisine $servesCuisine)
 * @method IceCreamShop setSponsor(Property\Sponsor $sponsor)
 * @method IceCreamShop setStarRating(Property\StarRating $starRating)
 * @method IceCreamShop setSubOrganization(Property\SubOrganization $subOrganization)
 * @method IceCreamShop setTaxID(Property\TaxID $taxID)
 * @method IceCreamShop setTelephone(Property\Telephone $telephone)
 * @method IceCreamShop setUrl(Property\Url $url)
 * @method IceCreamShop setVatID(Property\VatID $vatID)
 */
class IceCreamShop extends FoodEstablishment {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/IceCreamShop';
	}
}