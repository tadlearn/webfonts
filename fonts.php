<?php

$fonts = ['jf-openhuninn' => 'jf open 粉圓體', 'Mamelon' => 'マメロン（mamelon）字體', 'HanWangWeBe' => '王漢宗魏碑體', 'HanWangMingBlack' => '王漢宗超明體', 'XinYiGuanHeiTi' => '字體圈欣意冠黑體', 'Iansui' => '芫荽體', 'SweiToothpasteCJKtc' => '獅尾牙膏圓體', 'JasonHandwriting1' => '清松手寫體1', 'JasonHandwriting2' => '清松手寫體2', 'JasonHandwriting3' => '清松手寫體3', 'JasonHandwriting4' => '清松手寫體4', '851DianJiWenZiTi' => '851電機文字', 'BoTa' => '波塔', 'ChaoJiXi' => '超級細ゴシック體', 'Crayon' => '黑板粉筆體', 'PopGothicCjkJp' => '大波浪圓體', 'Chalk' => '粉筆體', 'CorpRound' => '公司LOGO圓體', 'HanZiBiShunZiTi' => '漢字筆順體原版', 'HengShanMaoBiCaoShu' => '衡山毛筆草書', 'HengShanMaoXing' => '衡山毛筆行書', 'KaiseiTokumin' => '解星 B', 'KingnamMaiyuan' => '荊南麥圓體', 'I-PenCrane-B' => '刻石錄鋼筆鶴體', 'I-Ngaan' => '刻石錄顏體', 'KleeOne' => '克利蘿莉風字體', 'Kurewa' => '苦累蛙圓體', 'Cubic' => '俐方體11號', 'WuXinShouXieTi' => '無心手寫體', 'NishikiTeki' => '馬克筆手寫', 'Doudouziti' => '豆豆體', 'PangPangZhuRouTi' => '胖胖豬肉體', 'PoSuiLingHaoZi' => '破碎零號字', 'Qiang' => '黒薔薇', 'QianTuMaKeShouXieTi' => '千圖馬克手寫體', 'QingLiuShu' => '青柳隷書', 'SweiFistLegCJKjp' => '獅尾詠腿黑體', 'TanugoTangGuoShouXieTiBold' => '糖果手寫粗體', 'TanugoTangGuoShouXieTiRegular' => '糖果手寫體', 'Tanukimagic' => 'たぬき油性マジック', 'UzuraZiTi' => '鵪鶉字體', 'XianErTi' => '賢二體', 'YingZhuiXingShu' => '英椎行書', 'YouZi' => '佑字', 'YOzShouXieTi' => 'YOz手寫體', 'YuanYingHeiTi' => '源影黑體', 'ZhaiZaiJiaFenTiaoTian' => '宅在家粉條甜', 'ZhanKuQingKeHuangYouTi' => '站酷慶科黃油體', 'ZuoZuoMuZiTi' => '佐佐木字體'];

$data = '<table>';
foreach ($fonts as $font_family => $font_title) {
    $data .= "
    <tr><th>$font_family</th><td>$font_title</td><td><div style=\"font-family:$font_family;\">臺南市龍崎國民小學吳弘凱老師</div></td></tr>
    ";
}
$data .= '</table>';
