<?php
	
function shortcode_jinstar10($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star-blank"></i><i class="jic jin-ifont-star-blank"></i><i class="jic jin-ifont-star-blank"></i><i class="jic jin-ifont-star-blank"></i></span>';
}
add_shortcode( 'jinstar1.0', 'shortcode_jinstar10' );


function shortcode_jinstar15($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star-half"></i><i class="jic jin-ifont-star-blank"></i><i class="jic jin-ifont-star-blank"></i><i class="jic jin-ifont-star-blank"></i></span>';
}
add_shortcode( 'jinstar1.5', 'shortcode_jinstar15' );


function shortcode_jinstar20($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star-blank"></i><i class="jic jin-ifont-star-blank"></i><i class="jic jin-ifont-star-blank"></i></span>';
}
add_shortcode( 'jinstar2.0', 'shortcode_jinstar20' );


function shortcode_jinstar25($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star-half"></i><i class="jic jin-ifont-star-blank"></i><i class="jic jin-ifont-star-blank"></i></span>';
}
add_shortcode( 'jinstar2.5', 'shortcode_jinstar25' );


function shortcode_jinstar30($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star-blank"></i><i class="jic jin-ifont-star-blank"></i></span>';
}
add_shortcode( 'jinstar3.0', 'shortcode_jinstar30' );


function shortcode_jinstar35($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star-half"></i><i class="jic jin-ifont-star-blank"></i></span>';
}
add_shortcode( 'jinstar3.5', 'shortcode_jinstar35' );


function shortcode_jinstar40($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star-blank"></i></span>';
}
add_shortcode( 'jinstar4.0', 'shortcode_jinstar40' );


function shortcode_jinstar45($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star-half"></i></span>';
}
add_shortcode( 'jinstar4.5', 'shortcode_jinstar45' );


function shortcode_jinstar50($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i><i class="jic jin-ifont-star"></i></span>';
}
add_shortcode( 'jinstar5.0', 'shortcode_jinstar50' );




function shortcode_star0() {
	$star_path = get_template_directory_uri().'/img/star0.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star0', 'shortcode_star0' );

function shortcode_star5() {
	$star_path = get_template_directory_uri().'/img/star5.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star0.5', 'shortcode_star5' );

function shortcode_star10() {
	$star_path = get_template_directory_uri().'/img/star10.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star1.0', 'shortcode_star10' );

function shortcode_star15() {
	$star_path = get_template_directory_uri().'/img/star15.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star1.5', 'shortcode_star15' );

function shortcode_star20() {
	$star_path = get_template_directory_uri().'/img/star20.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star2.0', 'shortcode_star20' );

function shortcode_star25() {
	$star_path = get_template_directory_uri().'/img/star25.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star2.5', 'shortcode_star25' );

function shortcode_star30() {
	$star_path = get_template_directory_uri().'/img/star30.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star3.0', 'shortcode_star30' );

function shortcode_star35() {
	$star_path = get_template_directory_uri().'/img/star35.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star3.5', 'shortcode_star35' );

function shortcode_star40() {
	$star_path = get_template_directory_uri().'/img/star40.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star4.0', 'shortcode_star40' );

function shortcode_star45() {
	$star_path = get_template_directory_uri().'/img/star45.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star4.5', 'shortcode_star45' );

function shortcode_star50() {
	$star_path = get_template_directory_uri().'/img/star50.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star5.0', 'shortcode_star50' );



//新ランキングアイコン
function shortcode_jin_num1() {
	$star_path = get_template_directory_uri().'/img/rank01.png';
	return '<img class="ranking-number" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank1', 'shortcode_jin_num1' );

function shortcode_jin_num2() {
	$star_path = get_template_directory_uri().'/img/rank02.png';
	return '<img class="ranking-number" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank2', 'shortcode_jin_num2' );

function shortcode_jin_num3() {
	$star_path = get_template_directory_uri().'/img/rank03.png';
	return '<img class="ranking-number" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank3', 'shortcode_jin_num3' );

function shortcode_jin_num4() {
	$star_path = get_template_directory_uri().'/img/rank04.png';
	return '<img class="ranking-number" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank4', 'shortcode_jin_num4' );



function shortcode_jin_num1_girly() {
	$star_path = get_template_directory_uri().'/img/rank01-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank1g', 'shortcode_jin_num1_girly' );

function shortcode_jin_num2_girly() {
	$star_path = get_template_directory_uri().'/img/rank02-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank2g', 'shortcode_jin_num2_girly' );

function shortcode_jin_num3_girly() {
	$star_path = get_template_directory_uri().'/img/rank03-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank3g', 'shortcode_jin_num3_girly' );

function shortcode_jin_num4_girly() {
	$star_path = get_template_directory_uri().'/img/rank04-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank4g', 'shortcode_jin_num4_girly' );

function shortcode_jin_num5_girly() {
	$star_path = get_template_directory_uri().'/img/rank05-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank5g', 'shortcode_jin_num5_girly' );

function shortcode_jin_num6_girly() {
	$star_path = get_template_directory_uri().'/img/rank06-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank6g', 'shortcode_jin_num6_girly' );

function shortcode_jin_num7_girly() {
	$star_path = get_template_directory_uri().'/img/rank07-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank7g', 'shortcode_jin_num7_girly' );

function shortcode_jin_num8_girly() {
	$star_path = get_template_directory_uri().'/img/rank08-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank8g', 'shortcode_jin_num8_girly' );

function shortcode_jin_num9_girly() {
	$star_path = get_template_directory_uri().'/img/rank09-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank9g', 'shortcode_jin_num9_girly' );

function shortcode_jin_num10_girly() {
	$star_path = get_template_directory_uri().'/img/rank10-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank10g', 'shortcode_jin_num10_girly' );


function shortcode_jin_num1_rich() {
	$star_path = get_template_directory_uri().'/img/rank01-rich.png';
	return '<img class="ranking-number-rich" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank1r', 'shortcode_jin_num1_rich' );

function shortcode_jin_num2_rich() {
	$star_path = get_template_directory_uri().'/img/rank02-rich.png';
	return '<img class="ranking-number-rich" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank2r', 'shortcode_jin_num2_rich' );

function shortcode_jin_num3_rich() {
	$star_path = get_template_directory_uri().'/img/rank03-rich.png';
	return '<img class="ranking-number-rich" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank3r', 'shortcode_jin_num3_rich' );

function shortcode_jin_num4_rich() {
	$star_path = get_template_directory_uri().'/img/rank04-rich.png';
	return '<img class="ranking-number-rich" src="'.$star_path.'" />';
}
add_shortcode( 'jin-rank4r', 'shortcode_jin_num4_rich' );



