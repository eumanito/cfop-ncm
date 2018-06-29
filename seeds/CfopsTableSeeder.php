<?php

use Illuminate\Database\Seeder;

class CfopsTableSeeder extends Seeder
{

    /**
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cfops')->delete();
        
        \DB::table('cfops')->insert(array (
            0 => 
            array (
                'codigo' => 1000,
                'descricao' => 'ENTRADAS OU AQUISIÇÕES DE SERVIÇOS DO ESTADO',
            ),
            1 => 
            array (
                'codigo' => 1100,
                'descricao' => 'COMPRAS PARA INDUSTRIALIZAÇÃO, COMERCIALIZAÇÃO OU PRESTAÇÃO DE SERVIÇOS',
            ),
            2 => 
            array (
                'codigo' => 1101,
                'descricao' => 'Compra para industrialização ou produção rural',
            ),
            3 => 
            array (
                'codigo' => 1102,
                'descricao' => 'Compra para comercialização',
            ),
            4 => 
            array (
                'codigo' => 1111,
                'descricao' => 'Compra para industrialização de mercadoria recebida anteriormente em consignação industrial',
            ),
            5 => 
            array (
                'codigo' => 1113,
                'descricao' => 'Compra para comercialização, de mercadoria recebida anteriormente em consignação mercantil',
            ),
            6 => 
            array (
                'codigo' => 1116,
                'descricao' => 'Compra para industrialização ou produção rural originada de encomenda para recebimento futuro',
            ),
            7 => 
            array (
                'codigo' => 1117,
                'descricao' => 'Compra para comercialização originada de encomenda para recebimento futuro',
            ),
            8 => 
            array (
                'codigo' => 1118,
                'descricao' => 'Compra de mercadoria para comercialização pelo adquirente originário, entregue pelo vendedor remetente ao destinatário, em venda à ordem',
            ),
            9 => 
            array (
                'codigo' => 1120,
                'descricao' => 'Compra para industrialização, em venda à ordem, já recebida do vendedor remetente',
            ),
            10 => 
            array (
                'codigo' => 1121,
                'descricao' => 'Compra para comercialização, em venda à ordem, já recebida do vendedor remetente',
            ),
            11 => 
            array (
                'codigo' => 1122,
                'descricao' => 'Compra para industrialização em que a mercadoria foi remetida pelo fornecedor ao industrializador sem transitar pelo estabelecimento adquirente',
            ),
            12 => 
            array (
                'codigo' => 1124,
                'descricao' => 'Industrialização efetuada por outra empresa',
            ),
            13 => 
            array (
                'codigo' => 1125,
                'descricao' => 'Industrialização efetuada por outra empresa quando a mercadoria remetida para utilização no processo de industrialização não transitou pelo estabelecimento adquirente da mercadoria',
            ),
            14 => 
            array (
                'codigo' => 1126,
                'descricao' => 'compras para utilização na prestação de serviços sujeitas ao ICMS',
            ),
            15 => 
            array (
                'codigo' => 1128,
                'descricao' => 'compras para utilização na prestação de serviços sujeitas ao ISSQN',
            ),
            16 => 
            array (
                'codigo' => 1150,
                'descricao' => 'TRANSFERÊNCIAS PARA INDUSTRIALIZAÇÃO, COMERCIALIZAÇÃO OU PRESTAÇÃO DE SERVIÇOS',
            ),
            17 => 
            array (
                'codigo' => 1151,
                'descricao' => 'Transferência para industrialização ou produção rural',
            ),
            18 => 
            array (
                'codigo' => 1152,
                'descricao' => 'Transferência para comercialização',
            ),
            19 => 
            array (
                'codigo' => 1153,
                'descricao' => 'Transferência de energia elétrica para distribuição',
            ),
            20 => 
            array (
                'codigo' => 1154,
                'descricao' => 'Transferência para utilização na prestação de serviço',
            ),
            21 => 
            array (
                'codigo' => 1200,
                'descricao' => 'DEVOLUÇÕES DE VENDAS DE PRODUÇÃO PRÓPRIA, DE TERCEIROS OU ANULAÇÕES DE VALORES',
            ),
            22 => 
            array (
                'codigo' => 1201,
                'descricao' => 'Devolução de venda de produção do estabelecimento',
            ),
            23 => 
            array (
                'codigo' => 1202,
                'descricao' => 'Devolução de venda de mercadoria adquirida ou recebida de terceiros',
            ),
            24 => 
            array (
                'codigo' => 1203,
                'descricao' => 'Devolução de venda de produção do estabelecimento, destinada à Zona Franca de Manaus ou Áreas de Livre Comércio',
            ),
            25 => 
            array (
                'codigo' => 1204,
                'descricao' => 'Devolução de venda de mercadoria adquirida ou recebida de terceiros, destinada à Zona Franca de Manaus ou Áreas de Livre Comércio',
            ),
            26 => 
            array (
                'codigo' => 1205,
                'descricao' => 'Anulação de valor relativo à prestação de serviço de comunicação',
            ),
            27 => 
            array (
                'codigo' => 1206,
                'descricao' => 'Anulação de valor relativo à prestação de serviço de transporte',
            ),
            28 => 
            array (
                'codigo' => 1207,
                'descricao' => 'Anulação de valor relativo à venda de energia elétrica',
            ),
            29 => 
            array (
                'codigo' => 1208,
                'descricao' => 'Devolução de produção do estabelecimento, remetida em transferência',
            ),
            30 => 
            array (
                'codigo' => 1209,
                'descricao' => 'Devolução de mercadoria adquirida ou recebida de terceiros, remetida em transferência',
            ),
            31 => 
            array (
                'codigo' => 1250,
                'descricao' => 'COMPRAS DE ENERGIA ELÉTRICA',
            ),
            32 => 
            array (
                'codigo' => 1251,
                'descricao' => 'Compra de energia elétrica para distribuição ou comercialização',
            ),
            33 => 
            array (
                'codigo' => 1252,
                'descricao' => 'Compra de energia elétrica por estabelecimento industrial',
            ),
            34 => 
            array (
                'codigo' => 1253,
                'descricao' => 'Compra de energia elétrica por estabelecimento comercial',
            ),
            35 => 
            array (
                'codigo' => 1254,
                'descricao' => 'Compra de energia elétrica por estabelecimento prestador de serviço de transporte',
            ),
            36 => 
            array (
                'codigo' => 1255,
                'descricao' => 'Compra de energia elétrica por estabelecimento prestador de serviço de comunicação',
            ),
            37 => 
            array (
                'codigo' => 1256,
                'descricao' => 'Compra de energia elétrica por estabelecimento de produtor rural',
            ),
            38 => 
            array (
                'codigo' => 1257,
                'descricao' => 'Compra de energia elétrica para consumo por demanda contratada',
            ),
            39 => 
            array (
                'codigo' => 1300,
                'descricao' => 'AQUISIÇÕES DE SERVIÇOS DE COMUNICAÇÃO',
            ),
            40 => 
            array (
                'codigo' => 1301,
                'descricao' => 'Aquisição de serviço de comunicação para execução de serviço da mesma natureza',
            ),
            41 => 
            array (
                'codigo' => 1302,
                'descricao' => 'Aquisição de serviço de comunicação por estabelecimento industrial',
            ),
            42 => 
            array (
                'codigo' => 1303,
                'descricao' => 'Aquisição de serviço de comunicação por estabelecimento comercial',
            ),
            43 => 
            array (
                'codigo' => 1304,
                'descricao' => 'Aquisição de serviço de comunicação por estabelecimento de prestador de serviço de transporte',
            ),
            44 => 
            array (
                'codigo' => 1305,
                'descricao' => 'Aquisição de serviço de comunicação por estabelecimento de geradora ou de distribuidora de energia elétrica 1.306 - Aquisição de serviço de comunicação por estabelecimento de produtor rural',
            ),
            45 => 
            array (
                'codigo' => 1350,
                'descricao' => 'AQUISIÇÕES DE SERVIÇOS DE TRANSPORTE',
            ),
            46 => 
            array (
                'codigo' => 1351,
                'descricao' => 'Aquisição de serviço de transporte para execução de serviço da mesma natureza',
            ),
            47 => 
            array (
                'codigo' => 1352,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento industrial',
            ),
            48 => 
            array (
                'codigo' => 1353,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento comercial',
            ),
            49 => 
            array (
                'codigo' => 1354,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento de prestador de serviço de comunicação',
            ),
            50 => 
            array (
                'codigo' => 1355,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento de geradora ou de distribuidora de energia elétrica',
            ),
            51 => 
            array (
                'codigo' => 1356,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento de produtor rural',
            ),
            52 => 
            array (
                'codigo' => 1360,
                'descricao' => 'Aquisição de serviço de transporte por contribuinte substituto em relação ao serviço de transporte',
            ),
            53 => 
            array (
                'codigo' => 1400,
                'descricao' => 'ENTRADAS DE MERCADORIAS SUJEITAS AO REGIME DE SUBSTITUIÇÃO TRIBUTÁRIA',
            ),
            54 => 
            array (
                'codigo' => 1401,
                'descricao' => 'Compra para industrialização ou produção rural em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            55 => 
            array (
                'codigo' => 1403,
                'descricao' => 'Compra para comercialização em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            56 => 
            array (
                'codigo' => 1406,
                'descricao' => 'Compra de bem para o ativo imobilizado cuja mercadoria está sujeita ao regime de substituição tributária',
            ),
            57 => 
            array (
                'codigo' => 1407,
                'descricao' => 'Compra de mercadoria para uso ou consumo cuja mercadoria está sujeita ao regime de substituição tributária',
            ),
            58 => 
            array (
                'codigo' => 1408,
                'descricao' => 'Transferência para industrialização ou produção rural em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            59 => 
            array (
                'codigo' => 1409,
                'descricao' => 'Transferência para comercialização em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            60 => 
            array (
                'codigo' => 1410,
                'descricao' => 'Devolução de venda de produção do estabelecimento em operação com produto sujeito ao regime de substituição tributária',
            ),
            61 => 
            array (
                'codigo' => 1411,
                'descricao' => 'Devolução de venda de mercadoria adquirida ou recebida de terceiros em operação com mercadoria sujeita ao regime de substituição tributária 1.414 - Retorno de produção do estabelecimento, remetida para venda fora do estabelecimento em operação com  produto sujeito ao regime de substituição tributária',
            ),
            62 => 
            array (
                'codigo' => 1415,
                'descricao' => 'Retorno de mercadoria adquirida ou recebida de terceiros, remetida para venda fora do estabelecimento em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            63 => 
            array (
                'codigo' => 1450,
                'descricao' => 'SISTEMAS DE INTEGRAÇÃO',
            ),
            64 => 
            array (
                'codigo' => 1451,
                'descricao' => 'Retorno de animal do estabelecimento produtor',
            ),
            65 => 
            array (
                'codigo' => 1452,
                'descricao' => 'Retorno de insumo não utilizado na produção',
            ),
            66 => 
            array (
                'codigo' => 1500,
                'descricao' => 'ENTRADAS DE MERCADORIAS REMETIDAS COM FIM ESPECÍFICO DE EXPORTAÇÃO E EVENTUAIS DEVOLUÇÕES',
            ),
            67 => 
            array (
                'codigo' => 1501,
                'descricao' => 'Entrada de mercadoria recebida com fim específico de exportação',
            ),
            68 => 
            array (
                'codigo' => 1503,
                'descricao' => 'Entrada decorrente de devolução de produto remetido com fim específico de exportação, de produção do estabelecimento',
            ),
            69 => 
            array (
                'codigo' => 1504,
                'descricao' => 'Entrada decorrente de devolução de mercadoria remetida com fim específico de exportação, adquirida ou recebida de terceiros',
            ),
            70 => 
            array (
                'codigo' => 1505,
                'descricao' => 'Entrada decorrente de devolução simbólica de mercadorias remetidas para formação de lote de exportação, de produtos industrializados ou produzidos pelo próprio estabelecimento',
            ),
            71 => 
            array (
                'codigo' => 1506,
                'descricao' => 'Entrada decorrente de devolução simbólica de mercadorias, adquiridas ou recebidas de terceiros, remetidas para formação de lote de exportação',
            ),
            72 => 
            array (
                'codigo' => 1550,
                'descricao' => 'OPERAÇÕES COM BENS DE ATIVO IMOBILIZADO E MATERIAIS PARA USO OU CONSUMO',
            ),
            73 => 
            array (
                'codigo' => 1551,
                'descricao' => 'Compra de bem para o ativo imobilizado',
            ),
            74 => 
            array (
                'codigo' => 1552,
                'descricao' => 'Transferência de bem do ativo imobilizado',
            ),
            75 => 
            array (
                'codigo' => 1553,
                'descricao' => 'Devolução de venda de bem do ativo imobilizado',
            ),
            76 => 
            array (
                'codigo' => 1554,
                'descricao' => 'Retorno de bem do ativo imobilizado remetido para uso fora do estabelecimento',
            ),
            77 => 
            array (
                'codigo' => 1555,
                'descricao' => 'Entrada de bem do ativo imobilizado de terceiro, remetido para uso no estabelecimento',
            ),
            78 => 
            array (
                'codigo' => 1556,
                'descricao' => 'Compra de material para uso ou consumo',
            ),
            79 => 
            array (
                'codigo' => 1557,
                'descricao' => 'Transferência de material para uso ou consumo',
            ),
            80 => 
            array (
                'codigo' => 1600,
                'descricao' => 'CRÉDITOS E RESSARCIMENTOS DE ICMS',
            ),
            81 => 
            array (
                'codigo' => 1601,
                'descricao' => 'Recebimento, por transferência, de crédito de ICMS',
            ),
            82 => 
            array (
                'codigo' => 1602,
                'descricao' => 'Recebimento, por transferência, de saldo credor de ICMS de outro estabelecimento da mesma empresa, para compensação de saldo devedor de ICMS',
            ),
            83 => 
            array (
                'codigo' => 1603,
                'descricao' => 'Ressarcimento de ICMS retido por substituição tributária 1.604 - Lançamento do crédito relativo à compra de bem para o ativo imobilizado',
            ),
            84 => 
            array (
                'codigo' => 1605,
                'descricao' => 'Recebimento, por transferência, de saldo devedor de ICMS de outro estabelecimento da mesma empresa',
            ),
            85 => 
            array (
                'codigo' => 1652,
                'descricao' => 'Compra de combustível ou lubrificante para comercialização',
            ),
            86 => 
            array (
                'codigo' => 1653,
                'descricao' => 'Compra de combustível ou lubrificante por consumidor ou usuário final',
            ),
            87 => 
            array (
                'codigo' => 1658,
                'descricao' => 'Transferência de combustível e lubrificante para industrialização',
            ),
            88 => 
            array (
                'codigo' => 1659,
                'descricao' => 'Transferência de combustível e lubrificante para comercialização',
            ),
            89 => 
            array (
                'codigo' => 1660,
                'descricao' => 'Devolução de venda de combustível ou lubrificante destinado à industrialização subseqüente',
            ),
            90 => 
            array (
                'codigo' => 1661,
                'descricao' => 'Devolução de venda de combustível ou lubrificante destinado à comercialização',
            ),
            91 => 
            array (
                'codigo' => 1662,
                'descricao' => 'Devolução de venda de combustível ou lubrificante destinado a consumidor ou usuário final',
            ),
            92 => 
            array (
                'codigo' => 1663,
                'descricao' => 'Entrada de combustível ou lubrificante para armazenagem',
            ),
            93 => 
            array (
                'codigo' => 1664,
                'descricao' => 'Retorno de combustível ou lubrificante remetido para armazenagem',
            ),
            94 => 
            array (
                'codigo' => 1900,
                'descricao' => 'OUTRAS ENTRADAS DE MERCADORIAS OU AQUISIÇÕES DE SERVIÇOS',
            ),
            95 => 
            array (
                'codigo' => 1901,
                'descricao' => 'Entrada para industrialização por encomenda',
            ),
            96 => 
            array (
                'codigo' => 1902,
                'descricao' => 'Retorno de mercadoria remetida para industrialização por encomenda',
            ),
            97 => 
            array (
                'codigo' => 1903,
                'descricao' => 'Entrada de mercadoria remetida para industrialização e não aplicada no referido processo',
            ),
            98 => 
            array (
                'codigo' => 1904,
                'descricao' => 'Retorno de remessa para venda fora do estabelecimento',
            ),
            99 => 
            array (
                'codigo' => 1905,
                'descricao' => 'Entrada de mercadoria recebida para depósito em depósito fechado ou armazém geral',
            ),
            100 => 
            array (
                'codigo' => 1906,
                'descricao' => 'Retorno de mercadoria remetida para depósito fechado ou armazém geral',
            ),
            101 => 
            array (
                'codigo' => 1907,
                'descricao' => 'Retorno simbólico de mercadoria remetida para depósito fechado ou armazém geral',
            ),
            102 => 
            array (
                'codigo' => 1908,
                'descricao' => 'Entrada de bem por conta de contrato de comodato',
            ),
            103 => 
            array (
                'codigo' => 1909,
                'descricao' => 'Retorno de bem remetido por conta de contrato de comodato',
            ),
            104 => 
            array (
                'codigo' => 1910,
                'descricao' => 'Entrada de bonificação, doação ou brinde',
            ),
            105 => 
            array (
                'codigo' => 1911,
                'descricao' => 'Entrada de amostra grátis',
            ),
            106 => 
            array (
                'codigo' => 1912,
                'descricao' => 'Entrada de mercadoria ou bem recebido para demonstração',
            ),
            107 => 
            array (
                'codigo' => 1913,
                'descricao' => 'Retorno de mercadoria ou bem remetido para demonstração',
            ),
            108 => 
            array (
                'codigo' => 1914,
                'descricao' => 'Retorno de mercadoria ou bem remetido para exposição ou feira',
            ),
            109 => 
            array (
                'codigo' => 1915,
                'descricao' => 'Entrada de mercadoria ou bem recebido para conserto ou reparo',
            ),
            110 => 
            array (
                'codigo' => 1916,
                'descricao' => 'Retorno de mercadoria ou bem remetido para conserto ou reparo',
            ),
            111 => 
            array (
                'codigo' => 1917,
                'descricao' => 'Entrada de mercadoria recebida em consignação mercantil ou industrial',
            ),
            112 => 
            array (
                'codigo' => 1918,
                'descricao' => 'Devolução de mercadoria remetida em consignação mercantil ou industrial',
            ),
            113 => 
            array (
                'codigo' => 1919,
                'descricao' => 'Devolução simbólica de mercadoria vendida ou utilizada em processo industrial, remetida anteriormente em consignação mercantil ou industrial',
            ),
            114 => 
            array (
                'codigo' => 1920,
                'descricao' => 'Entrada de vasilhame ou sacaria',
            ),
            115 => 
            array (
                'codigo' => 1921,
                'descricao' => 'Retorno de vasilhame ou sacaria',
            ),
            116 => 
            array (
                'codigo' => 1922,
                'descricao' => 'Lançamento efetuado a título de simples faturamento decorrente de compra para recebimento futuro',
            ),
            117 => 
            array (
                'codigo' => 1923,
                'descricao' => 'Entrada de mercadoria recebida do vendedor remetente, em venda à ordem',
            ),
            118 => 
            array (
                'codigo' => 1924,
                'descricao' => 'Entrada para industrialização por conta e ordem do adquirente da mercadoria, quando esta não transitar pelo estabelecimento do adquirente',
            ),
            119 => 
            array (
                'codigo' => 1925,
                'descricao' => 'Retorno de mercadoria remetida para industrialização por conta e ordem do adquirente da mercadoria, quando esta não transitar pelo estabelecimento do adquirente',
            ),
            120 => 
            array (
                'codigo' => 1926,
                'descricao' => 'Lançamento efetuado a título de reclassificação de mercadoria decorrente de formação de kit ou de sua desagregação',
            ),
            121 => 
            array (
                'codigo' => 1931,
                'descricao' => 'Lançamento efetuado pelo tomador do serviço de transporte quando a responsabilidade de retenção do imposto for atribuída ao remetente ou alienante da mercadoria, pelo serviço de transporte realizado por transportador autônomo ou por transportador não inscrito na unidade da Federação onde iniciado o serviço',
            ),
            122 => 
            array (
                'codigo' => 1932,
                'descricao' => 'Aquisição de serviço de transporte iniciado em unidade da Federação diversa daquela onde inscrito o prestador',
            ),
            123 => 
            array (
                'codigo' => 1933,
                'descricao' => 'Aquisição de serviço tributado pelo ISSQN',
            ),
            124 => 
            array (
                'codigo' => 1949,
                'descricao' => 'Outra entrada de mercadoria ou prestação de serviço não especificada',
            ),
            125 => 
            array (
                'codigo' => 2000,
                'descricao' => 'ENTRADAS OU AQUISIÇÕES DE SERVIÇOS DE OUTROS ESTADOS',
            ),
            126 => 
            array (
                'codigo' => 2100,
                'descricao' => 'COMPRAS PARA INDUSTRIALIZAÇÃO, COMERCIALIZAÇÃO OU PRESTAÇÃO DE SERVIÇOS',
            ),
            127 => 
            array (
                'codigo' => 2101,
                'descricao' => 'Compra para industrialização ou produção rural',
            ),
            128 => 
            array (
                'codigo' => 2102,
                'descricao' => 'Compra para comercialização',
            ),
            129 => 
            array (
                'codigo' => 2111,
                'descricao' => 'Compra para industrialização de mercadoria recebida anteriormente em consignação industrial',
            ),
            130 => 
            array (
                'codigo' => 2113,
                'descricao' => 'Compra para comercialização, de mercadoria recebida anteriormente em consignação mercantil',
            ),
            131 => 
            array (
                'codigo' => 2116,
                'descricao' => 'Compra para industrialização ou produção rural originada de encomenda para recebimento futuro',
            ),
            132 => 
            array (
                'codigo' => 2117,
                'descricao' => 'Compra para comercialização originada de encomenda para recebimento futuro',
            ),
            133 => 
            array (
                'codigo' => 2118,
                'descricao' => 'Compra de mercadoria para comercialização pelo adquirente originário, entregue pelo vendedor remetente ao destinatário, em venda à ordem',
            ),
            134 => 
            array (
                'codigo' => 2120,
                'descricao' => 'Compra para industrialização, em venda à ordem, já recebida do vendedor remetente 2.121 - Compra para comercialização, em venda à ordem, já recebida do vendedor remetente',
            ),
            135 => 
            array (
                'codigo' => 2122,
                'descricao' => 'Compra para industrialização em que a mercadoria foi remetida pelo fornecedor ao industrializador sem transitar pelo estabelecimento adquirente',
            ),
            136 => 
            array (
                'codigo' => 2124,
                'descricao' => 'Industrialização efetuada por outra empresa',
            ),
            137 => 
            array (
                'codigo' => 2125,
                'descricao' => 'Industrialização efetuada por outra empresa quando a mercadoria remetida para utilização no processo de industrialização não transitou pelo estabelecimento adquirente da mercadoria',
            ),
            138 => 
            array (
                'codigo' => 2126,
                'descricao' => 'Compra para utilização na prestação de serviço',
            ),
            139 => 
            array (
                'codigo' => 2150,
                'descricao' => 'TRANSFERÊNCIAS PARA INDUSTRIALIZAÇÃO, COMERCIALIZAÇÃO OU PRESTAÇÃO DE SERVIÇOS',
            ),
            140 => 
            array (
                'codigo' => 2151,
                'descricao' => 'Transferência para industrialização ou produção rural',
            ),
            141 => 
            array (
                'codigo' => 2152,
                'descricao' => 'Transferência para comercialização',
            ),
            142 => 
            array (
                'codigo' => 2153,
                'descricao' => 'Transferência de energia elétrica para distribuição',
            ),
            143 => 
            array (
                'codigo' => 2154,
                'descricao' => 'Transferência para utilização na prestação de serviço',
            ),
            144 => 
            array (
                'codigo' => 2200,
                'descricao' => 'DEVOLUÇÕES DE VENDAS DE PRODUÇÃO PRÓPRIA, DE TERCEIROS OU ANULAÇÕES DE VALORES',
            ),
            145 => 
            array (
                'codigo' => 2201,
                'descricao' => 'Devolução de venda de produção do estabelecimento',
            ),
            146 => 
            array (
                'codigo' => 2202,
                'descricao' => 'Devolução de venda de mercadoria adquirida ou recebida de terceiros',
            ),
            147 => 
            array (
                'codigo' => 2203,
                'descricao' => 'Devolução de venda de produção do estabelecimento, destinada à Zona Franca de Manaus ou Áreas de Livre Comércio',
            ),
            148 => 
            array (
                'codigo' => 2204,
                'descricao' => 'Devolução de venda de mercadoria adquirida ou recebida de terceiros, destinada à Zona Franca de Manaus ou Áreas de Livre Comércio',
            ),
            149 => 
            array (
                'codigo' => 2205,
                'descricao' => 'Anulação de valor relativo à prestação de serviço de comunicação',
            ),
            150 => 
            array (
                'codigo' => 2206,
                'descricao' => 'Anulação de valor relativo à prestação de serviço de transporte',
            ),
            151 => 
            array (
                'codigo' => 2207,
                'descricao' => 'Anulação de valor relativo à venda de energia elétrica',
            ),
            152 => 
            array (
                'codigo' => 2208,
                'descricao' => 'Devolução de produção do estabelecimento, remetida em transferência',
            ),
            153 => 
            array (
                'codigo' => 2209,
                'descricao' => 'Devolução de mercadoria adquirida ou recebida de terceiros, remetida em transferência ',
            ),
            154 => 
            array (
                'codigo' => 2250,
                'descricao' => 'COMPRAS DE ENERGIA ELÉTRICA',
            ),
            155 => 
            array (
                'codigo' => 2251,
                'descricao' => 'Compra de energia elétrica para distribuição ou comercialização',
            ),
            156 => 
            array (
                'codigo' => 2252,
                'descricao' => 'Compra de energia elétrica por estabelecimento industrial',
            ),
            157 => 
            array (
                'codigo' => 2253,
                'descricao' => 'Compra de energia elétrica por estabelecimento comercial',
            ),
            158 => 
            array (
                'codigo' => 2254,
                'descricao' => 'Compra de energia elétrica por estabelecimento prestador de serviço de transporte',
            ),
            159 => 
            array (
                'codigo' => 2255,
                'descricao' => 'Compra de energia elétrica por estabelecimento prestador de serviço de comunicação',
            ),
            160 => 
            array (
                'codigo' => 2256,
                'descricao' => 'Compra de energia elétrica por estabelecimento de produtor rural',
            ),
            161 => 
            array (
                'codigo' => 2257,
                'descricao' => 'Compra de energia elétrica para consumo por demanda contratada',
            ),
            162 => 
            array (
                'codigo' => 2300,
                'descricao' => 'AQUISIÇÕES DE SERVIÇOS DE COMUNICAÇÃO',
            ),
            163 => 
            array (
                'codigo' => 2301,
                'descricao' => 'Aquisição de serviço de comunicação para execução de serviço da mesma natureza',
            ),
            164 => 
            array (
                'codigo' => 2302,
                'descricao' => 'Aquisição de serviço de comunicação por estabelecimento industrial',
            ),
            165 => 
            array (
                'codigo' => 2303,
                'descricao' => 'Aquisição de serviço de comunicação por estabelecimento comercial',
            ),
            166 => 
            array (
                'codigo' => 2304,
                'descricao' => 'Aquisição de serviço de comunicação por estabelecimento de prestador de serviço de transporte',
            ),
            167 => 
            array (
                'codigo' => 2305,
                'descricao' => 'Aquisição de serviço de comunicação por estabelecimento de geradora ou de distribuidora de energia elétrica',
            ),
            168 => 
            array (
                'codigo' => 2306,
                'descricao' => 'Aquisição de serviço de comunicação por estabelecimento de produtor rural',
            ),
            169 => 
            array (
                'codigo' => 2351,
                'descricao' => 'Aquisição de serviço de transporte para execução de serviço da mesma natureza',
            ),
            170 => 
            array (
                'codigo' => 2352,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento industrial',
            ),
            171 => 
            array (
                'codigo' => 2353,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento comercial',
            ),
            172 => 
            array (
                'codigo' => 2354,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento de prestador de serviço de comunicação',
            ),
            173 => 
            array (
                'codigo' => 2355,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento de geradora ou de distribuidora de energia elétrica',
            ),
            174 => 
            array (
                'codigo' => 2356,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento de produtor rural',
            ),
            175 => 
            array (
                'codigo' => 2400,
                'descricao' => 'ENTRADAS DE MERCADORIAS SUJEITAS AO REGIME DE SUBSTITUIÇÃO TRIBUTÁRIA',
            ),
            176 => 
            array (
                'codigo' => 2401,
                'descricao' => 'Compra para industrialização ou produção rural em operação com mercadoria sujeita ao regime desubstituição tributária',
            ),
            177 => 
            array (
                'codigo' => 2403,
                'descricao' => 'Compra para comercialização em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            178 => 
            array (
                'codigo' => 2406,
                'descricao' => 'Compra de bem para o ativo imobilizado cuja mercadoria está sujeita ao regime de substituição tributária',
            ),
            179 => 
            array (
                'codigo' => 2407,
                'descricao' => 'Compra de mercadoria para uso ou consumo cuja mercadoria está sujeita ao regime de substituição tributária',
            ),
            180 => 
            array (
                'codigo' => 2408,
                'descricao' => 'Transferência para industrialização ou produção rural em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            181 => 
            array (
                'codigo' => 2409,
                'descricao' => 'Transferência para comercialização em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            182 => 
            array (
                'codigo' => 2410,
                'descricao' => 'Devolução de venda de produção do estabelecimento em operação com produto sujeito ao regime desubstituição tributária',
            ),
            183 => 
            array (
                'codigo' => 2411,
                'descricao' => 'Devolução de venda de mercadoria adquirida ou recebida de terceiros em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            184 => 
            array (
                'codigo' => 2414,
                'descricao' => 'Retorno de produção do estabelecimento, remetida para venda fora do estabelecimento em operação com produto sujeito ao regime de substituição tributária',
            ),
            185 => 
            array (
                'codigo' => 2415,
                'descricao' => 'Retorno de mercadoria adquirida ou recebida de terceiros, remetida para venda fora do estabelecimento em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            186 => 
            array (
                'codigo' => 2500,
                'descricao' => 'ENTRADAS DE MERCADORIAS REMETIDAS COM FIM ESPECÍFICO DE EXPORTAÇÃO E EVENTUAIS DEVOLUÇÕES',
            ),
            187 => 
            array (
                'codigo' => 2501,
                'descricao' => 'Entrada de mercadoria recebida com fim específico de exportação',
            ),
            188 => 
            array (
                'codigo' => 2503,
                'descricao' => 'Entrada decorrente de devolução de produto remetido com fim específico de exportação, de produção do estabelecimento',
            ),
            189 => 
            array (
                'codigo' => 2504,
                'descricao' => 'Entrada decorrente de devolução de mercadoria remetida com fim específico de exportação, adquirida ou recebida de terceiros',
            ),
            190 => 
            array (
                'codigo' => 2505,
                'descricao' => 'Entrada decorrente de devolução simbólica de mercadorias remetidas para formação de lote de exportação, de produtos industrializados ou produzidos pelo próprio estabelecimento',
            ),
            191 => 
            array (
                'codigo' => 2506,
                'descricao' => 'Entrada decorrente de devolução simbólica de mercadorias, adquiridas ou recebidas de terceiros, remetidas para formação de lote de exportação',
            ),
            192 => 
            array (
                'codigo' => 2550,
                'descricao' => 'OPERAÇÕES COM BENS DE ATIVO IMOBILIZADO E MATERIAIS PARA USO OU CONSUMO',
            ),
            193 => 
            array (
                'codigo' => 2551,
                'descricao' => 'Compra de bem para o ativo imobilizado',
            ),
            194 => 
            array (
                'codigo' => 2552,
                'descricao' => 'Transferência de bem do ativo imobilizado',
            ),
            195 => 
            array (
                'codigo' => 2553,
                'descricao' => 'Devolução de venda de bem do ativo imobilizado',
            ),
            196 => 
            array (
                'codigo' => 2554,
                'descricao' => 'Retorno de bem do ativo imobilizado remetido para uso fora do estabelecimento',
            ),
            197 => 
            array (
                'codigo' => 2555,
                'descricao' => 'Entrada de bem do ativo imobilizado de terceiro, remetido para uso no estabelecimento',
            ),
            198 => 
            array (
                'codigo' => 2556,
                'descricao' => 'Compra de material para uso ou consumo',
            ),
            199 => 
            array (
                'codigo' => 2557,
                'descricao' => 'Transferência de material para uso ou consumo',
            ),
            200 => 
            array (
                'codigo' => 2600,
                'descricao' => 'CRÉDITOS E RESSARCIMENTOS DE ICMS',
            ),
            201 => 
            array (
                'codigo' => 2603,
                'descricao' => 'Ressarcimento de ICMS retido por substituição tributária',
            ),
            202 => 
            array (
                'codigo' => 2651,
                'descricao' => 'Compra de combustível ou lubrificante para industrialização subseqüente',
            ),
            203 => 
            array (
                'codigo' => 2652,
                'descricao' => 'Compra de combustível ou lubrificante para comercialização',
            ),
            204 => 
            array (
                'codigo' => 2653,
                'descricao' => 'Compra de combustível ou lubrificante por consumidor ou usuário final',
            ),
            205 => 
            array (
                'codigo' => 2658,
                'descricao' => 'Transferência de combustível e lubrificante para industrialização',
            ),
            206 => 
            array (
                'codigo' => 2659,
                'descricao' => 'Transferência de combustível e lubrificante para comercialização',
            ),
            207 => 
            array (
                'codigo' => 2660,
                'descricao' => 'Devolução de venda de combustível ou lubrificante destinado à industrialização subseqüente',
            ),
            208 => 
            array (
                'codigo' => 2661,
                'descricao' => 'Devolução de venda de combustível ou lubrificante destinado à comercialização',
            ),
            209 => 
            array (
                'codigo' => 2662,
                'descricao' => 'Devolução de venda de combustível ou lubrificante destinado a consumidor ou usuário final',
            ),
            210 => 
            array (
                'codigo' => 2663,
                'descricao' => 'Entrada de combustível ou lubrificante para armazenagem',
            ),
            211 => 
            array (
                'codigo' => 2664,
                'descricao' => 'Retorno de combustível ou lubrificante remetido para armazenagem ',
            ),
            212 => 
            array (
                'codigo' => 2900,
                'descricao' => 'OUTRAS ENTRADAS DE MERCADORIAS OU AQUISIÇÕES DE SERVIÇOS',
            ),
            213 => 
            array (
                'codigo' => 2901,
                'descricao' => 'Entrada para industrialização por encomenda',
            ),
            214 => 
            array (
                'codigo' => 2902,
                'descricao' => 'Retorno de mercadoria remetida para industrialização por encomenda',
            ),
            215 => 
            array (
                'codigo' => 2903,
                'descricao' => 'Entrada de mercadoria remetida para industrialização e não aplicada no referido processo',
            ),
            216 => 
            array (
                'codigo' => 2904,
                'descricao' => 'Retorno de remessa para venda fora do estabelecimento',
            ),
            217 => 
            array (
                'codigo' => 2905,
                'descricao' => 'Entrada de mercadoria recebida para depósito em depósito fechado ou armazém geral',
            ),
            218 => 
            array (
                'codigo' => 2906,
                'descricao' => 'Retorno de mercadoria remetida para depósito fechado ou armazém geral',
            ),
            219 => 
            array (
                'codigo' => 2907,
                'descricao' => 'Retorno simbólico de mercadoria remetida para depósito fechado ou armazém geral',
            ),
            220 => 
            array (
                'codigo' => 2908,
                'descricao' => 'Entrada de bem por conta de contrato de comodato',
            ),
            221 => 
            array (
                'codigo' => 2909,
                'descricao' => 'Retorno de bem remetido por conta de contrato de comodato',
            ),
            222 => 
            array (
                'codigo' => 2910,
                'descricao' => 'Entrada de bonificação, doação ou brinde',
            ),
            223 => 
            array (
                'codigo' => 2911,
                'descricao' => 'Entrada de amostra grátis',
            ),
            224 => 
            array (
                'codigo' => 2912,
                'descricao' => 'Entrada de mercadoria ou bem recebido para demonstração',
            ),
            225 => 
            array (
                'codigo' => 2913,
                'descricao' => 'Retorno de mercadoria ou bem remetido para demonstração',
            ),
            226 => 
            array (
                'codigo' => 2914,
                'descricao' => 'Retorno de mercadoria ou bem remetido para exposição ou feira',
            ),
            227 => 
            array (
                'codigo' => 2915,
                'descricao' => 'Entrada de mercadoria ou bem recebido para conserto ou reparo',
            ),
            228 => 
            array (
                'codigo' => 2916,
                'descricao' => 'Retorno de mercadoria ou bem remetido para conserto ou reparo',
            ),
            229 => 
            array (
                'codigo' => 2917,
                'descricao' => 'Entrada de mercadoria recebida em consignação mercantil ou industrial',
            ),
            230 => 
            array (
                'codigo' => 2918,
                'descricao' => 'Devolução de mercadoria remetida em consignação mercantil ou industrial',
            ),
            231 => 
            array (
                'codigo' => 2919,
                'descricao' => 'Devolução simbólica de mercadoria vendida ou utilizada em processo industrial, remetida anteriormente em consignação mercantil ou industrial',
            ),
            232 => 
            array (
                'codigo' => 2920,
                'descricao' => 'Entrada de vasilhame ou sacaria',
            ),
            233 => 
            array (
                'codigo' => 2921,
                'descricao' => 'Retorno de vasilhame ou sacaria',
            ),
            234 => 
            array (
                'codigo' => 2922,
                'descricao' => 'Lançamento efetuado a título de simples faturamento decorrente de compra para recebimento futuro',
            ),
            235 => 
            array (
                'codigo' => 2923,
                'descricao' => 'Entrada de mercadoria recebida do vendedor remetente, em venda à ordem',
            ),
            236 => 
            array (
                'codigo' => 2924,
                'descricao' => 'Entrada para industrialização por conta e ordem do adquirente da mercadoria, quando esta não transitar pelo estabelecimento do adquirente',
            ),
            237 => 
            array (
                'codigo' => 2925,
                'descricao' => 'Retorno de mercadoria remetida para industrialização por conta e ordem do adquirente da mercadoria, quando esta não transitar pelo estabelecimento do adquirente',
            ),
            238 => 
            array (
                'codigo' => 2931,
                'descricao' => 'Lançamento efetuado pelo tomador do serviço de transporte quando a responsabilidade de retenção do imposto for atribuída ao remetente ou alienante da mercadoria, pelo serviço de transporte realizado por transportador autônomo ou por transportador não inscrito na unidade da Federação onde iniciado o serviço',
            ),
            239 => 
            array (
                'codigo' => 2932,
                'descricao' => 'Aquisição de serviço de transporte iniciado em unidade da Federação diversa daquela onde inscrito o prestador',
            ),
            240 => 
            array (
                'codigo' => 2933,
                'descricao' => 'Aquisição de serviço tributado pelo ISSQN',
            ),
            241 => 
            array (
                'codigo' => 2949,
                'descricao' => 'Outra entrada de mercadoria ou prestação de serviço não especificado ',
            ),
            242 => 
            array (
                'codigo' => 3000,
                'descricao' => 'ENTRADAS OU AQUISIÇÕES DE SERVIÇOS DO EXTERIOR ',
            ),
            243 => 
            array (
                'codigo' => 3100,
                'descricao' => 'COMPRAS PARA INDUSTRIALIZAÇÃO, COMERCIALIZAÇÃO OU PRESTAÇÃO DE SERVIÇOS',
            ),
            244 => 
            array (
                'codigo' => 3101,
                'descricao' => 'Compra para industrialização ou produção rural',
            ),
            245 => 
            array (
                'codigo' => 3102,
                'descricao' => 'Compra para comercialização',
            ),
            246 => 
            array (
                'codigo' => 3126,
                'descricao' => 'Compra para utilização na prestação de serviço',
            ),
            247 => 
            array (
                'codigo' => 3127,
                'descricao' => 'Compra para industrialização sob o regime de drawback" "',
            ),
            248 => 
            array (
                'codigo' => 3200,
                'descricao' => 'DEVOLUÇÕES DE VENDAS DE PRODUÇÃO PRÓPRIA, DE TERCEIROS OU ANULAÇÕES DE VALORES',
            ),
            249 => 
            array (
                'codigo' => 3201,
                'descricao' => 'Devolução de venda de produção do estabelecimento',
            ),
            250 => 
            array (
                'codigo' => 3202,
                'descricao' => 'Devolução de venda de mercadoria adquirida ou recebida de terceiros',
            ),
            251 => 
            array (
                'codigo' => 3205,
                'descricao' => 'Anulação de valor relativo à prestação de serviço de comunicação',
            ),
            252 => 
            array (
                'codigo' => 3206,
                'descricao' => 'Anulação de valor relativo à prestação de serviço de transporte',
            ),
            253 => 
            array (
                'codigo' => 3207,
                'descricao' => 'Anulação de valor relativo à venda de energia elétrica',
            ),
            254 => 
            array (
                'codigo' => 3211,
                'descricao' => 'Devolução de venda de produção do estabelecimento sob o regime de drawback" "',
            ),
            255 => 
            array (
                'codigo' => 3250,
                'descricao' => 'COMPRAS DE ENERGIA ELÉTRICA',
            ),
            256 => 
            array (
                'codigo' => 3251,
                'descricao' => 'Compra de energia elétrica para distribuição ou comercialização ',
            ),
            257 => 
            array (
                'codigo' => 3300,
                'descricao' => 'AQUISIÇÕES DE SERVIÇOS DE COMUNICAÇÃO',
            ),
            258 => 
            array (
                'codigo' => 3301,
                'descricao' => 'Aquisição de serviço de comunicação para execução de serviço da mesma natureza ',
            ),
            259 => 
            array (
                'codigo' => 3350,
                'descricao' => 'AQUISIÇÕES DE SERVIÇOS DE TRANSPORTE',
            ),
            260 => 
            array (
                'codigo' => 3351,
                'descricao' => 'Aquisição de serviço de transporte para execução de serviço da mesma natureza',
            ),
            261 => 
            array (
                'codigo' => 3352,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento industrial',
            ),
            262 => 
            array (
                'codigo' => 3353,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento comercial',
            ),
            263 => 
            array (
                'codigo' => 3354,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento de prestador de serviço de comunicação',
            ),
            264 => 
            array (
                'codigo' => 3355,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento de geradora ou de distribuidora de energia elétrica',
            ),
            265 => 
            array (
                'codigo' => 3356,
                'descricao' => 'Aquisição de serviço de transporte por estabelecimento de produtor rural ',
            ),
            266 => 
            array (
                'codigo' => 3500,
                'descricao' => 'ENTRADAS DE MERCADORIAS REMETIDAS COM FIM ESPECÍFICO DE EXPORTAÇÃO E EVENTUAIS DEVOLUÇÕES',
            ),
            267 => 
            array (
                'codigo' => 3503,
                'descricao' => 'Devolução de mercadoria exportada que tenha sido recebida com fim específico de exportação ',
            ),
            268 => 
            array (
                'codigo' => 3550,
                'descricao' => 'OPERAÇÕES COM BENS DE ATIVO IMOBILIZADO E MATERIAIS PARA USO OU CONSUMO',
            ),
            269 => 
            array (
                'codigo' => 3551,
                'descricao' => 'Compra de bem para o ativo imobilizado',
            ),
            270 => 
            array (
                'codigo' => 3553,
                'descricao' => 'Devolução de venda de bem do ativo imobilizado',
            ),
            271 => 
            array (
                'codigo' => 3556,
                'descricao' => 'Compra de material para uso ou consumo',
            ),
            272 => 
            array (
                'codigo' => 3651,
                'descricao' => 'Compra de combustível ou lubrificante para industrialização subseqüente',
            ),
            273 => 
            array (
                'codigo' => 3652,
                'descricao' => 'Compra de combustível ou lubrificante para comercialização',
            ),
            274 => 
            array (
                'codigo' => 3653,
                'descricao' => 'Compra de combustível ou lubrificante por consumidor ou usuário final ',
            ),
            275 => 
            array (
                'codigo' => 3900,
                'descricao' => 'OUTRAS ENTRADAS DE MERCADORIAS OU AQUISIÇÕES DE SERVIÇOS',
            ),
            276 => 
            array (
                'codigo' => 3930,
                'descricao' => 'Lançamento efetuado a título de entrada de bem sob amparo de regime especial aduaneiro de admissão temporária',
            ),
            277 => 
            array (
                'codigo' => 3949,
                'descricao' => 'Outra entrada de mercadoria ou prestação de serviço não especificado ',
            ),
            278 => 
            array (
                'codigo' => 5000,
                'descricao' => 'SAÍDAS OU PRESTAÇÕES DE SERVIÇOS PARA O ESTADO ',
            ),
            279 => 
            array (
                'codigo' => 5100,
                'descricao' => 'VENDAS DE PRODUÇÃO PRÓPRIA OU DE TERCEIROS',
            ),
            280 => 
            array (
                'codigo' => 5101,
                'descricao' => 'Venda de produção do estabelecimento',
            ),
            281 => 
            array (
                'codigo' => 5102,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros',
            ),
            282 => 
            array (
                'codigo' => 5103,
                'descricao' => 'Venda de produção do estabelecimento, efetuada fora do estabelecimento',
            ),
            283 => 
            array (
                'codigo' => 5104,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, efetuada fora do estabelecimento',
            ),
            284 => 
            array (
                'codigo' => 5105,
                'descricao' => 'Venda de produção do estabelecimento que não deva por ele transitar',
            ),
            285 => 
            array (
                'codigo' => 5106,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, que não deva por ele transitar',
            ),
            286 => 
            array (
                'codigo' => 5109,
                'descricao' => 'Venda de produção do estabelecimento, destinada à Zona Franca de Manaus ou Áreas de Livre Comércio',
            ),
            287 => 
            array (
                'codigo' => 5110,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, destinada à Zona Franca de Manaus ou Áreas de Livre Comércio',
            ),
            288 => 
            array (
                'codigo' => 5111,
                'descricao' => 'Venda de produção do estabelecimento remetida anteriormente em consignação industrial',
            ),
            289 => 
            array (
                'codigo' => 5112,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros remetida anteriormente em consignação industrial',
            ),
            290 => 
            array (
                'codigo' => 5113,
                'descricao' => 'Venda de produção do estabelecimento remetida anteriormente em consignação mercantil',
            ),
            291 => 
            array (
                'codigo' => 5114,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros remetida anteriormente em consignação mercantil',
            ),
            292 => 
            array (
                'codigo' => 5115,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, recebida anteriormente em consignação mercantil',
            ),
            293 => 
            array (
                'codigo' => 5116,
                'descricao' => 'Venda de produção do estabelecimento originada de encomenda para entrega futura',
            ),
            294 => 
            array (
                'codigo' => 5117,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, originada de encomenda para entrega futura',
            ),
            295 => 
            array (
                'codigo' => 5118,
                'descricao' => 'Venda de produção do estabelecimento entregue ao destinatário por conta e ordem do adquirente originário, em venda à ordem',
            ),
            296 => 
            array (
                'codigo' => 5119,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros entregue ao destinatário por conta e ordem do adquirente originário, em venda à ordem',
            ),
            297 => 
            array (
                'codigo' => 5120,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros entregue ao destinatário pelo vendedor remetente, em venda à ordem',
            ),
            298 => 
            array (
                'codigo' => 5122,
                'descricao' => 'Venda de produção do estabelecimento remetida para industrialização, por conta e ordem do adquirente, sem transitar pelo estabelecimento do adquirente',
            ),
            299 => 
            array (
                'codigo' => 5123,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros remetida para industrialização, por conta e ordem do adquirente, sem transitar pelo estabelecimento do adquirente',
            ),
            300 => 
            array (
                'codigo' => 5124,
                'descricao' => 'Industrialização efetuada para outra empresa',
            ),
            301 => 
            array (
                'codigo' => 5125,
                'descricao' => 'Industrialização efetuada para outra empresa quando a mercadoria recebida para utilização no processo de industrialização não transitar pelo estabelecimento adquirente da mercadoria',
            ),
            302 => 
            array (
                'codigo' => 5150,
                'descricao' => 'TRANSFERÊNCIAS DE PRODUÇÃO PRÓPRIA OU DE TERCEIROS',
            ),
            303 => 
            array (
                'codigo' => 5151,
                'descricao' => 'Transferência de produção do estabelecimento',
            ),
            304 => 
            array (
                'codigo' => 5152,
                'descricao' => 'Transferência de mercadoria adquirida ou recebida de terceiros',
            ),
            305 => 
            array (
                'codigo' => 5153,
                'descricao' => 'Transferência de energia elétrica',
            ),
            306 => 
            array (
                'codigo' => 5155,
                'descricao' => 'Transferência de produção do estabelecimento, que não deva por ele transitar',
            ),
            307 => 
            array (
                'codigo' => 5156,
                'descricao' => 'Transferência de mercadoria adquirida ou recebida de terceiros, que não deva por ele transitar',
            ),
            308 => 
            array (
                'codigo' => 5200,
                'descricao' => 'DEVOLUÇÕES DE COMPRAS PARA INDUSTRIALIZAÇÃO, COMERCIALIZAÇÃO OU ANULAÇÕES DE VALORES',
            ),
            309 => 
            array (
                'codigo' => 5201,
                'descricao' => 'Devolução de compra para industrialização ou produção rural',
            ),
            310 => 
            array (
                'codigo' => 5202,
                'descricao' => 'Devolução de compra para comercialização',
            ),
            311 => 
            array (
                'codigo' => 5205,
                'descricao' => 'Anulação de valor relativo a aquisição de serviço de comunicação',
            ),
            312 => 
            array (
                'codigo' => 5206,
                'descricao' => 'Anulação de valor relativo a aquisição de serviço de transporte',
            ),
            313 => 
            array (
                'codigo' => 5207,
                'descricao' => 'Anulação de valor relativo à compra de energia elétrica',
            ),
            314 => 
            array (
                'codigo' => 5208,
                'descricao' => 'Devolução de mercadoria recebida em transferência para industrialização ou produção rural',
            ),
            315 => 
            array (
                'codigo' => 5209,
                'descricao' => 'Devolução de mercadoria recebida em transferência para comercialização',
            ),
            316 => 
            array (
                'codigo' => 5210,
                'descricao' => 'Devolução de compra para utilização na prestação de serviço sujeitas ao ICMS ou ISSQN',
            ),
            317 => 
            array (
                'codigo' => 5250,
                'descricao' => 'VENDAS DE ENERGIA ELÉTRICA',
            ),
            318 => 
            array (
                'codigo' => 5251,
                'descricao' => 'Venda de energia elétrica para distribuição ou comercialização',
            ),
            319 => 
            array (
                'codigo' => 5252,
                'descricao' => 'Venda de energia elétrica para estabelecimento industrial',
            ),
            320 => 
            array (
                'codigo' => 5253,
                'descricao' => 'Venda de energia elétrica para estabelecimento comercial',
            ),
            321 => 
            array (
                'codigo' => 5254,
                'descricao' => 'Venda de energia elétrica para estabelecimento prestador de serviço de transporte',
            ),
            322 => 
            array (
                'codigo' => 5255,
                'descricao' => 'Venda de energia elétrica para estabelecimento prestador de serviço de comunicação',
            ),
            323 => 
            array (
                'codigo' => 5256,
                'descricao' => 'Venda de energia elétrica para estabelecimento de produtor rural',
            ),
            324 => 
            array (
                'codigo' => 5257,
                'descricao' => 'Venda de energia elétrica para consumo por demanda contratada',
            ),
            325 => 
            array (
                'codigo' => 5258,
                'descricao' => 'Venda de energia elétrica a não contribuinte ',
            ),
            326 => 
            array (
                'codigo' => 5300,
                'descricao' => 'PRESTAÇÕES DE SERVIÇOS DE COMUNICAÇÃO',
            ),
            327 => 
            array (
                'codigo' => 5301,
                'descricao' => 'Prestação de serviço de comunicação para execução de serviço da mesma natureza',
            ),
            328 => 
            array (
                'codigo' => 5302,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento industrial',
            ),
            329 => 
            array (
                'codigo' => 5303,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento comercial',
            ),
            330 => 
            array (
                'codigo' => 5304,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento de prestador de serviço de transporte',
            ),
            331 => 
            array (
                'codigo' => 5305,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento de geradora ou de distribuidora de energia elétrica',
            ),
            332 => 
            array (
                'codigo' => 5306,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento de produtor rural',
            ),
            333 => 
            array (
                'codigo' => 5307,
                'descricao' => 'Prestação de serviço de comunicação a não contribuinte ',
            ),
            334 => 
            array (
                'codigo' => 5350,
                'descricao' => 'PRESTAÇÕES DE SERVIÇOS DE TRANSPORTE',
            ),
            335 => 
            array (
                'codigo' => 5351,
                'descricao' => 'Prestação de serviço de transporte para execução de serviço da mesma natureza',
            ),
            336 => 
            array (
                'codigo' => 5352,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento industrial',
            ),
            337 => 
            array (
                'codigo' => 5353,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento comercial',
            ),
            338 => 
            array (
                'codigo' => 5354,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento de prestador de serviço de comunicação',
            ),
            339 => 
            array (
                'codigo' => 5355,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento de geradora ou de distribuidora de energia elétrica',
            ),
            340 => 
            array (
                'codigo' => 5356,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento de produtor rural',
            ),
            341 => 
            array (
                'codigo' => 5357,
                'descricao' => 'Prestação de serviço de transporte a não contribuinte',
            ),
            342 => 
            array (
                'codigo' => 5359,
                'descricao' => 'Prestação de serviço de transporte a contribuinte ou a não contribuinte quando a mercadoria transportada está dispensada de emissão de nota fiscal',
            ),
            343 => 
            array (
                'codigo' => 5360,
                'descricao' => 'Prestação de serviço de transporte a contribuinte substituto em relação ao serviço de transporte',
            ),
            344 => 
            array (
                'codigo' => 5400,
                'descricao' => 'SAÍDAS DE MERCADORIAS SUJEITAS AO REGIME DE SUBSTITUIÇÃO TRIBUTÁRIA',
            ),
            345 => 
            array (
                'codigo' => 5401,
                'descricao' => 'Venda de produção do estabelecimento em operação com produto sujeito ao regime de substituição tributária, na condição de contribuinte substituto',
            ),
            346 => 
            array (
                'codigo' => 5402,
                'descricao' => 'Venda de produção do estabelecimento de produto sujeito ao regime de substituição tributária, em operação entre contribuintes substitutos do mesmo produto',
            ),
            347 => 
            array (
                'codigo' => 5403,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros em operação com mercadoria sujeita ao regime de substituição tributária, na condição de contribuinte substituto',
            ),
            348 => 
            array (
                'codigo' => 5405,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros em operação com mercadoria sujeita ao regime de substituição tributária, na condição de contribuinte substituído',
            ),
            349 => 
            array (
                'codigo' => 5408,
                'descricao' => 'Transferência de produção do estabelecimento em operação com produto sujeito ao regime de substituição tributária',
            ),
            350 => 
            array (
                'codigo' => 5409,
                'descricao' => 'Transferência de mercadoria adquirida ou recebida de terceiros em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            351 => 
            array (
                'codigo' => 5410,
                'descricao' => 'Devolução de compra para industrialização ou produção rural em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            352 => 
            array (
                'codigo' => 5411,
                'descricao' => 'Devolução de compra para comercialização em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            353 => 
            array (
                'codigo' => 5412,
                'descricao' => 'Devolução de bem do ativo imobilizado, em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            354 => 
            array (
                'codigo' => 5413,
                'descricao' => 'Devolução de mercadoria destinada ao uso ou consumo, em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            355 => 
            array (
                'codigo' => 5414,
                'descricao' => 'Remessa de produção do estabelecimento para venda fora do estabelecimento em operação com produto sujeito ao regime de substituição tributária',
            ),
            356 => 
            array (
                'codigo' => 5415,
                'descricao' => 'Remessa de mercadoria adquirida ou recebida de terceiros para venda fora do estabelecimento, em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            357 => 
            array (
                'codigo' => 5450,
                'descricao' => 'SISTEMAS DE INTEGRAÇÃO',
            ),
            358 => 
            array (
                'codigo' => 5451,
                'descricao' => 'Remessa de animal e de insumo para estabelecimento produtor',
            ),
            359 => 
            array (
                'codigo' => 5500,
                'descricao' => 'REMESSAS COM FIM ESPECÍFICO DE EXPORTAÇÃO E EVENTUAIS DEVOLUÇÕES',
            ),
            360 => 
            array (
                'codigo' => 5501,
                'descricao' => 'Remessa de produção do estabelecimento, com fim específico de exportação 5.502 - Remessa de mercadoria adquirida ou recebida de terceiros, com fim específico de exportação',
            ),
            361 => 
            array (
                'codigo' => 5503,
                'descricao' => 'Devolução de mercadoria recebida com fim específico de exportação',
            ),
            362 => 
            array (
                'codigo' => 5504,
                'descricao' => 'Remessa de mercadorias para formação de lote de exportação, de produtos industrializados ou produzidos pelo próprio estabelecimento',
            ),
            363 => 
            array (
                'codigo' => 5505,
                'descricao' => 'Remessa de mercadorias, adquiridas ou recebidas de terceiros, para formação de lote de exportação ',
            ),
            364 => 
            array (
                'codigo' => 5550,
                'descricao' => 'OPERAÇÕES COM BENS DE ATIVO IMOBILIZADO E MATERIAIS PARA USO OU CONSUMO',
            ),
            365 => 
            array (
                'codigo' => 5551,
                'descricao' => 'Venda de bem do ativo imobilizado',
            ),
            366 => 
            array (
                'codigo' => 5552,
                'descricao' => 'Transferência de bem do ativo imobilizado',
            ),
            367 => 
            array (
                'codigo' => 5553,
                'descricao' => 'Devolução de compra de bem para o ativo imobilizado',
            ),
            368 => 
            array (
                'codigo' => 5554,
                'descricao' => 'Remessa de bem do ativo imobilizado para uso fora do estabelecimento',
            ),
            369 => 
            array (
                'codigo' => 5555,
                'descricao' => 'Devolução de bem do ativo imobilizado de terceiro, recebido para uso no estabelecimento',
            ),
            370 => 
            array (
                'codigo' => 5556,
                'descricao' => 'Devolução de compra de material de uso ou consumo',
            ),
            371 => 
            array (
                'codigo' => 5557,
                'descricao' => 'Transferência de material de uso ou consumo',
            ),
            372 => 
            array (
                'codigo' => 5600,
                'descricao' => 'CRÉDITOS E RESSARCIMENTOS DE ICMS',
            ),
            373 => 
            array (
                'codigo' => 5601,
                'descricao' => 'Transferência de crédito de ICMS acumulado',
            ),
            374 => 
            array (
                'codigo' => 5602,
                'descricao' => 'Transferência de saldo credor de ICMS para outro estabelecimento da mesma empresa, destinado à compensação de saldo devedor de ICMS',
            ),
            375 => 
            array (
                'codigo' => 5603,
                'descricao' => 'Ressarcimento de ICMS retido por substituição tributária',
            ),
            376 => 
            array (
                'codigo' => 5605,
                'descricao' => 'Transferência de saldo devedor de ICMS de outro estabelecimento da mesma empresa',
            ),
            377 => 
            array (
                'codigo' => 5606,
                'descricao' => 'Utilização de saldo credor de ICMS para extinção por compensação de débitos fiscais',
            ),
            378 => 
            array (
                'codigo' => 5651,
                'descricao' => 'Venda de combustível ou lubrificante de produção do estabelecimento destinado à industrialização subseqüente',
            ),
            379 => 
            array (
                'codigo' => 5652,
                'descricao' => 'Venda de combustível ou lubrificante de produção do estabelecimento destinado à comercialização',
            ),
            380 => 
            array (
                'codigo' => 5653,
                'descricao' => 'Venda de combustível ou lubrificante de produção do estabelecimento destinado a consumidor ou usuário final',
            ),
            381 => 
            array (
                'codigo' => 5654,
                'descricao' => 'Venda de combustível ou lubrificante adquirido ou recebido de terceiros destinado à industrialização subseqüente',
            ),
            382 => 
            array (
                'codigo' => 5655,
                'descricao' => 'Venda de combustível ou lubrificante adquirido ou recebido de terceiros destinado à comercialização',
            ),
            383 => 
            array (
                'codigo' => 5656,
                'descricao' => 'Venda de combustível ou lubrificante adquirido ou recebido de terceiros destinado a consumidor ou usuário final',
            ),
            384 => 
            array (
                'codigo' => 5657,
                'descricao' => 'Remessa de combustível ou lubrificante adquirido ou recebido de terceiros para venda fora do estabelecimento',
            ),
            385 => 
            array (
                'codigo' => 5658,
                'descricao' => 'Transferência de combustível ou lubrificante de produção do estabelecimento',
            ),
            386 => 
            array (
                'codigo' => 5659,
                'descricao' => 'Transferência de combustível ou lubrificante adquirido ou recebido de terceiro',
            ),
            387 => 
            array (
                'codigo' => 5660,
                'descricao' => 'Devolução de compra de combustível ou lubrificante adquirido para industrialização subseqüente',
            ),
            388 => 
            array (
                'codigo' => 5661,
                'descricao' => 'Devolução de compra de combustível ou lubrificante adquirido para comercialização',
            ),
            389 => 
            array (
                'codigo' => 5662,
                'descricao' => 'Devolução de compra de combustível ou lubrificante adquirido por consumidor ou usuário final',
            ),
            390 => 
            array (
                'codigo' => 5663,
                'descricao' => 'Remessa para armazenagem de combustível ou lubrificante',
            ),
            391 => 
            array (
                'codigo' => 5664,
                'descricao' => 'Retorno de combustível ou lubrificante recebido para armazenagem',
            ),
            392 => 
            array (
                'codigo' => 5665,
                'descricao' => 'Retorno simbólico de combustível ou lubrificante recebido para armazenagem',
            ),
            393 => 
            array (
                'codigo' => 5666,
                'descricao' => 'Remessa por conta e ordem de terceiros de combustível ou lubrificante recebido para armazenagem ',
            ),
            394 => 
            array (
                'codigo' => 5900,
                'descricao' => 'OUTRAS SAÍDAS DE MERCADORIAS OU PRESTAÇÕES DE SERVIÇOS',
            ),
            395 => 
            array (
                'codigo' => 5901,
                'descricao' => 'Remessa para industrialização por encomenda',
            ),
            396 => 
            array (
                'codigo' => 5902,
                'descricao' => 'Retorno de mercadoria utilizada na industrialização por encomenda',
            ),
            397 => 
            array (
                'codigo' => 5903,
                'descricao' => 'Retorno de mercadoria recebida para industrialização e não aplicada no referido processo',
            ),
            398 => 
            array (
                'codigo' => 5904,
                'descricao' => 'Remessa para venda fora do estabelecimento',
            ),
            399 => 
            array (
                'codigo' => 5905,
                'descricao' => 'Remessa para depósito fechado ou armazém geral',
            ),
            400 => 
            array (
                'codigo' => 5906,
                'descricao' => 'Retorno de mercadoria depositada em depósito fechado ou armazém geral',
            ),
            401 => 
            array (
                'codigo' => 5907,
                'descricao' => 'Retorno simbólico de mercadoria depositada em depósito fechado ou armazém geral',
            ),
            402 => 
            array (
                'codigo' => 5908,
                'descricao' => 'Remessa de bem por conta de contrato de comodato',
            ),
            403 => 
            array (
                'codigo' => 5909,
                'descricao' => 'Retorno de bem recebido por conta de contrato de comodato',
            ),
            404 => 
            array (
                'codigo' => 5910,
                'descricao' => 'Remessa em bonificação, doação ou brinde',
            ),
            405 => 
            array (
                'codigo' => 5911,
                'descricao' => 'Remessa de amostra grátis',
            ),
            406 => 
            array (
                'codigo' => 5912,
                'descricao' => 'Remessa de mercadoria ou bem para demonstração',
            ),
            407 => 
            array (
                'codigo' => 5913,
                'descricao' => 'Retorno de mercadoria ou bem recebido para demonstração',
            ),
            408 => 
            array (
                'codigo' => 5914,
                'descricao' => 'Remessa de mercadoria ou bem para exposição ou feira',
            ),
            409 => 
            array (
                'codigo' => 5915,
                'descricao' => 'Remessa de mercadoria ou bem para conserto ou reparo',
            ),
            410 => 
            array (
                'codigo' => 5916,
                'descricao' => 'Retorno de mercadoria ou bem recebido para conserto ou reparo',
            ),
            411 => 
            array (
                'codigo' => 5917,
                'descricao' => 'Remessa de mercadoria em consignação mercantil ou industrial',
            ),
            412 => 
            array (
                'codigo' => 5918,
                'descricao' => 'Devolução de mercadoria recebida em consignação mercantil ou industrial',
            ),
            413 => 
            array (
                'codigo' => 5919,
                'descricao' => 'Devolução simbólica de mercadoria vendida ou utilizada em processo industrial, recebida anteriormente em consignação mercantil ou industrial',
            ),
            414 => 
            array (
                'codigo' => 5920,
                'descricao' => 'Remessa de vasilhame ou sacaria',
            ),
            415 => 
            array (
                'codigo' => 5921,
                'descricao' => 'Devolução de vasilhame ou sacaria',
            ),
            416 => 
            array (
                'codigo' => 5922,
                'descricao' => 'Lançamento efetuado a título de simples faturamento decorrente de venda para entrega futura',
            ),
            417 => 
            array (
                'codigo' => 5923,
                'descricao' => 'Remessa de mercadoria por conta e ordem de terceiros, em venda à ordem',
            ),
            418 => 
            array (
                'codigo' => 5924,
                'descricao' => 'Remessa para industrialização por conta e ordem do adquirente da mercadoria, quando esta não transitar pelo estabelecimento do adquirente',
            ),
            419 => 
            array (
                'codigo' => 5925,
                'descricao' => 'Retorno de mercadoria recebida para industrialização por conta e ordem do adquirente da mercadoria, quando aquela não transitar pelo estabelecimento do adquirente',
            ),
            420 => 
            array (
                'codigo' => 5926,
                'descricao' => 'Lançamento efetuado a título de reclassificação de mercadoria decorrente de formação de kit ou de sua desagregação',
            ),
            421 => 
            array (
                'codigo' => 5927,
                'descricao' => 'Lançamento efetuado a título de baixa de estoque decorrente de perda, roubo ou deterioração',
            ),
            422 => 
            array (
                'codigo' => 5928,
                'descricao' => 'Lançamento efetuado a título de baixa de estoque decorrente do encerramento da atividade da empresa',
            ),
            423 => 
            array (
                'codigo' => 5929,
                'descricao' => 'Lançamento efetuado em decorrência de emissão de documento fiscal relativo a operação ou prestação também registrada em equipamento Emissor de Cupom Fiscal - ECF',
            ),
            424 => 
            array (
                'codigo' => 5931,
                'descricao' => 'Lançamento efetuado em decorrência da responsabilidade de retenção do imposto por substituição tributária, atribuída ao remetente ou alienante da mercadoria, pelo serviço de transporte realizado por transportador autônomo ou por transportador não inscrito na unidade da Federação onde iniciado o serviço',
            ),
            425 => 
            array (
                'codigo' => 5932,
                'descricao' => 'Prestação de serviço de transporte iniciada em unidade da Federação diversa daquela onde inscrito o prestador',
            ),
            426 => 
            array (
                'codigo' => 5933,
                'descricao' => 'Prestação de serviço tributado pelo ISSQN',
            ),
            427 => 
            array (
                'codigo' => 5949,
                'descricao' => 'Outra saída de mercadoria ou prestação de serviço não especificado ',
            ),
            428 => 
            array (
                'codigo' => 6000,
                'descricao' => 'SAÍDAS OU PRESTAÇÕES DE SERVIÇOS PARA OUTROS ESTADOS ',
            ),
            429 => 
            array (
                'codigo' => 6100,
                'descricao' => 'VENDAS DE PRODUÇÃO PRÓPRIA OU DE TERCEIROS',
            ),
            430 => 
            array (
                'codigo' => 6101,
                'descricao' => 'Venda de produção do estabelecimento',
            ),
            431 => 
            array (
                'codigo' => 6102,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros',
            ),
            432 => 
            array (
                'codigo' => 6103,
                'descricao' => 'Venda de produção do estabelecimento, efetuada fora do estabelecimento',
            ),
            433 => 
            array (
                'codigo' => 6104,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, efetuada fora do estabelecimento',
            ),
            434 => 
            array (
                'codigo' => 6105,
                'descricao' => 'Venda de produção do estabelecimento que não deva por ele transitar',
            ),
            435 => 
            array (
                'codigo' => 6106,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, que não deva por ele transitar',
            ),
            436 => 
            array (
                'codigo' => 6107,
                'descricao' => 'Venda de produção do estabelecimento, destinada a não contribuinte',
            ),
            437 => 
            array (
                'codigo' => 6108,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, destinada a não contribuinte',
            ),
            438 => 
            array (
                'codigo' => 6109,
                'descricao' => 'Venda de produção do estabelecimento, destinada à Zona Franca de Manaus ou Áreas de Livre Comércio',
            ),
            439 => 
            array (
                'codigo' => 6110,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, destinada à Zona Franca de Manaus ou Áreas de Livre Comércio',
            ),
            440 => 
            array (
                'codigo' => 6111,
                'descricao' => 'Venda de produção do estabelecimento remetida anteriormente em consignação industrial',
            ),
            441 => 
            array (
                'codigo' => 6112,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de Terceiros remetida anteriormente em consignação industrial',
            ),
            442 => 
            array (
                'codigo' => 6113,
                'descricao' => 'Venda de produção do estabelecimento remetida anteriormente em consignação mercantil',
            ),
            443 => 
            array (
                'codigo' => 6114,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros remetida anteriormente em consignação mercantil',
            ),
            444 => 
            array (
                'codigo' => 6115,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, recebida anteriormente em consignação mercantil',
            ),
            445 => 
            array (
                'codigo' => 6116,
                'descricao' => 'Venda de produção do estabelecimento originada de encomenda para entrega futura',
            ),
            446 => 
            array (
                'codigo' => 6117,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, originada de encomenda para entrega futura',
            ),
            447 => 
            array (
                'codigo' => 6118,
                'descricao' => 'Venda de produção do estabelecimento entregue ao destinatário por conta e ordem do adquirente originário, em venda à ordem',
            ),
            448 => 
            array (
                'codigo' => 6119,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros entregue ao destinatário por conta e ordem do adquirente originário, em venda à ordem',
            ),
            449 => 
            array (
                'codigo' => 6120,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros entregue ao destinatário pelo vendedor remetente, em venda à ordem',
            ),
            450 => 
            array (
                'codigo' => 6122,
                'descricao' => 'Venda de produção do estabelecimento remetida para industrialização, por conta e ordem do adquirente, sem transitar pelo estabelecimento do adquirente',
            ),
            451 => 
            array (
                'codigo' => 6123,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros remetida para industrialização, por conta e ordem do adquirente, sem transitar pelo estabelecimento do adquirente',
            ),
            452 => 
            array (
                'codigo' => 6124,
                'descricao' => 'Industrialização efetuada para outra empresa',
            ),
            453 => 
            array (
                'codigo' => 6125,
                'descricao' => 'Industrialização efetuada para outra empresa quando a mercadoria recebida para utilização no processo de industrialização não transitar pelo estabelecimento adquirente da mercadoria',
            ),
            454 => 
            array (
                'codigo' => 6150,
                'descricao' => 'TRANSFERÊNCIAS DE PRODUÇÃO PRÓPRIA OU DE TERCEIROS',
            ),
            455 => 
            array (
                'codigo' => 6151,
                'descricao' => 'Transferência de produção do estabelecimento',
            ),
            456 => 
            array (
                'codigo' => 6152,
                'descricao' => 'Transferência de mercadoria adquirida ou recebida de terceiros',
            ),
            457 => 
            array (
                'codigo' => 6153,
                'descricao' => 'Transferência de energia elétrica 6.155 - Transferência de produção do estabelecimento, que não deva por ele transitar',
            ),
            458 => 
            array (
                'codigo' => 6156,
                'descricao' => 'Transferência de mercadoria adquirida ou recebida de terceiros, que não deva por ele transitar',
            ),
            459 => 
            array (
                'codigo' => 6200,
                'descricao' => 'DEVOLUÇÕES DE COMPRAS PARA INDUSTRIALIZAÇÃO, COMERCIALIZAÇÃO OU ANULAÇÕES DE VALORES',
            ),
            460 => 
            array (
                'codigo' => 6201,
                'descricao' => 'Devolução de compra para industrialização ou produção rural',
            ),
            461 => 
            array (
                'codigo' => 6202,
                'descricao' => 'Devolução de compra para comercialização',
            ),
            462 => 
            array (
                'codigo' => 6205,
                'descricao' => 'Anulação de valor relativo a aquisição de serviço de comunicação',
            ),
            463 => 
            array (
                'codigo' => 6206,
                'descricao' => 'Anulação de valor relativo a aquisição de serviço de transporte',
            ),
            464 => 
            array (
                'codigo' => 6207,
                'descricao' => 'Anulação de valor relativo à compra de energia elétrica',
            ),
            465 => 
            array (
                'codigo' => 6208,
                'descricao' => 'Devolução de mercadoria recebida em transferência para industrialização ou produção rural',
            ),
            466 => 
            array (
                'codigo' => 6209,
                'descricao' => 'Devolução de mercadoria recebida em transferência para comercialização',
            ),
            467 => 
            array (
                'codigo' => 6210,
                'descricao' => 'Devolução de compra para utilização na prestação de serviço ',
            ),
            468 => 
            array (
                'codigo' => 6250,
                'descricao' => 'VENDAS DE ENERGIA ELÉTRICA',
            ),
            469 => 
            array (
                'codigo' => 6251,
                'descricao' => 'Venda de energia elétrica para distribuição ou comercialização',
            ),
            470 => 
            array (
                'codigo' => 6252,
                'descricao' => 'Venda de energia elétrica para estabelecimento industrial',
            ),
            471 => 
            array (
                'codigo' => 6253,
                'descricao' => 'Venda de energia elétrica para estabelecimento comercial',
            ),
            472 => 
            array (
                'codigo' => 6254,
                'descricao' => 'Venda de energia elétrica para estabelecimento prestador de serviço de transporte',
            ),
            473 => 
            array (
                'codigo' => 6255,
                'descricao' => 'Venda de energia elétrica para estabelecimento prestador de serviço de comunicação',
            ),
            474 => 
            array (
                'codigo' => 6256,
                'descricao' => 'Venda de energia elétrica para estabelecimento de produtor rural',
            ),
            475 => 
            array (
                'codigo' => 6257,
                'descricao' => 'Venda de energia elétrica para consumo por demanda contratada',
            ),
            476 => 
            array (
                'codigo' => 6258,
                'descricao' => 'Venda de energia elétrica a não contribuinte',
            ),
            477 => 
            array (
                'codigo' => 6300,
                'descricao' => 'PRESTAÇÕES DE SERVIÇOS DE COMUNICAÇÃO',
            ),
            478 => 
            array (
                'codigo' => 6301,
                'descricao' => 'Prestação de serviço de comunicação para execução de serviço da mesma natureza',
            ),
            479 => 
            array (
                'codigo' => 6302,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento industrial',
            ),
            480 => 
            array (
                'codigo' => 6303,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento comercial',
            ),
            481 => 
            array (
                'codigo' => 6304,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento de prestador de serviço de transporte',
            ),
            482 => 
            array (
                'codigo' => 6305,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento de geradora ou de distribuidora de energia elétrica',
            ),
            483 => 
            array (
                'codigo' => 6306,
                'descricao' => 'Prestação de serviço de comunicação a estabelecimento de produtor rural',
            ),
            484 => 
            array (
                'codigo' => 6307,
                'descricao' => 'Prestação de serviço de comunicação a não contribuinte',
            ),
            485 => 
            array (
                'codigo' => 6350,
                'descricao' => 'PRESTAÇÕES DE SERVIÇOS DE TRANSPORTE',
            ),
            486 => 
            array (
                'codigo' => 6351,
                'descricao' => 'Prestação de serviço de transporte para execução de serviço da mesma natureza',
            ),
            487 => 
            array (
                'codigo' => 6352,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento industrial',
            ),
            488 => 
            array (
                'codigo' => 6353,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento comercial',
            ),
            489 => 
            array (
                'codigo' => 6354,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento de prestador de serviço de comunicação',
            ),
            490 => 
            array (
                'codigo' => 6355,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento de geradora ou de distribuidora de energia elétrica',
            ),
            491 => 
            array (
                'codigo' => 6356,
                'descricao' => 'Prestação de serviço de transporte a estabelecimento de produtor rural',
            ),
            492 => 
            array (
                'codigo' => 6357,
                'descricao' => 'Prestação de serviço de transporte a não contribuinte',
            ),
            493 => 
            array (
                'codigo' => 6359,
                'descricao' => 'Prestação de serviço de transporte a contribuinte ou a não contribuinte quando a mercadoria transportada está dispensada de emissão de nota fiscal',
            ),
            494 => 
            array (
                'codigo' => 6400,
                'descricao' => 'SAÍDAS DE MERCADORIAS SUJEITAS AO REGIME DE SUBSTITUIÇÃO TRIBUTÁRIA',
            ),
            495 => 
            array (
                'codigo' => 6401,
                'descricao' => 'Venda de produção do estabelecimento em operação com produto sujeito ao regime de substituição tributária, na condição de contribuinte substituto',
            ),
            496 => 
            array (
                'codigo' => 6402,
                'descricao' => 'Venda de produção do estabelecimento de produto sujeito ao regime de substituição tributária, em operação entre contribuintes substitutos do mesmo produto',
            ),
            497 => 
            array (
                'codigo' => 6403,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros em operação com mercadoria sujeita ao regime de substituição tributária, na condição de contribuinte substituto',
            ),
            498 => 
            array (
                'codigo' => 6404,
                'descricao' => 'Venda de mercadoria sujeita ao regime de substituição tributária, cujo imposto já tenha sido retido anteriormente',
            ),
            499 => 
            array (
                'codigo' => 6408,
                'descricao' => 'Transferência de produção do estabelecimento em operação com produto sujeito ao regime de substituição tributária',
            ),
        ));
        \DB::table('cfops')->insert(array (
            0 => 
            array (
                'codigo' => 6409,
                'descricao' => 'Transferência de mercadoria adquirida ou recebida de terceiros em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            1 => 
            array (
                'codigo' => 6410,
                'descricao' => 'Devolução de compra para industrialização ou produção rural em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            2 => 
            array (
                'codigo' => 6411,
                'descricao' => 'Devolução de compra para comercialização em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            3 => 
            array (
                'codigo' => 6412,
                'descricao' => 'Devolução de bem do ativo imobilizado, em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            4 => 
            array (
                'codigo' => 6413,
                'descricao' => 'Devolução de mercadoria destinada ao uso ou consumo, em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            5 => 
            array (
                'codigo' => 6414,
                'descricao' => 'Remessa de produção do estabelecimento para venda fora do estabelecimento em operação com produto sujeito ao regime de substituição tributária',
            ),
            6 => 
            array (
                'codigo' => 6415,
                'descricao' => 'Remessa de mercadoria adquirida ou recebida de terceiros para venda fora do estabelecimento, em operação com mercadoria sujeita ao regime de substituição tributária',
            ),
            7 => 
            array (
                'codigo' => 6500,
                'descricao' => 'REMESSAS COM FIM ESPECÍFICO DE EXPORTAÇÃO E EVENTUAIS DEVOLUÇÕES',
            ),
            8 => 
            array (
                'codigo' => 6501,
                'descricao' => 'Remessa de produção do estabelecimento, com fim específico de exportação',
            ),
            9 => 
            array (
                'codigo' => 6502,
                'descricao' => 'Remessa de mercadoria adquirida ou recebida de terceiros, com fim específico de exportação',
            ),
            10 => 
            array (
                'codigo' => 6503,
                'descricao' => 'Devolução de mercadoria recebida com fim específico de exportação',
            ),
            11 => 
            array (
                'codigo' => 6504,
                'descricao' => 'Remessa de mercadorias para formação de lote de exportação, de produtos industrializados ou produzidos pelo próprio estabelecimento',
            ),
            12 => 
            array (
                'codigo' => 6505,
                'descricao' => 'Remessa de mercadorias, adquiridas ou recebidas de terceiros, para formação de lote de exportação',
            ),
            13 => 
            array (
                'codigo' => 6550,
                'descricao' => 'OPERAÇÕES COM BENS DE ATIVO IMOBILIZADO E MATERIAIS PARA USO OU CONSUMO',
            ),
            14 => 
            array (
                'codigo' => 6551,
                'descricao' => 'Venda de bem do ativo imobilizado',
            ),
            15 => 
            array (
                'codigo' => 6552,
                'descricao' => 'Transferência de bem do ativo imobilizado',
            ),
            16 => 
            array (
                'codigo' => 6553,
                'descricao' => 'Devolução de compra de bem para o ativo imobilizado',
            ),
            17 => 
            array (
                'codigo' => 6554,
                'descricao' => 'Remessa de bem do ativo imobilizado para uso fora do estabelecimento',
            ),
            18 => 
            array (
                'codigo' => 6555,
                'descricao' => 'Devolução de bem do ativo imobilizado de terceiro, recebido para uso no estabelecimento',
            ),
            19 => 
            array (
                'codigo' => 6556,
                'descricao' => 'Devolução de compra de material de uso ou consumo',
            ),
            20 => 
            array (
                'codigo' => 6557,
                'descricao' => 'Transferência de material de uso ou consumo',
            ),
            21 => 
            array (
                'codigo' => 6600,
                'descricao' => 'CRÉDITOS E RESSARCIMENTOS DE ICMS',
            ),
            22 => 
            array (
                'codigo' => 6603,
                'descricao' => 'Ressarcimento de ICMS retido por substituição tributária',
            ),
            23 => 
            array (
                'codigo' => 6651,
                'descricao' => 'Venda de combustível ou lubrificante de produção do estabelecimento destinado à industrialização subseqüente',
            ),
            24 => 
            array (
                'codigo' => 6652,
                'descricao' => 'Venda de combustível ou lubrificante de produção do estabelecimento destinado à comercialização',
            ),
            25 => 
            array (
                'codigo' => 6653,
                'descricao' => 'Venda de combustível ou lubrificante de produção do estabelecimento destinado a consumidor ou usuário final',
            ),
            26 => 
            array (
                'codigo' => 6654,
                'descricao' => 'Venda de combustível ou lubrificante adquirido ou recebido de terceiros destinado à industrialização subseqüente',
            ),
            27 => 
            array (
                'codigo' => 6655,
                'descricao' => 'Venda de combustível ou lubrificante adquirido ou recebido de terceiros destinado à comercialização',
            ),
            28 => 
            array (
                'codigo' => 6656,
                'descricao' => 'Venda de combustível ou lubrificante adquirido ou recebido de terceiros destinado a consumidor ou usuário final',
            ),
            29 => 
            array (
                'codigo' => 6657,
                'descricao' => 'Remessa de combustível ou lubrificante adquirido ou recebido de terceiros para venda fora do estabelecimento',
            ),
            30 => 
            array (
                'codigo' => 6658,
                'descricao' => 'Transferência de combustível ou lubrificante de produção do estabelecimento',
            ),
            31 => 
            array (
                'codigo' => 6659,
                'descricao' => 'Transferência de combustível ou lubrificante adquirido ou recebido de terceiro',
            ),
            32 => 
            array (
                'codigo' => 6660,
                'descricao' => 'Devolução de compra de combustível ou lubrificante adquirido para industrialização subseqüente',
            ),
            33 => 
            array (
                'codigo' => 6661,
                'descricao' => 'Devolução de compra de combustível ou lubrificante adquirido para comercialização',
            ),
            34 => 
            array (
                'codigo' => 6662,
                'descricao' => 'Devolução de compra de combustível ou lubrificante adquirido por consumidor ou usuário final',
            ),
            35 => 
            array (
                'codigo' => 6663,
                'descricao' => 'Remessa para armazenagem de combustível ou lubrificante',
            ),
            36 => 
            array (
                'codigo' => 6664,
                'descricao' => 'Retorno de combustível ou lubrificante recebido para armazenagem',
            ),
            37 => 
            array (
                'codigo' => 6665,
                'descricao' => 'Retorno simbólico de combustível ou lubrificante recebido para armazenagem',
            ),
            38 => 
            array (
                'codigo' => 6666,
                'descricao' => 'Remessa por conta e ordem de terceiros de combustível ou lubrificante recebido para armazenagem',
            ),
            39 => 
            array (
                'codigo' => 6900,
                'descricao' => 'OUTRAS SAÍDAS DE MERCADORIAS OU PRESTAÇÕES DE SERVIÇOS',
            ),
            40 => 
            array (
                'codigo' => 6901,
                'descricao' => 'Remessa para industrialização por encomenda',
            ),
            41 => 
            array (
                'codigo' => 6902,
                'descricao' => 'Retorno de mercadoria utilizada na industrialização por encomenda',
            ),
            42 => 
            array (
                'codigo' => 6903,
                'descricao' => 'Retorno de mercadoria recebida para industrialização e não aplicada no referido processo',
            ),
            43 => 
            array (
                'codigo' => 6904,
                'descricao' => 'Remessa para venda fora do estabelecimento',
            ),
            44 => 
            array (
                'codigo' => 6905,
                'descricao' => 'Remessa para depósito fechado ou armazém geral',
            ),
            45 => 
            array (
                'codigo' => 6906,
                'descricao' => 'Retorno de mercadoria depositada em depósito fechado ou armazém geral',
            ),
            46 => 
            array (
                'codigo' => 6907,
                'descricao' => 'Retorno simbólico de mercadoria depositada em depósito fechado ou armazém geral',
            ),
            47 => 
            array (
                'codigo' => 6908,
                'descricao' => 'Remessa de bem por conta de contrato de comodato',
            ),
            48 => 
            array (
                'codigo' => 6909,
                'descricao' => 'Retorno de bem recebido por conta de contrato de comodato',
            ),
            49 => 
            array (
                'codigo' => 6910,
                'descricao' => 'Remessa em bonificação, doação ou brinde',
            ),
            50 => 
            array (
                'codigo' => 6911,
                'descricao' => 'Remessa de amostra grátis',
            ),
            51 => 
            array (
                'codigo' => 6912,
                'descricao' => 'Remessa de mercadoria ou bem para demonstração 6.913 - Retorno de mercadoria ou bem recebido para demonstração',
            ),
            52 => 
            array (
                'codigo' => 6914,
                'descricao' => 'Remessa de mercadoria ou bem para exposição ou feira',
            ),
            53 => 
            array (
                'codigo' => 6915,
                'descricao' => 'Remessa de mercadoria ou bem para conserto ou reparo',
            ),
            54 => 
            array (
                'codigo' => 6916,
                'descricao' => 'Retorno de mercadoria ou bem recebido para conserto ou reparo',
            ),
            55 => 
            array (
                'codigo' => 6917,
                'descricao' => 'Remessa de mercadoria em consignação mercantil ou industrial',
            ),
            56 => 
            array (
                'codigo' => 6918,
                'descricao' => 'Devolução de mercadoria recebida em consignação mercantil ou industrial',
            ),
            57 => 
            array (
                'codigo' => 6919,
                'descricao' => 'Devolução simbólica de mercadoria vendida ou utilizada em processo industrial, recebida anteriormente em consignação mercantil ou industrial',
            ),
            58 => 
            array (
                'codigo' => 6920,
                'descricao' => 'Remessa de vasilhame ou sacaria',
            ),
            59 => 
            array (
                'codigo' => 6921,
                'descricao' => 'Devolução de vasilhame ou sacaria',
            ),
            60 => 
            array (
                'codigo' => 6922,
                'descricao' => 'Lançamento efetuado a título de simples faturamento decorrente de venda para entrega futura',
            ),
            61 => 
            array (
                'codigo' => 6923,
                'descricao' => 'Remessa de mercadoria por conta e ordem de terceiros, em venda à ordem',
            ),
            62 => 
            array (
                'codigo' => 6924,
                'descricao' => 'Remessa para industrialização por conta e ordem do adquirente da mercadoria, quando esta não transitar pelo estabelecimento do adquirente',
            ),
            63 => 
            array (
                'codigo' => 6925,
                'descricao' => 'Retorno de mercadoria recebida para industrialização por conta e ordem do adquirente da mercadoria, quando aquela não transitar pelo estabelecimento do adquirente',
            ),
            64 => 
            array (
                'codigo' => 6929,
                'descricao' => 'Lançamento efetuado em decorrência de emissão de documento fiscal relativo a operação ou prestação também registrada em equipamento Emissor de Cupom Fiscal - ECF',
            ),
            65 => 
            array (
                'codigo' => 6931,
                'descricao' => 'Lançamento efetuado em decorrência da responsabilidade de retenção do imposto por substituição tributária, atribuída ao remetente ou alienante da mercadoria, pelo serviço de transporte realizado por transportador autônomo ou por transportador não inscrito na unidade da Federação onde iniciado o serviço',
            ),
            66 => 
            array (
                'codigo' => 6932,
                'descricao' => 'Prestação de serviço de transporte iniciada em unidade da Federação diversa daquela onde inscrito o prestador',
            ),
            67 => 
            array (
                'codigo' => 6933,
                'descricao' => 'Prestação de serviço tributado pelo ISSQN',
            ),
            68 => 
            array (
                'codigo' => 6949,
                'descricao' => 'Outra saída de mercadoria ou prestação de serviço não especificado',
            ),
            69 => 
            array (
                'codigo' => 7000,
                'descricao' => 'SAÍDAS OU PRESTAÇÕES DE SERVIÇOS PARA O EXTERIOR ',
            ),
            70 => 
            array (
                'codigo' => 7100,
                'descricao' => 'VENDAS DE PRODUÇÃO PRÓPRIA OU DE TERCEIROS',
            ),
            71 => 
            array (
                'codigo' => 7101,
                'descricao' => 'Venda de produção do estabelecimento',
            ),
            72 => 
            array (
                'codigo' => 7102,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros',
            ),
            73 => 
            array (
                'codigo' => 7105,
                'descricao' => 'Venda de produção do estabelecimento, que não deva por ele transitar',
            ),
            74 => 
            array (
                'codigo' => 7106,
                'descricao' => 'Venda de mercadoria adquirida ou recebida de terceiros, que não deva por ele transitar',
            ),
            75 => 
            array (
                'codigo' => 7127,
                'descricao' => 'Venda de produção do estabelecimento sob o regime de drawback" "',
            ),
            76 => 
            array (
                'codigo' => 7200,
                'descricao' => 'DEVOLUÇÕES DE COMPRAS PARA INDUSTRIALIZAÇÃO, COMERCIALIZAÇÃO OU ANULAÇÕES DE VALORES',
            ),
            77 => 
            array (
                'codigo' => 7201,
                'descricao' => 'Devolução de compra para industrialização ou produção rural',
            ),
            78 => 
            array (
                'codigo' => 7202,
                'descricao' => 'Devolução de compra para comercialização',
            ),
            79 => 
            array (
                'codigo' => 7205,
                'descricao' => 'Anulação de valor relativo à aquisição de serviço de comunicação',
            ),
            80 => 
            array (
                'codigo' => 7206,
                'descricao' => 'Anulação de valor relativo a aquisição de serviço de transporte',
            ),
            81 => 
            array (
                'codigo' => 7207,
                'descricao' => 'Anulação de valor relativo à compra de energia elétrica',
            ),
            82 => 
            array (
                'codigo' => 7210,
                'descricao' => 'Devolução de compra para utilização na prestação de serviço',
            ),
            83 => 
            array (
                'codigo' => 7211,
                'descricao' => 'Devolução de compras para industrialização sob o regime de drawback "',
            ),
            84 => 
            array (
                'codigo' => 7250,
                'descricao' => 'VENDAS DE ENERGIA ELÉTRICA',
            ),
            85 => 
            array (
                'codigo' => 7251,
                'descricao' => 'Venda de energia elétrica para o exterior ',
            ),
            86 => 
            array (
                'codigo' => 7300,
                'descricao' => 'PRESTAÇÕES DE SERVIÇOS DE COMUNICAÇÃO',
            ),
            87 => 
            array (
                'codigo' => 7301,
                'descricao' => 'Prestação de serviço de comunicação para execução de serviço da mesma natureza ',
            ),
            88 => 
            array (
                'codigo' => 7350,
                'descricao' => 'PRESTAÇÕES DE SERVIÇO DE TRANSPORTE',
            ),
            89 => 
            array (
                'codigo' => 7358,
                'descricao' => 'Prestação de serviço de transporte ',
            ),
            90 => 
            array (
                'codigo' => 7500,
                'descricao' => 'EXPORTAÇÃO DE MERCADORIAS RECEBIDAS COM FIM ESPECÍFICO DE EXPORTAÇÃO',
            ),
            91 => 
            array (
                'codigo' => 7501,
                'descricao' => 'Exportação de mercadorias recebidas com fim específico de exportação',
            ),
            92 => 
            array (
                'codigo' => 7550,
                'descricao' => 'OPERAÇÕES COM BENS DE ATIVO IMOBILIZADO E MATERIAIS PARA USO OU CONSUMO',
            ),
            93 => 
            array (
                'codigo' => 7551,
                'descricao' => 'Venda de bem do ativo imobilizado',
            ),
            94 => 
            array (
                'codigo' => 7553,
                'descricao' => 'Devolução de compra de bem para o ativo imobilizado',
            ),
            95 => 
            array (
                'codigo' => 7556,
                'descricao' => 'Devolução de compra de material de uso ou consumo',
            ),
            96 => 
            array (
                'codigo' => 7651,
                'descricao' => 'Venda de combustível ou lubrificante de produção do estabelecimento',
            ),
            97 => 
            array (
                'codigo' => 7654,
                'descricao' => 'Venda de combustível ou lubrificante adquirido ou recebido de terceiros',
            ),
            98 => 
            array (
                'codigo' => 7900,
                'descricao' => 'OUTRAS SAÍDAS DE MERCADORIAS OU PRESTAÇÕES DE SERVIÇOS',
            ),
            99 => 
            array (
                'codigo' => 7930,
                'descricao' => 'Lançamento efetuado atítulo de devolução de bem cuja entrada tenha ocorrido sob amparo de regime especial aduaneiro de admissão temporária',
            ),
            100 => 
            array (
                'codigo' => 7949,
                'descricao' => 'Outra saída de mercadoria ou prestação de serviço não especificado',
            ),
        ));
        
        
    }
}
