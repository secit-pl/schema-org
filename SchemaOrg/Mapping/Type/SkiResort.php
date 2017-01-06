<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SkiResort.
 * 
 * @method SkiResort setAdditionalType(Property\AdditionalType $additionalType)
 * @method SkiResort setAddress(Property\Address $address)
 * @method SkiResort setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SkiResort setAlternateName(Property\AlternateName $alternateName)
 * @method SkiResort setAlumni(Property\Alumni $alumni)
 * @method SkiResort setAreaServed(Property\AreaServed $areaServed)
 * @method SkiResort setAward(Property\Award $award)
 * @method SkiResort setBrand(Property\Brand $brand)
 * @method SkiResort setContactPoint(Property\ContactPoint $contactPoint)
 * @method SkiResort setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method SkiResort setDepartment(Property\Department $department)
 * @method SkiResort setDescription(Property\Description $description)
 * @method SkiResort setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SkiResort setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method SkiResort setDuns(Property\Duns $duns)
 * @method SkiResort setEmail(Property\Email $email)
 * @method SkiResort setEmployee(Property\Employee $employee)
 * @method SkiResort setEvent(Property\Event $event)
 * @method SkiResort setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SkiResort setFounder(Property\Founder $founder)
 * @method SkiResort setFoundingDate(Property\FoundingDate $foundingDate)
 * @method SkiResort setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method SkiResort setFunder(Property\Funder $funder)
 * @method SkiResort setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SkiResort setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method SkiResort setHasPOS(Property\HasPOS $hasPOS)
 * @method SkiResort setImage(Property\Image $image)
 * @method SkiResort setIsicV4(Property\IsicV4 $isicV4)
 * @method SkiResort setLegalName(Property\LegalName $legalName)
 * @method SkiResort setLeiCode(Property\LeiCode $leiCode)
 * @method SkiResort setLocation(Property\Location $location)
 * @method SkiResort setLogo(Property\Logo $logo)
 * @method SkiResort setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SkiResort setMakesOffer(Property\MakesOffer $makesOffer)
 * @method SkiResort setMember(Property\Member $member)
 * @method SkiResort setMemberOf(Property\MemberOf $memberOf)
 * @method SkiResort setNaics(Property\Naics $naics)
 * @method SkiResort setName(Property\Name $name)
 * @method SkiResort setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method SkiResort setOpeningHours(Property\OpeningHours $openingHours)
 * @method SkiResort setOwns(Property\Owns $owns)
 * @method SkiResort setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method SkiResort setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method SkiResort setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SkiResort setPriceRange(Property\PriceRange $priceRange)
 * @method SkiResort setReview(Property\Review $review)
 * @method SkiResort setSameAs(Property\SameAs $sameAs)
 * @method SkiResort setSeeks(Property\Seeks $seeks)
 * @method SkiResort setSponsor(Property\Sponsor $sponsor)
 * @method SkiResort setSubOrganization(Property\SubOrganization $subOrganization)
 * @method SkiResort setTaxID(Property\TaxID $taxID)
 * @method SkiResort setTelephone(Property\Telephone $telephone)
 * @method SkiResort setUrl(Property\Url $url)
 * @method SkiResort setVatID(Property\VatID $vatID)
 */
class SkiResort extends SportsActivityLocation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SkiResort';
	}
}