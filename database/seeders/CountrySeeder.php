<?php

namespace Database\Seeders;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();

        $countryArray=[
            ['Albania', 'Leke', 'ALL', 'Lek','AL','+355'],
            ['America', 'Dollars', 'USD', '$','US','+1'],
            ['Afghanistan', 'Afghanis', 'AFN', '؋','AF','+93'],
            ['Argentina', 'Pesos', 'ARS', '$','AR','+54'],
            ['Aruba', 'Guilders', 'AWG', 'ƒ','AW','+297'],
            ['Australia', 'Dollars', 'AUD', '$','AU','+61'],
            ['Azerbaijan', 'New Manats', 'AZN', 'ман','AZ','+994'],
            ['Bahamas', 'Dollars', 'BSD', '$','BS','+1-242'],
            ['Barbados', 'Dollars', 'BBD', '$','BB','+1-246'],
            ['Belarus', 'Rubles', 'BYR', 'p.','BY','+375'],
            ['Belgium', 'Euro', 'EUR', '€','BE','+32'],
            ['Beliz', 'Dollars', 'BZD', 'BZ$','BZ','+501'],
            ['Bermuda', 'Dollars', 'BMD', '$','BM','+1-441'],
            ['Bolivia', 'Bolivianos', 'BOB', '$b','BO','+591'],
            ['Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM','BA','+387'],
            ['Botswana', 'Pula', 'BWP', 'P','BW','+267'],
            ['Bulgaria', 'Leva', 'BGN', 'лв','BG','+359'],
            ['Brazil', 'Reais', 'BRL', 'R$','BR','+55'],
            ['Britain (United Kingdom)', 'Pounds', 'GBP', '£','GB','+44'],
            ['Brunei Darussalam', 'Dollars', 'BND', '$','BN','+673'],
            ['Cambodia', 'Riels', 'KHR', '៛','KH','+855'],
            ['Canada', 'Dollars', 'CAD', '$','CA','+1'],
            ['Cayman Islands', 'Dollars', 'KYD', '$','KY','+1-345'],
            ['Chile', 'Pesos', 'CLP', '$','CL','+56'],
            ['China', 'Yuan Renminbi', 'CNY', '¥','CN','+86'],
            ['Colombia', 'Pesos', 'COP', '$','CO','+57'],
            ['Costa Rica', 'Colón', 'CRC', '₡','CR','+506'],
            ['Croatia', 'Kuna', 'HRK', 'kn','HR','+385'],
            ['Cuba', 'Pesos', 'CUP', '₱','CU','+53'],
            ['Cyprus', 'Euro', 'EUR', '€','CY','+357'],
            ['Czech Republic', 'Koruny', 'CZK', 'Kč','CZ','+420'],
            ['Denmark', 'Kroner', 'DKK', 'kr','DK','+45'],
            ['Dominican Republic', 'Pesos', 'DOP ', 'RD$','DO','+1-829'],
            ['Egypt', 'Pounds', 'EGP', '£','EG','+20'],
            ['El Salvador', 'Colones', 'SVC', '$','SV','+503'],
            ['England (United Kingdom)', 'Pounds', 'GBP', '£','GB','+44'],
            ['Falkland Islands', 'Pounds', 'FKP', '£','FK','+500'],
            ['Fiji', 'Dollars', 'FJD', '$','FJ','+679'],
            ['France', 'Euro', 'EUR', '€','FR','+33'],
            ['Ghana', 'Cedis', 'GHC', '¢','GH','+233'],
            ['Gibraltar', 'Pounds', 'GIP', '£','GI','+350'],
            ['Greece', 'Euro', 'EUR', '€','GR','+30'],
            ['Guatemala', 'Quetzales', 'GTQ', 'Q','GT','+502'],
            ['Guernsey', 'Pounds', 'GGP', '£','GG','+44-1481'],
            ['Guyana', 'Dollars', 'GYD', '$','GY','+592'],
            ['Holland (Netherlands)', 'Euro', 'EUR', '€','NL','+31'],
            ['Honduras', 'Lempiras', 'HNL', 'L','HN','+504'],
            ['Hong Kong', 'Dollars', 'HKD', '$','HK','+852'],
            ['Hungary', 'Forint', 'HUF', 'Ft','HU','+36'],
            ['Iceland', 'Kronur', 'ISK', 'kr','IS','+354'],
            ['India', 'Rupees', 'INR', '₹','IN','+91'],
            ['Indonesia', 'Rupiahs', 'IDR', 'Rp','ID','+62'],
            ['Iran', 'Rials', 'IRR', '﷼','IR','+98'],
            ['Ireland', 'Euro', 'EUR', '€','IE','+353'],
            ['Isle of Man', 'Pounds', 'IMP', '£','IM','+44-1624'],
            ['Israel', 'New Shekels', 'ILS', '₪','IL','+972'],
            ['Italy', 'Euro', 'EUR', '€','IT','+39'],
            ['Jamaica', 'Dollars', 'JMD', 'J$','JM','+1-876'],
            ['Japan', 'Yen', 'JPY', '¥','JP','+81'],
            ['Jersey', 'Pounds', 'JEP', '£','JE','+44-1534'],
            ['Kazakhstan', 'Tenge', 'KZT', 'лв','KZ','+7'],
            ['Korea (North)', 'Won', 'KPW', '₩','KP','+850'],
            ['Korea (South)', 'Won', 'KRW', '₩','KR','+82'],
            ['Kyrgyzstan', 'Soms', 'KGS', 'лв','KG','+996'],
            ['Laos', 'Kips', 'LAK', '₭','LA','+856'],
            ['Latvia', 'Lati', 'LVL', 'Ls','LV','+371'],
            ['Lebanon', 'Pounds', 'LBP', '£','LB','+961'],
            ['Liberia', 'Dollars', 'LRD', '$','LR','+231'],
            ['Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF','LI','+423'],
            ['Lithuania', 'Litai', 'LTL', 'Lt','LT','+370'],
            ['Luxembourg', 'Euro', 'EUR', '€','LU','+352'],
            ['Macedonia', 'Denars', 'MKD', 'ден','MK','+389'],
            ['Malaysia', 'Ringgits', 'MYR', 'RM','MY','+60'],
            ['Malta', 'Euro', 'EUR', '€','MT','+356'],
            ['Mauritius', 'Rupees', 'MUR', '₨','MU','+230'],
            ['Mexico', 'Pesos', 'MXN', '$','MX','+52'],
            ['Mongolia', 'Tugriks', 'MNT', '₮','MN','+976'],
            ['Mozambique', 'Meticais', 'MZN', 'MT','MZ','+258'],
            ['Namibia', 'Dollars', 'NAD', '$','NA','+264'],
            ['Nepal', 'Rupees', 'NPR', '₨','NP','+977'],
            ['Netherlands Antilles', 'Guilders', 'ANG', 'ƒ','AN','+599'],
            ['Netherlands', 'Euro', 'EUR', '€','NL','+31'],
            ['New Zealand', 'Dollars', 'NZD', '$','NZ','+64'],
            ['Nicaragua', 'Cordobas', 'NIO', 'C$','NI','+505'],
            ['Nigeria', 'Nairas', 'NGN', '₦','NG','+234'],
            ['North Korea', 'Won', 'KPW', '₩','KP','+850'],
            ['Norway', 'Krone', 'NOK', 'kr','NO','+47'],
            ['Oman', 'Rials', 'OMR', '﷼','OM','+968'],
            ['Pakistan', 'Rupees', 'PKR', '₨','PK','+92'],
            ['Panama', 'Balboa', 'PAB', 'B/.','PA','+507'],
            ['Paraguay', 'Guarani', 'PYG', 'Gs','PY','+595'],
            ['Peru', 'Nuevos Soles', 'PEN', 'S/.','PE','+51'],
            ['Philippines', 'Pesos', 'PHP', 'Php','PH','+63'],
            ['Poland', 'Zlotych', 'PLN', 'zł','PL','+48'],
            ['Qatar', 'Rials', 'QAR', '﷼','QA','+974'],
            ['Romania', 'New Lei', 'RON', 'lei','RO','+40'],
            ['Russia', 'Rubles', 'RUB', 'руб','RU','+7'],
            ['Saint Helena', 'Pounds', 'SHP', '£','SH','+290'],
            ['Saudi Arabia', 'Riyals', 'SAR', '﷼','SA','+966'],
            ['Serbia', 'Dinars', 'RSD', 'Дин.','RS','+381'],
            ['Seychelles', 'Rupees', 'SCR', '₨','SC','+248'],
            ['Singapore', 'Dollars', 'SGD', '$','SG','+65'],
            ['Slovenia', 'Euro', 'EUR', '€','SI','+386'],
            ['Solomon Islands', 'Dollars', 'SBD', '$','SB','+677'],
            ['Somalia', 'Shillings', 'SOS', 'S','SO','+252'],
            ['South Africa', 'Rand', 'ZAR', 'R','ZA','+27'],
            ['South Korea', 'Won', 'KRW', '₩','KR','+82'],
            ['Spain', 'Euro', 'EUR', '€','ES','+34'],
            ['Sri Lanka', 'Rupees', 'LKR', '₨','LK','+94'],
            ['Sweden', 'Kronor', 'SEK', 'kr','SE','+46'],
            ['Switzerland', 'Francs', 'CHF', 'CHF','CH','+41'],
            ['Suriname', 'Dollars', 'SRD', '$','SR','+597'],
            ['Syria', 'Pounds', 'SYP', '£','SY','+963'],
            ['Taiwan', 'New Dollars', 'TWD', 'NT$','TW','+886'],
            ['Thailand', 'Baht', 'THB', '฿','TH','+66'],
            ['Trinidad and Tobago', 'Dollars', 'TTD', 'TT$','TT','+1-868'],
            ['Turkey', 'Liras', 'TRL', '£','TR','+90'],
            ['Belize', 'Liras', 'TRL', '£','TR','+90'],
            ['Tuvalu', 'Dollars', 'TVD', '$','TV','+688'],
            ['Ukraine', 'Hryvnia', 'UAH', '₴','UA','+380'],
            ['United Kingdom', 'Pounds', 'GBP', '£','GB','+44'],
            ['United States of America', 'Dollars', 'USD', '$','US','+1'],
            ['Uruguay', 'Pesos', 'UYU', '$U','UY','+598'],
            ['Uzbekistan', 'Sums', 'UZS', 'лв','UZ','+998'],
            ['Vatican City', 'Euro', 'EUR', '€','VA','+379'],
            ['Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs','VE','+58'],
            ['Vietnam', 'Dong', 'VND', '₫','VN','+84'],
            ['Yemen', 'Rials', 'YER', '﷼','YE','+967'],
            ['Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$','ZW','+263'],
            ['Germany', 'Euro', 'EUR', '€','DE','+49'],
            ['Bangladesh', 'Taka', 'Taka', '৳','BD','+880'],
            ['Bhutan', 'Ngultrum', 'BTN', 'Nu','BT','+975'],
            ['Ethiopia', 'Birr', 'Birr', 'ETB','ET','+251'],
            ['Timor-Leste', 'Dollar', 'USD', '$','TL','+670'],
            ['Estonia', 'Euro', 'EUR', '€','EE','+372'],
            ['DR Congo', 'Congolese franc', 'CDF', 'CDF','CD','+243'],
            ['Congo', 'Congolese franc', 'CDF', 'CDF','CG','+242'],
            ['Cape Verde', 'Cape Verdean escudo', 'CVE', 'ESC','CV','+238'],
            // ['Cabo Verde', 'Cape Verdean escudo', 'CVE', 'ESC','CV','+238'],
            ['Gabon', 'Central African CFA franc', 'XAF', 'XAF','GA','+241'],
            ['Montenegro', 'Euro', 'EUR', '€','ME','+382'],
            ['Micronesia', 'Dollar', 'USD', '$','FM','+691'],
            ['San Marino', 'Euro', 'EUR', '€', 'SM','+378'],
            ['Maldives', 'Maldivian Rufiyaa', 'MVR', 'MVR','MV','+960'],
            ['Lesotho', 'Lesotho loti', 'LSL', 'LSL','LS','+266'],
            ['Nauru', 'Australian dollar', 'AUD', '$','NR','+674'],
            ['Gambia', 'Gambian dalasi', 'GMD', 'GMD','GM','+220'],
            ['Palau', 'Dollar', 'USD', '$','PW','+680'],
            // ['Holy See', 'currency', 'currency_code', 'currency_symbol','country_code','dial_code'],
            ['Comoros', 'Comorian franc', 'KMF', 'FC','KM','+269'],
            ['North Macedonia', 'Macedonian denar', 'MKD', 'MKD','MK','+389'],
            ['State of Palestine', 'Egyptian pound', 'EGP', 'EGP','PS','+970'],
            ['Armenia', 'Armenian dram', 'AMD', '֏','AM','+374'],
            ['Kuwait', 'Kuwaiti dinar', 'KWD', 'KWD','KW','+965'],
            ['Slovakia', 'Euro', 'EUR', '€','SK','+421'],
            ['Tanzania', 'Tanzanian shilling', 'TZS', 'TZS','TZ','+255'],
            ['Myanmar', 'Myanmar kyat', 'MMK', 'Ks','MM','+95'],
            ['Kenya', 'Kenyan shilling', 'KES', 'KES','KE','+254'],
            ['Mauritania', 'Mauritanian ouguiya', 'MRU', 'UM','MR','+222'],
            ['Eritrea', 'Eritrean nakfa', 'ERN', 'ERN','ER','+291'],
            ['Georgia', 'Georgian lari', 'GEL', '₾','GE','+995'],
            ['Moldova', 'Moldovan leu', 'MDL', 'L','MD','+373'],
            ['Sao Tome And Principe', 'dobra', 'STN', 'STN','ST','+239'],
            ['Uganda', 'shilling', 'UGX', 'UGX','UG','+256'],
            ['Samoa', 'tālā', 'WST', 'WS$','WS','+685'],
            ['Eswatini', 'lilangeni', 'SZL', 'SZL','SZ','+268'],
            ['Saint Lucia', 'Eastern Caribbean dollar', 'XCD', 'EC$','LC','+1 758'],
            ['Djibouti', 'Djiboutian franc', 'DJF', 'DJF','DJ','+253'],
            ['Algeria', 'Algerian dinar', 'DZD', 'DA','DZ','+213'],
            ['Kiribati', 'Australian dollar', 'AUD', '$','KI','+686'],
            ['Grenada', 'Eastern Caribbean dollar', 'XCD', 'EC$','GD','+1-473'],
            ['Sudan', 'Sudanese pound', 'SDG', '£Sd','SD','+249'],
            ['St. Vincent And Grenadines', 'Eastern Caribbean dollar', 'XCD', 'EC$','VC','+1 784'],
            ['Bahrain', 'Bahraini dinar', 'BHD', 'BD','BH','+973'],
            ['Tonga', 'Tongan paʻanga', 'TOP', 'TOP','TO','+676'],
            ['Iraq', 'Iraqi dinar', 'IQD', 'ID','IQ','+964'],
            ['Central African Republic', 'Central African CFA franc', 'XAF', 'XAF','CF','+236'],
            ['Morocco', 'Moroccan dirham', 'MAD', 'DH','MA','+212'],
            ['Angola', 'Angolan kwanza', 'AOA', 'Kz','AO','+244'],
            ['Madagascar', 'Malagasy ariar', 'MGA', 'MGA','MG','+261'],
            ['Cameroon', 'Central African CFA franc', 'XAF', 'XAF','CM','+237'],
            ['Ivory Coast', 'West African CFA franc', 'XOF', 'XOF','CI','+225'],
            ['Niger', 'West African CFA franc', 'XOF', 'XOF','NE','+227'],
            ['Burkina Faso', 'West African CFA franc', 'XOF', 'XOF','BF','+226'],
            ['Mali', 'West African CFA franc', 'XOF', 'XOF','ML','+223'],
            ['Malawi', 'Malawian kwacha', 'MWK', 'MWK','MW','+265'],
            ['Zambia', 'Zambian kwacha', 'ZMW', 'ZMW','	ZM','+260'],
            ['Ecuador', 'United States dollar', 'USD', '$','EC','+593'],
            ['Senegal', 'West African CFA franc', 'XOF', 'XOF','SN','+221'],
            ['Vanuatu', 'Vanuatu vatu', 'VUV', 'VT','VU','+678'],
            ['Chad', 'Central African CFA franc', 'XAF', 'XAF','TD','+235'],
            ['Guinea', 'Guinean franc', 'GNF', 'GNF','GN','+224'],
            ['Rwanda', 'Rwandan franc', 'RWF', 'FRw','RW','+250'],
            ['Benin', 'West African CFA franc', 'XOF', 'XOF','BJ','+229'],
            ['Burundi', 'West African CFA franc', 'XOF', 'XOF','BI','+257'],
            ['Equatorial Guinea', 'Central African CFA franc', 'XAF', 'XAF','GQ','+240'],
            ['Tunisia', 'Tunisian dinar', 'TND', 'TND','TN','+216'],
            ['South Sudan', 'South Sudanese pound', 'SSP', 'SSP','SS','+211'],
            ['Haiti', 'Haiti', 'HTG', 'HTG','HT','+509'],
            ['Jordan', 'Jordanian dinar', 'JOD', 'JD','JO','+962'],
            ['United Arab Emirates', 'UAE dirham', 'AED', 'AED','AE','+971'],
            ['Portugal', 'Euro', 'EUR', '€','PT','+351'],
            ['Dominica', 'Eastern Caribbean dollar', 'XCD', 'EC$','DM','+1-767'],
            ['Saint Kitts & Nevis', 'Eastern Caribbean dollar', 'XCD', 'EC$', 'KN','+1 869'],
            ['Marshall Islands', 'United States dollar', 'USD', '$','MH','+692'],
            ['Andorra', 'Euro', 'EUR', '€', 'AD','+376'],
            ['Papua New Guinea', 'Papua New Guinean kina', 'PGK', 'K','PG','+675'],
            ['Tajikistan', 'Tajikistani somoni', 'TJS', 'SM','TJ','+992'],
            ['Monaco', 'Euro', 'EUR', '€', 'MC','+377'],
            ['Guinea-Bissau', 'West African CFA franc', 'XOF', 'CFA','GW','+245'],
            ['Austria', 'Euro', 'EUR', '€','AT','+43'],
            ['Antigua and Barbuda', 'Eastern Caribbean dollar', 'XCD', 'EC$','AG','+1-268'],
            ['Sierra Leone', 'Sierra Leonean leone', 'SLE', 'SLE','SL','+232'],
            ['Togo', 'West African CFA franc', 'XOF', 'XOF','TG','+228'],
            ['Turkmenistan', 'Turkmenistani manat', 'TMT', 'm','TM','+993'],
            ['Finland', 'Euro', 'EUR', '€', 'FI','+358'],
            ['Libya', 'Libyan dinar', 'LYD', 'LD','LY','+218'],

        ];
        
        foreach($countryArray as $key => $val){
            Country::create([
                'country' => ($val[0] ?? ''),
                'currency' => ($val[1] ?? ''),
                'currency_code' =>( $val[2] ?? '') ,
                'currency_symbol' => ($val[3] ?? ''),
                'country_code' => ($val[4] ?? ''),
                'dial_code' =>( $val[5] ?? '')
            ]);
        }
    }
}
