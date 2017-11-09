<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TheaterGroup.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\TheaterGroupType instead.
 * 
 * @method TheaterGroup setAdditionalType(Property\AdditionalType $additionalType)
 * @method TheaterGroup setAddress(Property\Address $address)
 * @method TheaterGroup setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TheaterGroup setAlternateName(Property\AlternateName $alternateName)
 * @method TheaterGroup setAlumni(Property\Alumni $alumni)
 * @method TheaterGroup setAreaServed(Property\AreaServed $areaServed)
 * @method TheaterGroup setAward(Property\Award $award)
 * @method TheaterGroup setBrand(Property\Brand $brand)
 * @method TheaterGroup setContactPoint(Property\ContactPoint $contactPoint)
 * @method TheaterGroup setDepartment(Property\Department $department)
 * @method TheaterGroup setDescription(Property\Description $description)
 * @method TheaterGroup setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TheaterGroup setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method TheaterGroup setDuns(Property\Duns $duns)
 * @method TheaterGroup setEmail(Property\Email $email)
 * @method TheaterGroup setEmployee(Property\Employee $employee)
 * @method TheaterGroup setEvent(Property\Event $event)
 * @method TheaterGroup setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TheaterGroup setFounder(Property\Founder $founder)
 * @method TheaterGroup setFoundingDate(Property\FoundingDate $foundingDate)
 * @method TheaterGroup setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method TheaterGroup setFunder(Property\Funder $funder)
 * @method TheaterGroup setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TheaterGroup setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method TheaterGroup setHasPOS(Property\HasPOS $hasPOS)
 * @method TheaterGroup setIdentifier(Property\Identifier $identifier)
 * @method TheaterGroup setImage(Property\Image $image)
 * @method TheaterGroup setIsicV4(Property\IsicV4 $isicV4)
 * @method TheaterGroup setLegalName(Property\LegalName $legalName)
 * @method TheaterGroup setLeiCode(Property\LeiCode $leiCode)
 * @method TheaterGroup setLocation(Property\Location $location)
 * @method TheaterGroup setLogo(Property\Logo $logo)
 * @method TheaterGroup setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TheaterGroup setMakesOffer(Property\MakesOffer $makesOffer)
 * @method TheaterGroup setMember(Property\Member $member)
 * @method TheaterGroup setMemberOf(Property\MemberOf $memberOf)
 * @method TheaterGroup setNaics(Property\Naics $naics)
 * @method TheaterGroup setName(Property\Name $name)
 * @method TheaterGroup setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method TheaterGroup setOwns(Property\Owns $owns)
 * @method TheaterGroup setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method TheaterGroup setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TheaterGroup setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method TheaterGroup setReview(Property\Review $review)
 * @method TheaterGroup setSameAs(Property\SameAs $sameAs)
 * @method TheaterGroup setSeeks(Property\Seeks $seeks)
 * @method TheaterGroup setSponsor(Property\Sponsor $sponsor)
 * @method TheaterGroup setSubOrganization(Property\SubOrganization $subOrganization)
 * @method TheaterGroup setTaxID(Property\TaxID $taxID)
 * @method TheaterGroup setTelephone(Property\Telephone $telephone)
 * @method TheaterGroup setUrl(Property\Url $url)
 * @method TheaterGroup setVatID(Property\VatID $vatID)
 */
class TheaterGroup extends PerformingGroup {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TheaterGroup';
	}
}