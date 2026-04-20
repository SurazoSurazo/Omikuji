<?php
$omikuji = ['大吉', '吉', '中吉', '小吉', '末吉', '凶'];
$result = $omikuji[array_rand($omikuji)];

$message = '';

switch ($result) {
    case '大吉':
        $message = '物事が大きく好転する運勢です。挑戦したことが実を結び、周囲からの助けにも恵まれます。積極的に行動するほど成果が得られます。';
        break;
    case '吉':
        $message = '安定した良い運勢です。無理をせず着実に進めることで、望んでいた結果に近づきます。人との関わりが運を高めます。';
        break;
    case '中吉':
        $message = 'やや良い運勢です。努力が徐々に形になっていきます。焦らず継続することで、次第に状況が整います。';
        break;
    case '小吉':
        $message = '控えめながら良い運勢です。小さな幸運が積み重なります。日々の積み重ねを大切にすることが鍵です。';
        break;
    case '末吉':
        $message = '今後の伸びしろがある運勢です。現状は静かでも、準備を怠らなければ後に良い流れが訪れます。';
        break;
    case '凶':
        $message = '注意が必要な運勢です。無理な行動や判断は避け、慎重に過ごすことが重要です。状況を見直すことで改善のきっかけが得られます。';
        break;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>おみくじ</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="card">
    <h1>今日の運勢</h1>
    <div class="result"><?php echo $result; ?></div>
    <div class="message"><?php echo $message; ?></div>

    <form method="post">
        <button type="submit">もう一度引く</button>
    </form>
</div>
</body>
</html>