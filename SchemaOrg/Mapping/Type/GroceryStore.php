<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GroceryStore.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\GroceryStoreType instead.
 * 
 * @method GroceryStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method GroceryStore setAddress(Property\Address $address)
 * @method GroceryStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GroceryStore setAlternateName(Property\AlternateName $alternateName)
 * @method GroceryStore setAlumni(Property\Alumni $alumni)
 * @method GroceryStore setAreaServed(Property\AreaServed $areaServed)
 * @method GroceryStore setAward(Property\Award $award)
 * @method GroceryStore setBrand(Property\Brand $brand)
 * @method GroceryStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method GroceryStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method GroceryStore setDepartment(Property\Department $department)
 * @method GroceryStore setDescription(Property\Description $description)
 * @method GroceryStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GroceryStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method GroceryStore setDuns(Property\Duns $duns)
 * @method GroceryStore setEmail(Property\Email $email)
 * @method GroceryStore setEmployee(Property\Employee $employee)
 * @method GroceryStore setEvent(Property\Event $event)
 * @method GroceryStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GroceryStore setFounder(Property\Founder $founder)
 * @method GroceryStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method GroceryStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method GroceryStore setFunder(Property\Funder $funder)
 * @method GroceryStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GroceryStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GroceryStore setHasPOS(Property\HasPOS $hasPOS)
 * @method GroceryStore setIdentifier(Property\Identifier $identifier)
 * @method GroceryStore setImage(Property\Image $image)
 * @method GroceryStore setIsicV4(Property\IsicV4 $isicV4)
 * @method GroceryStore setLegalName(Property\LegalName $legalName)
 * @method GroceryStore setLeiCode(Property\LeiCode $leiCode)
 * @method GroceryStore setLocation(Property\Location $location)
 * @method GroceryStore setLogo(Property\Logo $logo)
 * @method GroceryStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GroceryStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method GroceryStore setMember(Property\Member $member)
 * @method GroceryStore setMemberOf(Property\MemberOf $memberOf)
 * @method GroceryStore setNaics(Property\Naics $naics)
 * @method GroceryStore setName(Property\Name $name)
 * @method GroceryStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method GroceryStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method GroceryStore setOwns(Property\Owns $owns)
 * @method GroceryStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method GroceryStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method GroceryStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GroceryStore setPriceRange(Property\PriceRange $priceRange)
 * @method GroceryStore setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method GroceryStore setReview(Property\Review $review)
 * @method GroceryStore setSameAs(Property\SameAs $sameAs)
 * @method GroceryStore setSeeks(Property\Seeks $seeks)
 * @method GroceryStore setSponsor(Property\Sponsor $sponsor)
 * @method GroceryStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method GroceryStore setTaxID(Property\TaxID $taxID)
 * @method GroceryStore setTelephone(Property\Telephone $telephone)
 * @method GroceryStore setUrl(Property\Url $url)
 * @method GroceryStore setVatID(Property\VatID $vatID)
 */
class GroceryStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GroceryStore';
	}
}