//旧ランキングアイコン >>　カスタマイザーで無効化可能
if( get_option('jin_shortcode_parts_off') == null ){
	function shortcode_jin_num1_old() {
		$star_path = get_template_directory_uri().'/img/rank01.png';
		return '<img class="ranking-number" src="'.$star_path.'" />';
	}
	add_shortcode( '1', 'shortcode_jin_num1_old' );

	function shortcode_jin_num2_old() {
		$star_path = get_template_directory_uri().'/img/rank02.png';
		return '<img class="ranking-number" src="'.$star_path.'" />';
	}
	add_shortcode( '2', 'shortcode_jin_num2_old' );

	function shortcode_jin_num3_old() {
		$star_path = get_template_directory_uri().'/img/rank03.png';
		return '<img class="ranking-number" src="'.$star_path.'" />';
	}
	add_shortcode( '3', 'shortcode_jin_num3_old' );

	function shortcode_jin_num4_old() {
		$star_path = get_template_directory_uri().'/img/rank04.png';
		return '<img class="ranking-number" src="'.$star_path.'" />';
	}
	add_shortcode( '4', 'shortcode_jin_num4_old' );


	function shortcode_jin_num1_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank01-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '1g', 'shortcode_jin_num1_girly_old' );

	function shortcode_jin_num2_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank02-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '2g', 'shortcode_jin_num2_girly_old' );

	function shortcode_jin_num3_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank03-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '3g', 'shortcode_jin_num3_girly_old' );

	function shortcode_jin_num4_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank04-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '4g', 'shortcode_jin_num4_girly_old' );

	function shortcode_jin_num5_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank05-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '5g', 'shortcode_jin_num5_girly_old' );

	function shortcode_jin_num6_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank06-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '6g', 'shortcode_jin_num6_girly_old' );

	function shortcode_jin_num7_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank07-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '7g', 'shortcode_jin_num7_girly_old' );

	function shortcode_jin_num8_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank08-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '8g', 'shortcode_jin_num8_girly_old' );

	function shortcode_jin_num9_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank09-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '9g', 'shortcode_jin_num9_girly_old' );

	function shortcode_jin_num10_girly_old() {
		$star_path = get_template_directory_uri().'/img/rank10-girly.png';
		return '<img class="ranking-number-girly" src="'.$star_path.'" />';
	}
	add_shortcode( '10g', 'shortcode_jin_num10_girly_old' );


	function shortcode_jin_num1_rich_old() {
		$star_path = get_template_directory_uri().'/img/rank01-rich.png';
		return '<img class="ranking-number-rich" src="'.$star_path.'" />';
	}
	add_shortcode( '1r', 'shortcode_jin_num1_rich_old' );

	function shortcode_jin_num2_rich_old() {
		$star_path = get_template_directory_uri().'/img/rank02-rich.png';
		return '<img class="ranking-number-rich" src="'.$star_path.'" />';
	}
	add_shortcode( '2r', 'shortcode_jin_num2_rich_old' );

	function shortcode_jin_num3_rich_old() {
		$star_path = get_template_directory_uri().'/img/rank03-rich.png';
		return '<img class="ranking-number-rich" src="'.$star_path.'" />';
	}
	add_shortcode( '3r', 'shortcode_jin_num3_rich_old' );

	function shortcode_jin_num4_rich_old() {
		$star_path = get_template_directory_uri().'/img/rank04-rich.png';
		return '<img class="ranking-number-rich" src="'.$star_path.'" />';
	}
	add_shortcode( '4r', 'shortcode_jin_num4_rich_old' );
}





//ボックスショートコード1~15
function shortcode_jin_box01($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="simple-box1"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box01', 'shortcode_jin_box01' );

function shortcode_jin_box02($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="simple-box2"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box02', 'shortcode_jin_box02' );

function shortcode_jin_box03($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="simple-box3"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box03', 'shortcode_jin_box03' );

function shortcode_jin_box04($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="simple-box4"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box04', 'shortcode_jin_box04' );

function shortcode_jin_box05($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="simple-box5"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box05', 'shortcode_jin_box05' );

function shortcode_jin_box06($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="simple-box6"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box06', 'shortcode_jin_box06' );

function shortcode_jin_box07($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="simple-box7"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box07', 'shortcode_jin_box07' );

function shortcode_jin_box08($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="simple-box8"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box08', 'shortcode_jin_box08' );

function shortcode_jin_box09($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="simple-box9"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box09', 'shortcode_jin_box09' );

function shortcode_jin_box10($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="concept-box1"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box10', 'shortcode_jin_box10' );

function shortcode_jin_box11($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="concept-box2"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box11', 'shortcode_jin_box11' );

function shortcode_jin_box12($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="concept-box3"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box12', 'shortcode_jin_box12' );

function shortcode_jin_box13($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="concept-box4"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box13', 'shortcode_jin_box13' );

function shortcode_jin_box14($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="concept-box5"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box14', 'shortcode_jin_box14' );

function shortcode_jin_box15($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="concept-box6"><p>'.$content.'</p></div>';
}
add_shortcode( 'jin-box15', 'shortcode_jin_box15' );


//ボックスショートコード16~21
function shortcode_kaisetsubox01($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box1"><div class="kaisetsu-box1-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box01', 'shortcode_kaisetsubox01' );

function shortcode_kaisetsubox02($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box2"><div class="kaisetsu-box2-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box02', 'shortcode_kaisetsubox02' );

function shortcode_kaisetsubox03($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box3"><div class="kaisetsu-box3-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box03', 'shortcode_kaisetsubox03' );

function shortcode_kaisetsubox04($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box4"><div class="kaisetsu-box4-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box04', 'shortcode_kaisetsubox04' );

function shortcode_kaisetsubox05($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box5"><div class="kaisetsu-box5-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box05', 'shortcode_kaisetsubox05' );

function shortcode_innerlink_box01($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="innerlink-box1"><div class="innerlink-box1-title"><i class="jic jin-ifont-post"></i> '.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box06', 'shortcode_innerlink_box01' );




function balloon_shortcode($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	$path = get_stylesheet_directory_uri().'/img/';
	// athomemade delete
	$dir_info = wp_upload_dir();
	// ベースディレクトリ情報
	$basedir = $dir_info['basedir'];
	// ベースURL情報
	$baseurl = $dir_info['baseurl'];
	extract(shortcode_atts(array(
		'face' => 'man1',
		'name' => '',
		'align' => 'left',
		'border' => 'gray',
		'bg' => 'none',
		'style' => '',
	),$atts));
	switch ($face) {
		case "man1":
			$imageUrl = get_template_directory_uri().'/img/man1.png';
		break;
		case "man2":
			$imageUrl = get_template_directory_uri().'/img/man2.png';
		break;
		case "man3":
			$imageUrl = get_template_directory_uri().'/img/man3.png';
		break;
		case "woman1":
			$imageUrl = get_template_directory_uri().'/img/woman1.png';
		break;
		case "woman2":
			$imageUrl = get_template_directory_uri().'/img/woman2.png';
		break;
		case "woman3":
			$imageUrl = get_template_directory_uri().'/img/woman3.png';
		break;
		default:
			// athomemade
			// ファイル名からファイルのパスを取得
			$result = array();
			foreach(glob($basedir . '/*/*/'.$face) as $file) {	
				$result[] = $file;
			}
			if (empty($result)) {
				$result[0] = "";
			}
			// ファイルパスをURLに変更
			$path_result = str_replace($basedir, $baseurl, $result[0]);
			$imageUrl = $path_result; //任意のアバター画像を挿入する
		break;
	}
	return '<div class="balloon-box balloon-'.$align.' balloon-'.$border.' balloon-bg-'.$bg.' clearfix">
	<div class="balloon-icon '.$style.'"><img src="'.strip_tags($imageUrl).'" alt="'.$name.'"></div>
	<div class="icon-name">'.$name.'</div>
	<div class="balloon-serif"><div class="balloon-content">'.$content.'</div></div>
	</div>';
}
add_shortcode('chat','balloon_shortcode');



function shortcode_jin_2column_box($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => 'transparent',
	),$atts));
	return '<div class="jin-2column" style="background-color:'.$bg_color.';">'.$content.'</div>';
}
add_shortcode( '2col-box', 'shortcode_jin_2column_box' );


function shortcode_jin_2column_left($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-2column-left" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-2column-left col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-2column-left" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-2column-left col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}
}
add_shortcode( '2-left', 'shortcode_jin_2column_left' );


function shortcode_jin_2column_right($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-2column-right" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-2column-right col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-2column-right" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-2column-right col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}
}
add_shortcode( '2-right', 'shortcode_jin_2column_right' );



function shortcode_jin_3column_box($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => 'transparent',
	),$atts));
	return '<div class="jin-3column" style="background-color:'.$bg_color.';">'.$content.'</div>';
}
add_shortcode( '3col-box', 'shortcode_jin_3column_box' );


function shortcode_jin_3column_left($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-left" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-3column-left col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-left" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-3column-left col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}
}
add_shortcode( '3-left', 'shortcode_jin_3column_left' );


function shortcode_jin_3column_center($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-center" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-3column-center col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-center" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-3column-center col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}

}
add_shortcode( '3-center', 'shortcode_jin_3column_center' );


function shortcode_jin_3column_right($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-right" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-3column-right col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-right" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-3column-right col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}
}
add_shortcode( '3-right', 'shortcode_jin_3column_right' );



function shortcode_jin_lp_h2($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'style' => '',
	),$atts));
	return '<div class="jin-lp-h2 jinlph2-style'.$style.'"><h2>'.$content.'</h2></div>';
}
add_shortcode( 'lp-h2', 'shortcode_jin_lp_h2' );



function shortcode_jin_sen($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '',
		'size' => '',
	),$atts));
	return '<div class="jin-sen"><div class="jin-sen-solid" style="border-top-color:'.$color.'; border-top-width:'.$size.';"></div></div>';
}
add_shortcode( 'jin-sen', 'shortcode_jin_sen' );


function shortcode_jin_tensen($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '',
		'size' => '',
	),$atts));
	return '<div class="jin-sen"><div class="jin-sen-dashed" style="border-top-color:'.$color.'; border-top-width:'.$size.';"></div></div>';
}
add_shortcode( 'jin-tensen', 'shortcode_jin_tensen' );


