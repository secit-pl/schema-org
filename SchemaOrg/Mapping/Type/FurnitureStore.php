<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FurnitureStore.
 * 
 * @method FurnitureStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method FurnitureStore setAddress(Property\Address $address)
 * @method FurnitureStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method FurnitureStore setAlternateName(Property\AlternateName $alternateName)
 * @method FurnitureStore setAlumni(Property\Alumni $alumni)
 * @method FurnitureStore setAreaServed(Property\AreaServed $areaServed)
 * @method FurnitureStore setAward(Property\Award $award)
 * @method FurnitureStore setBrand(Property\Brand $brand)
 * @method FurnitureStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method FurnitureStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method FurnitureStore setDepartment(Property\Department $department)
 * @method FurnitureStore setDescription(Property\Description $description)
 * @method FurnitureStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FurnitureStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method FurnitureStore setDuns(Property\Duns $duns)
 * @method FurnitureStore setEmail(Property\Email $email)
 * @method FurnitureStore setEmployee(Property\Employee $employee)
 * @method FurnitureStore setEvent(Property\Event $event)
 * @method FurnitureStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method FurnitureStore setFounder(Property\Founder $founder)
 * @method FurnitureStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method FurnitureStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method FurnitureStore setFunder(Property\Funder $funder)
 * @method FurnitureStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method FurnitureStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method FurnitureStore setHasPOS(Property\HasPOS $hasPOS)
 * @method FurnitureStore setImage(Property\Image $image)
 * @method FurnitureStore setIsicV4(Property\IsicV4 $isicV4)
 * @method FurnitureStore setLegalName(Property\LegalName $legalName)
 * @method FurnitureStore setLeiCode(Property\LeiCode $leiCode)
 * @method FurnitureStore setLocation(Property\Location $location)
 * @method FurnitureStore setLogo(Property\Logo $logo)
 * @method FurnitureStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FurnitureStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method FurnitureStore setMember(Property\Member $member)
 * @method FurnitureStore setMemberOf(Property\MemberOf $memberOf)
 * @method FurnitureStore setNaics(Property\Naics $naics)
 * @method FurnitureStore setName(Property\Name $name)
 * @method FurnitureStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method FurnitureStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method FurnitureStore setOwns(Property\Owns $owns)
 * @method FurnitureStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method FurnitureStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method FurnitureStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FurnitureStore setPriceRange(Property\PriceRange $priceRange)
 * @method FurnitureStore setReview(Property\Review $review)
 * @method FurnitureStore setSameAs(Property\SameAs $sameAs)
 * @method FurnitureStore setSeeks(Property\Seeks $seeks)
 * @method FurnitureStore setSponsor(Property\Sponsor $sponsor)
 * @method FurnitureStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method FurnitureStore setTaxID(Property\TaxID $taxID)
 * @method FurnitureStore setTelephone(Property\Telephone $telephone)
 * @method FurnitureStore setUrl(Property\Url $url)
 * @method FurnitureStore setVatID(Property\VatID $vatID)
 */
class FurnitureStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FurnitureStore';
	}
}