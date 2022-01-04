<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function indonesian_date ($timestamp = '', $date_format = 'j F Y ') {
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
        'Oktober','November','Desember',
    );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    return $date;
}




if ( ! function_exists('hitung_mundur'))
{
	function time_ago($wkt)
	{
		$waktu=array(	365*24*60*60	=> "tahun",
						30*24*60*60		=> "bulan",
						7*24*60*60		=> "minggu",
						24*60*60		=> "hari",
						60*60			=> "jam",
						60				=> "menit",
						1				=> "detik");

		$hitung = strtotime(gmdate ("Y-m-d H:i:s", time () +60 * 60 * 8))-$wkt;
		$hasil = array();
		if($hitung<5)
		{
			$hasil = 'kurang dari 5 detik yang lalu';
		}
		else
		{
			$stop = 0;
			foreach($waktu as $periode => $satuan)
			{
				if($stop>=6 || ($stop>0 && $periode<60)) break;
				$bagi = floor($hitung/$periode);
				if($bagi > 0)
				{
					$hasil[] = $bagi.' '.$satuan;
					$hitung -= $bagi*$periode;
					$stop++;
				}
				else if($stop>0) $stop++;
			}
			$hasil=implode(' ',$hasil).' yang lalu';
		}
		return $hasil;
	}

}

function now() {
	$date = gmdate("Y-m-d H:i:s", time()+60*60*7);
	return $date;
}

function link_aktif($controller,$type=FALSE)
{
    $CI =& get_instance();
    $class = $CI->router->fetch_class();
    $method= $CI->router->fetch_method();

    if ($type==TRUE) {
    	return ($method == $controller) ? 'active' : '';
    } else{
    	return ($class == $controller) ? 'active' : '';
    }

}


function comma2array($str) {
	$result = explode(',', $str);
	foreach ($result as $item => $value) {
		// Buat SLug
		$hasil = strtolower(trim($value));
		$hasil = preg_replace('/[^a-z0-9-]/', '_', $hasil);
		$hasil = preg_replace('/-+/', "-", $hasil);

		// Tampilkan Link

		echo anchor("posts/tag/$hasil", $value, 'rel="tag"');
	}
}


function text2slug($text){
	$hasil = strtolower(trim($text));
	$hasil = preg_replace('/[^a-z0-9-]/', '-', $hasil);
	$hasil = preg_replace('/-+/', "-", $hasil);

	return $hasil;
}

function slug2text($slug) {
	$hasil = str_replace('-', ' ', $slug);
	return $hasil;
}



/*
* MENU HELPER
*/

function mainMenu(){

	

}