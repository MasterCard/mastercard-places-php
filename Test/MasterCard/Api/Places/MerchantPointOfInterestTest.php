<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\Places;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;



class MerchantPointOfInterestTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
                
        public function test_example_merchantpoi()
        {
            $map = new RequestMap();
            $map->set ("pageOffset", "0");
            $map->set ("pageLength", "10");
            $map->set ("radiusSearch", "false");
            $map->set ("unit", "km");
            $map->set ("distance", "14");
            $map->set ("place.countryCode", "USA");
            
            $response = MerchantPointOfInterest::create($map);
            $this->customAssertValue("0", $response->get("MerchantPOIResponse.pageOffset"));
            $this->customAssertValue("2000", $response->get("MerchantPOIResponse.totalCount"));
            $this->customAssertValue("SABAS WESTERN WEAR", $response->get("MerchantPOIResponse.places.place[0].merchantName"));
            $this->customAssertValue("SABA'S WESTERN WEAR", $response->get("MerchantPOIResponse.places.place[0].cleansedMerchantName"));
            $this->customAssertValue("67 W BOSTON", $response->get("MerchantPOIResponse.places.place[0].streetAddr"));
            $this->customAssertValue("67 W BOSTON ST", $response->get("MerchantPOIResponse.places.place[0].cleansedStreetAddr"));
            $this->customAssertValue("CHANDLER", $response->get("MerchantPOIResponse.places.place[0].cityName"));
            $this->customAssertValue("CHANDLER", $response->get("MerchantPOIResponse.places.place[0].cleansedCityName"));
            $this->customAssertValue("AZ", $response->get("MerchantPOIResponse.places.place[0].stateProvidenceCode"));
            $this->customAssertValue("AZ", $response->get("MerchantPOIResponse.places.place[0].cleansedStateProvidenceCode"));
            $this->customAssertValue("85225", $response->get("MerchantPOIResponse.places.place[0].postalCode"));
            $this->customAssertValue("85225-7801", $response->get("MerchantPOIResponse.places.place[0].cleansedPostalCode"));
            $this->customAssertValue("USA", $response->get("MerchantPOIResponse.places.place[0].countryCode"));
            $this->customAssertValue("USA", $response->get("MerchantPOIResponse.places.place[0].cleansedCountryCode"));
            $this->customAssertValue("4809634496", $response->get("MerchantPOIResponse.places.place[0].telephoneNumber"));
            $this->customAssertValue("(480) 963-4496", $response->get("MerchantPOIResponse.places.place[0].cleansedTelephoneNumber"));
            $this->customAssertValue("5999", $response->get("MerchantPOIResponse.places.place[0].mccCode"));
            $this->customAssertValue("SABA'S WESTERN WEAR", $response->get("MerchantPOIResponse.places.place[0].legalCorporateName"));
            $this->customAssertValue("DAVID'S WESTERN STORES  INC.", $response->get("MerchantPOIResponse.places.place[0].cleansedLegalCorporateName"));
            $this->customAssertValue("DVG", $response->get("MerchantPOIResponse.places.place[0].industry"));
            $this->customAssertValue("GEN", $response->get("MerchantPOIResponse.places.place[0].superIndustry"));
            $this->customAssertValue("148365653", $response->get("MerchantPOIResponse.places.place[0].dunAndBradstreeNumber"));
            $this->customAssertValue("12/31/1997", $response->get("MerchantPOIResponse.places.place[0].dateEstablished"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[0].newBusinessFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[0].inBusiness7DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[0].inBusiness30DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[0].inBusiness60DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[0].inBusiness90DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[0].inBusiness180DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[0].inBusiness360DayFlag"));
            $this->customAssertValue("33.302154", $response->get("MerchantPOIResponse.places.place[0].latitude"));
            $this->customAssertValue("-111.842276", $response->get("MerchantPOIResponse.places.place[0].longitude"));
            $this->customAssertValue("STOREFRONT", $response->get("MerchantPOIResponse.places.place[0].geocodeQualityIndicator"));
            $this->customAssertValue("B", $response->get("MerchantPOIResponse.places.place[0].primaryChannelOfDistribution"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[0].cashBack"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[0].payAtThePump"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[0].nfcFlag"));
            $this->customAssertValue("5999", $response->get("MerchantPOIResponse.places.place[0].aggregateMerchantId"));
            $this->customAssertValue("NON-AGGREGATED MISCELLANEOUS AND SPECIALTY RETAIL STORES 5999", $response->get("MerchantPOIResponse.places.place[0].aggregateMerchantName"));
            $this->customAssertValue("5999", $response->get("MerchantPOIResponse.places.place[0].keyAggregateMerchantId"));
            $this->customAssertValue("10001460", $response->get("MerchantPOIResponse.places.place[0].parentAggregateMerchantId"));
            $this->customAssertValue("NON-AGGREGATED", $response->get("MerchantPOIResponse.places.place[0].parentAggregateMerchantName"));
            $this->customAssertValue("6200", $response->get("MerchantPOIResponse.places.place[0].msaCode"));
            $this->customAssertValue("453998", $response->get("MerchantPOIResponse.places.place[0].naicsCode"));
            $this->customAssertValue("753", $response->get("MerchantPOIResponse.places.place[0].dmaCode"));
            $this->customAssertValue("55476524", $response->get("MerchantPOIResponse.places.place[0].locationId"));
            $this->customAssertValue("THAKU'S MENS WEAR", $response->get("MerchantPOIResponse.places.place[1].merchantName"));
            $this->customAssertValue("THAKU'S MENS WEAR", $response->get("MerchantPOIResponse.places.place[1].cleansedMerchantName"));
            $this->customAssertValue("4320 N SCOTTSDALE ROAD", $response->get("MerchantPOIResponse.places.place[1].streetAddr"));
            $this->customAssertValue("4320 N SCOTTSDALE RD", $response->get("MerchantPOIResponse.places.place[1].cleansedStreetAddr"));
            $this->customAssertValue("SCOTTSDALE", $response->get("MerchantPOIResponse.places.place[1].cityName"));
            $this->customAssertValue("SCOTTSDALE", $response->get("MerchantPOIResponse.places.place[1].cleansedCityName"));
            $this->customAssertValue("AZ", $response->get("MerchantPOIResponse.places.place[1].stateProvidenceCode"));
            $this->customAssertValue("AZ", $response->get("MerchantPOIResponse.places.place[1].cleansedStateProvidenceCode"));
            $this->customAssertValue("85251", $response->get("MerchantPOIResponse.places.place[1].postalCode"));
            $this->customAssertValue("85251-3312", $response->get("MerchantPOIResponse.places.place[1].cleansedPostalCode"));
            $this->customAssertValue("USA", $response->get("MerchantPOIResponse.places.place[1].countryCode"));
            $this->customAssertValue("USA", $response->get("MerchantPOIResponse.places.place[1].cleansedCountryCode"));
            $this->customAssertValue("4809477070", $response->get("MerchantPOIResponse.places.place[1].telephoneNumber"));
            $this->customAssertValue("(480) 947-7070", $response->get("MerchantPOIResponse.places.place[1].cleansedTelephoneNumber"));
            $this->customAssertValue("5611", $response->get("MerchantPOIResponse.places.place[1].mccCode"));
            $this->customAssertValue("THAKU'S MENSWEAR", $response->get("MerchantPOIResponse.places.place[1].legalCorporateName"));
            $this->customAssertValue("THAKU OF HONG KONG  INC.", $response->get("MerchantPOIResponse.places.place[1].cleansedLegalCorporateName"));
            $this->customAssertValue("AAM", $response->get("MerchantPOIResponse.places.place[1].industry"));
            $this->customAssertValue("AAP", $response->get("MerchantPOIResponse.places.place[1].superIndustry"));
            $this->customAssertValue("12/31/1997", $response->get("MerchantPOIResponse.places.place[1].dateEstablished"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[1].newBusinessFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[1].inBusiness7DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[1].inBusiness30DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[1].inBusiness60DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[1].inBusiness90DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[1].inBusiness180DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[1].inBusiness360DayFlag"));
            $this->customAssertValue("33.499019", $response->get("MerchantPOIResponse.places.place[1].latitude"));
            $this->customAssertValue("-111.926223", $response->get("MerchantPOIResponse.places.place[1].longitude"));
            $this->customAssertValue("STOREFRONT", $response->get("MerchantPOIResponse.places.place[1].geocodeQualityIndicator"));
            $this->customAssertValue("B", $response->get("MerchantPOIResponse.places.place[1].primaryChannelOfDistribution"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[1].cashBack"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[1].payAtThePump"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[1].nfcFlag"));
            $this->customAssertValue("5611", $response->get("MerchantPOIResponse.places.place[1].aggregateMerchantId"));
            $this->customAssertValue("NON-AGGREGATED MEN'S AND BOY'S CLOTHING AND ACCESSORIES STOR 5611", $response->get("MerchantPOIResponse.places.place[1].aggregateMerchantName"));
            $this->customAssertValue("5611", $response->get("MerchantPOIResponse.places.place[1].keyAggregateMerchantId"));
            $this->customAssertValue("10001460", $response->get("MerchantPOIResponse.places.place[1].parentAggregateMerchantId"));
            $this->customAssertValue("NON-AGGREGATED", $response->get("MerchantPOIResponse.places.place[1].parentAggregateMerchantName"));
            $this->customAssertValue("6200", $response->get("MerchantPOIResponse.places.place[1].msaCode"));
            $this->customAssertValue("424320", $response->get("MerchantPOIResponse.places.place[1].naicsCode"));
            $this->customAssertValue("753", $response->get("MerchantPOIResponse.places.place[1].dmaCode"));
            $this->customAssertValue("55475954", $response->get("MerchantPOIResponse.places.place[1].locationId"));
            $this->customAssertValue("VAN HEUSEN #071", $response->get("MerchantPOIResponse.places.place[2].merchantName"));
            $this->customAssertValue("VAN HEUSEN", $response->get("MerchantPOIResponse.places.place[2].cleansedMerchantName"));
            $this->customAssertValue("COOGAN BLVD", $response->get("MerchantPOIResponse.places.place[2].streetAddr"));
            $this->customAssertValue("1 COOGAN BLVD", $response->get("MerchantPOIResponse.places.place[2].cleansedStreetAddr"));
            $this->customAssertValue("MYSTIC", $response->get("MerchantPOIResponse.places.place[2].cityName"));
            $this->customAssertValue("MYSTIC", $response->get("MerchantPOIResponse.places.place[2].cleansedCityName"));
            $this->customAssertValue("CT", $response->get("MerchantPOIResponse.places.place[2].stateProvidenceCode"));
            $this->customAssertValue("CT", $response->get("MerchantPOIResponse.places.place[2].cleansedStateProvidenceCode"));
            $this->customAssertValue("06355", $response->get("MerchantPOIResponse.places.place[2].postalCode"));
            $this->customAssertValue("06355-1927", $response->get("MerchantPOIResponse.places.place[2].cleansedPostalCode"));
            $this->customAssertValue("USA", $response->get("MerchantPOIResponse.places.place[2].countryCode"));
            $this->customAssertValue("USA", $response->get("MerchantPOIResponse.places.place[2].cleansedCountryCode"));
            $this->customAssertValue("8605729972", $response->get("MerchantPOIResponse.places.place[2].telephoneNumber"));
            $this->customAssertValue("8605729972", $response->get("MerchantPOIResponse.places.place[2].cleansedTelephoneNumber"));
            $this->customAssertValue("5611", $response->get("MerchantPOIResponse.places.place[2].mccCode"));
            $this->customAssertValue("VAN HEUSEN RETAI", $response->get("MerchantPOIResponse.places.place[2].legalCorporateName"));
            $this->customAssertValue("VAN HEUSEN RETAI", $response->get("MerchantPOIResponse.places.place[2].cleansedLegalCorporateName"));
            $this->customAssertValue("AAF", $response->get("MerchantPOIResponse.places.place[2].industry"));
            $this->customAssertValue("AAP", $response->get("MerchantPOIResponse.places.place[2].superIndustry"));
            $this->customAssertValue("797870219", $response->get("MerchantPOIResponse.places.place[2].dunAndBradstreeNumber"));
            $this->customAssertValue("12/31/1997", $response->get("MerchantPOIResponse.places.place[2].dateEstablished"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[2].newBusinessFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[2].inBusiness7DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[2].inBusiness30DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[2].inBusiness60DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[2].inBusiness90DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[2].inBusiness180DayFlag"));
            $this->customAssertValue("TRUE", $response->get("MerchantPOIResponse.places.place[2].inBusiness360DayFlag"));
            $this->customAssertValue("41.372157", $response->get("MerchantPOIResponse.places.place[2].latitude"));
            $this->customAssertValue("-71.955404", $response->get("MerchantPOIResponse.places.place[2].longitude"));
            $this->customAssertValue("STOREFRONT", $response->get("MerchantPOIResponse.places.place[2].geocodeQualityIndicator"));
            $this->customAssertValue("B", $response->get("MerchantPOIResponse.places.place[2].primaryChannelOfDistribution"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[2].cashBack"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[2].payAtThePump"));
            $this->customAssertValue("FALSE", $response->get("MerchantPOIResponse.places.place[2].nfcFlag"));
            $this->customAssertValue("11917", $response->get("MerchantPOIResponse.places.place[2].aggregateMerchantId"));
            $this->customAssertValue("VAN HEUSEN", $response->get("MerchantPOIResponse.places.place[2].aggregateMerchantName"));
            $this->customAssertValue("11917", $response->get("MerchantPOIResponse.places.place[2].keyAggregateMerchantId"));
            $this->customAssertValue("10000205", $response->get("MerchantPOIResponse.places.place[2].parentAggregateMerchantId"));
            $this->customAssertValue("PHILLIPS-VAN HEUSEN CORP", $response->get("MerchantPOIResponse.places.place[2].parentAggregateMerchantName"));
            $this->customAssertValue("448140", $response->get("MerchantPOIResponse.places.place[2].naicsCode"));
            $this->customAssertValue("533", $response->get("MerchantPOIResponse.places.place[2].dmaCode"));
            $this->customAssertValue("55475387", $response->get("MerchantPOIResponse.places.place[2].locationId"));
            
        }
        
    
    
    
    
    
    
    

    protected function customAssertValue($expected, $actual) {
        if (is_bool($actual)) {
            $this->assertEquals(boolval($expected), $actual);
        } else if (is_float($actual)) {
            $this->assertEquals(floatval($expected), $actual);
        } else {
            $this->assertEquals(strtolower($expected), strtolower($actual));
        }
    }
}



