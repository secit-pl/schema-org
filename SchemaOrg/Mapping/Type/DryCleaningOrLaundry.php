<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DryCleaningOrLaundry.
 * 
 * @method DryCleaningOrLaundry setAdditionalType(Property\AdditionalType $additionalType)
 * @method DryCleaningOrLaundry setAddress(Property\Address $address)
 * @method DryCleaningOrLaundry setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DryCleaningOrLaundry setAlternateName(Property\AlternateName $alternateName)
 * @method DryCleaningOrLaundry setAlumni(Property\Alumni $alumni)
 * @method DryCleaningOrLaundry setAreaServed(Property\AreaServed $areaServed)
 * @method DryCleaningOrLaundry setAward(Property\Award $award)
 * @method DryCleaningOrLaundry setBrand(Property\Brand $brand)
 * @method DryCleaningOrLaundry setContactPoint(Property\ContactPoint $contactPoint)
 * @method DryCleaningOrLaundry setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method DryCleaningOrLaundry setDepartment(Property\Department $department)
 * @method DryCleaningOrLaundry setDescription(Property\Description $description)
 * @method DryCleaningOrLaundry setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DryCleaningOrLaundry setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method DryCleaningOrLaundry setDuns(Property\Duns $duns)
 * @method DryCleaningOrLaundry setEmail(Property\Email $email)
 * @method DryCleaningOrLaundry setEmployee(Property\Employee $employee)
 * @method DryCleaningOrLaundry setEvent(Property\Event $event)
 * @method DryCleaningOrLaundry setFaxNumber(Property\FaxNumber $faxNumber)
 * @method DryCleaningOrLaundry setFounder(Property\Founder $founder)
 * @method DryCleaningOrLaundry setFoundingDate(Property\FoundingDate $foundingDate)
 * @method DryCleaningOrLaundry setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method DryCleaningOrLaundry setFunder(Property\Funder $funder)
 * @method DryCleaningOrLaundry setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method DryCleaningOrLaundry setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method DryCleaningOrLaundry setHasPOS(Property\HasPOS $hasPOS)
 * @method DryCleaningOrLaundry setIdentifier(Property\Identifier $identifier)
 * @method DryCleaningOrLaundry setImage(Property\Image $image)
 * @method DryCleaningOrLaundry setIsicV4(Property\IsicV4 $isicV4)
 * @method DryCleaningOrLaundry setLegalName(Property\LegalName $legalName)
 * @method DryCleaningOrLaundry setLeiCode(Property\LeiCode $leiCode)
 * @method DryCleaningOrLaundry setLocation(Property\Location $location)
 * @method DryCleaningOrLaundry setLogo(Property\Logo $logo)
 * @method DryCleaningOrLaundry setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DryCleaningOrLaundry setMakesOffer(Property\MakesOffer $makesOffer)
 * @method DryCleaningOrLaundry setMember(Property\Member $member)
 * @method DryCleaningOrLaundry setMemberOf(Property\MemberOf $memberOf)
 * @method DryCleaningOrLaundry setNaics(Property\Naics $naics)
 * @method DryCleaningOrLaundry setName(Property\Name $name)
 * @method DryCleaningOrLaundry setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method DryCleaningOrLaundry setOpeningHours(Property\OpeningHours $openingHours)
 * @method DryCleaningOrLaundry setOwns(Property\Owns $owns)
 * @method DryCleaningOrLaundry setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method DryCleaningOrLaundry setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method DryCleaningOrLaundry setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DryCleaningOrLaundry setPriceRange(Property\PriceRange $priceRange)
 * @method DryCleaningOrLaundry setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method DryCleaningOrLaundry setReview(Property\Review $review)
 * @method DryCleaningOrLaundry setSameAs(Property\SameAs $sameAs)
 * @method DryCleaningOrLaundry setSeeks(Property\Seeks $seeks)
 * @method DryCleaningOrLaundry setSponsor(Property\Sponsor $sponsor)
 * @method DryCleaningOrLaundry setSubOrganization(Property\SubOrganization $subOrganization)
 * @method DryCleaningOrLaundry setTaxID(Property\TaxID $taxID)
 * @method DryCleaningOrLaundry setTelephone(Property\Telephone $telephone)
 * @method DryCleaningOrLaundry setUrl(Property\Url $url)
 * @method DryCleaningOrLaundry setVatID(Property\VatID $vatID)
 */
class DryCleaningOrLaundry extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DryCleaningOrLaundry';
	}
}