function shortcode_jin_doublesen($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '',
		'size' => '',
	),$atts));
	return '<div class="jin-sen"><div class="jin-sen-double" style="border-top-color:'.$color.'; border-top-width:'.$size.';"></div></div>';
}
add_shortcode( 'jin-w-sen', 'shortcode_jin_doublesen' );




function shortcode_jin_yohaku10() {
	return '<div class="jin-yohaku10"></div>';
}
add_shortcode( 'jin-yohaku10', 'shortcode_jin_yohaku10' );

function shortcode_jin_yohaku15() {
	return '<div class="jin-yohaku15"></div>';
}
add_shortcode( 'jin-yohaku15', 'shortcode_jin_yohaku15' );

function shortcode_jin_yohaku20() {
	return '<div class="jin-yohaku20"></div>';
}
add_shortcode( 'jin-yohaku20', 'shortcode_jin_yohaku20' );

function shortcode_jin_yohaku25() {
	return '<div class="jin-yohaku25"></div>';
}
add_shortcode( 'jin-yohaku25', 'shortcode_jin_yohaku25' );

function shortcode_jin_yohaku30() {
	return '<div class="jin-yohaku30"></div>';
}
add_shortcode( 'jin-yohaku30', 'shortcode_jin_yohaku30' );

function shortcode_jin_yohaku35() {
	return '<div class="jin-yohaku35"></div>';
}
add_shortcode( 'jin-yohaku35', 'shortcode_jin_yohaku35' );

function shortcode_jin_yohaku40() {
	return '<div class="jin-yohaku40"></div>';
}
add_shortcode( 'jin-yohaku40', 'shortcode_jin_yohaku40' );

function shortcode_jin_yohaku45() {
	return '<div class="jin-yohaku45"></div>';
}
add_shortcode( 'jin-yohaku45', 'shortcode_jin_yohaku45' );

function shortcode_jin_yohaku50() {
	return '<div class="jin-yohaku50"></div>';
}
add_shortcode( 'jin-yohaku50', 'shortcode_jin_yohaku50' );



function shortcode_jin_img_custom($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'shadow' => 'off',
		'radius' => 'off',
		'border' => 'off',
	),$atts));
	return '<div class="jin-img-custom jin-img-shadow-'.$shadow.' jin-img-radius-'.$radius.' jin-img-border-'.$border.'">'.$content.'</div>';
	
}
add_shortcode( 'jin-img', 'shortcode_jin_img_custom' );



function shortcode_jin_img_shadow($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-img-shadow">'.$content.'</div>';
	
}
add_shortcode( 'jin-img-shadow', 'shortcode_jin_img_shadow' );


function shortcode_jin_img_kadomaru($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-img-kadomaru">'.$content.'</div>';
	
}
add_shortcode( 'jin-img-kadomaru', 'shortcode_jin_img_kadomaru' );


function shortcode_jin_img_waku($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-img-waku">'.$content.'</div>';
	
}
add_shortcode( 'jin-img-waku', 'shortcode_jin_img_waku' );


function shortcode_jin_img_maruwaku($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-img-maruwaku">'.$content.'</div>';
	
}
add_shortcode( 'jin-img-maruwaku', 'shortcode_jin_img_maruwaku' );


