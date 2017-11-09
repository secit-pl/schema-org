<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ExerciseGym.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ExerciseGymType instead.
 * 
 * @method ExerciseGym setAdditionalType(Property\AdditionalType $additionalType)
 * @method ExerciseGym setAddress(Property\Address $address)
 * @method ExerciseGym setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ExerciseGym setAlternateName(Property\AlternateName $alternateName)
 * @method ExerciseGym setAlumni(Property\Alumni $alumni)
 * @method ExerciseGym setAreaServed(Property\AreaServed $areaServed)
 * @method ExerciseGym setAward(Property\Award $award)
 * @method ExerciseGym setBrand(Property\Brand $brand)
 * @method ExerciseGym setContactPoint(Property\ContactPoint $contactPoint)
 * @method ExerciseGym setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ExerciseGym setDepartment(Property\Department $department)
 * @method ExerciseGym setDescription(Property\Description $description)
 * @method ExerciseGym setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ExerciseGym setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ExerciseGym setDuns(Property\Duns $duns)
 * @method ExerciseGym setEmail(Property\Email $email)
 * @method ExerciseGym setEmployee(Property\Employee $employee)
 * @method ExerciseGym setEvent(Property\Event $event)
 * @method ExerciseGym setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ExerciseGym setFounder(Property\Founder $founder)
 * @method ExerciseGym setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ExerciseGym setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ExerciseGym setFunder(Property\Funder $funder)
 * @method ExerciseGym setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ExerciseGym setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ExerciseGym setHasPOS(Property\HasPOS $hasPOS)
 * @method ExerciseGym setIdentifier(Property\Identifier $identifier)
 * @method ExerciseGym setImage(Property\Image $image)
 * @method ExerciseGym setIsicV4(Property\IsicV4 $isicV4)
 * @method ExerciseGym setLegalName(Property\LegalName $legalName)
 * @method ExerciseGym setLeiCode(Property\LeiCode $leiCode)
 * @method ExerciseGym setLocation(Property\Location $location)
 * @method ExerciseGym setLogo(Property\Logo $logo)
 * @method ExerciseGym setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ExerciseGym setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ExerciseGym setMember(Property\Member $member)
 * @method ExerciseGym setMemberOf(Property\MemberOf $memberOf)
 * @method ExerciseGym setNaics(Property\Naics $naics)
 * @method ExerciseGym setName(Property\Name $name)
 * @method ExerciseGym setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ExerciseGym setOpeningHours(Property\OpeningHours $openingHours)
 * @method ExerciseGym setOwns(Property\Owns $owns)
 * @method ExerciseGym setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ExerciseGym setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ExerciseGym setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ExerciseGym setPriceRange(Property\PriceRange $priceRange)
 * @method ExerciseGym setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method ExerciseGym setReview(Property\Review $review)
 * @method ExerciseGym setSameAs(Property\SameAs $sameAs)
 * @method ExerciseGym setSeeks(Property\Seeks $seeks)
 * @method ExerciseGym setSponsor(Property\Sponsor $sponsor)
 * @method ExerciseGym setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ExerciseGym setTaxID(Property\TaxID $taxID)
 * @method ExerciseGym setTelephone(Property\Telephone $telephone)
 * @method ExerciseGym setUrl(Property\Url $url)
 * @method ExerciseGym setVatID(Property\VatID $vatID)
 */
class ExerciseGym extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ExerciseGym';
	}
}