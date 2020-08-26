<?php

namespace App\Repositories;

use App\Enums\Country;

class CityRepository
{
    public function allWhereCountry($country)
    {
        return $this->all()[$country];
    }

    public function all()
    {
        return collect([
                Country::DNK => array(
                    0 =>
                        array(
                            'city' => 'Scanning',
                            'code' => '0555',
                        ),
                    1 =>
                        array(
                            'city' => 'Høje Taastrup',
                            'code' => '0800',
                        ),
                    2 =>
                        array(
                            'city' => 'Valby',
                            'code' => '0877',
                        ),
                    3 =>
                        array(
                            'city' => 'København C',
                            'code' => '0900',
                        ),
                    4 =>
                        array(
                            'city' => 'København C',
                            'code' => '0910',
                        ),
                    5 =>
                        array(
                            'city' => 'København C',
                            'code' => '0929',
                        ),
                    6 =>
                        array(
                            'city' => 'København C',
                            'code' => '0999',
                        ),
                    7 =>
                        array(
                            'city' => 'København K',
                            'code' => '1000',
                        ),
                    8 =>
                        array(
                            'city' => 'København K',
                            'code' => '1001',
                        ),
                    9 =>
                        array(
                            'city' => 'København K',
                            'code' => '1002',
                        ),
                    10 =>
                        array(
                            'city' => 'København K',
                            'code' => '1003',
                        ),
                    11 =>
                        array(
                            'city' => 'København K',
                            'code' => '1004',
                        ),
                    12 =>
                        array(
                            'city' => 'København K',
                            'code' => '1005',
                        ),
                    13 =>
                        array(
                            'city' => 'København K',
                            'code' => '1006',
                        ),
                    14 =>
                        array(
                            'city' => 'København K',
                            'code' => '1007',
                        ),
                    15 =>
                        array(
                            'city' => 'København K',
                            'code' => '1008',
                        ),
                    16 =>
                        array(
                            'city' => 'København K',
                            'code' => '1009',
                        ),
                    17 =>
                        array(
                            'city' => 'København K',
                            'code' => '1010',
                        ),
                    18 =>
                        array(
                            'city' => 'København K',
                            'code' => '1011',
                        ),
                    19 =>
                        array(
                            'city' => 'København K',
                            'code' => '1012',
                        ),
                    20 =>
                        array(
                            'city' => 'København K',
                            'code' => '1013',
                        ),
                    21 =>
                        array(
                            'city' => 'København K',
                            'code' => '1014',
                        ),
                    22 =>
                        array(
                            'city' => 'København K',
                            'code' => '1015',
                        ),
                    23 =>
                        array(
                            'city' => 'København K',
                            'code' => '1016',
                        ),
                    24 =>
                        array(
                            'city' => 'København K',
                            'code' => '1017',
                        ),
                    25 =>
                        array(
                            'city' => 'København K',
                            'code' => '1018',
                        ),
                    26 =>
                        array(
                            'city' => 'København K',
                            'code' => '1019',
                        ),
                    27 =>
                        array(
                            'city' => 'København K',
                            'code' => '1020',
                        ),
                    28 =>
                        array(
                            'city' => 'København K',
                            'code' => '1021',
                        ),
                    29 =>
                        array(
                            'city' => 'København K',
                            'code' => '1022',
                        ),
                    30 =>
                        array(
                            'city' => 'København K',
                            'code' => '1023',
                        ),
                    31 =>
                        array(
                            'city' => 'København K',
                            'code' => '1024',
                        ),
                    32 =>
                        array(
                            'city' => 'København K',
                            'code' => '1025',
                        ),
                    33 =>
                        array(
                            'city' => 'København K',
                            'code' => '1026',
                        ),
                    34 =>
                        array(
                            'city' => 'København K',
                            'code' => '1045',
                        ),
                    35 =>
                        array(
                            'city' => 'København K',
                            'code' => '1050',
                        ),
                    36 =>
                        array(
                            'city' => 'København K',
                            'code' => '1051',
                        ),
                    37 =>
                        array(
                            'city' => 'København K',
                            'code' => '1052',
                        ),
                    38 =>
                        array(
                            'city' => 'København K',
                            'code' => '1053',
                        ),
                    39 =>
                        array(
                            'city' => 'København K',
                            'code' => '1054',
                        ),
                    40 =>
                        array(
                            'city' => 'København K',
                            'code' => '1055',
                        ),
                    41 =>
                        array(
                            'city' => 'København K',
                            'code' => '1055',
                        ),
                    42 =>
                        array(
                            'city' => 'København K',
                            'code' => '1056',
                        ),
                    43 =>
                        array(
                            'city' => 'København K',
                            'code' => '1057',
                        ),
                    44 =>
                        array(
                            'city' => 'København K',
                            'code' => '1058',
                        ),
                    45 =>
                        array(
                            'city' => 'København K',
                            'code' => '1059',
                        ),
                    46 =>
                        array(
                            'city' => 'København K',
                            'code' => '1060',
                        ),
                    47 =>
                        array(
                            'city' => 'København K',
                            'code' => '1061',
                        ),
                    48 =>
                        array(
                            'city' => 'København K',
                            'code' => '1062',
                        ),
                    49 =>
                        array(
                            'city' => 'København K',
                            'code' => '1063',
                        ),
                    50 =>
                        array(
                            'city' => 'København K',
                            'code' => '1064',
                        ),
                    51 =>
                        array(
                            'city' => 'København K',
                            'code' => '1065',
                        ),
                    52 =>
                        array(
                            'city' => 'København K',
                            'code' => '1066',
                        ),
                    53 =>
                        array(
                            'city' => 'København K',
                            'code' => '1067',
                        ),
                    54 =>
                        array(
                            'city' => 'København K',
                            'code' => '1068',
                        ),
                    55 =>
                        array(
                            'city' => 'København K',
                            'code' => '1069',
                        ),
                    56 =>
                        array(
                            'city' => 'København K',
                            'code' => '1070',
                        ),
                    57 =>
                        array(
                            'city' => 'København K',
                            'code' => '1071',
                        ),
                    58 =>
                        array(
                            'city' => 'København K',
                            'code' => '1072',
                        ),
                    59 =>
                        array(
                            'city' => 'København K',
                            'code' => '1073',
                        ),
                    60 =>
                        array(
                            'city' => 'København K',
                            'code' => '1074',
                        ),
                    61 =>
                        array(
                            'city' => 'København K',
                            'code' => '1092',
                        ),
                    62 =>
                        array(
                            'city' => 'København K',
                            'code' => '1093',
                        ),
                    63 =>
                        array(
                            'city' => 'København K',
                            'code' => '1095',
                        ),
                    64 =>
                        array(
                            'city' => 'København K',
                            'code' => '1098',
                        ),
                    65 =>
                        array(
                            'city' => 'København K',
                            'code' => '1100',
                        ),
                    66 =>
                        array(
                            'city' => 'København K',
                            'code' => '1101',
                        ),
                    67 =>
                        array(
                            'city' => 'København K',
                            'code' => '1102',
                        ),
                    68 =>
                        array(
                            'city' => 'København K',
                            'code' => '1103',
                        ),
                    69 =>
                        array(
                            'city' => 'København K',
                            'code' => '1104',
                        ),
                    70 =>
                        array(
                            'city' => 'København K',
                            'code' => '1105',
                        ),
                    71 =>
                        array(
                            'city' => 'København K',
                            'code' => '1106',
                        ),
                    72 =>
                        array(
                            'city' => 'København K',
                            'code' => '1107',
                        ),
                    73 =>
                        array(
                            'city' => 'København K',
                            'code' => '1110',
                        ),
                    74 =>
                        array(
                            'city' => 'København K',
                            'code' => '1111',
                        ),
                    75 =>
                        array(
                            'city' => 'København K',
                            'code' => '1112',
                        ),
                    76 =>
                        array(
                            'city' => 'København K',
                            'code' => '1113',
                        ),
                    77 =>
                        array(
                            'city' => 'København K',
                            'code' => '1114',
                        ),
                    78 =>
                        array(
                            'city' => 'København K',
                            'code' => '1115',
                        ),
                    79 =>
                        array(
                            'city' => 'København K',
                            'code' => '1116',
                        ),
                    80 =>
                        array(
                            'city' => 'København K',
                            'code' => '1117',
                        ),
                    81 =>
                        array(
                            'city' => 'København K',
                            'code' => '1118',
                        ),
                    82 =>
                        array(
                            'city' => 'København K',
                            'code' => '1119',
                        ),
                    83 =>
                        array(
                            'city' => 'København K',
                            'code' => '1120',
                        ),
                    84 =>
                        array(
                            'city' => 'København K',
                            'code' => '1121',
                        ),
                    85 =>
                        array(
                            'city' => 'København K',
                            'code' => '1122',
                        ),
                    86 =>
                        array(
                            'city' => 'København K',
                            'code' => '1123',
                        ),
                    87 =>
                        array(
                            'city' => 'København K',
                            'code' => '1124',
                        ),
                    88 =>
                        array(
                            'city' => 'København K',
                            'code' => '1125',
                        ),
                    89 =>
                        array(
                            'city' => 'København K',
                            'code' => '1126',
                        ),
                    90 =>
                        array(
                            'city' => 'København K',
                            'code' => '1127',
                        ),
                    91 =>
                        array(
                            'city' => 'København K',
                            'code' => '1128',
                        ),
                    92 =>
                        array(
                            'city' => 'København K',
                            'code' => '1129',
                        ),
                    93 =>
                        array(
                            'city' => 'København K',
                            'code' => '1130',
                        ),
                    94 =>
                        array(
                            'city' => 'København K',
                            'code' => '1131',
                        ),
                    95 =>
                        array(
                            'city' => 'København K',
                            'code' => '1140',
                        ),
                    96 =>
                        array(
                            'city' => 'København K',
                            'code' => '1147',
                        ),
                    97 =>
                        array(
                            'city' => 'København K',
                            'code' => '1148',
                        ),
                    98 =>
                        array(
                            'city' => 'København K',
                            'code' => '1150',
                        ),
                    99 =>
                        array(
                            'city' => 'København K',
                            'code' => '1151',
                        ),
                    100 =>
                        array(
                            'city' => 'København K',
                            'code' => '1152',
                        ),
                    101 =>
                        array(
                            'city' => 'København K',
                            'code' => '1153',
                        ),
                    102 =>
                        array(
                            'city' => 'København K',
                            'code' => '1154',
                        ),
                    103 =>
                        array(
                            'city' => 'København K',
                            'code' => '1155',
                        ),
                    104 =>
                        array(
                            'city' => 'København K',
                            'code' => '1156',
                        ),
                    105 =>
                        array(
                            'city' => 'København K',
                            'code' => '1157',
                        ),
                    106 =>
                        array(
                            'city' => 'København K',
                            'code' => '1158',
                        ),
                    107 =>
                        array(
                            'city' => 'København K',
                            'code' => '1159',
                        ),
                    108 =>
                        array(
                            'city' => 'København K',
                            'code' => '1160',
                        ),
                    109 =>
                        array(
                            'city' => 'København K',
                            'code' => '1161',
                        ),
                    110 =>
                        array(
                            'city' => 'København K',
                            'code' => '1162',
                        ),
                    111 =>
                        array(
                            'city' => 'København K',
                            'code' => '1163',
                        ),
                    112 =>
                        array(
                            'city' => 'København K',
                            'code' => '1164',
                        ),
                    113 =>
                        array(
                            'city' => 'København K',
                            'code' => '1165',
                        ),
                    114 =>
                        array(
                            'city' => 'København K',
                            'code' => '1166',
                        ),
                    115 =>
                        array(
                            'city' => 'København K',
                            'code' => '1167',
                        ),
                    116 =>
                        array(
                            'city' => 'København K',
                            'code' => '1168',
                        ),
                    117 =>
                        array(
                            'city' => 'København K',
                            'code' => '1169',
                        ),
                    118 =>
                        array(
                            'city' => 'København K',
                            'code' => '1170',
                        ),
                    119 =>
                        array(
                            'city' => 'København K',
                            'code' => '1171',
                        ),
                    120 =>
                        array(
                            'city' => 'København K',
                            'code' => '1172',
                        ),
                    121 =>
                        array(
                            'city' => 'København K',
                            'code' => '1173',
                        ),
                    122 =>
                        array(
                            'city' => 'København K',
                            'code' => '1174',
                        ),
                    123 =>
                        array(
                            'city' => 'København K',
                            'code' => '1175',
                        ),
                    124 =>
                        array(
                            'city' => 'København K',
                            'code' => '1200',
                        ),
                    125 =>
                        array(
                            'city' => 'København K',
                            'code' => '1201',
                        ),
                    126 =>
                        array(
                            'city' => 'København K',
                            'code' => '1202',
                        ),
                    127 =>
                        array(
                            'city' => 'København K',
                            'code' => '1203',
                        ),
                    128 =>
                        array(
                            'city' => 'København K',
                            'code' => '1204',
                        ),
                    129 =>
                        array(
                            'city' => 'København K',
                            'code' => '1205',
                        ),
                    130 =>
                        array(
                            'city' => 'København K',
                            'code' => '1206',
                        ),
                    131 =>
                        array(
                            'city' => 'København K',
                            'code' => '1207',
                        ),
                    132 =>
                        array(
                            'city' => 'København K',
                            'code' => '1208',
                        ),
                    133 =>
                        array(
                            'city' => 'København K',
                            'code' => '1209',
                        ),
                    134 =>
                        array(
                            'city' => 'København K',
                            'code' => '1210',
                        ),
                    135 =>
                        array(
                            'city' => 'København K',
                            'code' => '1211',
                        ),
                    136 =>
                        array(
                            'city' => 'København K',
                            'code' => '1212',
                        ),
                    137 =>
                        array(
                            'city' => 'København K',
                            'code' => '1213',
                        ),
                    138 =>
                        array(
                            'city' => 'København K',
                            'code' => '1214',
                        ),
                    139 =>
                        array(
                            'city' => 'København K',
                            'code' => '1214',
                        ),
                    140 =>
                        array(
                            'city' => 'København K',
                            'code' => '1215',
                        ),
                    141 =>
                        array(
                            'city' => 'København K',
                            'code' => '1216',
                        ),
                    142 =>
                        array(
                            'city' => 'København K',
                            'code' => '1217',
                        ),
                    143 =>
                        array(
                            'city' => 'København K',
                            'code' => '1218',
                        ),
                    144 =>
                        array(
                            'city' => 'København K',
                            'code' => '1218',
                        ),
                    145 =>
                        array(
                            'city' => 'København K',
                            'code' => '1218',
                        ),
                    146 =>
                        array(
                            'city' => 'København K',
                            'code' => '1218',
                        ),
                    147 =>
                        array(
                            'city' => 'København K',
                            'code' => '1218',
                        ),
                    148 =>
                        array(
                            'city' => 'København K',
                            'code' => '1218',
                        ),
                    149 =>
                        array(
                            'city' => 'København K',
                            'code' => '1219',
                        ),
                    150 =>
                        array(
                            'city' => 'København K',
                            'code' => '1220',
                        ),
                    151 =>
                        array(
                            'city' => 'København K',
                            'code' => '1240',
                        ),
                    152 =>
                        array(
                            'city' => 'København K',
                            'code' => '1250',
                        ),
                    153 =>
                        array(
                            'city' => 'København K',
                            'code' => '1251',
                        ),
                    154 =>
                        array(
                            'city' => 'København K',
                            'code' => '1252',
                        ),
                    155 =>
                        array(
                            'city' => 'København K',
                            'code' => '1253',
                        ),
                    156 =>
                        array(
                            'city' => 'København K',
                            'code' => '1254',
                        ),
                    157 =>
                        array(
                            'city' => 'København K',
                            'code' => '1255',
                        ),
                    158 =>
                        array(
                            'city' => 'København K',
                            'code' => '1256',
                        ),
                    159 =>
                        array(
                            'city' => 'København K',
                            'code' => '1257',
                        ),
                    160 =>
                        array(
                            'city' => 'København K',
                            'code' => '1258',
                        ),
                    161 =>
                        array(
                            'city' => 'København K',
                            'code' => '1259',
                        ),
                    162 =>
                        array(
                            'city' => 'København K',
                            'code' => '1259',
                        ),
                    163 =>
                        array(
                            'city' => 'København K',
                            'code' => '1260',
                        ),
                    164 =>
                        array(
                            'city' => 'København K',
                            'code' => '1261',
                        ),
                    165 =>
                        array(
                            'city' => 'København K',
                            'code' => '1263',
                        ),
                    166 =>
                        array(
                            'city' => 'København K',
                            'code' => '1263',
                        ),
                    167 =>
                        array(
                            'city' => 'København K',
                            'code' => '1264',
                        ),
                    168 =>
                        array(
                            'city' => 'København K',
                            'code' => '1265',
                        ),
                    169 =>
                        array(
                            'city' => 'København K',
                            'code' => '1266',
                        ),
                    170 =>
                        array(
                            'city' => 'København K',
                            'code' => '1267',
                        ),
                    171 =>
                        array(
                            'city' => 'København K',
                            'code' => '1268',
                        ),
                    172 =>
                        array(
                            'city' => 'København K',
                            'code' => '1270',
                        ),
                    173 =>
                        array(
                            'city' => 'København K',
                            'code' => '1271',
                        ),
                    174 =>
                        array(
                            'city' => 'København K',
                            'code' => '1291',
                        ),
                    175 =>
                        array(
                            'city' => 'København K',
                            'code' => '1300',
                        ),
                    176 =>
                        array(
                            'city' => 'København K',
                            'code' => '1301',
                        ),
                    177 =>
                        array(
                            'city' => 'København K',
                            'code' => '1302',
                        ),
                    178 =>
                        array(
                            'city' => 'København K',
                            'code' => '1303',
                        ),
                    179 =>
                        array(
                            'city' => 'København K',
                            'code' => '1304',
                        ),
                    180 =>
                        array(
                            'city' => 'København K',
                            'code' => '1306',
                        ),
                    181 =>
                        array(
                            'city' => 'København K',
                            'code' => '1307',
                        ),
                    182 =>
                        array(
                            'city' => 'København K',
                            'code' => '1307',
                        ),
                    183 =>
                        array(
                            'city' => 'København K',
                            'code' => '1308',
                        ),
                    184 =>
                        array(
                            'city' => 'København K',
                            'code' => '1309',
                        ),
                    185 =>
                        array(
                            'city' => 'København K',
                            'code' => '1310',
                        ),
                    186 =>
                        array(
                            'city' => 'København K',
                            'code' => '1311',
                        ),
                    187 =>
                        array(
                            'city' => 'København K',
                            'code' => '1312',
                        ),
                    188 =>
                        array(
                            'city' => 'København K',
                            'code' => '1313',
                        ),
                    189 =>
                        array(
                            'city' => 'København K',
                            'code' => '1314',
                        ),
                    190 =>
                        array(
                            'city' => 'København K',
                            'code' => '1315',
                        ),
                    191 =>
                        array(
                            'city' => 'København K',
                            'code' => '1316',
                        ),
                    192 =>
                        array(
                            'city' => 'København K',
                            'code' => '1317',
                        ),
                    193 =>
                        array(
                            'city' => 'København K',
                            'code' => '1318',
                        ),
                    194 =>
                        array(
                            'city' => 'København K',
                            'code' => '1319',
                        ),
                    195 =>
                        array(
                            'city' => 'København K',
                            'code' => '1320',
                        ),
                    196 =>
                        array(
                            'city' => 'København K',
                            'code' => '1321',
                        ),
                    197 =>
                        array(
                            'city' => 'København K',
                            'code' => '1322',
                        ),
                    198 =>
                        array(
                            'city' => 'København K',
                            'code' => '1323',
                        ),
                    199 =>
                        array(
                            'city' => 'København K',
                            'code' => '1324',
                        ),
                    200 =>
                        array(
                            'city' => 'København K',
                            'code' => '1325',
                        ),
                    201 =>
                        array(
                            'city' => 'København K',
                            'code' => '1326',
                        ),
                    202 =>
                        array(
                            'city' => 'København K',
                            'code' => '1327',
                        ),
                    203 =>
                        array(
                            'city' => 'København K',
                            'code' => '1328',
                        ),
                    204 =>
                        array(
                            'city' => 'København K',
                            'code' => '1329',
                        ),
                    205 =>
                        array(
                            'city' => 'København K',
                            'code' => '1349',
                        ),
                    206 =>
                        array(
                            'city' => 'København K',
                            'code' => '1350',
                        ),
                    207 =>
                        array(
                            'city' => 'København K',
                            'code' => '1352',
                        ),
                    208 =>
                        array(
                            'city' => 'København K',
                            'code' => '1353',
                        ),
                    209 =>
                        array(
                            'city' => 'København K',
                            'code' => '1354',
                        ),
                    210 =>
                        array(
                            'city' => 'København K',
                            'code' => '1355',
                        ),
                    211 =>
                        array(
                            'city' => 'København K',
                            'code' => '1356',
                        ),
                    212 =>
                        array(
                            'city' => 'København K',
                            'code' => '1357',
                        ),
                    213 =>
                        array(
                            'city' => 'København K',
                            'code' => '1358',
                        ),
                    214 =>
                        array(
                            'city' => 'København K',
                            'code' => '1359',
                        ),
                    215 =>
                        array(
                            'city' => 'København K',
                            'code' => '1360',
                        ),
                    216 =>
                        array(
                            'city' => 'København K',
                            'code' => '1361',
                        ),
                    217 =>
                        array(
                            'city' => 'København K',
                            'code' => '1361',
                        ),
                    218 =>
                        array(
                            'city' => 'København K',
                            'code' => '1362',
                        ),
                    219 =>
                        array(
                            'city' => 'København K',
                            'code' => '1363',
                        ),
                    220 =>
                        array(
                            'city' => 'København K',
                            'code' => '1364',
                        ),
                    221 =>
                        array(
                            'city' => 'København K',
                            'code' => '1365',
                        ),
                    222 =>
                        array(
                            'city' => 'København K',
                            'code' => '1366',
                        ),
                    223 =>
                        array(
                            'city' => 'København K',
                            'code' => '1367',
                        ),
                    224 =>
                        array(
                            'city' => 'København K',
                            'code' => '1368',
                        ),
                    225 =>
                        array(
                            'city' => 'København K',
                            'code' => '1369',
                        ),
                    226 =>
                        array(
                            'city' => 'København K',
                            'code' => '1370',
                        ),
                    227 =>
                        array(
                            'city' => 'København K',
                            'code' => '1371',
                        ),
                    228 =>
                        array(
                            'city' => 'København K',
                            'code' => '1390',
                        ),
                    229 =>
                        array(
                            'city' => 'København K',
                            'code' => '1400',
                        ),
                    230 =>
                        array(
                            'city' => 'København K',
                            'code' => '1400',
                        ),
                    231 =>
                        array(
                            'city' => 'København K',
                            'code' => '1401',
                        ),
                    232 =>
                        array(
                            'city' => 'København K',
                            'code' => '1402',
                        ),
                    233 =>
                        array(
                            'city' => 'København K',
                            'code' => '1402',
                        ),
                    234 =>
                        array(
                            'city' => 'København K',
                            'code' => '1402',
                        ),
                    235 =>
                        array(
                            'city' => 'København K',
                            'code' => '1402',
                        ),
                    236 =>
                        array(
                            'city' => 'København K',
                            'code' => '1402',
                        ),
                    237 =>
                        array(
                            'city' => 'København K',
                            'code' => '1403',
                        ),
                    238 =>
                        array(
                            'city' => 'København K',
                            'code' => '1404',
                        ),
                    239 =>
                        array(
                            'city' => 'København K',
                            'code' => '1405',
                        ),
                    240 =>
                        array(
                            'city' => 'København K',
                            'code' => '1406',
                        ),
                    241 =>
                        array(
                            'city' => 'København K',
                            'code' => '1407',
                        ),
                    242 =>
                        array(
                            'city' => 'København K',
                            'code' => '1408',
                        ),
                    243 =>
                        array(
                            'city' => 'København K',
                            'code' => '1409',
                        ),
                    244 =>
                        array(
                            'city' => 'København K',
                            'code' => '1410',
                        ),
                    245 =>
                        array(
                            'city' => 'København K',
                            'code' => '1411',
                        ),
                    246 =>
                        array(
                            'city' => 'København K',
                            'code' => '1411',
                        ),
                    247 =>
                        array(
                            'city' => 'København K',
                            'code' => '1412',
                        ),
                    248 =>
                        array(
                            'city' => 'København K',
                            'code' => '1413',
                        ),
                    249 =>
                        array(
                            'city' => 'København K',
                            'code' => '1414',
                        ),
                    250 =>
                        array(
                            'city' => 'København K',
                            'code' => '1415',
                        ),
                    251 =>
                        array(
                            'city' => 'København K',
                            'code' => '1416',
                        ),
                    252 =>
                        array(
                            'city' => 'København K',
                            'code' => '1417',
                        ),
                    253 =>
                        array(
                            'city' => 'København K',
                            'code' => '1418',
                        ),
                    254 =>
                        array(
                            'city' => 'København K',
                            'code' => '1419',
                        ),
                    255 =>
                        array(
                            'city' => 'København K',
                            'code' => '1420',
                        ),
                    256 =>
                        array(
                            'city' => 'København K',
                            'code' => '1421',
                        ),
                    257 =>
                        array(
                            'city' => 'København K',
                            'code' => '1422',
                        ),
                    258 =>
                        array(
                            'city' => 'København K',
                            'code' => '1423',
                        ),
                    259 =>
                        array(
                            'city' => 'København K',
                            'code' => '1424',
                        ),
                    260 =>
                        array(
                            'city' => 'København K',
                            'code' => '1425',
                        ),
                    261 =>
                        array(
                            'city' => 'København K',
                            'code' => '1426',
                        ),
                    262 =>
                        array(
                            'city' => 'København K',
                            'code' => '1427',
                        ),
                    263 =>
                        array(
                            'city' => 'København K',
                            'code' => '1428',
                        ),
                    264 =>
                        array(
                            'city' => 'København K',
                            'code' => '1429',
                        ),
                    265 =>
                        array(
                            'city' => 'København K',
                            'code' => '1430',
                        ),
                    266 =>
                        array(
                            'city' => 'København K',
                            'code' => '1431',
                        ),
                    267 =>
                        array(
                            'city' => 'København K',
                            'code' => '1432',
                        ),
                    268 =>
                        array(
                            'city' => 'København K',
                            'code' => '1432',
                        ),
                    269 =>
                        array(
                            'city' => 'København K',
                            'code' => '1432',
                        ),
                    270 =>
                        array(
                            'city' => 'København K',
                            'code' => '1433',
                        ),
                    271 =>
                        array(
                            'city' => 'København K',
                            'code' => '1433',
                        ),
                    272 =>
                        array(
                            'city' => 'København K',
                            'code' => '1433',
                        ),
                    273 =>
                        array(
                            'city' => 'København K',
                            'code' => '1433',
                        ),
                    274 =>
                        array(
                            'city' => 'København K',
                            'code' => '1433',
                        ),
                    275 =>
                        array(
                            'city' => 'København K',
                            'code' => '1433',
                        ),
                    276 =>
                        array(
                            'city' => 'København K',
                            'code' => '1433',
                        ),
                    277 =>
                        array(
                            'city' => 'København K',
                            'code' => '1434',
                        ),
                    278 =>
                        array(
                            'city' => 'København K',
                            'code' => '1435',
                        ),
                    279 =>
                        array(
                            'city' => 'København K',
                            'code' => '1436',
                        ),
                    280 =>
                        array(
                            'city' => 'København K',
                            'code' => '1436',
                        ),
                    281 =>
                        array(
                            'city' => 'København K',
                            'code' => '1436',
                        ),
                    282 =>
                        array(
                            'city' => 'København K',
                            'code' => '1436',
                        ),
                    283 =>
                        array(
                            'city' => 'København K',
                            'code' => '1436',
                        ),
                    284 =>
                        array(
                            'city' => 'København K',
                            'code' => '1436',
                        ),
                    285 =>
                        array(
                            'city' => 'København K',
                            'code' => '1436',
                        ),
                    286 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    287 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    288 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    289 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    290 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    291 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    292 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    293 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    294 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    295 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    296 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    297 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    298 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    299 =>
                        array(
                            'city' => 'København K',
                            'code' => '1437',
                        ),
                    300 =>
                        array(
                            'city' => 'København K',
                            'code' => '1438',
                        ),
                    301 =>
                        array(
                            'city' => 'København K',
                            'code' => '1438',
                        ),
                    302 =>
                        array(
                            'city' => 'København K',
                            'code' => '1438',
                        ),
                    303 =>
                        array(
                            'city' => 'København K',
                            'code' => '1438',
                        ),
                    304 =>
                        array(
                            'city' => 'København K',
                            'code' => '1438',
                        ),
                    305 =>
                        array(
                            'city' => 'København K',
                            'code' => '1438',
                        ),
                    306 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    307 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    308 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    309 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    310 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    311 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    312 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    313 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    314 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    315 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    316 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    317 =>
                        array(
                            'city' => 'København K',
                            'code' => '1439',
                        ),
                    318 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    319 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    320 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    321 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    322 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    323 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    324 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    325 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    326 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    327 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    328 =>
                        array(
                            'city' => 'København K',
                            'code' => '1440',
                        ),
                    329 =>
                        array(
                            'city' => 'København K',
                            'code' => '1441',
                        ),
                    330 =>
                        array(
                            'city' => 'København K',
                            'code' => '1441',
                        ),
                    331 =>
                        array(
                            'city' => 'København K',
                            'code' => '1441',
                        ),
                    332 =>
                        array(
                            'city' => 'København K',
                            'code' => '1448',
                        ),
                    333 =>
                        array(
                            'city' => 'København K',
                            'code' => '1450',
                        ),
                    334 =>
                        array(
                            'city' => 'København K',
                            'code' => '1451',
                        ),
                    335 =>
                        array(
                            'city' => 'København K',
                            'code' => '1452',
                        ),
                    336 =>
                        array(
                            'city' => 'København K',
                            'code' => '1453',
                        ),
                    337 =>
                        array(
                            'city' => 'København K',
                            'code' => '1454',
                        ),
                    338 =>
                        array(
                            'city' => 'København K',
                            'code' => '1455',
                        ),
                    339 =>
                        array(
                            'city' => 'København K',
                            'code' => '1456',
                        ),
                    340 =>
                        array(
                            'city' => 'København K',
                            'code' => '1457',
                        ),
                    341 =>
                        array(
                            'city' => 'København K',
                            'code' => '1458',
                        ),
                    342 =>
                        array(
                            'city' => 'København K',
                            'code' => '1459',
                        ),
                    343 =>
                        array(
                            'city' => 'København K',
                            'code' => '1460',
                        ),
                    344 =>
                        array(
                            'city' => 'København K',
                            'code' => '1461',
                        ),
                    345 =>
                        array(
                            'city' => 'København K',
                            'code' => '1462',
                        ),
                    346 =>
                        array(
                            'city' => 'København K',
                            'code' => '1463',
                        ),
                    347 =>
                        array(
                            'city' => 'København K',
                            'code' => '1464',
                        ),
                    348 =>
                        array(
                            'city' => 'København K',
                            'code' => '1465',
                        ),
                    349 =>
                        array(
                            'city' => 'København K',
                            'code' => '1466',
                        ),
                    350 =>
                        array(
                            'city' => 'København K',
                            'code' => '1467',
                        ),
                    351 =>
                        array(
                            'city' => 'København K',
                            'code' => '1468',
                        ),
                    352 =>
                        array(
                            'city' => 'København K',
                            'code' => '1470',
                        ),
                    353 =>
                        array(
                            'city' => 'København K',
                            'code' => '1471',
                        ),
                    354 =>
                        array(
                            'city' => 'København K',
                            'code' => '1472',
                        ),
                    355 =>
                        array(
                            'city' => 'København K',
                            'code' => '1473',
                        ),
                    356 =>
                        array(
                            'city' => 'København V',
                            'code' => '1500',
                        ),
                    357 =>
                        array(
                            'city' => 'København V',
                            'code' => '1501',
                        ),
                    358 =>
                        array(
                            'city' => 'København V',
                            'code' => '1502',
                        ),
                    359 =>
                        array(
                            'city' => 'København V',
                            'code' => '1503',
                        ),
                    360 =>
                        array(
                            'city' => 'København V',
                            'code' => '1504',
                        ),
                    361 =>
                        array(
                            'city' => 'København V',
                            'code' => '1505',
                        ),
                    362 =>
                        array(
                            'city' => 'København V',
                            'code' => '1506',
                        ),
                    363 =>
                        array(
                            'city' => 'København V',
                            'code' => '1507',
                        ),
                    364 =>
                        array(
                            'city' => 'København V',
                            'code' => '1508',
                        ),
                    365 =>
                        array(
                            'city' => 'København V',
                            'code' => '1509',
                        ),
                    366 =>
                        array(
                            'city' => 'København V',
                            'code' => '1510',
                        ),
                    367 =>
                        array(
                            'city' => 'København V',
                            'code' => '1532',
                        ),
                    368 =>
                        array(
                            'city' => 'København V',
                            'code' => '1533',
                        ),
                    369 =>
                        array(
                            'city' => 'København V',
                            'code' => '1550',
                        ),
                    370 =>
                        array(
                            'city' => 'København V',
                            'code' => '1550',
                        ),
                    371 =>
                        array(
                            'city' => 'København V',
                            'code' => '1551',
                        ),
                    372 =>
                        array(
                            'city' => 'København V',
                            'code' => '1552',
                        ),
                    373 =>
                        array(
                            'city' => 'København V',
                            'code' => '1553',
                        ),
                    374 =>
                        array(
                            'city' => 'København V',
                            'code' => '1553',
                        ),
                    375 =>
                        array(
                            'city' => 'København V',
                            'code' => '1554',
                        ),
                    376 =>
                        array(
                            'city' => 'København V',
                            'code' => '1555',
                        ),
                    377 =>
                        array(
                            'city' => 'København V',
                            'code' => '1556',
                        ),
                    378 =>
                        array(
                            'city' => 'København V',
                            'code' => '1557',
                        ),
                    379 =>
                        array(
                            'city' => 'København V',
                            'code' => '1558',
                        ),
                    380 =>
                        array(
                            'city' => 'København V',
                            'code' => '1559',
                        ),
                    381 =>
                        array(
                            'city' => 'København V',
                            'code' => '1560',
                        ),
                    382 =>
                        array(
                            'city' => 'København V',
                            'code' => '1561',
                        ),
                    383 =>
                        array(
                            'city' => 'København V',
                            'code' => '1561',
                        ),
                    384 =>
                        array(
                            'city' => 'København V',
                            'code' => '1562',
                        ),
                    385 =>
                        array(
                            'city' => 'København V',
                            'code' => '1563',
                        ),
                    386 =>
                        array(
                            'city' => 'København V',
                            'code' => '1564',
                        ),
                    387 =>
                        array(
                            'city' => 'København V',
                            'code' => '1566',
                        ),
                    388 =>
                        array(
                            'city' => 'København V',
                            'code' => '1567',
                        ),
                    389 =>
                        array(
                            'city' => 'København V',
                            'code' => '1568',
                        ),
                    390 =>
                        array(
                            'city' => 'København V',
                            'code' => '1569',
                        ),
                    391 =>
                        array(
                            'city' => 'København V',
                            'code' => '1570',
                        ),
                    392 =>
                        array(
                            'city' => 'København V',
                            'code' => '1570',
                        ),
                    393 =>
                        array(
                            'city' => 'København V',
                            'code' => '1571',
                        ),
                    394 =>
                        array(
                            'city' => 'København V',
                            'code' => '1572',
                        ),
                    395 =>
                        array(
                            'city' => 'København V',
                            'code' => '1573',
                        ),
                    396 =>
                        array(
                            'city' => 'København V',
                            'code' => '1574',
                        ),
                    397 =>
                        array(
                            'city' => 'København V',
                            'code' => '1575',
                        ),
                    398 =>
                        array(
                            'city' => 'København V',
                            'code' => '1576',
                        ),
                    399 =>
                        array(
                            'city' => 'København V',
                            'code' => '1577',
                        ),
                    400 =>
                        array(
                            'city' => 'København V',
                            'code' => '1590',
                        ),
                    401 =>
                        array(
                            'city' => 'København V',
                            'code' => '1592',
                        ),
                    402 =>
                        array(
                            'city' => 'København V',
                            'code' => '1599',
                        ),
                    403 =>
                        array(
                            'city' => 'København V',
                            'code' => '1600',
                        ),
                    404 =>
                        array(
                            'city' => 'København V',
                            'code' => '1601',
                        ),
                    405 =>
                        array(
                            'city' => 'København V',
                            'code' => '1602',
                        ),
                    406 =>
                        array(
                            'city' => 'København V',
                            'code' => '1603',
                        ),
                    407 =>
                        array(
                            'city' => 'København V',
                            'code' => '1604',
                        ),
                    408 =>
                        array(
                            'city' => 'København V',
                            'code' => '1605',
                        ),
                    409 =>
                        array(
                            'city' => 'København V',
                            'code' => '1606',
                        ),
                    410 =>
                        array(
                            'city' => 'København V',
                            'code' => '1607',
                        ),
                    411 =>
                        array(
                            'city' => 'København V',
                            'code' => '1608',
                        ),
                    412 =>
                        array(
                            'city' => 'København V',
                            'code' => '1609',
                        ),
                    413 =>
                        array(
                            'city' => 'København V',
                            'code' => '1610',
                        ),
                    414 =>
                        array(
                            'city' => 'København V',
                            'code' => '1611',
                        ),
                    415 =>
                        array(
                            'city' => 'København V',
                            'code' => '1612',
                        ),
                    416 =>
                        array(
                            'city' => 'København V',
                            'code' => '1613',
                        ),
                    417 =>
                        array(
                            'city' => 'København V',
                            'code' => '1614',
                        ),
                    418 =>
                        array(
                            'city' => 'København V',
                            'code' => '1615',
                        ),
                    419 =>
                        array(
                            'city' => 'København V',
                            'code' => '1616',
                        ),
                    420 =>
                        array(
                            'city' => 'København V',
                            'code' => '1617',
                        ),
                    421 =>
                        array(
                            'city' => 'København V',
                            'code' => '1618',
                        ),
                    422 =>
                        array(
                            'city' => 'København V',
                            'code' => '1619',
                        ),
                    423 =>
                        array(
                            'city' => 'København V',
                            'code' => '1620',
                        ),
                    424 =>
                        array(
                            'city' => 'København V',
                            'code' => '1620',
                        ),
                    425 =>
                        array(
                            'city' => 'København V',
                            'code' => '1621',
                        ),
                    426 =>
                        array(
                            'city' => 'København V',
                            'code' => '1622',
                        ),
                    427 =>
                        array(
                            'city' => 'København V',
                            'code' => '1623',
                        ),
                    428 =>
                        array(
                            'city' => 'København V',
                            'code' => '1624',
                        ),
                    429 =>
                        array(
                            'city' => 'København V',
                            'code' => '1630',
                        ),
                    430 =>
                        array(
                            'city' => 'København V',
                            'code' => '1631',
                        ),
                    431 =>
                        array(
                            'city' => 'København V',
                            'code' => '1632',
                        ),
                    432 =>
                        array(
                            'city' => 'København V',
                            'code' => '1633',
                        ),
                    433 =>
                        array(
                            'city' => 'København V',
                            'code' => '1634',
                        ),
                    434 =>
                        array(
                            'city' => 'København V',
                            'code' => '1635',
                        ),
                    435 =>
                        array(
                            'city' => 'København V',
                            'code' => '1639',
                        ),
                    436 =>
                        array(
                            'city' => 'København V',
                            'code' => '1640',
                        ),
                    437 =>
                        array(
                            'city' => 'København V',
                            'code' => '1650',
                        ),
                    438 =>
                        array(
                            'city' => 'København V',
                            'code' => '1651',
                        ),
                    439 =>
                        array(
                            'city' => 'København V',
                            'code' => '1652',
                        ),
                    440 =>
                        array(
                            'city' => 'København V',
                            'code' => '1653',
                        ),
                    441 =>
                        array(
                            'city' => 'København V',
                            'code' => '1654',
                        ),
                    442 =>
                        array(
                            'city' => 'København V',
                            'code' => '1655',
                        ),
                    443 =>
                        array(
                            'city' => 'København V',
                            'code' => '1656',
                        ),
                    444 =>
                        array(
                            'city' => 'København V',
                            'code' => '1657',
                        ),
                    445 =>
                        array(
                            'city' => 'København V',
                            'code' => '1658',
                        ),
                    446 =>
                        array(
                            'city' => 'København V',
                            'code' => '1659',
                        ),
                    447 =>
                        array(
                            'city' => 'København V',
                            'code' => '1660',
                        ),
                    448 =>
                        array(
                            'city' => 'København V',
                            'code' => '1660',
                        ),
                    449 =>
                        array(
                            'city' => 'København V',
                            'code' => '1661',
                        ),
                    450 =>
                        array(
                            'city' => 'København V',
                            'code' => '1662',
                        ),
                    451 =>
                        array(
                            'city' => 'København V',
                            'code' => '1663',
                        ),
                    452 =>
                        array(
                            'city' => 'København V',
                            'code' => '1664',
                        ),
                    453 =>
                        array(
                            'city' => 'København V',
                            'code' => '1665',
                        ),
                    454 =>
                        array(
                            'city' => 'København V',
                            'code' => '1666',
                        ),
                    455 =>
                        array(
                            'city' => 'København V',
                            'code' => '1667',
                        ),
                    456 =>
                        array(
                            'city' => 'København V',
                            'code' => '1668',
                        ),
                    457 =>
                        array(
                            'city' => 'København V',
                            'code' => '1669',
                        ),
                    458 =>
                        array(
                            'city' => 'København V',
                            'code' => '1670',
                        ),
                    459 =>
                        array(
                            'city' => 'København V',
                            'code' => '1671',
                        ),
                    460 =>
                        array(
                            'city' => 'København V',
                            'code' => '1671',
                        ),
                    461 =>
                        array(
                            'city' => 'København V',
                            'code' => '1672',
                        ),
                    462 =>
                        array(
                            'city' => 'København V',
                            'code' => '1673',
                        ),
                    463 =>
                        array(
                            'city' => 'København V',
                            'code' => '1674',
                        ),
                    464 =>
                        array(
                            'city' => 'København V',
                            'code' => '1675',
                        ),
                    465 =>
                        array(
                            'city' => 'København V',
                            'code' => '1676',
                        ),
                    466 =>
                        array(
                            'city' => 'København V',
                            'code' => '1677',
                        ),
                    467 =>
                        array(
                            'city' => 'København V',
                            'code' => '1699',
                        ),
                    468 =>
                        array(
                            'city' => 'København V',
                            'code' => '1700',
                        ),
                    469 =>
                        array(
                            'city' => 'København V',
                            'code' => '1701',
                        ),
                    470 =>
                        array(
                            'city' => 'København V',
                            'code' => '1702',
                        ),
                    471 =>
                        array(
                            'city' => 'København V',
                            'code' => '1703',
                        ),
                    472 =>
                        array(
                            'city' => 'København V',
                            'code' => '1704',
                        ),
                    473 =>
                        array(
                            'city' => 'København V',
                            'code' => '1705',
                        ),
                    474 =>
                        array(
                            'city' => 'København V',
                            'code' => '1706',
                        ),
                    475 =>
                        array(
                            'city' => 'København V',
                            'code' => '1707',
                        ),
                    476 =>
                        array(
                            'city' => 'København V',
                            'code' => '1708',
                        ),
                    477 =>
                        array(
                            'city' => 'København V',
                            'code' => '1709',
                        ),
                    478 =>
                        array(
                            'city' => 'København V',
                            'code' => '1710',
                        ),
                    479 =>
                        array(
                            'city' => 'København V',
                            'code' => '1711',
                        ),
                    480 =>
                        array(
                            'city' => 'København V',
                            'code' => '1712',
                        ),
                    481 =>
                        array(
                            'city' => 'København V',
                            'code' => '1713',
                        ),
                    482 =>
                        array(
                            'city' => 'København V',
                            'code' => '1714',
                        ),
                    483 =>
                        array(
                            'city' => 'København V',
                            'code' => '1715',
                        ),
                    484 =>
                        array(
                            'city' => 'København V',
                            'code' => '1716',
                        ),
                    485 =>
                        array(
                            'city' => 'København V',
                            'code' => '1717',
                        ),
                    486 =>
                        array(
                            'city' => 'København V',
                            'code' => '1718',
                        ),
                    487 =>
                        array(
                            'city' => 'København V',
                            'code' => '1719',
                        ),
                    488 =>
                        array(
                            'city' => 'København V',
                            'code' => '1720',
                        ),
                    489 =>
                        array(
                            'city' => 'København V',
                            'code' => '1721',
                        ),
                    490 =>
                        array(
                            'city' => 'København V',
                            'code' => '1722',
                        ),
                    491 =>
                        array(
                            'city' => 'København V',
                            'code' => '1723',
                        ),
                    492 =>
                        array(
                            'city' => 'København V',
                            'code' => '1724',
                        ),
                    493 =>
                        array(
                            'city' => 'København V',
                            'code' => '1725',
                        ),
                    494 =>
                        array(
                            'city' => 'København V',
                            'code' => '1726',
                        ),
                    495 =>
                        array(
                            'city' => 'København V',
                            'code' => '1727',
                        ),
                    496 =>
                        array(
                            'city' => 'København V',
                            'code' => '1728',
                        ),
                    497 =>
                        array(
                            'city' => 'København V',
                            'code' => '1729',
                        ),
                    498 =>
                        array(
                            'city' => 'København V',
                            'code' => '1730',
                        ),
                    499 =>
                        array(
                            'city' => 'København V',
                            'code' => '1731',
                        ),
                    500 =>
                        array(
                            'city' => 'København V',
                            'code' => '1732',
                        ),
                    501 =>
                        array(
                            'city' => 'København V',
                            'code' => '1733',
                        ),
                    502 =>
                        array(
                            'city' => 'København V',
                            'code' => '1734',
                        ),
                    503 =>
                        array(
                            'city' => 'København V',
                            'code' => '1735',
                        ),
                    504 =>
                        array(
                            'city' => 'København V',
                            'code' => '1736',
                        ),
                    505 =>
                        array(
                            'city' => 'København V',
                            'code' => '1737',
                        ),
                    506 =>
                        array(
                            'city' => 'København V',
                            'code' => '1738',
                        ),
                    507 =>
                        array(
                            'city' => 'København V',
                            'code' => '1739',
                        ),
                    508 =>
                        array(
                            'city' => 'København V',
                            'code' => '1748',
                        ),
                    509 =>
                        array(
                            'city' => 'København V',
                            'code' => '1749',
                        ),
                    510 =>
                        array(
                            'city' => 'København V',
                            'code' => '1750',
                        ),
                    511 =>
                        array(
                            'city' => 'København V',
                            'code' => '1751',
                        ),
                    512 =>
                        array(
                            'city' => 'København V',
                            'code' => '1752',
                        ),
                    513 =>
                        array(
                            'city' => 'København V',
                            'code' => '1753',
                        ),
                    514 =>
                        array(
                            'city' => 'København V',
                            'code' => '1754',
                        ),
                    515 =>
                        array(
                            'city' => 'København V',
                            'code' => '1755',
                        ),
                    516 =>
                        array(
                            'city' => 'København V',
                            'code' => '1756',
                        ),
                    517 =>
                        array(
                            'city' => 'København V',
                            'code' => '1757',
                        ),
                    518 =>
                        array(
                            'city' => 'København V',
                            'code' => '1758',
                        ),
                    519 =>
                        array(
                            'city' => 'København V',
                            'code' => '1759',
                        ),
                    520 =>
                        array(
                            'city' => 'København V',
                            'code' => '1760',
                        ),
                    521 =>
                        array(
                            'city' => 'København V',
                            'code' => '1761',
                        ),
                    522 =>
                        array(
                            'city' => 'København V',
                            'code' => '1762',
                        ),
                    523 =>
                        array(
                            'city' => 'København V',
                            'code' => '1763',
                        ),
                    524 =>
                        array(
                            'city' => 'København V',
                            'code' => '1764',
                        ),
                    525 =>
                        array(
                            'city' => 'København V',
                            'code' => '1765',
                        ),
                    526 =>
                        array(
                            'city' => 'København V',
                            'code' => '1766',
                        ),
                    527 =>
                        array(
                            'city' => 'København V',
                            'code' => '1770',
                        ),
                    528 =>
                        array(
                            'city' => 'København V',
                            'code' => '1771',
                        ),
                    529 =>
                        array(
                            'city' => 'København V',
                            'code' => '1772',
                        ),
                    530 =>
                        array(
                            'city' => 'København V',
                            'code' => '1773',
                        ),
                    531 =>
                        array(
                            'city' => 'København V',
                            'code' => '1774',
                        ),
                    532 =>
                        array(
                            'city' => 'København V',
                            'code' => '1775',
                        ),
                    533 =>
                        array(
                            'city' => 'København V',
                            'code' => '1777',
                        ),
                    534 =>
                        array(
                            'city' => 'København V',
                            'code' => '1778',
                        ),
                    535 =>
                        array(
                            'city' => 'København V',
                            'code' => '1780',
                        ),
                    536 =>
                        array(
                            'city' => 'København V',
                            'code' => '1782',
                        ),
                    537 =>
                        array(
                            'city' => 'København V',
                            'code' => '1784',
                        ),
                    538 =>
                        array(
                            'city' => 'København V',
                            'code' => '1785',
                        ),
                    539 =>
                        array(
                            'city' => 'København V',
                            'code' => '1786',
                        ),
                    540 =>
                        array(
                            'city' => 'København V',
                            'code' => '1787',
                        ),
                    541 =>
                        array(
                            'city' => 'København V',
                            'code' => '1788',
                        ),
                    542 =>
                        array(
                            'city' => 'København V',
                            'code' => '1789',
                        ),
                    543 =>
                        array(
                            'city' => 'København V',
                            'code' => '1790',
                        ),
                    544 =>
                        array(
                            'city' => 'København V',
                            'code' => '1795',
                        ),
                    545 =>
                        array(
                            'city' => 'København V',
                            'code' => '1799',
                        ),
                    546 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1800',
                        ),
                    547 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1801',
                        ),
                    548 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1802',
                        ),
                    549 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1803',
                        ),
                    550 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1804',
                        ),
                    551 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1805',
                        ),
                    552 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1806',
                        ),
                    553 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1807',
                        ),
                    554 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1808',
                        ),
                    555 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1809',
                        ),
                    556 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1810',
                        ),
                    557 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1811',
                        ),
                    558 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1812',
                        ),
                    559 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1813',
                        ),
                    560 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1814',
                        ),
                    561 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1815',
                        ),
                    562 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1816',
                        ),
                    563 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1817',
                        ),
                    564 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1818',
                        ),
                    565 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1819',
                        ),
                    566 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1820',
                        ),
                    567 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1822',
                        ),
                    568 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1823',
                        ),
                    569 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1824',
                        ),
                    570 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1825',
                        ),
                    571 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1826',
                        ),
                    572 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1827',
                        ),
                    573 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1828',
                        ),
                    574 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1829',
                        ),
                    575 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1835',
                        ),
                    576 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1850',
                        ),
                    577 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1851',
                        ),
                    578 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1852',
                        ),
                    579 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1853',
                        ),
                    580 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1854',
                        ),
                    581 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1855',
                        ),
                    582 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1856',
                        ),
                    583 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1857',
                        ),
                    584 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1860',
                        ),
                    585 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1861',
                        ),
                    586 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1862',
                        ),
                    587 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1863',
                        ),
                    588 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1864',
                        ),
                    589 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1865',
                        ),
                    590 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1866',
                        ),
                    591 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1867',
                        ),
                    592 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1868',
                        ),
                    593 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1870',
                        ),
                    594 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1871',
                        ),
                    595 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1872',
                        ),
                    596 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1873',
                        ),
                    597 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1874',
                        ),
                    598 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1875',
                        ),
                    599 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1876',
                        ),
                    600 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1877',
                        ),
                    601 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1878',
                        ),
                    602 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1879',
                        ),
                    603 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1900',
                        ),
                    604 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1901',
                        ),
                    605 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1902',
                        ),
                    606 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1903',
                        ),
                    607 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1904',
                        ),
                    608 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1905',
                        ),
                    609 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1906',
                        ),
                    610 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1908',
                        ),
                    611 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1909',
                        ),
                    612 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1910',
                        ),
                    613 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1911',
                        ),
                    614 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1912',
                        ),
                    615 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1913',
                        ),
                    616 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1914',
                        ),
                    617 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1915',
                        ),
                    618 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1916',
                        ),
                    619 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1917',
                        ),
                    620 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1920',
                        ),
                    621 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1921',
                        ),
                    622 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1922',
                        ),
                    623 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1923',
                        ),
                    624 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1924',
                        ),
                    625 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1925',
                        ),
                    626 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1926',
                        ),
                    627 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1927',
                        ),
                    628 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1928',
                        ),
                    629 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1931',
                        ),
                    630 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1950',
                        ),
                    631 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1951',
                        ),
                    632 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1952',
                        ),
                    633 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1953',
                        ),
                    634 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1954',
                        ),
                    635 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1955',
                        ),
                    636 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1956',
                        ),
                    637 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1957',
                        ),
                    638 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1958',
                        ),
                    639 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1959',
                        ),
                    640 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1960',
                        ),
                    641 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1961',
                        ),
                    642 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1962',
                        ),
                    643 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1963',
                        ),
                    644 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1964',
                        ),
                    645 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1965',
                        ),
                    646 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1966',
                        ),
                    647 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1967',
                        ),
                    648 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1970',
                        ),
                    649 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1971',
                        ),
                    650 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1972',
                        ),
                    651 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1973',
                        ),
                    652 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1974',
                        ),
                    653 =>
                        array(
                            'city' => 'Frederiksberg C',
                            'code' => '1999',
                        ),
                    654 =>
                        array(
                            'city' => 'Frederiksberg',
                            'code' => '2000',
                        ),
                    655 =>
                        array(
                            'city' => 'København Ø',
                            'code' => '2100',
                        ),
                    656 =>
                        array(
                            'city' => 'København N',
                            'code' => '2200',
                        ),
                    657 =>
                        array(
                            'city' => 'København S',
                            'code' => '2300',
                        ),
                    658 =>
                        array(
                            'city' => 'København NV',
                            'code' => '2400',
                        ),
                    659 =>
                        array(
                            'city' => 'København SV',
                            'code' => '2450',
                        ),
                    660 =>
                        array(
                            'city' => 'Valby',
                            'code' => '2500',
                        ),
                    661 =>
                        array(
                            'city' => 'Glostrup',
                            'code' => '2600',
                        ),
                    662 =>
                        array(
                            'city' => 'Brøndby',
                            'code' => '2605',
                        ),
                    663 =>
                        array(
                            'city' => 'Rødovre',
                            'code' => '2610',
                        ),
                    664 =>
                        array(
                            'city' => 'Albertslund',
                            'code' => '2620',
                        ),
                    665 =>
                        array(
                            'city' => 'Vallensbæk',
                            'code' => '2625',
                        ),
                    666 =>
                        array(
                            'city' => 'Taastrup',
                            'code' => '2630',
                        ),
                    667 =>
                        array(
                            'city' => 'Taastrup',
                            'code' => '2633',
                        ),
                    668 =>
                        array(
                            'city' => 'Ishøj',
                            'code' => '2635',
                        ),
                    669 =>
                        array(
                            'city' => 'Hedehusene',
                            'code' => '2640',
                        ),
                    670 =>
                        array(
                            'city' => 'Hvidovre',
                            'code' => '2650',
                        ),
                    671 =>
                        array(
                            'city' => 'Brøndby Strand',
                            'code' => '2660',
                        ),
                    672 =>
                        array(
                            'city' => 'Vallensbæk Strand',
                            'code' => '2665',
                        ),
                    673 =>
                        array(
                            'city' => 'Greve',
                            'code' => '2670',
                        ),
                    674 =>
                        array(
                            'city' => 'Solrød Strand',
                            'code' => '2680',
                        ),
                    675 =>
                        array(
                            'city' => 'Karlslunde',
                            'code' => '2690',
                        ),
                    676 =>
                        array(
                            'city' => 'Brønshøj',
                            'code' => '2700',
                        ),
                    677 =>
                        array(
                            'city' => 'Vanløse',
                            'code' => '2720',
                        ),
                    678 =>
                        array(
                            'city' => 'Herlev',
                            'code' => '2730',
                        ),
                    679 =>
                        array(
                            'city' => 'Skovlunde',
                            'code' => '2740',
                        ),
                    680 =>
                        array(
                            'city' => 'Ballerup',
                            'code' => '2750',
                        ),
                    681 =>
                        array(
                            'city' => 'Måløv',
                            'code' => '2760',
                        ),
                    682 =>
                        array(
                            'city' => 'Smørum',
                            'code' => '2765',
                        ),
                    683 =>
                        array(
                            'city' => 'Kastrup',
                            'code' => '2770',
                        ),
                    684 =>
                        array(
                            'city' => 'Dragør',
                            'code' => '2791',
                        ),
                    685 =>
                        array(
                            'city' => 'Kongens Lyngby',
                            'code' => '2800',
                        ),
                    686 =>
                        array(
                            'city' => 'Gentofte',
                            'code' => '2820',
                        ),
                    687 =>
                        array(
                            'city' => 'Virum',
                            'code' => '2830',
                        ),
                    688 =>
                        array(
                            'city' => 'Holte',
                            'code' => '2840',
                        ),
                    689 =>
                        array(
                            'city' => 'Nærum',
                            'code' => '2850',
                        ),
                    690 =>
                        array(
                            'city' => 'Søborg',
                            'code' => '2860',
                        ),
                    691 =>
                        array(
                            'city' => 'Dyssegård',
                            'code' => '2870',
                        ),
                    692 =>
                        array(
                            'city' => 'Bagsværd',
                            'code' => '2880',
                        ),
                    693 =>
                        array(
                            'city' => 'Hellerup',
                            'code' => '2900',
                        ),
                    694 =>
                        array(
                            'city' => 'Charlottenlund',
                            'code' => '2920',
                        ),
                    695 =>
                        array(
                            'city' => 'Klampenborg',
                            'code' => '2930',
                        ),
                    696 =>
                        array(
                            'city' => 'Skodsborg',
                            'code' => '2942',
                        ),
                    697 =>
                        array(
                            'city' => 'Vedbæk',
                            'code' => '2950',
                        ),
                    698 =>
                        array(
                            'city' => 'Rungsted Kyst',
                            'code' => '2960',
                        ),
                    699 =>
                        array(
                            'city' => 'Hørsholm',
                            'code' => '2970',
                        ),
                    700 =>
                        array(
                            'city' => 'Kokkedal',
                            'code' => '2980',
                        ),
                    701 =>
                        array(
                            'city' => 'Nivå',
                            'code' => '2990',
                        ),
                    702 =>
                        array(
                            'city' => 'Helsingør',
                            'code' => '3000',
                        ),
                    703 =>
                        array(
                            'city' => 'Humlebæk',
                            'code' => '3050',
                        ),
                    704 =>
                        array(
                            'city' => 'Espergærde',
                            'code' => '3060',
                        ),
                    705 =>
                        array(
                            'city' => 'Snekkersten',
                            'code' => '3070',
                        ),
                    706 =>
                        array(
                            'city' => 'Tikøb',
                            'code' => '3080',
                        ),
                    707 =>
                        array(
                            'city' => 'Hornbæk',
                            'code' => '3100',
                        ),
                    708 =>
                        array(
                            'city' => 'Dronningmølle',
                            'code' => '3120',
                        ),
                    709 =>
                        array(
                            'city' => 'Ålsgårde',
                            'code' => '3140',
                        ),
                    710 =>
                        array(
                            'city' => 'Hellebæk',
                            'code' => '3150',
                        ),
                    711 =>
                        array(
                            'city' => 'Helsinge',
                            'code' => '3200',
                        ),
                    712 =>
                        array(
                            'city' => 'Vejby',
                            'code' => '3210',
                        ),
                    713 =>
                        array(
                            'city' => 'Tisvildeleje',
                            'code' => '3220',
                        ),
                    714 =>
                        array(
                            'city' => 'Græsted',
                            'code' => '3230',
                        ),
                    715 =>
                        array(
                            'city' => 'Gilleleje',
                            'code' => '3250',
                        ),
                    716 =>
                        array(
                            'city' => 'Frederiksværk',
                            'code' => '3300',
                        ),
                    717 =>
                        array(
                            'city' => 'Ølsted',
                            'code' => '3310',
                        ),
                    718 =>
                        array(
                            'city' => 'Skævinge',
                            'code' => '3320',
                        ),
                    719 =>
                        array(
                            'city' => 'Gørløse',
                            'code' => '3330',
                        ),
                    720 =>
                        array(
                            'city' => 'Liseleje',
                            'code' => '3360',
                        ),
                    721 =>
                        array(
                            'city' => 'Melby',
                            'code' => '3370',
                        ),
                    722 =>
                        array(
                            'city' => 'Hundested',
                            'code' => '3390',
                        ),
                    723 =>
                        array(
                            'city' => 'Hillerød',
                            'code' => '3400',
                        ),
                    724 =>
                        array(
                            'city' => 'Allerød',
                            'code' => '3450',
                        ),
                    725 =>
                        array(
                            'city' => 'Birkerød',
                            'code' => '3460',
                        ),
                    726 =>
                        array(
                            'city' => 'Fredensborg',
                            'code' => '3480',
                        ),
                    727 =>
                        array(
                            'city' => 'Kvistgård',
                            'code' => '3490',
                        ),
                    728 =>
                        array(
                            'city' => 'Værløse',
                            'code' => '3500',
                        ),
                    729 =>
                        array(
                            'city' => 'Farum',
                            'code' => '3520',
                        ),
                    730 =>
                        array(
                            'city' => 'Lynge',
                            'code' => '3540',
                        ),
                    731 =>
                        array(
                            'city' => 'Slangerup',
                            'code' => '3550',
                        ),
                    732 =>
                        array(
                            'city' => 'Frederikssund',
                            'code' => '3600',
                        ),
                    733 =>
                        array(
                            'city' => 'Jægerspris',
                            'code' => '3630',
                        ),
                    734 =>
                        array(
                            'city' => 'Ølstykke',
                            'code' => '3650',
                        ),
                    735 =>
                        array(
                            'city' => 'Stenløse',
                            'code' => '3660',
                        ),
                    736 =>
                        array(
                            'city' => 'Veksø Sjælland',
                            'code' => '3670',
                        ),
                    737 =>
                        array(
                            'city' => 'Rønne',
                            'code' => '3700',
                        ),
                    738 =>
                        array(
                            'city' => 'Aakirkeby',
                            'code' => '3720',
                        ),
                    739 =>
                        array(
                            'city' => 'Nexø',
                            'code' => '3730',
                        ),
                    740 =>
                        array(
                            'city' => 'Svaneke',
                            'code' => '3740',
                        ),
                    741 =>
                        array(
                            'city' => 'Østermarie',
                            'code' => '3751',
                        ),
                    742 =>
                        array(
                            'city' => 'Gudhjem',
                            'code' => '3760',
                        ),
                    743 =>
                        array(
                            'city' => 'Allinge',
                            'code' => '3770',
                        ),
                    744 =>
                        array(
                            'city' => 'Klemensker',
                            'code' => '3782',
                        ),
                    745 =>
                        array(
                            'city' => 'Hasle',
                            'code' => '3790',
                        ),
                    746 =>
                        array(
                            'city' => 'Roskilde',
                            'code' => '4000',
                        ),
                    747 =>
                        array(
                            'city' => 'Jyllinge',
                            'code' => '4040',
                        ),
                    748 =>
                        array(
                            'city' => 'Skibby',
                            'code' => '4050',
                        ),
                    749 =>
                        array(
                            'city' => 'Kirke Såby',
                            'code' => '4060',
                        ),
                    750 =>
                        array(
                            'city' => 'Kirke Hyllinge',
                            'code' => '4070',
                        ),
                    751 =>
                        array(
                            'city' => 'Ringsted',
                            'code' => '4100',
                        ),
                    752 =>
                        array(
                            'city' => 'Ringsted',
                            'code' => '4105',
                        ),
                    753 =>
                        array(
                            'city' => 'Ringsted',
                            'code' => '4129',
                        ),
                    754 =>
                        array(
                            'city' => 'Viby Sjælland',
                            'code' => '4130',
                        ),
                    755 =>
                        array(
                            'city' => 'Borup',
                            'code' => '4140',
                        ),
                    756 =>
                        array(
                            'city' => 'Herlufmagle',
                            'code' => '4160',
                        ),
                    757 =>
                        array(
                            'city' => 'Glumsø',
                            'code' => '4171',
                        ),
                    758 =>
                        array(
                            'city' => 'Fjenneslev',
                            'code' => '4173',
                        ),
                    759 =>
                        array(
                            'city' => 'Jystrup Midtsj',
                            'code' => '4174',
                        ),
                    760 =>
                        array(
                            'city' => 'Sorø',
                            'code' => '4180',
                        ),
                    761 =>
                        array(
                            'city' => 'Munke Bjergby',
                            'code' => '4190',
                        ),
                    762 =>
                        array(
                            'city' => 'Slagelse',
                            'code' => '4200',
                        ),
                    763 =>
                        array(
                            'city' => 'Korsør',
                            'code' => '4220',
                        ),
                    764 =>
                        array(
                            'city' => 'Skælskør',
                            'code' => '4230',
                        ),
                    765 =>
                        array(
                            'city' => 'Vemmelev',
                            'code' => '4241',
                        ),
                    766 =>
                        array(
                            'city' => 'Boeslunde',
                            'code' => '4242',
                        ),
                    767 =>
                        array(
                            'city' => 'Rude',
                            'code' => '4243',
                        ),
                    768 =>
                        array(
                            'city' => 'Fuglebjerg',
                            'code' => '4250',
                        ),
                    769 =>
                        array(
                            'city' => 'Dalmose',
                            'code' => '4261',
                        ),
                    770 =>
                        array(
                            'city' => 'Sandved',
                            'code' => '4262',
                        ),
                    771 =>
                        array(
                            'city' => 'Høng',
                            'code' => '4270',
                        ),
                    772 =>
                        array(
                            'city' => 'Gørlev',
                            'code' => '4281',
                        ),
                    773 =>
                        array(
                            'city' => 'Ruds Vedby',
                            'code' => '4291',
                        ),
                    774 =>
                        array(
                            'city' => 'Dianalund',
                            'code' => '4293',
                        ),
                    775 =>
                        array(
                            'city' => 'Stenlille',
                            'code' => '4295',
                        ),
                    776 =>
                        array(
                            'city' => 'Nyrup',
                            'code' => '4296',
                        ),
                    777 =>
                        array(
                            'city' => 'Holbæk',
                            'code' => '4300',
                        ),
                    778 =>
                        array(
                            'city' => 'Lejre',
                            'code' => '4320',
                        ),
                    779 =>
                        array(
                            'city' => 'Hvalsø',
                            'code' => '4330',
                        ),
                    780 =>
                        array(
                            'city' => 'Tølløse',
                            'code' => '4340',
                        ),
                    781 =>
                        array(
                            'city' => 'Ugerløse',
                            'code' => '4350',
                        ),
                    782 =>
                        array(
                            'city' => 'Kirke Eskilstrup',
                            'code' => '4360',
                        ),
                    783 =>
                        array(
                            'city' => 'Store Merløse',
                            'code' => '4370',
                        ),
                    784 =>
                        array(
                            'city' => 'Vipperød',
                            'code' => '4390',
                        ),
                    785 =>
                        array(
                            'city' => 'Kalundborg',
                            'code' => '4400',
                        ),
                    786 =>
                        array(
                            'city' => 'Regstrup',
                            'code' => '4420',
                        ),
                    787 =>
                        array(
                            'city' => 'Mørkøv',
                            'code' => '4440',
                        ),
                    788 =>
                        array(
                            'city' => 'Jyderup',
                            'code' => '4450',
                        ),
                    789 =>
                        array(
                            'city' => 'Snertinge',
                            'code' => '4460',
                        ),
                    790 =>
                        array(
                            'city' => 'Svebølle',
                            'code' => '4470',
                        ),
                    791 =>
                        array(
                            'city' => 'Store Fuglede',
                            'code' => '4480',
                        ),
                    792 =>
                        array(
                            'city' => 'Jerslev Sjælland',
                            'code' => '4490',
                        ),
                    793 =>
                        array(
                            'city' => 'Nykøbing Sj',
                            'code' => '4500',
                        ),
                    794 =>
                        array(
                            'city' => 'Svinninge',
                            'code' => '4520',
                        ),
                    795 =>
                        array(
                            'city' => 'Gislinge',
                            'code' => '4532',
                        ),
                    796 =>
                        array(
                            'city' => 'Hørve',
                            'code' => '4534',
                        ),
                    797 =>
                        array(
                            'city' => 'Fårevejle',
                            'code' => '4540',
                        ),
                    798 =>
                        array(
                            'city' => 'Asnæs',
                            'code' => '4550',
                        ),
                    799 =>
                        array(
                            'city' => 'Vig',
                            'code' => '4560',
                        ),
                    800 =>
                        array(
                            'city' => 'Grevinge',
                            'code' => '4571',
                        ),
                    801 =>
                        array(
                            'city' => 'Nørre Asmindrup',
                            'code' => '4572',
                        ),
                    802 =>
                        array(
                            'city' => 'Højby',
                            'code' => '4573',
                        ),
                    803 =>
                        array(
                            'city' => 'Rørvig',
                            'code' => '4581',
                        ),
                    804 =>
                        array(
                            'city' => 'Sjællands Odde',
                            'code' => '4583',
                        ),
                    805 =>
                        array(
                            'city' => 'Føllenslev',
                            'code' => '4591',
                        ),
                    806 =>
                        array(
                            'city' => 'Sejerø',
                            'code' => '4592',
                        ),
                    807 =>
                        array(
                            'city' => 'Eskebjerg',
                            'code' => '4593',
                        ),
                    808 =>
                        array(
                            'city' => 'Køge',
                            'code' => '4600',
                        ),
                    809 =>
                        array(
                            'city' => 'Gadstrup',
                            'code' => '4621',
                        ),
                    810 =>
                        array(
                            'city' => 'Havdrup',
                            'code' => '4622',
                        ),
                    811 =>
                        array(
                            'city' => 'Lille Skensved',
                            'code' => '4623',
                        ),
                    812 =>
                        array(
                            'city' => 'Bjæverskov',
                            'code' => '4632',
                        ),
                    813 =>
                        array(
                            'city' => 'Fakse',
                            'code' => '4640',
                        ),
                    814 =>
                        array(
                            'city' => 'Hårlev',
                            'code' => '4652',
                        ),
                    815 =>
                        array(
                            'city' => 'Karise',
                            'code' => '4653',
                        ),
                    816 =>
                        array(
                            'city' => 'Fakse Ladeplads',
                            'code' => '4654',
                        ),
                    817 =>
                        array(
                            'city' => 'Store Heddinge',
                            'code' => '4660',
                        ),
                    818 =>
                        array(
                            'city' => 'Strøby',
                            'code' => '4671',
                        ),
                    819 =>
                        array(
                            'city' => 'Klippinge',
                            'code' => '4672',
                        ),
                    820 =>
                        array(
                            'city' => 'Rødvig Stevns',
                            'code' => '4673',
                        ),
                    821 =>
                        array(
                            'city' => 'Herfølge',
                            'code' => '4681',
                        ),
                    822 =>
                        array(
                            'city' => 'Tureby',
                            'code' => '4682',
                        ),
                    823 =>
                        array(
                            'city' => 'Rønnede',
                            'code' => '4683',
                        ),
                    824 =>
                        array(
                            'city' => 'Holmegaard',
                            'code' => '4684',
                        ),
                    825 =>
                        array(
                            'city' => 'Haslev',
                            'code' => '4690',
                        ),
                    826 =>
                        array(
                            'city' => 'Næstved',
                            'code' => '4700',
                        ),
                    827 =>
                        array(
                            'city' => 'Præstø',
                            'code' => '4720',
                        ),
                    828 =>
                        array(
                            'city' => 'Tappernøje',
                            'code' => '4733',
                        ),
                    829 =>
                        array(
                            'city' => 'Mern',
                            'code' => '4735',
                        ),
                    830 =>
                        array(
                            'city' => 'Karrebæksminde',
                            'code' => '4736',
                        ),
                    831 =>
                        array(
                            'city' => 'Lundby',
                            'code' => '4750',
                        ),
                    832 =>
                        array(
                            'city' => 'Vordingborg',
                            'code' => '4760',
                        ),
                    833 =>
                        array(
                            'city' => 'Kalvehave',
                            'code' => '4771',
                        ),
                    834 =>
                        array(
                            'city' => 'Langebæk',
                            'code' => '4772',
                        ),
                    835 =>
                        array(
                            'city' => 'Stensved',
                            'code' => '4773',
                        ),
                    836 =>
                        array(
                            'city' => 'Stege',
                            'code' => '4780',
                        ),
                    837 =>
                        array(
                            'city' => 'Borre',
                            'code' => '4791',
                        ),
                    838 =>
                        array(
                            'city' => 'Askeby',
                            'code' => '4792',
                        ),
                    839 =>
                        array(
                            'city' => 'Bogø By',
                            'code' => '4793',
                        ),
                    840 =>
                        array(
                            'city' => 'Nykøbing F',
                            'code' => '4800',
                        ),
                    841 =>
                        array(
                            'city' => 'Nørre Alslev',
                            'code' => '4840',
                        ),
                    842 =>
                        array(
                            'city' => 'Stubbekøbing',
                            'code' => '4850',
                        ),
                    843 =>
                        array(
                            'city' => 'Guldborg',
                            'code' => '4862',
                        ),
                    844 =>
                        array(
                            'city' => 'Eskilstrup',
                            'code' => '4863',
                        ),
                    845 =>
                        array(
                            'city' => 'Horbelev',
                            'code' => '4871',
                        ),
                    846 =>
                        array(
                            'city' => 'Idestrup',
                            'code' => '4872',
                        ),
                    847 =>
                        array(
                            'city' => 'Væggerløse',
                            'code' => '4873',
                        ),
                    848 =>
                        array(
                            'city' => 'Gedser',
                            'code' => '4874',
                        ),
                    849 =>
                        array(
                            'city' => 'Nysted',
                            'code' => '4880',
                        ),
                    850 =>
                        array(
                            'city' => 'Toreby L',
                            'code' => '4891',
                        ),
                    851 =>
                        array(
                            'city' => 'Kettinge',
                            'code' => '4892',
                        ),
                    852 =>
                        array(
                            'city' => 'Øster Ulslev',
                            'code' => '4894',
                        ),
                    853 =>
                        array(
                            'city' => 'Errindlev',
                            'code' => '4895',
                        ),
                    854 =>
                        array(
                            'city' => 'Nakskov',
                            'code' => '4900',
                        ),
                    855 =>
                        array(
                            'city' => 'Harpelunde',
                            'code' => '4912',
                        ),
                    856 =>
                        array(
                            'city' => 'Horslunde',
                            'code' => '4913',
                        ),
                    857 =>
                        array(
                            'city' => 'Søllested',
                            'code' => '4920',
                        ),
                    858 =>
                        array(
                            'city' => 'Maribo',
                            'code' => '4930',
                        ),
                    859 =>
                        array(
                            'city' => 'Bandholm',
                            'code' => '4941',
                        ),
                    860 =>
                        array(
                            'city' => 'Torrig L',
                            'code' => '4943',
                        ),
                    861 =>
                        array(
                            'city' => 'Fejø',
                            'code' => '4944',
                        ),
                    862 =>
                        array(
                            'city' => 'Nørreballe',
                            'code' => '4951',
                        ),
                    863 =>
                        array(
                            'city' => 'Stokkemarke',
                            'code' => '4952',
                        ),
                    864 =>
                        array(
                            'city' => 'Vesterborg',
                            'code' => '4953',
                        ),
                    865 =>
                        array(
                            'city' => 'Holeby',
                            'code' => '4960',
                        ),
                    866 =>
                        array(
                            'city' => 'Rødby',
                            'code' => '4970',
                        ),
                    867 =>
                        array(
                            'city' => 'Dannemare',
                            'code' => '4983',
                        ),
                    868 =>
                        array(
                            'city' => 'Sakskøbing',
                            'code' => '4990',
                        ),
                    869 =>
                        array(
                            'city' => 'Odense C',
                            'code' => '5000',
                        ),
                    870 =>
                        array(
                            'city' => 'Odense C',
                            'code' => '5029',
                        ),
                    871 =>
                        array(
                            'city' => 'Odense C',
                            'code' => '5090',
                        ),
                    872 =>
                        array(
                            'city' => 'Odense C',
                            'code' => '5100',
                        ),
                    873 =>
                        array(
                            'city' => 'Odense V',
                            'code' => '5200',
                        ),
                    874 =>
                        array(
                            'city' => 'Odense NV',
                            'code' => '5210',
                        ),
                    875 =>
                        array(
                            'city' => 'Odense SØ',
                            'code' => '5220',
                        ),
                    876 =>
                        array(
                            'city' => 'Odense M',
                            'code' => '5230',
                        ),
                    877 =>
                        array(
                            'city' => 'Odense NØ',
                            'code' => '5240',
                        ),
                    878 =>
                        array(
                            'city' => 'Odense SV',
                            'code' => '5250',
                        ),
                    879 =>
                        array(
                            'city' => 'Odense S',
                            'code' => '5260',
                        ),
                    880 =>
                        array(
                            'city' => 'Odense N',
                            'code' => '5270',
                        ),
                    881 =>
                        array(
                            'city' => 'Marslev',
                            'code' => '5290',
                        ),
                    882 =>
                        array(
                            'city' => 'Kerteminde',
                            'code' => '5300',
                        ),
                    883 =>
                        array(
                            'city' => 'Agedrup',
                            'code' => '5320',
                        ),
                    884 =>
                        array(
                            'city' => 'Munkebo',
                            'code' => '5330',
                        ),
                    885 =>
                        array(
                            'city' => 'Rynkeby',
                            'code' => '5350',
                        ),
                    886 =>
                        array(
                            'city' => 'Mesinge',
                            'code' => '5370',
                        ),
                    887 =>
                        array(
                            'city' => 'Dalby',
                            'code' => '5380',
                        ),
                    888 =>
                        array(
                            'city' => 'Martofte',
                            'code' => '5390',
                        ),
                    889 =>
                        array(
                            'city' => 'Bogense',
                            'code' => '5400',
                        ),
                    890 =>
                        array(
                            'city' => 'Otterup',
                            'code' => '5450',
                        ),
                    891 =>
                        array(
                            'city' => 'Morud',
                            'code' => '5462',
                        ),
                    892 =>
                        array(
                            'city' => 'Harndrup',
                            'code' => '5463',
                        ),
                    893 =>
                        array(
                            'city' => 'Brenderup Fyn',
                            'code' => '5464',
                        ),
                    894 =>
                        array(
                            'city' => 'Asperup',
                            'code' => '5466',
                        ),
                    895 =>
                        array(
                            'city' => 'Søndersø',
                            'code' => '5471',
                        ),
                    896 =>
                        array(
                            'city' => 'Veflinge',
                            'code' => '5474',
                        ),
                    897 =>
                        array(
                            'city' => 'Skamby',
                            'code' => '5485',
                        ),
                    898 =>
                        array(
                            'city' => 'Blommenslyst',
                            'code' => '5491',
                        ),
                    899 =>
                        array(
                            'city' => 'Vissenbjerg',
                            'code' => '5492',
                        ),
                    900 =>
                        array(
                            'city' => 'Middelfart',
                            'code' => '5500',
                        ),
                    901 =>
                        array(
                            'city' => 'Ullerslev',
                            'code' => '5540',
                        ),
                    902 =>
                        array(
                            'city' => 'Langeskov',
                            'code' => '5550',
                        ),
                    903 =>
                        array(
                            'city' => 'Aarup',
                            'code' => '5560',
                        ),
                    904 =>
                        array(
                            'city' => 'Nørre Aaby',
                            'code' => '5580',
                        ),
                    905 =>
                        array(
                            'city' => 'Gelsted',
                            'code' => '5591',
                        ),
                    906 =>
                        array(
                            'city' => 'Ejby',
                            'code' => '5592',
                        ),
                    907 =>
                        array(
                            'city' => 'Faaborg',
                            'code' => '5600',
                        ),
                    908 =>
                        array(
                            'city' => 'Assens',
                            'code' => '5610',
                        ),
                    909 =>
                        array(
                            'city' => 'Glamsbjerg',
                            'code' => '5620',
                        ),
                    910 =>
                        array(
                            'city' => 'Ebberup',
                            'code' => '5631',
                        ),
                    911 =>
                        array(
                            'city' => 'Millinge',
                            'code' => '5642',
                        ),
                    912 =>
                        array(
                            'city' => 'Broby',
                            'code' => '5672',
                        ),
                    913 =>
                        array(
                            'city' => 'Haarby',
                            'code' => '5683',
                        ),
                    914 =>
                        array(
                            'city' => 'Tommerup',
                            'code' => '5690',
                        ),
                    915 =>
                        array(
                            'city' => 'Svendborg',
                            'code' => '5700',
                        ),
                    916 =>
                        array(
                            'city' => 'Ringe',
                            'code' => '5750',
                        ),
                    917 =>
                        array(
                            'city' => 'Vester Skerninge',
                            'code' => '5762',
                        ),
                    918 =>
                        array(
                            'city' => 'Stenstrup',
                            'code' => '5771',
                        ),
                    919 =>
                        array(
                            'city' => 'Kværndrup',
                            'code' => '5772',
                        ),
                    920 =>
                        array(
                            'city' => 'Årslev',
                            'code' => '5792',
                        ),
                    921 =>
                        array(
                            'city' => 'Nyborg',
                            'code' => '5800',
                        ),
                    922 =>
                        array(
                            'city' => 'Ørbæk',
                            'code' => '5853',
                        ),
                    923 =>
                        array(
                            'city' => 'Gislev',
                            'code' => '5854',
                        ),
                    924 =>
                        array(
                            'city' => 'Ryslinge',
                            'code' => '5856',
                        ),
                    925 =>
                        array(
                            'city' => 'Ferritslev Fyn',
                            'code' => '5863',
                        ),
                    926 =>
                        array(
                            'city' => 'Frørup',
                            'code' => '5871',
                        ),
                    927 =>
                        array(
                            'city' => 'Hesselager',
                            'code' => '5874',
                        ),
                    928 =>
                        array(
                            'city' => 'Skårup Fyn',
                            'code' => '5881',
                        ),
                    929 =>
                        array(
                            'city' => 'Vejstrup',
                            'code' => '5882',
                        ),
                    930 =>
                        array(
                            'city' => 'Oure',
                            'code' => '5883',
                        ),
                    931 =>
                        array(
                            'city' => 'Gudme',
                            'code' => '5884',
                        ),
                    932 =>
                        array(
                            'city' => 'Gudbjerg Sydfyn',
                            'code' => '5892',
                        ),
                    933 =>
                        array(
                            'city' => 'Rudkøbing',
                            'code' => '5900',
                        ),
                    934 =>
                        array(
                            'city' => 'Humble',
                            'code' => '5932',
                        ),
                    935 =>
                        array(
                            'city' => 'Bagenkop',
                            'code' => '5935',
                        ),
                    936 =>
                        array(
                            'city' => 'Tranekær',
                            'code' => '5953',
                        ),
                    937 =>
                        array(
                            'city' => 'Marstal',
                            'code' => '5960',
                        ),
                    938 =>
                        array(
                            'city' => 'Ærøskøbing',
                            'code' => '5970',
                        ),
                    939 =>
                        array(
                            'city' => 'Søby Ærø',
                            'code' => '5985',
                        ),
                    940 =>
                        array(
                            'city' => 'Kolding',
                            'code' => '6000',
                        ),
                    941 =>
                        array(
                            'city' => 'Egtved',
                            'code' => '6040',
                        ),
                    942 =>
                        array(
                            'city' => 'Almind',
                            'code' => '6051',
                        ),
                    943 =>
                        array(
                            'city' => 'Viuf',
                            'code' => '6052',
                        ),
                    944 =>
                        array(
                            'city' => 'Jordrup',
                            'code' => '6064',
                        ),
                    945 =>
                        array(
                            'city' => 'Christiansfeld',
                            'code' => '6070',
                        ),
                    946 =>
                        array(
                            'city' => 'Bjert',
                            'code' => '6091',
                        ),
                    947 =>
                        array(
                            'city' => 'Sønder Stenderup',
                            'code' => '6092',
                        ),
                    948 =>
                        array(
                            'city' => 'Sjølund',
                            'code' => '6093',
                        ),
                    949 =>
                        array(
                            'city' => 'Hejls',
                            'code' => '6094',
                        ),
                    950 =>
                        array(
                            'city' => 'Haderslev',
                            'code' => '6100',
                        ),
                    951 =>
                        array(
                            'city' => 'Aabenraa',
                            'code' => '6200',
                        ),
                    952 =>
                        array(
                            'city' => 'Rødekro',
                            'code' => '6230',
                        ),
                    953 =>
                        array(
                            'city' => 'Løgumkloster',
                            'code' => '6240',
                        ),
                    954 =>
                        array(
                            'city' => 'Bredebro',
                            'code' => '6261',
                        ),
                    955 =>
                        array(
                            'city' => 'Tønder',
                            'code' => '6270',
                        ),
                    956 =>
                        array(
                            'city' => 'Højer',
                            'code' => '6280',
                        ),
                    957 =>
                        array(
                            'city' => 'Gråsten',
                            'code' => '6300',
                        ),
                    958 =>
                        array(
                            'city' => 'Broager',
                            'code' => '6310',
                        ),
                    959 =>
                        array(
                            'city' => 'Egernsund',
                            'code' => '6320',
                        ),
                    960 =>
                        array(
                            'city' => 'Padborg',
                            'code' => '6330',
                        ),
                    961 =>
                        array(
                            'city' => 'Kruså',
                            'code' => '6340',
                        ),
                    962 =>
                        array(
                            'city' => 'Tinglev',
                            'code' => '6360',
                        ),
                    963 =>
                        array(
                            'city' => 'Bylderup-Bov',
                            'code' => '6372',
                        ),
                    964 =>
                        array(
                            'city' => 'Bolderslev',
                            'code' => '6392',
                        ),
                    965 =>
                        array(
                            'city' => 'Sønderborg',
                            'code' => '6400',
                        ),
                    966 =>
                        array(
                            'city' => 'Nordborg',
                            'code' => '6430',
                        ),
                    967 =>
                        array(
                            'city' => 'Augustenborg',
                            'code' => '6440',
                        ),
                    968 =>
                        array(
                            'city' => 'Sydals',
                            'code' => '6470',
                        ),
                    969 =>
                        array(
                            'city' => 'Vojens',
                            'code' => '6500',
                        ),
                    970 =>
                        array(
                            'city' => 'Gram',
                            'code' => '6510',
                        ),
                    971 =>
                        array(
                            'city' => 'Toftlund',
                            'code' => '6520',
                        ),
                    972 =>
                        array(
                            'city' => 'Agerskov',
                            'code' => '6534',
                        ),
                    973 =>
                        array(
                            'city' => 'Branderup J',
                            'code' => '6535',
                        ),
                    974 =>
                        array(
                            'city' => 'Bevtoft',
                            'code' => '6541',
                        ),
                    975 =>
                        array(
                            'city' => 'Sommersted',
                            'code' => '6560',
                        ),
                    976 =>
                        array(
                            'city' => 'Vamdrup',
                            'code' => '6580',
                        ),
                    977 =>
                        array(
                            'city' => 'Vejen',
                            'code' => '6600',
                        ),
                    978 =>
                        array(
                            'city' => 'Gesten',
                            'code' => '6621',
                        ),
                    979 =>
                        array(
                            'city' => 'Bække',
                            'code' => '6622',
                        ),
                    980 =>
                        array(
                            'city' => 'Vorbasse',
                            'code' => '6623',
                        ),
                    981 =>
                        array(
                            'city' => 'Rødding',
                            'code' => '6630',
                        ),
                    982 =>
                        array(
                            'city' => 'Lunderskov',
                            'code' => '6640',
                        ),
                    983 =>
                        array(
                            'city' => 'Brørup',
                            'code' => '6650',
                        ),
                    984 =>
                        array(
                            'city' => 'Lintrup',
                            'code' => '6660',
                        ),
                    985 =>
                        array(
                            'city' => 'Holsted',
                            'code' => '6670',
                        ),
                    986 =>
                        array(
                            'city' => 'Hovborg',
                            'code' => '6682',
                        ),
                    987 =>
                        array(
                            'city' => 'Føvling',
                            'code' => '6683',
                        ),
                    988 =>
                        array(
                            'city' => 'Gørding',
                            'code' => '6690',
                        ),
                    989 =>
                        array(
                            'city' => 'Esbjerg',
                            'code' => '6700',
                        ),
                    990 =>
                        array(
                            'city' => 'Esbjerg',
                            'code' => '6701',
                        ),
                    991 =>
                        array(
                            'city' => 'Esbjerg Ø',
                            'code' => '6705',
                        ),
                    992 =>
                        array(
                            'city' => 'Esbjerg V',
                            'code' => '6710',
                        ),
                    993 =>
                        array(
                            'city' => 'Esbjerg N',
                            'code' => '6715',
                        ),
                    994 =>
                        array(
                            'city' => 'Fanø',
                            'code' => '6720',
                        ),
                    995 =>
                        array(
                            'city' => 'Tjæreborg',
                            'code' => '6731',
                        ),
                    996 =>
                        array(
                            'city' => 'Bramming',
                            'code' => '6740',
                        ),
                    997 =>
                        array(
                            'city' => 'Glejbjerg',
                            'code' => '6752',
                        ),
                    998 =>
                        array(
                            'city' => 'Agerbæk',
                            'code' => '6753',
                        ),
                    999 =>
                        array(
                            'city' => 'Ribe',
                            'code' => '6760',
                        ),
                    1000 =>
                        array(
                            'city' => 'Gredstedbro',
                            'code' => '6771',
                        ),
                    1001 =>
                        array(
                            'city' => 'Skærbæk',
                            'code' => '6780',
                        ),
                    1002 =>
                        array(
                            'city' => 'Rømø',
                            'code' => '6792',
                        ),
                    1003 =>
                        array(
                            'city' => 'Varde',
                            'code' => '6800',
                        ),
                    1004 =>
                        array(
                            'city' => 'Årre',
                            'code' => '6818',
                        ),
                    1005 =>
                        array(
                            'city' => 'Ansager',
                            'code' => '6823',
                        ),
                    1006 =>
                        array(
                            'city' => 'Nørre Nebel',
                            'code' => '6830',
                        ),
                    1007 =>
                        array(
                            'city' => 'Oksbøl',
                            'code' => '6840',
                        ),
                    1008 =>
                        array(
                            'city' => 'Janderup Vestj',
                            'code' => '6851',
                        ),
                    1009 =>
                        array(
                            'city' => 'Billum',
                            'code' => '6852',
                        ),
                    1010 =>
                        array(
                            'city' => 'Vejers Strand',
                            'code' => '6853',
                        ),
                    1011 =>
                        array(
                            'city' => 'Henne',
                            'code' => '6854',
                        ),
                    1012 =>
                        array(
                            'city' => 'Outrup',
                            'code' => '6855',
                        ),
                    1013 =>
                        array(
                            'city' => 'Blåvand',
                            'code' => '6857',
                        ),
                    1014 =>
                        array(
                            'city' => 'Tistrup',
                            'code' => '6862',
                        ),
                    1015 =>
                        array(
                            'city' => 'Ølgod',
                            'code' => '6870',
                        ),
                    1016 =>
                        array(
                            'city' => 'Tarm',
                            'code' => '6880',
                        ),
                    1017 =>
                        array(
                            'city' => 'Hemmet',
                            'code' => '6893',
                        ),
                    1018 =>
                        array(
                            'city' => 'Skjern',
                            'code' => '6900',
                        ),
                    1019 =>
                        array(
                            'city' => 'Videbæk',
                            'code' => '6920',
                        ),
                    1020 =>
                        array(
                            'city' => 'Kibæk',
                            'code' => '6933',
                        ),
                    1021 =>
                        array(
                            'city' => 'Lem St',
                            'code' => '6940',
                        ),
                    1022 =>
                        array(
                            'city' => 'Ringkøbing',
                            'code' => '6950',
                        ),
                    1023 =>
                        array(
                            'city' => 'Hvide Sande',
                            'code' => '6960',
                        ),
                    1024 =>
                        array(
                            'city' => 'Spjald',
                            'code' => '6971',
                        ),
                    1025 =>
                        array(
                            'city' => 'Ørnhøj',
                            'code' => '6973',
                        ),
                    1026 =>
                        array(
                            'city' => 'Tim',
                            'code' => '6980',
                        ),
                    1027 =>
                        array(
                            'city' => 'Ulfborg',
                            'code' => '6990',
                        ),
                    1028 =>
                        array(
                            'city' => 'Fredericia',
                            'code' => '7000',
                        ),
                    1029 =>
                        array(
                            'city' => 'Fredericia',
                            'code' => '7007',
                        ),
                    1030 =>
                        array(
                            'city' => 'Fredericia',
                            'code' => '7029',
                        ),
                    1031 =>
                        array(
                            'city' => 'Børkop',
                            'code' => '7080',
                        ),
                    1032 =>
                        array(
                            'city' => 'Vejle',
                            'code' => '7100',
                        ),
                    1033 =>
                        array(
                            'city' => 'Vejle Øst',
                            'code' => '7120',
                        ),
                    1034 =>
                        array(
                            'city' => 'Juelsminde',
                            'code' => '7130',
                        ),
                    1035 =>
                        array(
                            'city' => 'Stouby',
                            'code' => '7140',
                        ),
                    1036 =>
                        array(
                            'city' => 'Barrit',
                            'code' => '7150',
                        ),
                    1037 =>
                        array(
                            'city' => 'Tørring',
                            'code' => '7160',
                        ),
                    1038 =>
                        array(
                            'city' => 'Uldum',
                            'code' => '7171',
                        ),
                    1039 =>
                        array(
                            'city' => 'Vonge',
                            'code' => '7173',
                        ),
                    1040 =>
                        array(
                            'city' => 'Bredsten',
                            'code' => '7182',
                        ),
                    1041 =>
                        array(
                            'city' => 'Randbøl',
                            'code' => '7183',
                        ),
                    1042 =>
                        array(
                            'city' => 'Vandel',
                            'code' => '7184',
                        ),
                    1043 =>
                        array(
                            'city' => 'Billund',
                            'code' => '7190',
                        ),
                    1044 =>
                        array(
                            'city' => 'Grindsted',
                            'code' => '7200',
                        ),
                    1045 =>
                        array(
                            'city' => 'Hejnsvig',
                            'code' => '7250',
                        ),
                    1046 =>
                        array(
                            'city' => 'Sønder Omme',
                            'code' => '7260',
                        ),
                    1047 =>
                        array(
                            'city' => 'Stakroge',
                            'code' => '7270',
                        ),
                    1048 =>
                        array(
                            'city' => 'Sønder Felding',
                            'code' => '7280',
                        ),
                    1049 =>
                        array(
                            'city' => 'Jelling',
                            'code' => '7300',
                        ),
                    1050 =>
                        array(
                            'city' => 'Gadbjerg',
                            'code' => '7321',
                        ),
                    1051 =>
                        array(
                            'city' => 'Give',
                            'code' => '7323',
                        ),
                    1052 =>
                        array(
                            'city' => 'Brande',
                            'code' => '7330',
                        ),
                    1053 =>
                        array(
                            'city' => 'Ejstrupholm',
                            'code' => '7361',
                        ),
                    1054 =>
                        array(
                            'city' => 'Hampen',
                            'code' => '7362',
                        ),
                    1055 =>
                        array(
                            'city' => 'Herning',
                            'code' => '7400',
                        ),
                    1056 =>
                        array(
                            'city' => 'Herning',
                            'code' => '7401',
                        ),
                    1057 =>
                        array(
                            'city' => 'Herning',
                            'code' => '7429',
                        ),
                    1058 =>
                        array(
                            'city' => 'Ikast',
                            'code' => '7430',
                        ),
                    1059 =>
                        array(
                            'city' => 'Bording',
                            'code' => '7441',
                        ),
                    1060 =>
                        array(
                            'city' => 'Engesvang',
                            'code' => '7442',
                        ),
                    1061 =>
                        array(
                            'city' => 'Sunds',
                            'code' => '7451',
                        ),
                    1062 =>
                        array(
                            'city' => 'Karup J',
                            'code' => '7470',
                        ),
                    1063 =>
                        array(
                            'city' => 'Vildbjerg',
                            'code' => '7480',
                        ),
                    1064 =>
                        array(
                            'city' => 'Aulum',
                            'code' => '7490',
                        ),
                    1065 =>
                        array(
                            'city' => 'Holstebro',
                            'code' => '7500',
                        ),
                    1066 =>
                        array(
                            'city' => 'Haderup',
                            'code' => '7540',
                        ),
                    1067 =>
                        array(
                            'city' => 'Sørvad',
                            'code' => '7550',
                        ),
                    1068 =>
                        array(
                            'city' => 'Hjerm',
                            'code' => '7560',
                        ),
                    1069 =>
                        array(
                            'city' => 'Vemb',
                            'code' => '7570',
                        ),
                    1070 =>
                        array(
                            'city' => 'Struer',
                            'code' => '7600',
                        ),
                    1071 =>
                        array(
                            'city' => 'Lemvig',
                            'code' => '7620',
                        ),
                    1072 =>
                        array(
                            'city' => 'Bøvlingbjerg',
                            'code' => '7650',
                        ),
                    1073 =>
                        array(
                            'city' => 'Bækmarksbro',
                            'code' => '7660',
                        ),
                    1074 =>
                        array(
                            'city' => 'Harboøre',
                            'code' => '7673',
                        ),
                    1075 =>
                        array(
                            'city' => 'Thyborøn',
                            'code' => '7680',
                        ),
                    1076 =>
                        array(
                            'city' => 'Thisted',
                            'code' => '7700',
                        ),
                    1077 =>
                        array(
                            'city' => 'Hanstholm',
                            'code' => '7730',
                        ),
                    1078 =>
                        array(
                            'city' => 'Frøstrup',
                            'code' => '7741',
                        ),
                    1079 =>
                        array(
                            'city' => 'Vesløs',
                            'code' => '7742',
                        ),
                    1080 =>
                        array(
                            'city' => 'Snedsted',
                            'code' => '7752',
                        ),
                    1081 =>
                        array(
                            'city' => 'Bedsted Thy',
                            'code' => '7755',
                        ),
                    1082 =>
                        array(
                            'city' => 'Hurup Thy',
                            'code' => '7760',
                        ),
                    1083 =>
                        array(
                            'city' => 'Vestervig',
                            'code' => '7770',
                        ),
                    1084 =>
                        array(
                            'city' => 'Thyholm',
                            'code' => '7790',
                        ),
                    1085 =>
                        array(
                            'city' => 'Skive',
                            'code' => '7800',
                        ),
                    1086 =>
                        array(
                            'city' => 'Vinderup',
                            'code' => '7830',
                        ),
                    1087 =>
                        array(
                            'city' => 'Højslev',
                            'code' => '7840',
                        ),
                    1088 =>
                        array(
                            'city' => 'Stoholm Jyll',
                            'code' => '7850',
                        ),
                    1089 =>
                        array(
                            'city' => 'Spøttrup',
                            'code' => '7860',
                        ),
                    1090 =>
                        array(
                            'city' => 'Roslev',
                            'code' => '7870',
                        ),
                    1091 =>
                        array(
                            'city' => 'Fur',
                            'code' => '7884',
                        ),
                    1092 =>
                        array(
                            'city' => 'Nykøbing M',
                            'code' => '7900',
                        ),
                    1093 =>
                        array(
                            'city' => 'Erslev',
                            'code' => '7950',
                        ),
                    1094 =>
                        array(
                            'city' => 'Karby',
                            'code' => '7960',
                        ),
                    1095 =>
                        array(
                            'city' => 'Redsted M',
                            'code' => '7970',
                        ),
                    1096 =>
                        array(
                            'city' => 'Vils',
                            'code' => '7980',
                        ),
                    1097 =>
                        array(
                            'city' => 'Øster Assels',
                            'code' => '7990',
                        ),
                    1098 =>
                        array(
                            'city' => 'Århus C',
                            'code' => '8000',
                        ),
                    1099 =>
                        array(
                            'city' => 'Århus C',
                            'code' => '8100',
                        ),
                    1100 =>
                        array(
                            'city' => 'Århus N',
                            'code' => '8200',
                        ),
                    1101 =>
                        array(
                            'city' => 'Århus V',
                            'code' => '8210',
                        ),
                    1102 =>
                        array(
                            'city' => 'Brabrand',
                            'code' => '8220',
                        ),
                    1103 =>
                        array(
                            'city' => 'Risskov Ø',
                            'code' => '8229',
                        ),
                    1104 =>
                        array(
                            'city' => 'Åbyhøj',
                            'code' => '8230',
                        ),
                    1105 =>
                        array(
                            'city' => 'Risskov',
                            'code' => '8240',
                        ),
                    1106 =>
                        array(
                            'city' => 'Risskov Ø',
                            'code' => '8245',
                        ),
                    1107 =>
                        array(
                            'city' => 'Egå',
                            'code' => '8250',
                        ),
                    1108 =>
                        array(
                            'city' => 'Viby J',
                            'code' => '8260',
                        ),
                    1109 =>
                        array(
                            'city' => 'Højbjerg',
                            'code' => '8270',
                        ),
                    1110 =>
                        array(
                            'city' => 'Odder',
                            'code' => '8300',
                        ),
                    1111 =>
                        array(
                            'city' => 'Samsø',
                            'code' => '8305',
                        ),
                    1112 =>
                        array(
                            'city' => 'Tranbjerg J',
                            'code' => '8310',
                        ),
                    1113 =>
                        array(
                            'city' => 'Mårslet',
                            'code' => '8320',
                        ),
                    1114 =>
                        array(
                            'city' => 'Beder',
                            'code' => '8330',
                        ),
                    1115 =>
                        array(
                            'city' => 'Malling',
                            'code' => '8340',
                        ),
                    1116 =>
                        array(
                            'city' => 'Hundslund',
                            'code' => '8350',
                        ),
                    1117 =>
                        array(
                            'city' => 'Solbjerg',
                            'code' => '8355',
                        ),
                    1118 =>
                        array(
                            'city' => 'Hasselager',
                            'code' => '8361',
                        ),
                    1119 =>
                        array(
                            'city' => 'Hørning',
                            'code' => '8362',
                        ),
                    1120 =>
                        array(
                            'city' => 'Hadsten',
                            'code' => '8370',
                        ),
                    1121 =>
                        array(
                            'city' => 'Trige',
                            'code' => '8380',
                        ),
                    1122 =>
                        array(
                            'city' => 'Tilst',
                            'code' => '8381',
                        ),
                    1123 =>
                        array(
                            'city' => 'Hinnerup',
                            'code' => '8382',
                        ),
                    1124 =>
                        array(
                            'city' => 'Ebeltoft',
                            'code' => '8400',
                        ),
                    1125 =>
                        array(
                            'city' => 'Rønde',
                            'code' => '8410',
                        ),
                    1126 =>
                        array(
                            'city' => 'Knebel',
                            'code' => '8420',
                        ),
                    1127 =>
                        array(
                            'city' => 'Balle',
                            'code' => '8444',
                        ),
                    1128 =>
                        array(
                            'city' => 'Hammel',
                            'code' => '8450',
                        ),
                    1129 =>
                        array(
                            'city' => 'Harlev J',
                            'code' => '8462',
                        ),
                    1130 =>
                        array(
                            'city' => 'Galten',
                            'code' => '8464',
                        ),
                    1131 =>
                        array(
                            'city' => 'Sabro',
                            'code' => '8471',
                        ),
                    1132 =>
                        array(
                            'city' => 'Sporup',
                            'code' => '8472',
                        ),
                    1133 =>
                        array(
                            'city' => 'Grenaa',
                            'code' => '8500',
                        ),
                    1134 =>
                        array(
                            'city' => 'Lystrup',
                            'code' => '8520',
                        ),
                    1135 =>
                        array(
                            'city' => 'Hjortshøj',
                            'code' => '8530',
                        ),
                    1136 =>
                        array(
                            'city' => 'Skødstrup',
                            'code' => '8541',
                        ),
                    1137 =>
                        array(
                            'city' => 'Hornslet',
                            'code' => '8543',
                        ),
                    1138 =>
                        array(
                            'city' => 'Mørke',
                            'code' => '8544',
                        ),
                    1139 =>
                        array(
                            'city' => 'Ryomgård',
                            'code' => '8550',
                        ),
                    1140 =>
                        array(
                            'city' => 'Kolind',
                            'code' => '8560',
                        ),
                    1141 =>
                        array(
                            'city' => 'Trustrup',
                            'code' => '8570',
                        ),
                    1142 =>
                        array(
                            'city' => 'Nimtofte',
                            'code' => '8581',
                        ),
                    1143 =>
                        array(
                            'city' => 'Glesborg',
                            'code' => '8585',
                        ),
                    1144 =>
                        array(
                            'city' => 'Ørum Djurs',
                            'code' => '8586',
                        ),
                    1145 =>
                        array(
                            'city' => 'Anholt',
                            'code' => '8592',
                        ),
                    1146 =>
                        array(
                            'city' => 'Silkeborg',
                            'code' => '8600',
                        ),
                    1147 =>
                        array(
                            'city' => 'Kjellerup',
                            'code' => '8620',
                        ),
                    1148 =>
                        array(
                            'city' => 'Lemming',
                            'code' => '8632',
                        ),
                    1149 =>
                        array(
                            'city' => 'Sorring',
                            'code' => '8641',
                        ),
                    1150 =>
                        array(
                            'city' => 'Ans By',
                            'code' => '8643',
                        ),
                    1151 =>
                        array(
                            'city' => 'Them',
                            'code' => '8653',
                        ),
                    1152 =>
                        array(
                            'city' => 'Bryrup',
                            'code' => '8654',
                        ),
                    1153 =>
                        array(
                            'city' => 'Skanderborg',
                            'code' => '8660',
                        ),
                    1154 =>
                        array(
                            'city' => 'Låsby',
                            'code' => '8670',
                        ),
                    1155 =>
                        array(
                            'city' => 'Ry',
                            'code' => '8680',
                        ),
                    1156 =>
                        array(
                            'city' => 'Horsens',
                            'code' => '8700',
                        ),
                    1157 =>
                        array(
                            'city' => 'Daugård',
                            'code' => '8721',
                        ),
                    1158 =>
                        array(
                            'city' => 'Hedensted',
                            'code' => '8722',
                        ),
                    1159 =>
                        array(
                            'city' => 'Løsning',
                            'code' => '8723',
                        ),
                    1160 =>
                        array(
                            'city' => 'Hovedgård',
                            'code' => '8732',
                        ),
                    1161 =>
                        array(
                            'city' => 'Brædstrup',
                            'code' => '8740',
                        ),
                    1162 =>
                        array(
                            'city' => 'Gedved',
                            'code' => '8751',
                        ),
                    1163 =>
                        array(
                            'city' => 'Østbirk',
                            'code' => '8752',
                        ),
                    1164 =>
                        array(
                            'city' => 'Flemming',
                            'code' => '8762',
                        ),
                    1165 =>
                        array(
                            'city' => 'Rask Mølle',
                            'code' => '8763',
                        ),
                    1166 =>
                        array(
                            'city' => 'Klovborg',
                            'code' => '8765',
                        ),
                    1167 =>
                        array(
                            'city' => 'Nørre Snede',
                            'code' => '8766',
                        ),
                    1168 =>
                        array(
                            'city' => 'Stenderup',
                            'code' => '8781',
                        ),
                    1169 =>
                        array(
                            'city' => 'Hornsyld',
                            'code' => '8783',
                        ),
                    1170 =>
                        array(
                            'city' => 'Viborg',
                            'code' => '8800',
                        ),
                    1171 =>
                        array(
                            'city' => 'Tjele',
                            'code' => '8830',
                        ),
                    1172 =>
                        array(
                            'city' => 'Løgstrup',
                            'code' => '8831',
                        ),
                    1173 =>
                        array(
                            'city' => 'Skals',
                            'code' => '8832',
                        ),
                    1174 =>
                        array(
                            'city' => 'Rødkærsbro',
                            'code' => '8840',
                        ),
                    1175 =>
                        array(
                            'city' => 'Bjerringbro',
                            'code' => '8850',
                        ),
                    1176 =>
                        array(
                            'city' => 'Ulstrup',
                            'code' => '8860',
                        ),
                    1177 =>
                        array(
                            'city' => 'Langå',
                            'code' => '8870',
                        ),
                    1178 =>
                        array(
                            'city' => 'Thorsø',
                            'code' => '8881',
                        ),
                    1179 =>
                        array(
                            'city' => 'Fårvang',
                            'code' => '8882',
                        ),
                    1180 =>
                        array(
                            'city' => 'Gjern',
                            'code' => '8883',
                        ),
                    1181 =>
                        array(
                            'city' => 'Randers',
                            'code' => '8900',
                        ),
                    1182 =>
                        array(
                            'city' => 'Ørsted',
                            'code' => '8950',
                        ),
                    1183 =>
                        array(
                            'city' => 'Allingåbro',
                            'code' => '8961',
                        ),
                    1184 =>
                        array(
                            'city' => 'Auning',
                            'code' => '8963',
                        ),
                    1185 =>
                        array(
                            'city' => 'Havndal',
                            'code' => '8970',
                        ),
                    1186 =>
                        array(
                            'city' => 'Spentrup',
                            'code' => '8981',
                        ),
                    1187 =>
                        array(
                            'city' => 'Gjerlev J',
                            'code' => '8983',
                        ),
                    1188 =>
                        array(
                            'city' => 'Fårup',
                            'code' => '8990',
                        ),
                    1189 =>
                        array(
                            'city' => 'Aalborg',
                            'code' => '9000',
                        ),
                    1190 =>
                        array(
                            'city' => 'Aalborg',
                            'code' => '9020',
                        ),
                    1191 =>
                        array(
                            'city' => 'Aalborg',
                            'code' => '9029',
                        ),
                    1192 =>
                        array(
                            'city' => 'Aalborg',
                            'code' => '9100',
                        ),
                    1193 =>
                        array(
                            'city' => 'Aalborg SV',
                            'code' => '9200',
                        ),
                    1194 =>
                        array(
                            'city' => 'Aalborg SØ',
                            'code' => '9210',
                        ),
                    1195 =>
                        array(
                            'city' => 'Aalborg Øst',
                            'code' => '9220',
                        ),
                    1196 =>
                        array(
                            'city' => 'Svenstrup J',
                            'code' => '9230',
                        ),
                    1197 =>
                        array(
                            'city' => 'Nibe',
                            'code' => '9240',
                        ),
                    1198 =>
                        array(
                            'city' => 'Gistrup',
                            'code' => '9260',
                        ),
                    1199 =>
                        array(
                            'city' => 'Klarup',
                            'code' => '9270',
                        ),
                    1200 =>
                        array(
                            'city' => 'Storvorde',
                            'code' => '9280',
                        ),
                    1201 =>
                        array(
                            'city' => 'Kongerslev',
                            'code' => '9293',
                        ),
                    1202 =>
                        array(
                            'city' => 'Sæby',
                            'code' => '9300',
                        ),
                    1203 =>
                        array(
                            'city' => 'Vodskov',
                            'code' => '9310',
                        ),
                    1204 =>
                        array(
                            'city' => 'Hjallerup',
                            'code' => '9320',
                        ),
                    1205 =>
                        array(
                            'city' => 'Dronninglund',
                            'code' => '9330',
                        ),
                    1206 =>
                        array(
                            'city' => 'Asaa',
                            'code' => '9340',
                        ),
                    1207 =>
                        array(
                            'city' => 'Dybvad',
                            'code' => '9352',
                        ),
                    1208 =>
                        array(
                            'city' => 'Gandrup',
                            'code' => '9362',
                        ),
                    1209 =>
                        array(
                            'city' => 'Hals',
                            'code' => '9370',
                        ),
                    1210 =>
                        array(
                            'city' => 'Vestbjerg',
                            'code' => '9380',
                        ),
                    1211 =>
                        array(
                            'city' => 'Sulsted',
                            'code' => '9381',
                        ),
                    1212 =>
                        array(
                            'city' => 'Tylstrup',
                            'code' => '9382',
                        ),
                    1213 =>
                        array(
                            'city' => 'Nørresundby',
                            'code' => '9400',
                        ),
                    1214 =>
                        array(
                            'city' => 'Vadum',
                            'code' => '9430',
                        ),
                    1215 =>
                        array(
                            'city' => 'Aabybro',
                            'code' => '9440',
                        ),
                    1216 =>
                        array(
                            'city' => 'Brovst',
                            'code' => '9460',
                        ),
                    1217 =>
                        array(
                            'city' => 'Løkken',
                            'code' => '9480',
                        ),
                    1218 =>
                        array(
                            'city' => 'Pandrup',
                            'code' => '9490',
                        ),
                    1219 =>
                        array(
                            'city' => 'Blokhus',
                            'code' => '9492',
                        ),
                    1220 =>
                        array(
                            'city' => 'Saltum',
                            'code' => '9493',
                        ),
                    1221 =>
                        array(
                            'city' => 'Hobro',
                            'code' => '9500',
                        ),
                    1222 =>
                        array(
                            'city' => 'Arden',
                            'code' => '9510',
                        ),
                    1223 =>
                        array(
                            'city' => 'Skørping',
                            'code' => '9520',
                        ),
                    1224 =>
                        array(
                            'city' => 'Støvring',
                            'code' => '9530',
                        ),
                    1225 =>
                        array(
                            'city' => 'Suldrup',
                            'code' => '9541',
                        ),
                    1226 =>
                        array(
                            'city' => 'Mariager',
                            'code' => '9550',
                        ),
                    1227 =>
                        array(
                            'city' => 'Hadsund',
                            'code' => '9560',
                        ),
                    1228 =>
                        array(
                            'city' => 'Bælum',
                            'code' => '9574',
                        ),
                    1229 =>
                        array(
                            'city' => 'Terndrup',
                            'code' => '9575',
                        ),
                    1230 =>
                        array(
                            'city' => 'Aars',
                            'code' => '9600',
                        ),
                    1231 =>
                        array(
                            'city' => 'Nørager',
                            'code' => '9610',
                        ),
                    1232 =>
                        array(
                            'city' => 'Aalestrup',
                            'code' => '9620',
                        ),
                    1233 =>
                        array(
                            'city' => 'Gedsted',
                            'code' => '9631',
                        ),
                    1234 =>
                        array(
                            'city' => 'Møldrup',
                            'code' => '9632',
                        ),
                    1235 =>
                        array(
                            'city' => 'Farsø',
                            'code' => '9640',
                        ),
                    1236 =>
                        array(
                            'city' => 'Løgstør',
                            'code' => '9670',
                        ),
                    1237 =>
                        array(
                            'city' => 'Ranum',
                            'code' => '9681',
                        ),
                    1238 =>
                        array(
                            'city' => 'Fjerritslev',
                            'code' => '9690',
                        ),
                    1239 =>
                        array(
                            'city' => 'Brønderslev',
                            'code' => '9700',
                        ),
                    1240 =>
                        array(
                            'city' => 'Jerslev J',
                            'code' => '9740',
                        ),
                    1241 =>
                        array(
                            'city' => 'Østervrå',
                            'code' => '9750',
                        ),
                    1242 =>
                        array(
                            'city' => 'Vrå',
                            'code' => '9760',
                        ),
                    1243 =>
                        array(
                            'city' => 'Hjørring',
                            'code' => '9800',
                        ),
                    1244 =>
                        array(
                            'city' => 'Tårs',
                            'code' => '9830',
                        ),
                    1245 =>
                        array(
                            'city' => 'Hirtshals',
                            'code' => '9850',
                        ),
                    1246 =>
                        array(
                            'city' => 'Sindal',
                            'code' => '9870',
                        ),
                    1247 =>
                        array(
                            'city' => 'Bindslev',
                            'code' => '9881',
                        ),
                    1248 =>
                        array(
                            'city' => 'Frederikshavn',
                            'code' => '9900',
                        ),
                    1249 =>
                        array(
                            'city' => 'Læsø',
                            'code' => '9940',
                        ),
                    1250 =>
                        array(
                            'city' => 'Strandby',
                            'code' => '9970',
                        ),
                    1251 =>
                        array(
                            'city' => 'Jerup',
                            'code' => '9981',
                        ),
                    1252 =>
                        array(
                            'city' => 'Ålbæk',
                            'code' => '9982',
                        ),
                    1253 =>
                        array(
                            'city' => 'Skagen',
                            'code' => '9990',
                        ),
                )]
        );
    }
}