function shortcode_jin_fusen1_down($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen1-down">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen1-down', 'shortcode_jin_fusen1_down' );

function shortcode_jin_fusen1_even($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen1-even">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen1-even', 'shortcode_jin_fusen1_even' );

function shortcode_jin_fusen1_up($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen1-up">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen1-up', 'shortcode_jin_fusen1_up' );



function shortcode_jin_fusen2($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen2">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen2', 'shortcode_jin_fusen2' );


function shortcode_jin_fusen3($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen3">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen3', 'shortcode_jin_fusen3' );


function shortcode_jin_iconbox01($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox yellow-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-caution jin-icons"></i></div><div class="jin-iconbox-main yellow--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox01', 'shortcode_jin_iconbox01' );

function shortcode_jin_iconbox02($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox yellow-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-star jin-icons"></i></div><div class="jin-iconbox-main yellow--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox02', 'shortcode_jin_iconbox02' );

function shortcode_jin_iconbox03($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox yellow-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-bulb jin-icons"></i></div><div class="jin-iconbox-main yellow--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox03', 'shortcode_jin_iconbox03' );

function shortcode_jin_iconbox04($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox yellow-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-cart jin-icons"></i></div><div class="jin-iconbox-main yellow--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox04', 'shortcode_jin_iconbox04' );

function shortcode_jin_iconbox05($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox green-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-speaker jin-icons"></i></div><div class="jin-iconbox-main green--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox05', 'shortcode_jin_iconbox05' );

function shortcode_jin_iconbox06($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox green-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-comment jin-icons"></i></div><div class="jin-iconbox-main green--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox06', 'shortcode_jin_iconbox06' );

function shortcode_jin_iconbox07($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox green-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-check-circle jin-icons"></i></div><div class="jin-iconbox-main green--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox07', 'shortcode_jin_iconbox07' );

function shortcode_jin_iconbox08($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox green-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-pencil jin-icons"></i></div><div class="jin-iconbox-main green--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox08', 'shortcode_jin_iconbox08' );

function shortcode_jin_iconbox09($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox blue-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-like jin-icons"></i></div><div class="jin-iconbox-main blue--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox09', 'shortcode_jin_iconbox09' );

function shortcode_jin_iconbox10($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox blue-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-information jin-icons"></i></div><div class="jin-iconbox-main blue--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox10', 'shortcode_jin_iconbox10' );

function shortcode_jin_iconbox11($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox blue-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-gear jin-icons"></i></div><div class="jin-iconbox-main blue--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox11', 'shortcode_jin_iconbox11' );

function shortcode_jin_iconbox12($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox blue-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-clipboard jin-icons"></i></div><div class="jin-iconbox-main blue--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox12', 'shortcode_jin_iconbox12' );

function shortcode_jin_iconbox13($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox red-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-heart jin-icons"></i></div><div class="jin-iconbox-main red--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox13', 'shortcode_jin_iconbox13' );

function shortcode_jin_iconbox14($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox red-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-unlike jin-icons"></i></div><div class="jin-iconbox-main red--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox14', 'shortcode_jin_iconbox14' );

function shortcode_jin_iconbox15($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox red-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-question jin-icons"></i></div><div class="jin-iconbox-main red--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox15', 'shortcode_jin_iconbox15' );

function shortcode_jin_iconbox16($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox red-iconbox"><div class="jin-iconbox-icons"><i class="jic jin-ifont-flag jin-icons"></i></div><div class="jin-iconbox-main red--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox16', 'shortcode_jin_iconbox16' );



function shortcode_jin_button01($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#54dcef',
		'radius' => '50px',
		'visual' => 'flat',
		'hover' => 'down',
		'url' => '#',
		'target' => '_self',
	),$atts));
	return '<div class="jin-flexbox"><div class="jin-shortcode-button jsb-visual-'.$visual.' jsb-hover-'.$hover.'"><a href="'.$url.'" target="'.$target.'" style="background-color:'.$color.'; border-radius:'.$radius.';">'.$content.'</a></div></div>';
}
add_shortcode( 'jin-button-flat', 'shortcode_jin_button01' );


function shortcode_jin_button02($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color1' => '#54dcef',
		'color2' => '#0794E8',
		'radius' => '50px',
		'visual' => 'gradation',
		'hover' => 'down',
		'url' => '#',
		'target' => '_self',
	),$atts));
	return '<div class="jin-flexbox"><div class="jin-shortcode-button jsb-visual-'.$visual.' jsb-hover-'.$hover.'"><a href="'.$url.'" target="'.$target.'" style="background: linear-gradient(107.61deg, '.$color1.' 7.99%, '.$color2.' 91.12%); border-radius:'.$radius.';">'.$content.'</a></div></div>';
}
add_shortcode( 'jin-button-gradation', 'shortcode_jin_button02' );

function shortcode_jin_button03($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color1' => '#54dcef',
		'color2' => '#0794E8',
		'radius' => '50px',
		'visual' => 'shiny',
		'hover' => 'down',
		'url' => '#',
		'target' => '_self',
	),$atts));
	return '<div class="jin-flexbox"><div class="jin-shortcode-button jsb-visual-'.$visual.' jsb-hover-'.$hover.'"><a href="'.$url.'" target="'.$target.'" style="background: linear-gradient(107.61deg, '.$color1.' 7.99%, '.$color2.' 91.12%); border-radius:'.$radius.';">'.$content.'</a></div></div>';
}
add_shortcode( 'jin-button-shiny', 'shortcode_jin_button03' );

function shortcode_jin_button04($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color1' => '#54dcef',
		'color2' => '#0794E8',
		'radius' => '50px',
		'visual' => 'float',
		'hover' => 'down',
		'url' => '#',
		'target' => '_self',
	),$atts));
	return '<div class="jin-flexbox"><div class="jin-shortcode-button jsb-visual-'.$visual.' jsb-hover-'.$hover.'"><a href="'.$url.'" target="'.$target.'" style="background: linear-gradient(107.61deg, '.$color1.' 7.99%, '.$color2.' 91.12%); border-radius:'.$radius.';">'.$content.'</a></div></div>';
}
add_shortcode( 'jin-button-float', 'shortcode_jin_button04' );

function shortcode_jin_button05($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color1' => '#54dcef',
		'color2' => '#0794E8',
		'radius' => '50px',
		'visual' => 'bound',
		'hover' => 'down',
		'url' => '#',
		'target' => '_self',
	),$atts));
	return '<div class="jin-flexbox"><div class="jin-shortcode-button jsb-visual-'.$visual.' jsb-hover-'.$hover.'"><a href="'.$url.'" target="'.$target.'" style="background: linear-gradient(107.61deg, '.$color1.' 7.99%, '.$color2.' 91.12%); border-radius:'.$radius.';">'.$content.'</a></div></div>';
}
add_shortcode( 'jin-button-bound', 'shortcode_jin_button05' );


function shortcode_jin_flexbox($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'sp_2col' => 'off',
	),$atts));
	return '<div class="jin-flexbox jsb-sp-2col-'.$sp_2col.'">'.$content.'</div>';
}
add_shortcode( 'jin-flexbox', 'shortcode_jin_flexbox' );




//オリジナルアイコン
function shortcode_jin_icon_home($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-home"><i class="jic jin-ifont-home"></i></span>';
}
add_shortcode( 'jin_icon_home', 'shortcode_jin_icon_home' );

function shortcode_jin_icon_pen($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-pencil"><i class="jic jin-ifont-pencil"></i></span>';
}
add_shortcode( 'jin_icon_pen', 'shortcode_jin_icon_pen' );

function shortcode_jin_icon_reload($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-reload"><i class="jic jin-ifont-reload"></i></span>';
}
add_shortcode( 'jin_icon_reload', 'shortcode_jin_icon_reload' );

function shortcode_jin_icon_check($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-check"><i class="jic jin-ifont-check"></i></span>';
}
add_shortcode( 'jin_icon_check', 'shortcode_jin_icon_check' );

function shortcode_jin_icon_checkcircle($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-check-circle"><i class="jic jin-ifont-check-circle"></i></span>';
}
add_shortcode( 'jin_icon_check_circle', 'shortcode_jin_icon_checkcircle' );

function shortcode_jin_icon_archive($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '23px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-archive"><i class="jic jin-ifont-archive"></i></span>';
}
add_shortcode( 'jin_icon_archive', 'shortcode_jin_icon_archive' );

function shortcode_jin_icon_mail($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-mail"><i class="jic jin-ifont-mail"></i></span>';
}
add_shortcode( 'jin_icon_mail', 'shortcode_jin_icon_mail' );

function shortcode_jin_icon_bulb($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '21px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-bulb"><i class="jic jin-ifont-bulb"></i></span>';
}
add_shortcode( 'jin_icon_bulb', 'shortcode_jin_icon_bulb' );

function shortcode_jin_icon_reply($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '21px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-reply"><i class="jic jin-ifont-reply"></i></span>';
}
add_shortcode( 'jin_icon_reply', 'shortcode_jin_icon_reply' );

function shortcode_jin_icon_relatedpost($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-related-post"><i class="jic jin-ifont-related-post"></i></span>';
}
add_shortcode( 'jin_icon_relatedpost', 'shortcode_jin_icon_relatedpost' );

function shortcode_jin_icon_caution($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-caution"><i class="jic jin-ifont-caution"></i></span>';
}
add_shortcode( 'jin_icon_caution', 'shortcode_jin_icon_caution' );

function shortcode_jin_icon_info($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-information"><i class="jic jin-ifont-information"></i></span>';
}
add_shortcode( 'jin_icon_info', 'shortcode_jin_icon_info' );

function shortcode_jin_icon_folder($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '21px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-folder"><i class="jic jin-ifont-folder"></i></span>';
}
add_shortcode( 'jin_icon_folder', 'shortcode_jin_icon_folder' );

function shortcode_jin_icon_comment($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-comment"><i class="jic jin-ifont-comment"></i></span>';
}
add_shortcode( 'jin_icon_comment', 'shortcode_jin_icon_comment' );

function shortcode_jin_icon_question($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-question"><i class="jic jin-ifont-question"></i></span>';
}
add_shortcode( 'jin_icon_question', 'shortcode_jin_icon_question' );

function shortcode_jin_icon_flag($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-flag"><i class="jic jin-ifont-flag"></i></span>';
}
add_shortcode( 'jin_icon_flag', 'shortcode_jin_icon_flag' );

function shortcode_jin_icon_book($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-book"><i class="jic jin-ifont-book"></i></span>';
}
add_shortcode( 'jin_icon_book', 'shortcode_jin_icon_book' );

function shortcode_jin_icon_account($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '19px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-account"><i class="jic jin-ifont-account"></i></span>';
}
add_shortcode( 'jin_icon_account', 'shortcode_jin_icon_account' );

function shortcode_jin_icon_watch($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-watch"><i class="jic jin-ifont-watch"></i></span>';
}
add_shortcode( 'jin_icon_watch', 'shortcode_jin_icon_watch' );

function shortcode_jin_icon_star($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-star"><i class="jic jin-ifont-star"></i></span>';
}
add_shortcode( 'jin_icon_star', 'shortcode_jin_icon_star' );

function shortcode_jin_icon_starhalf($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-star-half"><i class="jic jin-ifont-star-half"></i></span>';
}
add_shortcode( 'jin_icon_starhalf', 'shortcode_jin_icon_starhalf' );

function shortcode_jin_icon_starblank($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-star-blank"><i class="jic jin-ifont-star-blank"></i></span>';
}
add_shortcode( 'jin_icon_starblank', 'shortcode_jin_icon_starblank' );

function shortcode_jin_icon_gear($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-gear"><i class="jic jin-ifont-gear"></i></span>';
}
add_shortcode( 'jin_icon_gear', 'shortcode_jin_icon_gear' );

function shortcode_jin_icon_copy($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-copy"><i class="jic jin-ifont-copy"></i></span>';
}
add_shortcode( 'jin_icon_copy', 'shortcode_jin_icon_copy' );

function shortcode_jin_icon_cart($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '19px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-cart"><i class="jic jin-ifont-cart"></i></span>';
}
add_shortcode( 'jin_icon_cart', 'shortcode_jin_icon_cart' );

function shortcode_jin_icon_batu($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-batu"><i class="jic jin-ifont-batu"></i></span>';
}
add_shortcode( 'jin_icon_batu', 'shortcode_jin_icon_batu' );

function shortcode_jin_icon_plus($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-plus"><i class="jic jin-ifont-plus"></i></span>';
}
add_shortcode( 'jin_icon_plus', 'shortcode_jin_icon_plus' );

function shortcode_jin_icon_heart($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-heart"><i class="jic jin-ifont-heart"></i></span>';
}
add_shortcode( 'jin_icon_heart', 'shortcode_jin_icon_heart' );

function shortcode_jin_icon_like($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-like"><i class="jic jin-ifont-like"></i></span>';
}
add_shortcode( 'jin_icon_like', 'shortcode_jin_icon_like' );

function shortcode_jin_icon_unlike($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-unlike"><i class="jic jin-ifont-unlike"></i></span>';
}
add_shortcode( 'jin_icon_unlike', 'shortcode_jin_icon_unlike' );

function shortcode_jin_icon_speaker($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-speaker"><i class="jic jin-ifont-speaker"></i></span>';
}
add_shortcode( 'jin_icon_speaker', 'shortcode_jin_icon_speaker' );

function shortcode_jin_icon_clipboard($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-clipboard"><i class="jic jin-ifont-clipboard"></i></span>';
}
add_shortcode( 'jin_icon_clipboard', 'shortcode_jin_icon_clipboard' );

function shortcode_jin_icon_arrow($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-arrow"><i class="jic jin-ifont-arrow"></i></span>';
}
add_shortcode( 'jin_icon_arrow', 'shortcode_jin_icon_arrow' );

function shortcode_jin_icon_arrowdouble($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-double-arrow"><i class="jic jin-ifont-double-arrow"></i></span>';
}
add_shortcode( 'jin_icon_arrowdouble', 'shortcode_jin_icon_arrowdouble' );

function shortcode_jin_icon_arrowcircle($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-arrow-circle"><i class="jic jin-ifont-arrow-circle"></i></span>';
}
add_shortcode( 'jin_icon_arrowcircle', 'shortcode_jin_icon_arrowcircle' );

function shortcode_jin_icon_arrowtop($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-arrow-top"><i class="jic jin-ifont-arrow-top"></i></span>';
}
add_shortcode( 'jin_icon_arrowtop', 'shortcode_jin_icon_arrowtop' );

function shortcode_jin_icon_tag($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-tag"><i class="jic jin-ifont-tag"></i></span>';
}
add_shortcode( 'jin_icon_tag', 'shortcode_jin_icon_tag' );

function shortcode_jin_icon_crown($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '19px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-crown"><i class="jic jin-ifont-crown"></i></span>';
}
add_shortcode( 'jin_icon_crown', 'shortcode_jin_icon_crown' );

function shortcode_jin_icon_navi($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '23px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-navi"><i class="jic jin-ifont-navi"></i></span>';
}
add_shortcode( 'jin_icon_navi', 'shortcode_jin_icon_navi' );

function shortcode_jin_icon_droppin($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '20px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-droppin"><i class="jic jin-ifont-droppin"></i></span>';
}
add_shortcode( 'jin_icon_droppin', 'shortcode_jin_icon_droppin' );

function shortcode_jin_icon_mobile($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-mobile"><i class="jic jin-ifont-mobile"></i></span>';
}
add_shortcode( 'jin_icon_mobile', 'shortcode_jin_icon_mobile' );

function shortcode_jin_icon_pc($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '21px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-pc"><i class="jic jin-ifont-pc"></i></span>';
}
add_shortcode( 'jin_icon_pc', 'shortcode_jin_icon_pc' );

function shortcode_jin_icon_maru($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '20px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-maru"><i class="jic jin-ifont-maru"></i></span>';
}
add_shortcode( 'jin_icon_maru', 'shortcode_jin_icon_maru' );

function shortcode_jin_icon_facebook($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '15px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-facebook"><i class="jic jin-ifont-facebook"></i></span>';
}
add_shortcode( 'jin_icon_facebook', 'shortcode_jin_icon_facebook' );

function shortcode_jin_icon_twitter($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '25px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-twitter"><i class="jic jin-ifont-twitter"></i></span>';
}
add_shortcode( 'jin_icon_twitter', 'shortcode_jin_icon_twitter' );

function shortcode_jin_icon_youtube($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-youtube"><i class="jic jin-ifont-youtube"></i></span>';
}
add_shortcode( 'jin_icon_youtube', 'shortcode_jin_icon_youtube' );

function shortcode_jin_icon_instagram($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-instagram"><i class="jic jin-ifont-instagram"></i></span>';
}
add_shortcode( 'jin_icon_instagram', 'shortcode_jin_icon_instagram' );

function shortcode_jin_icon_line($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '23px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-line"><i class="jic jin-ifont-line"></i></span>';
}
add_shortcode( 'jin_icon_line', 'shortcode_jin_icon_line' );

function shortcode_jin_icon_search($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-search"><i class="jic jin-ifont-search"></i></span>';
}
add_shortcode( 'jin_icon_search', 'shortcode_jin_icon_search' );

function shortcode_jin_icon_post($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-post"><i class="jic jin-ifont-post"></i></span>';
}
add_shortcode( 'jin_icon_post', 'shortcode_jin_icon_post' );

function shortcode_jin_icon_clover($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '19px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-clover"><i class="jic jin-ifont-clover"></i></span>';
}
add_shortcode( 'jin_icon_clover', 'shortcode_jin_icon_clover' );

function shortcode_jin_icon_arrowbottom($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '17px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-arrow-bottom"><i class="jic jin-ifont-arrow-bottom"></i></span>';
}
add_shortcode( 'jin_icon_arrowbottom', 'shortcode_jin_icon_arrowbottom' );

function shortcode_jin_icon_arrowleft($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-arrow-left"><i class="jic jin-ifont-arrow-left"></i></span>';
}
add_shortcode( 'jin_icon_arrowleft', 'shortcode_jin_icon_arrowleft' );

function shortcode_jin_icon_bookmark($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-bookmark"><i class="jic jin-ifont-bookmark"></i></span>';
}
add_shortcode( 'jin_icon_bookmark', 'shortcode_jin_icon_bookmark' );

function shortcode_jin_icon_inazuma($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '18px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-inazuma"><i class="jic jin-ifont-inazuma"></i></span>';
}
add_shortcode( 'jin_icon_inazuma', 'shortcode_jin_icon_inazuma' );

function shortcode_jin_icon_share($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '15px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-share"><i class="jic jin-ifont-share"></i></span>';
}
add_shortcode( 'jin_icon_share', 'shortcode_jin_icon_share' );

function shortcode_jin_icon_spanner($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-spanner"><i class="jic jin-ifont-spanner"></i></span>';
}
add_shortcode( 'jin_icon_spanner', 'shortcode_jin_icon_spanner' );


//ver2.20
function shortcode_jin_icon_books($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-books"><i class="jic jin-ifont-books"></i></span>';
}
add_shortcode( 'jin_icon_books', 'shortcode_jin_icon_books' );

function shortcode_jin_icon_calendar($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-calendar"><i class="jic jin-ifont-calendar"></i></span>';
}
add_shortcode( 'jin_icon_calendar', 'shortcode_jin_icon_calendar' );

function shortcode_jin_icon_coin($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-coin"><i class="jic jin-ifont-coin"></i></span>';
}
add_shortcode( 'jin_icon_coin', 'shortcode_jin_icon_coin' );

function shortcode_jin_icon_illust($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-illust"><i class="jic jin-ifont-illust"></i></span>';
}
add_shortcode( 'jin_icon_illust', 'shortcode_jin_icon_illust' );

function shortcode_jin_icon_lock($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-lock"><i class="jic jin-ifont-lock"></i></span>';
}
add_shortcode( 'jin_icon_lock', 'shortcode_jin_icon_lock' );

function shortcode_jin_icon_mail_send($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-mail-send"><i class="jic jin-ifont-mail-send"></i></span>';
}
add_shortcode( 'jin_icon_mail-send', 'shortcode_jin_icon_mail_send' );

function shortcode_jin_icon_movie($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-movie"><i class="jic jin-ifont-movie"></i></span>';
}
add_shortcode( 'jin_icon_movie', 'shortcode_jin_icon_movie' );

function shortcode_jin_icon_photo($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-photo"><i class="jic jin-ifont-photo"></i></span>';
}
add_shortcode( 'jin_icon_photo', 'shortcode_jin_icon_photo' );

function shortcode_jin_icon_program($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-program"><i class="jic jin-ifont-program"></i></span>';
}
add_shortcode( 'jin_icon_program', 'shortcode_jin_icon_program' );

function shortcode_jin_icon_website($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-website"><i class="jic jin-ifont-website"></i></span>';
}
add_shortcode( 'jin_icon_website', 'shortcode_jin_icon_website' );

function shortcode_jin_icon_writer($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-writer"><i class="jic jin-ifont-writer"></i></span>';
}
add_shortcode( 'jin_icon_writer', 'shortcode_jin_icon_writer' );

function shortcode_jin_icon_coin_cover($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-coin-cover"><i class="jic jin-ifont-coin-cover"></i></span>';
}
add_shortcode( 'jin_icon_coin-cover', 'shortcode_jin_icon_coin_cover' );

function shortcode_jin_icon_airline($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-airline"><i class="jic jin-ifont-airline"></i></span>';
}
add_shortcode( 'jin_icon_airline', 'shortcode_jin_icon_airline' );

function shortcode_jin_icon_arrow_b_circle($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-arrow-b-circle"><i class="jic jin-ifont-arrow-b-circle"></i></span>';
}
add_shortcode( 'jin_icon_arrow-b-circle', 'shortcode_jin_icon_arrow_b_circle' );

function shortcode_jin_icon_arrow_b($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-arrow-b"><i class="jic jin-ifont-arrow-b"></i></span>';
}
add_shortcode( 'jin_icon_arrow-b', 'shortcode_jin_icon_arrow_b' );

function shortcode_jin_icon_arrowclear($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-arrowclear"><i class="jic jin-ifont-arrowclear"></i></span>';
}
add_shortcode( 'jin_icon_arrowclear', 'shortcode_jin_icon_arrowclear' );

function shortcode_jin_icon_arrowsquare($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-arrowsquare"><i class="jic jin-ifont-arrowsquare"></i></span>';
}
add_shortcode( 'jin_icon_arrowsquare', 'shortcode_jin_icon_arrowsquare' );

function shortcode_jin_icon_baby($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-baby"><i class="jic jin-ifont-baby"></i></span>';
}
add_shortcode( 'jin_icon_baby', 'shortcode_jin_icon_baby' );

function shortcode_jin_icon_bike($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-bike"><i class="jic jin-ifont-bike"></i></span>';
}
add_shortcode( 'jin_icon_bike', 'shortcode_jin_icon_bike' );

function shortcode_jin_icon_birthdaycake($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-birthdaycake"><i class="jic jin-ifont-birthdaycake"></i></span>';
}
add_shortcode( 'jin_icon_birthdaycake', 'shortcode_jin_icon_birthdaycake' );

function shortcode_jin_icon_bitcoin($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-bitcoin"><i class="jic jin-ifont-bitcoin"></i></span>';
}
add_shortcode( 'jin_icon_bitcoin', 'shortcode_jin_icon_bitcoin' );

function shortcode_jin_icon_bitcoinwallet($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-bitcoinwallet"><i class="jic jin-ifont-bitcoinwallet"></i></span>';
}
add_shortcode( 'jin_icon_bitcoinwallet', 'shortcode_jin_icon_bitcoinwallet' );

function shortcode_jin_icon_bookopen($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-bookopen"><i class="jic jin-ifont-bookopen"></i></span>';
}
add_shortcode( 'jin_icon_bookopen', 'shortcode_jin_icon_bookopen' );

function shortcode_jin_icon_bottoms($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-bottoms"><i class="jic jin-ifont-bottoms"></i></span>';
}
add_shortcode( 'jin_icon_bottoms', 'shortcode_jin_icon_bottoms' );

function shortcode_jin_icon_cafe($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-cafe"><i class="jic jin-ifont-cafe"></i></span>';
}
add_shortcode( 'jin_icon_cafe', 'shortcode_jin_icon_cafe' );

function shortcode_jin_icon_camera($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-camera"><i class="jic jin-ifont-camera"></i></span>';
}
add_shortcode( 'jin_icon_camera', 'shortcode_jin_icon_camera' );

function shortcode_jin_icon_car($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-car"><i class="jic jin-ifont-car"></i></span>';
}
add_shortcode( 'jin_icon_car', 'shortcode_jin_icon_car' );

function shortcode_jin_icon_cardboadbox3($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-cardboadbox3"><i class="jic jin-ifont-cardboadbox3"></i></span>';
}
add_shortcode( 'jin_icon_cardboadbox3', 'shortcode_jin_icon_cardboadbox3' );

function shortcode_jin_icon_cardboadbox($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-cardboadbox"><i class="jic jin-ifont-cardboadbox"></i></span>';
}
add_shortcode( 'jin_icon_cardboadbox', 'shortcode_jin_icon_cardboadbox' );

function shortcode_jin_icon_cat($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-cat"><i class="jic jin-ifont-cat"></i></span>';
}
add_shortcode( 'jin_icon_cat', 'shortcode_jin_icon_cat' );

function shortcode_jin_icon_chick($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-chick"><i class="jic jin-ifont-chick"></i></span>';
}
add_shortcode( 'jin_icon_chick', 'shortcode_jin_icon_chick' );

function shortcode_jin_icon_conditioner($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-conditioner"><i class="jic jin-ifont-conditioner"></i></span>';
}
add_shortcode( 'jin_icon_conditioner', 'shortcode_jin_icon_conditioner' );

function shortcode_jin_icon_cosme($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-cosme"><i class="jic jin-ifont-cosme"></i></span>';
}
add_shortcode( 'jin_icon_cosme', 'shortcode_jin_icon_cosme' );

function shortcode_jin_icon_couple($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-couple"><i class="jic jin-ifont-couple"></i></span>';
}
add_shortcode( 'jin_icon_couple', 'shortcode_jin_icon_couple' );

function shortcode_jin_icon_creditcard($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-creditcard"><i class="jic jin-ifont-creditcard"></i></span>';
}
add_shortcode( 'jin_icon_creditcard', 'shortcode_jin_icon_creditcard' );

function shortcode_jin_icon_datsumou($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-datsumou"><i class="jic jin-ifont-datsumou"></i></span>';
}
add_shortcode( 'jin_icon_datsumou', 'shortcode_jin_icon_datsumou' );

function shortcode_jin_icon_diamond($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-diamond"><i class="jic jin-ifont-diamond"></i></span>';
}
add_shortcode( 'jin_icon_diamond', 'shortcode_jin_icon_diamond' );

function shortcode_jin_icon_dinner($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-dinner"><i class="jic jin-ifont-dinner"></i></span>';
}
add_shortcode( 'jin_icon_dinner', 'shortcode_jin_icon_dinner' );

function shortcode_jin_icon_dog($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-dog"><i class="jic jin-ifont-dog"></i></span>';
}
add_shortcode( 'jin_icon_dog', 'shortcode_jin_icon_dog' );

function shortcode_jin_icon_download($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-download"><i class="jic jin-ifont-download"></i></span>';
}
add_shortcode( 'jin_icon_download', 'shortcode_jin_icon_download' );

function shortcode_jin_icon_drag($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-drag"><i class="jic jin-ifont-drag"></i></span>';
}
add_shortcode( 'jin_icon_drag', 'shortcode_jin_icon_drag' );

function shortcode_jin_icon_dumbbell($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-dumbbell"><i class="jic jin-ifont-dumbbell"></i></span>';
}
add_shortcode( 'jin_icon_dumbbell', 'shortcode_jin_icon_dumbbell' );

function shortcode_jin_icon_earphone($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-earphone"><i class="jic jin-ifont-earphone"></i></span>';
}
add_shortcode( 'jin_icon_earphone', 'shortcode_jin_icon_earphone' );

function shortcode_jin_icon_female($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-female"><i class="jic jin-ifont-female"></i></span>';
}
add_shortcode( 'jin_icon_female', 'shortcode_jin_icon_female' );

function shortcode_jin_icon_flower($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-flower"><i class="jic jin-ifont-flower"></i></span>';
}
add_shortcode( 'jin_icon_flower', 'shortcode_jin_icon_flower' );

function shortcode_jin_icon_folkspoon($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-folkspoon"><i class="jic jin-ifont-folkspoon"></i></span>';
}
add_shortcode( 'jin_icon_folkspoon', 'shortcode_jin_icon_folkspoon' );

function shortcode_jin_icon_game($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-game"><i class="jic jin-ifont-game"></i></span>';
}
add_shortcode( 'jin_icon_game', 'shortcode_jin_icon_game' );

function shortcode_jin_icon_girl($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-girl"><i class="jic jin-ifont-girl"></i></span>';
}
add_shortcode( 'jin_icon_girl', 'shortcode_jin_icon_girl' );

function shortcode_jin_icon_graph($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-graph"><i class="jic jin-ifont-graph"></i></span>';
}
add_shortcode( 'jin_icon_graph', 'shortcode_jin_icon_graph' );

function shortcode_jin_icon_handbag($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-handbag"><i class="jic jin-ifont-handbag"></i></span>';
}
add_shortcode( 'jin_icon_handbag', 'shortcode_jin_icon_handbag' );

function shortcode_jin_icon_headphone($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-headphone"><i class="jic jin-ifont-headphone"></i></span>';
}
add_shortcode( 'jin_icon_headphone', 'shortcode_jin_icon_headphone' );

function shortcode_jin_icon_homewifi($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-homewifi"><i class="jic jin-ifont-homewifi"></i></span>';
}
add_shortcode( 'jin_icon_homewifi', 'shortcode_jin_icon_homewifi' );

function shortcode_jin_icon_kid($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-kid"><i class="jic jin-ifont-kid"></i></span>';
}
add_shortcode( 'jin_icon_kid', 'shortcode_jin_icon_kid' );

function shortcode_jin_icon_kirakira($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-kirakira"><i class="jic jin-ifont-kirakira"></i></span>';
}
add_shortcode( 'jin_icon_kirakira', 'shortcode_jin_icon_kirakira' );

function shortcode_jin_icon_link($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-link"><i class="jic jin-ifont-link"></i></span>';
}
add_shortcode( 'jin_icon_link', 'shortcode_jin_icon_link' );

function shortcode_jin_icon_lipstick($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-lipstick"><i class="jic jin-ifont-lipstick"></i></span>';
}
add_shortcode( 'jin_icon_lipstick', 'shortcode_jin_icon_lipstick' );

function shortcode_jin_icon_makeup($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-makeup"><i class="jic jin-ifont-makeup"></i></span>';
}
add_shortcode( 'jin_icon_makeup', 'shortcode_jin_icon_makeup' );

function shortcode_jin_icon_male($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-male"><i class="jic jin-ifont-male"></i></span>';
}
add_shortcode( 'jin_icon_male', 'shortcode_jin_icon_male' );

function shortcode_jin_icon_malefemale($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-malefemale"><i class="jic jin-ifont-malefemale"></i></span>';
}
add_shortcode( 'jin_icon_malefemale', 'shortcode_jin_icon_malefemale' );

function shortcode_jin_icon_moneybag($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-moneybag"><i class="jic jin-ifont-moneybag"></i></span>';
}
add_shortcode( 'jin_icon_moneybag', 'shortcode_jin_icon_moneybag' );

function shortcode_jin_icon_moneywallet($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-moneywallet"><i class="jic jin-ifont-moneywallet"></i></span>';
}
add_shortcode( 'jin_icon_moneywallet', 'shortcode_jin_icon_moneywallet' );

function shortcode_jin_icon_nikukyu($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-nikukyu"><i class="jic jin-ifont-nikukyu"></i></span>';
}
add_shortcode( 'jin_icon_nikukyu', 'shortcode_jin_icon_nikukyu' );

function shortcode_jin_icon_onpu($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-onpu"><i class="jic jin-ifont-onpu"></i></span>';
}
add_shortcode( 'jin_icon_onpu', 'shortcode_jin_icon_onpu' );

function shortcode_jin_icon_paint($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-paint"><i class="jic jin-ifont-paint"></i></span>';
}
add_shortcode( 'jin_icon_paint', 'shortcode_jin_icon_paint' );

function shortcode_jin_icon_petfood($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-petfood"><i class="jic jin-ifont-petfood"></i></span>';
}
add_shortcode( 'jin_icon_petfood', 'shortcode_jin_icon_petfood' );

function shortcode_jin_icon_plant($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-plant"><i class="jic jin-ifont-plant"></i></span>';
}
add_shortcode( 'jin_icon_plant', 'shortcode_jin_icon_plant' );

function shortcode_jin_icon_pocketwifi($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-pocketwifi"><i class="jic jin-ifont-pocketwifi"></i></span>';
}
add_shortcode( 'jin_icon_pocketwifi', 'shortcode_jin_icon_pocketwifi' );

function shortcode_jin_icon_prbadge($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-prbadge"><i class="jic jin-ifont-prbadge"></i></span>';
}
add_shortcode( 'jin_icon_prbadge', 'shortcode_jin_icon_prbadge' );

function shortcode_jin_icon_present($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-present"><i class="jic jin-ifont-present"></i></span>';
}
add_shortcode( 'jin_icon_present', 'shortcode_jin_icon_present' );

function shortcode_jin_icon_qrpay($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-qrpay"><i class="jic jin-ifont-qrpay"></i></span>';
}
add_shortcode( 'jin_icon_qrpay', 'shortcode_jin_icon_qrpay' );

function shortcode_jin_icon_rice($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-rice"><i class="jic jin-ifont-rice"></i></span>';
}
add_shortcode( 'jin_icon_rice', 'shortcode_jin_icon_rice' );

function shortcode_jin_icon_rpoint($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-rpoint"><i class="jic jin-ifont-rpoint"></i></span>';
}
add_shortcode( 'jin_icon_rpoint', 'shortcode_jin_icon_rpoint' );

function shortcode_jin_icon_rucksack($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-rucksack"><i class="jic jin-ifont-rucksack"></i></span>';
}
add_shortcode( 'jin_icon_rucksack', 'shortcode_jin_icon_rucksack' );

function shortcode_jin_icon_saving($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-saving"><i class="jic jin-ifont-saving"></i></span>';
}
add_shortcode( 'jin_icon_saving', 'shortcode_jin_icon_saving' );

function shortcode_jin_icon_scooter($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-scooter"><i class="jic jin-ifont-scooter"></i></span>';
}
add_shortcode( 'jin_icon_scooter', 'shortcode_jin_icon_scooter' );

function shortcode_jin_icon_seedleaf($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-seedleaf"><i class="jic jin-ifont-seedleaf"></i></span>';
}
add_shortcode( 'jin_icon_seedleaf', 'shortcode_jin_icon_seedleaf' );

function shortcode_jin_icon_shoes($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-shoes"><i class="jic jin-ifont-shoes"></i></span>';
}
add_shortcode( 'jin_icon_shoes', 'shortcode_jin_icon_shoes' );

function shortcode_jin_icon_simcard($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-simcard"><i class="jic jin-ifont-simcard"></i></span>';
}
add_shortcode( 'jin_icon_simcard', 'shortcode_jin_icon_simcard' );

function shortcode_jin_icon_skirt($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-skirt"><i class="jic jin-ifont-skirt"></i></span>';
}
add_shortcode( 'jin_icon_skirt', 'shortcode_jin_icon_skirt' );

function shortcode_jin_icon_smartphone($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-smartphone"><i class="jic jin-ifont-smartphone"></i></span>';
}
add_shortcode( 'jin_icon_smartphone', 'shortcode_jin_icon_smartphone' );

function shortcode_jin_icon_smartspeaker($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-smartspeaker"><i class="jic jin-ifont-smartspeaker"></i></span>';
}
add_shortcode( 'jin_icon_smartspeaker', 'shortcode_jin_icon_smartspeaker' );

function shortcode_jin_icon_smile($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-smile"><i class="jic jin-ifont-smile"></i></span>';
}
add_shortcode( 'jin_icon_smile', 'shortcode_jin_icon_smile' );

function shortcode_jin_icon_sun($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-sun"><i class="jic jin-ifont-sun"></i></span>';
}
add_shortcode( 'jin_icon_sun', 'shortcode_jin_icon_sun' );

function shortcode_jin_icon_supplement($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-supplement"><i class="jic jin-ifont-supplement"></i></span>';
}
add_shortcode( 'jin_icon_supplement', 'shortcode_jin_icon_supplement' );

function shortcode_jin_icon_supplement2($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-supplement2"><i class="jic jin-ifont-supplement2"></i></span>';
}
add_shortcode( 'jin_icon_supplement2', 'shortcode_jin_icon_supplement2' );

function shortcode_jin_icon_tapioka($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-tapioka"><i class="jic jin-ifont-tapioka"></i></span>';
}
add_shortcode( 'jin_icon_tapioka', 'shortcode_jin_icon_tapioka' );

function shortcode_jin_icon_telephone($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-telephone"><i class="jic jin-ifont-telephone"></i></span>';
}
add_shortcode( 'jin_icon_telephone', 'shortcode_jin_icon_telephone' );

function shortcode_jin_icon_tops($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-tops"><i class="jic jin-ifont-tops"></i></span>';
}
add_shortcode( 'jin_icon_tops', 'shortcode_jin_icon_tops' );

function shortcode_jin_icon_trade($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-trade"><i class="jic jin-ifont-trade"></i></span>';
}
add_shortcode( 'jin_icon_trade', 'shortcode_jin_icon_trade' );

function shortcode_jin_icon_video($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-video"><i class="jic jin-ifont-video"></i></span>';
}
add_shortcode( 'jin_icon_video', 'shortcode_jin_icon_video' );

function shortcode_jin_icon_weddingring($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-weddingring"><i class="jic jin-ifont-weddingring"></i></span>';
}
add_shortcode( 'jin_icon_weddingring', 'shortcode_jin_icon_weddingring' );

function shortcode_jin_icon_weightscale($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-weightscale"><i class="jic jin-ifont-weightscale"></i></span>';
}
add_shortcode( 'jin_icon_weightscale', 'shortcode_jin_icon_weightscale' );

function shortcode_jin_icon_wifi($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-wifi"><i class="jic jin-ifont-wifi"></i></span>';
}
add_shortcode( 'jin_icon_wifi', 'shortcode_jin_icon_wifi' );

function shortcode_jin_icon_wirelessearphone($atts)  {
	extract(shortcode_atts(array(
		'color' => '#e9546b',
		'size' => '16px',
	),$atts));
	return '<span style="color:'.$color.'; font-size:'.$size.';" class="jic-sc jin-code-icon-wirelessearphone"><i class="jic jin-ifont-wirelessearphone"></i></span>';
}
add_shortcode( 'jin_icon_wirelessearphone', 'shortcode_jin_icon_wirelessearphone' );


?>