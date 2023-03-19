<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->char('iso', 2);
            $table->string('name', 80);
            $table->string('nicename', 80);
            $table->string('iso3', 6)->nullable();
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';
        });

        DB::table('countries')->insert([
            [
                "iso" => "AF",
                "name" => "AFGHANISTAN",
                "nicename" => "Afghanistan",
                "iso3" => "AFG"
            ],
            [
                "iso" => "AL",
                "name" => "ALBANIA",
                "nicename" => "Albania",
                "iso3" => "ALB"
            ],
            [
                "iso" => "DZ",
                "name" => "ALGERIA",
                "nicename" => "Algeria",
                "iso3" => "DZA"
            ],
            [
                "iso" => "AS",
                "name" => "AMERICAN SAMOA",
                "nicename" => "American Samoa",
                "iso3" => "ASM"
            ],
            [
                "iso" => "AD",
                "name" => "ANDORRA",
                "nicename" => "Andorra",
                "iso3" => "AND"
            ],
            [
                "iso" => "AO",
                "name" => "ANGOLA",
                "nicename" => "Angola",
                "iso3" => "AGO"
            ],
            [
                "iso" => "AI",
                "name" => "ANGUILLA",
                "nicename" => "Anguilla",
                "iso3" => "AIA"
            ],
            [
                "iso" => "AQ",
                "name" => "ANTARCTICA",
                "nicename" => "Antarctica",
                "iso3" => NULL
            ],
            [
                "iso" => "AG",
                "name" => "ANTIGUA AND BARBUDA",
                "nicename" => "Antigua and Barbuda",
                "iso3" => "ATG"
            ],
            [
                "iso" => "AR",
                "name" => "ARGENTINA",
                "nicename" => "Argentina",
                "iso3" => "ARG"
            ],
            [
                "iso" => "AM",
                "name" => "ARMENIA",
                "nicename" => "Armenia",
                "iso3" => "ARM"
            ],
            [
                "iso" => "AW",
                "name" => "ARUBA",
                "nicename" => "Aruba",
                "iso3" => "ABW"
            ],
            [
                "iso" => "AU",
                "name" => "AUSTRALIA",
                "nicename" => "Australia",
                "iso3" => "AUS"
            ],
            [
                "iso" => "AT",
                "name" => "AUSTRIA",
                "nicename" => "Austria",
                "iso3" => "AUT"
            ],
            [
                "iso" => "AZ",
                "name" => "AZERBAIJAN",
                "nicename" => "Azerbaijan",
                "iso3" => "AZE"
            ],
            [
                "iso" => "BS",
                "name" => "BAHAMAS",
                "nicename" => "Bahamas",
                "iso3" => "BHS"
            ],
            [
                "iso" => "BH",
                "name" => "BAHRAIN",
                "nicename" => "Bahrain",
                "iso3" => "BHR"
            ],
            [
                "iso" => "BD",
                "name" => "BANGLADESH",
                "nicename" => "Bangladesh",
                "iso3" => "BGD"
            ],
            [
                "iso" => "BB",
                "name" => "BARBADOS",
                "nicename" => "Barbados",
                "iso3" => "BRB"
            ],
            [
                "iso" => "BY",
                "name" => "BELARUS",
                "nicename" => "Belarus",
                "iso3" => "BLR"
            ],
            [
                "iso" => "BE",
                "name" => "BELGIUM",
                "nicename" => "Belgium",
                "iso3" => "BEL"
            ],
            [
                "iso" => "BZ",
                "name" => "BELIZE",
                "nicename" => "Belize",
                "iso3" => "BLZ"
            ],
            [
                "iso" => "BJ",
                "name" => "BENIN",
                "nicename" => "Benin",
                "iso3" => "BEN"
            ],
            [
                "iso" => "BM",
                "name" => "BERMUDA",
                "nicename" => "Bermuda",
                "iso3" => "BMU"
            ],
            [
                "iso" => "BT",
                "name" => "BHUTAN",
                "nicename" => "Bhutan",
                "iso3" => "BTN"
            ],
            [
                "iso" => "BO",
                "name" => "BOLIVIA",
                "nicename" => "Bolivia",
                "iso3" => "BOL"
            ],
            [
                "iso" => "BA",
                "name" => "BOSNIA AND HERZEGOVINA",
                "nicename" => "Bosnia and Herzegovina",
                "iso3" => "BIH"
            ],
            [
                "iso" => "BW",
                "name" => "BOTSWANA",
                "nicename" => "Botswana",
                "iso3" => "BWA"
            ],
            [
                "iso" => "BV",
                "name" => "BOUVET ISLAND",
                "nicename" => "Bouvet Island",
                "iso3" => NULL
            ],
            [
                "iso" => "BR",
                "name" => "BRAZIL",
                "nicename" => "Brazil",
                "iso3" => "BRA"
            ],
            [
                "iso" => "IO",
                "name" => "BRITISH INDIAN OCEAN TERRITORY",
                "nicename" => "British Indian Ocean Territory",
                "iso3" => NULL
            ],
            [
                "iso" => "BN",
                "name" => "BRUNEI DARUSSALAM",
                "nicename" => "Brunei Darussalam",
                "iso3" => "BRN"
            ],
            [
                "iso" => "BG",
                "name" => "BULGARIA",
                "nicename" => "Bulgaria",
                "iso3" => "BGR"
            ],
            [
                "iso" => "BF",
                "name" => "BURKINA FASO",
                "nicename" => "Burkina Faso",
                "iso3" => "BFA"
            ],
            [
                "iso" => "BI",
                "name" => "BURUNDI",
                "nicename" => "Burundi",
                "iso3" => "BDI"
            ],
            [
                "iso" => "KH",
                "name" => "CAMBODIA",
                "nicename" => "Cambodia",
                "iso3" => "KHM"
            ],
            [
                "iso" => "CM",
                "name" => "CAMEROON",
                "nicename" => "Cameroon",
                "iso3" => "CMR"
            ],
            [
                "iso" => "CA",
                "name" => "CANADA",
                "nicename" => "Canada",
                "iso3" => "CAN"
            ],
            [
                "iso" => "CV",
                "name" => "CAPE VERDE",
                "nicename" => "Cape Verde",
                "iso3" => "CPV"
            ],
            [
                "iso" => "KY",
                "name" => "CAYMAN ISLANDS",
                "nicename" => "Cayman Islands",
                "iso3" => "CYM"
            ],
            [
                "iso" => "CF",
                "name" => "CENTRAL AFRICAN REPUBLIC",
                "nicename" => "Central African Republic",
                "iso3" => "CAF"
            ],
            [
                "iso" => "TD",
                "name" => "CHAD",
                "nicename" => "Chad",
                "iso3" => "TCD"
            ],
            [
                "iso" => "CL",
                "name" => "CHILE",
                "nicename" => "Chile",
                "iso3" => "CHL"
            ],
            [
                "iso" => "CN",
                "name" => "CHINA",
                "nicename" => "China",
                "iso3" => "CHN"
            ],
            [
                "iso" => "CX",
                "name" => "CHRISTMAS ISLAND",
                "nicename" => "Christmas Island",
                "iso3" => NULL
            ],
            [
                "iso" => "CC",
                "name" => "COCOS (KEELING) ISLANDS",
                "nicename" => "Cocos (Keeling) Islands",
                "iso3" => NULL
            ],
            [
                "iso" => "CO",
                "name" => "COLOMBIA",
                "nicename" => "Colombia",
                "iso3" => "COL"
            ],
            [
                "iso" => "KM",
                "name" => "COMOROS",
                "nicename" => "Comoros",
                "iso3" => "COM"
            ],
            [
                "iso" => "CG",
                "name" => "CONGO",
                "nicename" => "Congo",
                "iso3" => "COG"
            ],
            [
                "iso" => "CD",
                "name" => "CONGO",
                "nicename" => "THE DEMOCRATIC REPUBLIC OF THE",
                "iso3" => "Congo"
            ],
            [
                "iso" => "CK",
                "name" => "COOK ISLANDS",
                "nicename" => "Cook Islands",
                "iso3" => "COK"
            ],
            [
                "iso" => "CR",
                "name" => "COSTA RICA",
                "nicename" => "Costa Rica",
                "iso3" => "CRI"
            ],
            [
                "iso" => "CI",
                "name" => "COTE D'IVOIRE",
                "nicename" => "Cote D'Ivoire",
                "iso3" => "CIV"
            ],
            [
                "iso" => "HR",
                "name" => "CROATIA",
                "nicename" => "Croatia",
                "iso3" => "HRV"
            ],
            [
                "iso" => "CU",
                "name" => "CUBA",
                "nicename" => "Cuba",
                "iso3" => "CUB"
            ],
            [
                "iso" => "CY",
                "name" => "CYPRUS",
                "nicename" => "Cyprus",
                "iso3" => "CYP"
            ],
            [
                "iso" => "CZ",
                "name" => "CZECH REPUBLIC",
                "nicename" => "Czech Republic",
                "iso3" => "CZE"
            ],
            [
                "iso" => "DK",
                "name" => "DENMARK",
                "nicename" => "Denmark",
                "iso3" => "DNK"
            ],
            [
                "iso" => "DJ",
                "name" => "DJIBOUTI",
                "nicename" => "Djibouti",
                "iso3" => "DJI"
            ],
            [
                "iso" => "DM",
                "name" => "DOMINICA",
                "nicename" => "Dominica",
                "iso3" => "DMA"
            ],
            [
                "iso" => "DO",
                "name" => "DOMINICAN REPUBLIC",
                "nicename" => "Dominican Republic",
                "iso3" => "DOM"
            ],
            [
                "iso" => "EC",
                "name" => "ECUADOR",
                "nicename" => "Ecuador",
                "iso3" => "ECU"
            ],
            [
                "iso" => "EG",
                "name" => "EGYPT",
                "nicename" => "Egypt",
                "iso3" => "EGY"
            ],
            [
                "iso" => "SV",
                "name" => "EL SALVADOR",
                "nicename" => "El Salvador",
                "iso3" => "SLV"
            ],
            [
                "iso" => "GQ",
                "name" => "EQUATORIAL GUINEA",
                "nicename" => "Equatorial Guinea",
                "iso3" => "GNQ"
            ],
            [
                "iso" => "ER",
                "name" => "ERITREA",
                "nicename" => "Eritrea",
                "iso3" => "ERI"
            ],
            [
                "iso" => "EE",
                "name" => "ESTONIA",
                "nicename" => "Estonia",
                "iso3" => "EST"
            ],
            [
                "iso" => "ET",
                "name" => "ETHIOPIA",
                "nicename" => "Ethiopia",
                "iso3" => "ETH"
            ],
            [
                "iso" => "FK",
                "name" => "FALKLAND ISLANDS (MALVINAS)",
                "nicename" => "Falkland Islands (Malvinas)",
                "iso3" => "FLK"
            ],
            [
                "iso" => "FO",
                "name" => "FAROE ISLANDS",
                "nicename" => "Faroe Islands",
                "iso3" => "FRO"
            ],
            [
                "iso" => "FJ",
                "name" => "FIJI",
                "nicename" => "Fiji",
                "iso3" => "FJI"
            ],
            [
                "iso" => "FI",
                "name" => "FINLAND",
                "nicename" => "Finland",
                "iso3" => "FIN"
            ],
            [
                "iso" => "FR",
                "name" => "FRANCE",
                "nicename" => "France",
                "iso3" => "FRA"
            ],
            [
                "iso" => "GF",
                "name" => "FRENCH GUIANA",
                "nicename" => "French Guiana",
                "iso3" => "GUF"
            ],
            [
                "iso" => "PF",
                "name" => "FRENCH POLYNESIA",
                "nicename" => "French Polynesia",
                "iso3" => "PYF"
            ],
            [
                "iso" => "TF",
                "name" => "FRENCH SOUTHERN TERRITORIES",
                "nicename" => "French Southern Territories",
                "iso3" => NULL
            ],
            [
                "iso" => "GA",
                "name" => "GABON",
                "nicename" => "Gabon",
                "iso3" => "GAB"
            ],
            [
                "iso" => "GM",
                "name" => "GAMBIA",
                "nicename" => "Gambia",
                "iso3" => "GMB"
            ],
            [
                "iso" => "GE",
                "name" => "GEORGIA",
                "nicename" => "Georgia",
                "iso3" => "GEO"
            ],
            [
                "iso" => "DE",
                "name" => "GERMANY",
                "nicename" => "Germany",
                "iso3" => "DEU"
            ],
            [
                "iso" => "GH",
                "name" => "GHANA",
                "nicename" => "Ghana",
                "iso3" => "GHA"
            ],
            [
                "iso" => "GI",
                "name" => "GIBRALTAR",
                "nicename" => "Gibraltar",
                "iso3" => "GIB"
            ],
            [
                "iso" => "GR",
                "name" => "GREECE",
                "nicename" => "Greece",
                "iso3" => "GRC"
            ],
            [
                "iso" => "GL",
                "name" => "GREENLAND",
                "nicename" => "Greenland",
                "iso3" => "GRL"
            ],
            [
                "iso" => "GD",
                "name" => "GRENADA",
                "nicename" => "Grenada",
                "iso3" => "GRD"
            ],
            [
                "iso" => "GP",
                "name" => "GUADELOUPE",
                "nicename" => "Guadeloupe",
                "iso3" => "GLP"
            ],
            [
                "iso" => "GU",
                "name" => "GUAM",
                "nicename" => "Guam",
                "iso3" => "GUM"
            ],
            [
                "iso" => "GT",
                "name" => "GUATEMALA",
                "nicename" => "Guatemala",
                "iso3" => "GTM"
            ],
            [
                "iso" => "GN",
                "name" => "GUINEA",
                "nicename" => "Guinea",
                "iso3" => "GIN"
            ],
            [
                "iso" => "GW",
                "name" => "GUINEA-BISSAU",
                "nicename" => "Guinea-Bissau",
                "iso3" => "GNB"
            ],
            [
                "iso" => "GY",
                "name" => "GUYANA",
                "nicename" => "Guyana",
                "iso3" => "GUY"
            ],
            [
                "iso" => "HT",
                "name" => "HAITI",
                "nicename" => "Haiti",
                "iso3" => "HTI"
            ],
            [
                "iso" => "HM",
                "name" => "HEARD ISLAND AND MCDONALD ISLANDS",
                "nicename" => "Heard Island and Mcdonald Islands",
                "iso3" => NULL
            ],
            [
                "iso" => "VA",
                "name" => "HOLY SEE (VATICAN CITY STATE)",
                "nicename" => "Holy See (Vatican City State)",
                "iso3" => "VAT"
            ],
            [
                "iso" => "HN",
                "name" => "HONDURAS",
                "nicename" => "Honduras",
                "iso3" => "HND"
            ],
            [
                "iso" => "HK",
                "name" => "HONG KONG",
                "nicename" => "Hong Kong",
                "iso3" => "HKG"
            ],
            [
                "iso" => "HU",
                "name" => "HUNGARY",
                "nicename" => "Hungary",
                "iso3" => "HUN"
            ],
            [
                "iso" => "IS",
                "name" => "ICELAND",
                "nicename" => "Iceland",
                "iso3" => "ISL"
            ],
            [
                "iso" => "IN",
                "name" => "INDIA",
                "nicename" => "India",
                "iso3" => "IND"
            ],
            [
                "iso" => "ID",
                "name" => "INDONESIA",
                "nicename" => "Indonesia",
                "iso3" => "IDN"
            ],
            [
                "iso" => "IR",
                "name" => "IRAN",
                "nicename" => "ISLAMIC REPUBLIC OF",
                "iso3" => "Iran"
            ],
            [
                "iso" => "IQ",
                "name" => "IRAQ",
                "nicename" => "Iraq",
                "iso3" => "IRQ"
            ],
            [
                "iso" => "IE",
                "name" => "IRELAND",
                "nicename" => "Ireland",
                "iso3" => "IRL"
            ],
            [
                "iso" => "IL",
                "name" => "ISRAEL",
                "nicename" => "Israel",
                "iso3" => "ISR"
            ],
            [
                "iso" => "IT",
                "name" => "ITALY",
                "nicename" => "Italy",
                "iso3" => "ITA"
            ],
            [
                "iso" => "JM",
                "name" => "JAMAICA",
                "nicename" => "Jamaica",
                "iso3" => "JAM"
            ],
            [
                "iso" => "JP",
                "name" => "JAPAN",
                "nicename" => "Japan",
                "iso3" => "JPN"
            ],
            [
                "iso" => "JO",
                "name" => "JORDAN",
                "nicename" => "Jordan",
                "iso3" => "JOR"
            ],
            [
                "iso" => "KZ",
                "name" => "KAZAKHSTAN",
                "nicename" => "Kazakhstan",
                "iso3" => "KAZ"
            ],
            [
                "iso" => "KE",
                "name" => "KENYA",
                "nicename" => "Kenya",
                "iso3" => "KEN"
            ],
            [
                "iso" => "KI",
                "name" => "KIRIBATI",
                "nicename" => "Kiribati",
                "iso3" => "KIR"
            ],
            [
                "iso" => "KP",
                "name" => "KOREA",
                "nicename" => "DEMOCRATIC PEOPLE'S REPUBLIC OF",
                "iso3" => "Korea"
            ],
            [
                "iso" => "KR",
                "name" => "KOREA",
                "nicename" => "REPUBLIC OF",
                "iso3" => "Korea"
            ],
            [
                "iso" => "KW",
                "name" => "KUWAIT",
                "nicename" => "Kuwait",
                "iso3" => "KWT"
            ],
            [
                "iso" => "KG",
                "name" => "KYRGYZSTAN",
                "nicename" => "Kyrgyzstan",
                "iso3" => "KGZ"
            ],
            [
                "iso" => "LA",
                "name" => "LAO PEOPLE'S DEMOCRATIC REPUBLIC",
                "nicename" => "Lao People's Democratic Republic",
                "iso3" => "LAO"
            ],
            [
                "iso" => "LV",
                "name" => "LATVIA",
                "nicename" => "Latvia",
                "iso3" => "LVA"
            ],
            [
                "iso" => "LB",
                "name" => "LEBANON",
                "nicename" => "Lebanon",
                "iso3" => "LBN"
            ],
            [
                "iso" => "LS",
                "name" => "LESOTHO",
                "nicename" => "Lesotho",
                "iso3" => "LSO"
            ],
            [
                "iso" => "LR",
                "name" => "LIBERIA",
                "nicename" => "Liberia",
                "iso3" => "LBR"
            ],
            [
                "iso" => "LY",
                "name" => "LIBYAN ARAB JAMAHIRIYA",
                "nicename" => "Libyan Arab Jamahiriya",
                "iso3" => "LBY"
            ],
            [
                "iso" => "LI",
                "name" => "LIECHTENSTEIN",
                "nicename" => "Liechtenstein",
                "iso3" => "LIE"
            ],
            [
                "iso" => "LT",
                "name" => "LITHUANIA",
                "nicename" => "Lithuania",
                "iso3" => "LTU"
            ],
            [
                "iso" => "LU",
                "name" => "LUXEMBOURG",
                "nicename" => "Luxembourg",
                "iso3" => "LUX"
            ],
            [
                "iso" => "MO",
                "name" => "MACAO",
                "nicename" => "Macao",
                "iso3" => "MAC"
            ],
            [
                "iso" => "MK",
                "name" => "MACEDONIA",
                "nicename" => "THE FORMER YUGOSLAV REPUBLIC OF",
                "iso3" => "MKD"
            ],
            [
                "iso" => "MG",
                "name" => "MADAGASCAR",
                "nicename" => "Madagascar",
                "iso3" => "MDG"
            ],
            [
                "iso" => "MW",
                "name" => "MALAWI",
                "nicename" => "Malawi",
                "iso3" => "MWI"
            ],
            [
                "iso" => "MY",
                "name" => "MALAYSIA",
                "nicename" => "Malaysia",
                "iso3" => "MYS"
            ],
            [
                "iso" => "MV",
                "name" => "MALDIVES",
                "nicename" => "Maldives",
                "iso3" => "MDV"
            ],
            [
                "iso" => "ML",
                "name" => "MALI",
                "nicename" => "Mali",
                "iso3" => "MLI"
            ],
            [
                "iso" => "MT",
                "name" => "MALTA",
                "nicename" => "Malta",
                "iso3" => "MLT"
            ],
            [
                "iso" => "MH",
                "name" => "MARSHALL ISLANDS",
                "nicename" => "Marshall Islands",
                "iso3" => "MHL"
            ],
            [
                "iso" => "MQ",
                "name" => "MARTINIQUE",
                "nicename" => "Martinique",
                "iso3" => "MTQ"
            ],
            [
                "iso" => "MR",
                "name" => "MAURITANIA",
                "nicename" => "Mauritania",
                "iso3" => "MRT"
            ],
            [
                "iso" => "MU",
                "name" => "MAURITIUS",
                "nicename" => "Mauritius",
                "iso3" => "MUS"
            ],
            [
                "iso" => "YT",
                "name" => "MAYOTTE",
                "nicename" => "Mayotte",
                "iso3" => NULL
            ],
            [
                "iso" => "MX",
                "name" => "MEXICO",
                "nicename" => "Mexico",
                "iso3" => "MEX"
            ],
            [
                "iso" => "FM",
                "name" => "MICRONESIA",
                "nicename" => "FEDERATED STATES OF",
                "iso3" => "FSM"
            ],
            [
                "iso" => "MD",
                "name" => "MOLDOVA",
                "nicename" => "REPUBLIC OF",
                "iso3" => "MDA"
            ],
            [
                "iso" => "MC",
                "name" => "MONACO",
                "nicename" => "Monaco",
                "iso3" => "MCO"
            ],
            [
                "iso" => "MN",
                "name" => "MONGOLIA",
                "nicename" => "Mongolia",
                "iso3" => "MNG"
            ],
            [
                "iso" => "MS",
                "name" => "MONTSERRAT",
                "nicename" => "Montserrat",
                "iso3" => "MSR"
            ],
            [
                "iso" => "MA",
                "name" => "MOROCCO",
                "nicename" => "Morocco",
                "iso3" => "MAR"
            ],
            [
                "iso" => "MZ",
                "name" => "MOZAMBIQUE",
                "nicename" => "Mozambique",
                "iso3" => "MOZ"
            ],
            [
                "iso" => "MM",
                "name" => "MYANMAR",
                "nicename" => "Myanmar",
                "iso3" => "MMR"
            ],
            [
                "iso" => "NA",
                "name" => "NAMIBIA",
                "nicename" => "Namibia",
                "iso3" => "NAM"
            ],
            [
                "iso" => "NR",
                "name" => "NAURU",
                "nicename" => "Nauru",
                "iso3" => "NRU"
            ],
            [
                "iso" => "NP",
                "name" => "NEPAL",
                "nicename" => "Nepal",
                "iso3" => "NPL"
            ],
            [
                "iso" => "NL",
                "name" => "NETHERLANDS",
                "nicename" => "Netherlands",
                "iso3" => "NLD"
            ],
            [
                "iso" => "AN",
                "name" => "NETHERLANDS ANTILLES",
                "nicename" => "Netherlands Antilles",
                "iso3" => "ANT"
            ],
            [
                "iso" => "NC",
                "name" => "NEW CALEDONIA",
                "nicename" => "New Caledonia",
                "iso3" => "NCL"
            ],
            [
                "iso" => "NZ",
                "name" => "NEW ZEALAND",
                "nicename" => "New Zealand",
                "iso3" => "NZL"
            ],
            [
                "iso" => "NI",
                "name" => "NICARAGUA",
                "nicename" => "Nicaragua",
                "iso3" => "NIC"
            ],
            [
                "iso" => "NE",
                "name" => "NIGER",
                "nicename" => "Niger",
                "iso3" => "NER"
            ],
            [
                "iso" => "NG",
                "name" => "NIGERIA",
                "nicename" => "Nigeria",
                "iso3" => "NGA"
            ],
            [
                "iso" => "NU",
                "name" => "NIUE",
                "nicename" => "Niue",
                "iso3" => "NIU"
            ],
            [
                "iso" => "NF",
                "name" => "NORFOLK ISLAND",
                "nicename" => "Norfolk Island",
                "iso3" => "NFK"
            ],
            [
                "iso" => "MP",
                "name" => "NORTHERN MARIANA ISLANDS",
                "nicename" => "Northern Mariana Islands",
                "iso3" => "MNP"
            ],
            [
                "iso" => "NO",
                "name" => "NORWAY",
                "nicename" => "Norway",
                "iso3" => "NOR"
            ],
            [
                "iso" => "OM",
                "name" => "OMAN",
                "nicename" => "Oman",
                "iso3" => "OMN"
            ],
            [
                "iso" => "PK",
                "name" => "PAKISTAN",
                "nicename" => "Pakistan",
                "iso3" => "PAK"
            ],
            [
                "iso" => "PW",
                "name" => "PALAU",
                "nicename" => "Palau",
                "iso3" => "PLW"
            ],
            [
                "iso" => "PS",
                "name" => "PALESTINIAN TERRITORY",
                "nicename" => "OCCUPIED",
                "iso3" => NULL
            ],
            [
                "iso" => "PA",
                "name" => "PANAMA",
                "nicename" => "Panama",
                "iso3" => "PAN"
            ],
            [
                "iso" => "PG",
                "name" => "PAPUA NEW GUINEA",
                "nicename" => "Papua New Guinea",
                "iso3" => "PNG"
            ],
            [
                "iso" => "PY",
                "name" => "PARAGUAY",
                "nicename" => "Paraguay",
                "iso3" => "PRY"
            ],
            [
                "iso" => "PE",
                "name" => "PERU",
                "nicename" => "Peru",
                "iso3" => "PER"
            ],
            [
                "iso" => "PH",
                "name" => "PHILIPPINES",
                "nicename" => "Philippines",
                "iso3" => "PHL"
            ],
            [
                "iso" => "PN",
                "name" => "PITCAIRN",
                "nicename" => "Pitcairn",
                "iso3" => "PCN"
            ],
            [
                "iso" => "PL",
                "name" => "POLAND",
                "nicename" => "Poland",
                "iso3" => "POL"
            ],
            [
                "iso" => "PT",
                "name" => "PORTUGAL",
                "nicename" => "Portugal",
                "iso3" => "PRT"
            ],
            [
                "iso" => "PR",
                "name" => "PUERTO RICO",
                "nicename" => "Puerto Rico",
                "iso3" => "PRI"
            ],
            [
                "iso" => "QA",
                "name" => "QATAR",
                "nicename" => "Qatar",
                "iso3" => "QAT"
            ],
            [
                "iso" => "RE",
                "name" => "REUNION",
                "nicename" => "Reunion",
                "iso3" => "REU"
            ],
            [
                "iso" => "RO",
                "name" => "ROMANIA",
                "nicename" => "Romania",
                "iso3" => "ROM"
            ],
            [
                "iso" => "RU",
                "name" => "RUSSIAN FEDERATION",
                "nicename" => "Russian Federation",
                "iso3" => "RUS"
            ],
            [
                "iso" => "RW",
                "name" => "RWANDA",
                "nicename" => "Rwanda",
                "iso3" => "RWA"
            ],
            [
                "iso" => "SH",
                "name" => "SAINT HELENA",
                "nicename" => "Saint Helena",
                "iso3" => "SHN"
            ],
            [
                "iso" => "KN",
                "name" => "SAINT KITTS AND NEVIS",
                "nicename" => "Saint Kitts and Nevis",
                "iso3" => "KNA"
            ],
            [
                "iso" => "LC",
                "name" => "SAINT LUCIA",
                "nicename" => "Saint Lucia",
                "iso3" => "LCA"
            ],
            [
                "iso" => "PM",
                "name" => "SAINT PIERRE AND MIQUELON",
                "nicename" => "Saint Pierre and Miquelon",
                "iso3" => "SPM"
            ],
            [
                "iso" => "VC",
                "name" => "SAINT VINCENT AND THE GRENADINES",
                "nicename" => "Saint Vincent and the Grenadines",
                "iso3" => "VCT"
            ],
            [
                "iso" => "WS",
                "name" => "SAMOA",
                "nicename" => "Samoa",
                "iso3" => "WSM"
            ],
            [
                "iso" => "SM",
                "name" => "SAN MARINO",
                "nicename" => "San Marino",
                "iso3" => "SMR"
            ],
            [
                "iso" => "ST",
                "name" => "SAO TOME AND PRINCIPE",
                "nicename" => "Sao Tome and Principe",
                "iso3" => "STP"
            ],
            [
                "iso" => "SA",
                "name" => "SAUDI ARABIA",
                "nicename" => "Saudi Arabia",
                "iso3" => "SAU"
            ],
            [
                "iso" => "SN",
                "name" => "SENEGAL",
                "nicename" => "Senegal",
                "iso3" => "SEN"
            ],
            [
                "iso" => "CS",
                "name" => "SERBIA AND MONTENEGRO",
                "nicename" => "Serbia and Montenegro",
                "iso3" => NULL
            ],
            [
                "iso" => "SC",
                "name" => "SEYCHELLES",
                "nicename" => "Seychelles",
                "iso3" => "SYC"
            ],
            [
                "iso" => "SL",
                "name" => "SIERRA LEONE",
                "nicename" => "Sierra Leone",
                "iso3" => "SLE"
            ],
            [
                "iso" => "SG",
                "name" => "SINGAPORE",
                "nicename" => "Singapore",
                "iso3" => "SGP"
            ],
            [
                "iso" => "SK",
                "name" => "SLOVAKIA",
                "nicename" => "Slovakia",
                "iso3" => "SVK"
            ],
            [
                "iso" => "SI",
                "name" => "SLOVENIA",
                "nicename" => "Slovenia",
                "iso3" => "SVN"
            ],
            [
                "iso" => "SB",
                "name" => "SOLOMON ISLANDS",
                "nicename" => "Solomon Islands",
                "iso3" => "SLB"
            ],
            [
                "iso" => "SO",
                "name" => "SOMALIA",
                "nicename" => "Somalia",
                "iso3" => "SOM"
            ],
            [
                "iso" => "ZA",
                "name" => "SOUTH AFRICA",
                "nicename" => "South Africa",
                "iso3" => "ZAF"
            ],
            [
                "iso" => "GS",
                "name" => "SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS",
                "nicename" => "South Georgia and the South Sandwich Islands",
                "iso3" => NULL
            ],
            [
                "iso" => "ES",
                "name" => "SPAIN",
                "nicename" => "Spain",
                "iso3" => "ESP"
            ],
            [
                "iso" => "LK",
                "name" => "SRI LANKA",
                "nicename" => "Sri Lanka",
                "iso3" => "LKA"
            ],
            [
                "iso" => "SD",
                "name" => "SUDAN",
                "nicename" => "Sudan",
                "iso3" => "SDN"
            ],
            [
                "iso" => "SR",
                "name" => "SURINAME",
                "nicename" => "Suriname",
                "iso3" => "SUR"
            ],
            [
                "iso" => "SJ",
                "name" => "SVALBARD AND JAN MAYEN",
                "nicename" => "Svalbard and Jan Mayen",
                "iso3" => "SJM"
            ],
            [
                "iso" => "SZ",
                "name" => "SWAZILAND",
                "nicename" => "Swaziland",
                "iso3" => "SWZ"
            ],
            [
                "iso" => "SE",
                "name" => "SWEDEN",
                "nicename" => "Sweden",
                "iso3" => "SWE"
            ],
            [
                "iso" => "CH",
                "name" => "SWITZERLAND",
                "nicename" => "Switzerland",
                "iso3" => "CHE"
            ],
            [
                "iso" => "SY",
                "name" => "SYRIAN ARAB REPUBLIC",
                "nicename" => "Syrian Arab Republic",
                "iso3" => "SYR"
            ],
            [
                "iso" => "TW",
                "name" => "TAIWAN",
                "nicename" => "PROVINCE OF CHINA",
                "iso3" => "Taiwan"
            ],
            [
                "iso" => "TJ",
                "name" => "TAJIKISTAN",
                "nicename" => "Tajikistan",
                "iso3" => "TJK"
            ],
            [
                "iso" => "TZ",
                "name" => "TANZANIA",
                "nicename" => "UNITED REPUBLIC OF",
                "iso3" => "TZA"
            ],
            [
                "iso" => "TH",
                "name" => "THAILAND",
                "nicename" => "Thailand",
                "iso3" => "THA"
            ],
            [
                "iso" => "TL",
                "name" => "TIMOR-LESTE",
                "nicename" => "Timor-Leste",
                "iso3" => NULL
            ],
            [
                "iso" => "TG",
                "name" => "TOGO",
                "nicename" => "Togo",
                "iso3" => "TGO"
            ],
            [
                "iso" => "TK",
                "name" => "TOKELAU",
                "nicename" => "Tokelau",
                "iso3" => "TKL"
            ],
            [
                "iso" => "TO",
                "name" => "TONGA",
                "nicename" => "Tonga",
                "iso3" => "TON"
            ],
            [
                "iso" => "TT",
                "name" => "TRINIDAD AND TOBAGO",
                "nicename" => "Trinidad and Tobago",
                "iso3" => "TTO"
            ],
            [
                "iso" => "TN",
                "name" => "TUNISIA",
                "nicename" => "Tunisia",
                "iso3" => "TUN"
            ],
            [
                "iso" => "TR",
                "name" => "TURKEY",
                "nicename" => "Turkey",
                "iso3" => "TUR"
            ],
            [
                "iso" => "TM",
                "name" => "TURKMENISTAN",
                "nicename" => "Turkmenistan",
                "iso3" => "TKM"
            ],
            [
                "iso" => "TC",
                "name" => "TURKS AND CAICOS ISLANDS",
                "nicename" => "Turks and Caicos Islands",
                "iso3" => "TCA"
            ],
            [
                "iso" => "TV",
                "name" => "TUVALU",
                "nicename" => "Tuvalu",
                "iso3" => "TUV"
            ],
            [
                "iso" => "UG",
                "name" => "UGANDA",
                "nicename" => "Uganda",
                "iso3" => "UGA"
            ],
            [
                "iso" => "UA",
                "name" => "UKRAINE",
                "nicename" => "Ukraine",
                "iso3" => "UKR"
            ],
            [
                "iso" => "AE",
                "name" => "UNITED ARAB EMIRATES",
                "nicename" => "United Arab Emirates",
                "iso3" => "ARE"
            ],
            [
                "iso" => "GB",
                "name" => "UNITED KINGDOM",
                "nicename" => "United Kingdom",
                "iso3" => "GBR"
            ],
            [
                "iso" => "US",
                "name" => "UNITED STATES",
                "nicename" => "United States",
                "iso3" => "USA"
            ],
            [
                "iso" => "UM",
                "name" => "UNITED STATES MINOR OUTLYING ISLANDS",
                "nicename" => "United States Minor Outlying Islands",
                "iso3" => NULL
            ],
            [
                "iso" => "UY",
                "name" => "URUGUAY",
                "nicename" => "Uruguay",
                "iso3" => "URY"
            ],
            [
                "iso" => "UZ",
                "name" => "UZBEKISTAN",
                "nicename" => "Uzbekistan",
                "iso3" => "UZB"
            ],
            [
                "iso" => "VU",
                "name" => "VANUATU",
                "nicename" => "Vanuatu",
                "iso3" => "VUT"
            ],
            [
                "iso" => "VE",
                "name" => "VENEZUELA",
                "nicename" => "Venezuela",
                "iso3" => "VEN"
            ],
            [
                "iso" => "VN",
                "name" => "VIET NAM",
                "nicename" => "Viet Nam",
                "iso3" => "VNM"
            ],
            [
                "iso" => "VG",
                "name" => "VIRGIN ISLANDS",
                "nicename" => "BRITISH",
                "iso3" => "VGB"
            ],
            [
                "iso" => "VI",
                "name" => "VIRGIN ISLANDS",
                "nicename" => "U.S.",
                "iso3" => "VIR"
            ],
            [
                "iso" => "WF",
                "name" => "WALLIS AND FUTUNA",
                "nicename" => "Wallis and Futuna",
                "iso3" => "WLF"
            ],
            [
                "iso" => "EH",
                "name" => "WESTERN SAHARA",
                "nicename" => "Western Sahara",
                "iso3" => "ESH"
            ],
            [
                "iso" => "YE",
                "name" => "YEMEN",
                "nicename" => "Yemen",
                "iso3" => "YEM"
            ],
            [
                "iso" => "ZM",
                "name" => "ZAMBIA",
                "nicename" => "Zambia",
                "iso3" => "ZMB"
            ],
            [
                "iso" => "ZW",
                "name" => "ZIMBABWE",
                "nicename" => "Zimbabwe",
                "iso3" => "ZWE"
            ]
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
