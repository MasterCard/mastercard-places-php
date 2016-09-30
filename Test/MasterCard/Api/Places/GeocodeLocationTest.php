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
use Test\BaseTest;



class GeocodeLocationTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_geocode_location()
        {
            

            

            $map = new RequestMap();
            $map->set("addressLine1", "2254 HIGHWAY K");
            $map->set("cityName", "O FALLON");
            $map->set("countryCode", "USA");
            $map->set("postalCode", "63368");
            
            
            $response = GeocodeLocation::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.inputAddressLine1", "2254 HIGHWAY K");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.responseAddressLine1", "2254 HIGHWAY K");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.inputCityName", "O FALLON");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.responseCityName", "O FALLON");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.responseCountrySubDivision", "MO");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.inputCountryCode", "USA");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.responseCountryCode", "USA");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.inputPostalCode", "63368");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.responsePostalCode", "63368-7929");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.latitude", "38.777414");
            $this->customAssertEqual($ignoreAssert, $response, "geoCodeLocation.longitude", "-90.699736");
            

            self::putResponse("example_geocode_location", $response);
            
        }
        
    
    
}



