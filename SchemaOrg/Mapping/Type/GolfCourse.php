<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GolfCourse.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\GolfCourseType instead.
 * 
 * @method GolfCourse setAdditionalType(Property\AdditionalType $additionalType)
 * @method GolfCourse setAddress(Property\Address $address)
 * @method GolfCourse setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GolfCourse setAlternateName(Property\AlternateName $alternateName)
 * @method GolfCourse setAlumni(Property\Alumni $alumni)
 * @method GolfCourse setAreaServed(Property\AreaServed $areaServed)
 * @method GolfCourse setAward(Property\Award $award)
 * @method GolfCourse setBrand(Property\Brand $brand)
 * @method GolfCourse setContactPoint(Property\ContactPoint $contactPoint)
 * @method GolfCourse setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method GolfCourse setDepartment(Property\Department $department)
 * @method GolfCourse setDescription(Property\Description $description)
 * @method GolfCourse setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GolfCourse setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method GolfCourse setDuns(Property\Duns $duns)
 * @method GolfCourse setEmail(Property\Email $email)
 * @method GolfCourse setEmployee(Property\Employee $employee)
 * @method GolfCourse setEvent(Property\Event $event)
 * @method GolfCourse setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GolfCourse setFounder(Property\Founder $founder)
 * @method GolfCourse setFoundingDate(Property\FoundingDate $foundingDate)
 * @method GolfCourse setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method GolfCourse setFunder(Property\Funder $funder)
 * @method GolfCourse setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GolfCourse setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GolfCourse setHasPOS(Property\HasPOS $hasPOS)
 * @method GolfCourse setIdentifier(Property\Identifier $identifier)
 * @method GolfCourse setImage(Property\Image $image)
 * @method GolfCourse setIsicV4(Property\IsicV4 $isicV4)
 * @method GolfCourse setLegalName(Property\LegalName $legalName)
 * @method GolfCourse setLeiCode(Property\LeiCode $leiCode)
 * @method GolfCourse setLocation(Property\Location $location)
 * @method GolfCourse setLogo(Property\Logo $logo)
 * @method GolfCourse setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GolfCourse setMakesOffer(Property\MakesOffer $makesOffer)
 * @method GolfCourse setMember(Property\Member $member)
 * @method GolfCourse setMemberOf(Property\MemberOf $memberOf)
 * @method GolfCourse setNaics(Property\Naics $naics)
 * @method GolfCourse setName(Property\Name $name)
 * @method GolfCourse setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method GolfCourse setOpeningHours(Property\OpeningHours $openingHours)
 * @method GolfCourse setOwns(Property\Owns $owns)
 * @method GolfCourse setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method GolfCourse setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method GolfCourse setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GolfCourse setPriceRange(Property\PriceRange $priceRange)
 * @method GolfCourse setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method GolfCourse setReview(Property\Review $review)
 * @method GolfCourse setSameAs(Property\SameAs $sameAs)
 * @method GolfCourse setSeeks(Property\Seeks $seeks)
 * @method GolfCourse setSponsor(Property\Sponsor $sponsor)
 * @method GolfCourse setSubOrganization(Property\SubOrganization $subOrganization)
 * @method GolfCourse setTaxID(Property\TaxID $taxID)
 * @method GolfCourse setTelephone(Property\Telephone $telephone)
 * @method GolfCourse setUrl(Property\Url $url)
 * @method GolfCourse setVatID(Property\VatID $vatID)
 */
class GolfCourse extends SportsActivityLocation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GolfCourse';
	}
}