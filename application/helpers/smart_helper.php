<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function appVersion()
{
    $versionNo = getenv('APP_VERSION');
    return (strpos(base_url(), 'localhost') !== false) || (strpos(base_url(), 'demo') !== false) ? 'Demo Version ' . $versionNo : 'Version ' . $versionNo;
}

function debugPrint($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function state()
{
    return array(
        'Selangor' => 'Selangor',
        'Johor' => 'Johor',
        'Kedah' => 'Kedah',
        'Kelantan' => 'Kelantan',
        'Melaka' => 'Melaka',
        'Negeri Sembilan' => 'Negeri Sembilan',
        'Pahang' => 'Pahang',
        'Perak' => 'Perak',
        'Perlis' => 'Perlis',
        'Pulau Pinang' => 'Pulau Pinang',
        'Sabah' => 'Sabah',
        'Sarawak' => 'Sarawak',
        'Terengganu' => 'Terengganu',
        'Wilayah Persekutuan' => 'Wilayah Persekutuan',
    );
}

function city()
{
    return array(
        // SELANGOR
        'Shah Alam' => 'Shah Alam',
        'Klang' => 'Klang',
        'Subang Jaya' => 'Subang Jaya',
        'Ampang Jaya' => 'Ampang Jaya',
        'Petaling Jaya' => 'Petaling Jaya',
        'Cheras' => 'Cheras',
        'Kajang' => 'Kajang',
        'Rawang' => 'Rawang',
        'Semenyih' => 'Semenyih',
        'Banting' => 'Banting',
        'Balakong' => 'Balakong',
        'Gombak Setia' => 'Gombak Setia',
        'Kuala Selangor' => 'Kuala Selangor',
        'Serendah' => 'Serendah',
        'Bukit Beruntung' => 'Bukit Beruntung',
        'Jenjarom' => 'Jenjarom',
        'Sungai Besar' => 'Sungai Besar',
        'Batu Arang' => 'Batu Arang',
        'Tanjung Sepat' => 'Tanjung Sepat',
        'Kuang' => 'Kuang',
        'Kuala Kubu Baharu' => 'Kuala Kubu Baharu',
        'Batang Berjuntai' => 'Batang Berjuntai',
        'Sekinchan' => 'Sekinchan',
        'Sabak' => 'Sabak',
        'Tanjung Karang' => 'Tanjung Karang',
        'Beranang' => 'Beranang',
        'Sungai Pelek' => 'Sungai Pelek',
        // JOHOR
        'Johor Bahru' => 'Johor Bahru',
        'Tebrau' => 'Tebrau',
        'Pasir Gudang' => 'Pasir Gudang',
        'Bukit Indah' => 'Bukit Indah',
        'Skudai' => 'Skudai',
        'Kluang' => 'Kluang',
        'Batu Pahat' => 'Batu Pahat',
        'Muar' => 'Muar',
        'Ulu Tiram' => 'Ulu Tiram',
        'Senai' => 'Senai',
        'Segamat' => 'Segamat',
        'Kulai' => 'Kulai',
        'Kota Tinggi' => 'Kota Tinggi',
        'Pontian Kechil' => 'Pontian Kechil',
        'Tangkak' => 'Tangkak',
        'Yong Peng' => 'Yong Peng',
        'Labis' => 'Labis',
        'Mersing' => 'Mersing',
        'Simpang Renggam' => 'Simpang Renggam',
        'Parit Raja' => 'Parit Raja',
        'Kelapa Sawit' => 'Kelapa Sawit',
        'Buloh Kasap' => 'Buloh Kasap',
        'Chaah' => 'Chaah',
        // KEDAH
        'Sungai Petani' => 'Sungai Petani',
        'Alor Setar' => 'Alor Setar',
        'Kulim' => 'Kulim',
        'Jitra' => 'Jitra',
        'Baling' => 'Baling',
        'Pendang' => 'Pendang',
        'Langkawi' => 'Langkawi',
        'Yan' => 'Yan',
        'Sik' => 'Sik',
        'Kuala Nerang' => 'Kuala Nerang',
        'Pokok Sena' => 'Pokok Sena',
        'Bandar Baharu' => 'Bandar Baharu',
        // KELANTAN
        'Kota Bharu' => 'Kota Bharu',
        'Pengkalan Kubor' => 'Pengkalan Kubor',
        'Tanah Merah' => 'Tanah Merah',
        'Peringat' => 'Peringat',
        'Wakaf Bharu' => 'Wakaf Bharu',
        'Kadok' => 'Kadok',
        'Pasir Mas' => 'Pasir Mas',
        'Gua Musang' => 'Gua Musang',
        'Kuala Krai' => 'Kuala Krai',
        'Tumpat' => 'Tumpat',
        // MELAKA
        'Bandaraya Melaka' => 'Bandaraya Melaka',
        'Bukit Baru' => 'Bukit Baru',
        'Ayer Keroh' => 'Ayer Keroh',
        'Klebang' => 'Klebang',
        'Masjid Tanah' => 'Masjid Tanah',
        'Sungai Udang' => 'Sungai Udang',
        'Batu Berendam' => 'Batu Berendam',
        'Alor Gajah' => 'Alor Gajah',
        'Bukit Rambai' => 'Bukit Rambai',
        'Ayer Molek' => 'Ayer Molek',
        'Bemban' => 'Bemban',
        'Kuala Sungai Baru' => 'Kuala Sungai Baru',
        'Pulau Sebang' => 'Pulau Sebang',
        // NEGERI SEMBILAN
        'Seremban' => 'Seremban',
        'Port Dickson' => 'Port Dickson',
        'Nilai' => 'Nilai',
        'Bahau' => 'Bahau',
        'Tampin' => 'Tampin',
        'Kuala Pilah' => 'Kuala Pilah',
        // PAHANG
        'Kuantan' => 'Kuantan',
        'Temerloh' => 'Temerloh',
        'Bentong' => 'Bentong',
        'Mentakab' => 'Mentakab',
        'Raub' => 'Raub',
        'Jerantut' => 'Jerantut',
        'Pekan' => 'Pekan',
        'Kuala Lipis' => 'Kuala Lipis',
        'Bandar Jengka' => 'Bandar Jengka',
        'Bukit Tinggi' => 'Bukit Tinggi',
        // PERAK
        'Ipoh' => 'Ipoh',
        'Taiping' => 'Taiping',
        'Sitiawan' => 'Sitiawan',
        'Simpang Empat' => 'Simpang Empat',
        'Teluk Intan' => 'Teluk IntanV',
        'Batu Gajah' => 'Batu Gajah',
        'Lumut' => 'Lumut',
        'Kampung Koh' => 'Kampung Koh',
        'Kuala Kangsar' => 'Kuala Kangsar',
        'Tapah' => 'Tapah',
        'Bidor' => 'Bidor',
        'Parit Buntar' => 'Parit Buntar',
        'Ayer Tawar' => 'Ayer Tawar',
        'Bagan Serai' => 'Bagan Serai',
        'Tanjung Malim' => 'Tanjung Malim',
        'Pantai Remis' => 'Pantai Remis',
        'Kampar' => 'Kampar',
        // PERLIS
        'Kangar' => 'Kangar',
        'Kuala Perlis' => 'Kuala Perlis',
        'Arau' => 'Arau',
        // PULAU PINANG
        'Bukit Mertajam' => 'Bukit Mertajam',
        'Georgetown' => 'Georgetown',
        'Sungai Ara' => 'Sungai Ara',
        'Gelugor' => 'Gelugor',
        'Air Itam' => 'Air Itam',
        'Butterworth' => 'Butterworth',
        'Perai' => 'Perai',
        'Nibong Tebal' => 'Nibong Tebal',
        'Permatang Pauh' => 'Permatang Pauh',
        'Tanjung Tokong' => 'Tanjung Tokong',
        'Kepala Batas' => 'Kepala Batas',
        'Tanjung Bungah' => 'Tanjung Bungah',
        'Juru' => 'Juru',
        // SABAH
        'Kota Kinabalu' => 'Kota Kinabalu',
        'Sandakan' => 'Sandakan',
        'Tawau' => 'Tawau',
        'Lahad Datu' => 'Lahad Datu',
        'Keningau' => 'Keningau',
        'Putatan' => 'Putatan',
        'Donggongon' => 'Donggongon',
        'Semporna' => 'Semporna',
        'Kudat' => 'Kudat',
        'Kunak' => 'Kunak',
        'Papar' => 'Papar',
        'Ranau' => 'Ranau',
        'Beaufort' => 'Beaufort',
        'Kinarut' => 'Kinarut',
        'Kota Belud' => 'Kota Belud',
        // SARAWAK
        'Kuching' => 'Kuching',
        'Miri' => 'Miri',
        'Sibu' => 'Sibu',
        'Bintulu' => 'Bintulu',
        'Limbang' => 'Limbang',
        'Sarikei' => 'Sarikei',
        'Sri Aman' => 'Sri Aman',
        'Kapit' => 'Kapit',
        'Kota Samarahan' => 'Kota Samarahan',
        // TEREMGGANU
        'Kuala Terengganu' => 'Kuala Terengganu',
        'Chukai' => 'Chukai',
        'Dungun' => 'Dungun',
        'Kerteh' => 'Kerteh',
        'Kuala Berang' => 'Kuala Berang',
        'Marang' => 'Marang',
        'Paka' => 'Paka',
        'Jerteh' => 'Jerteh',
        // WILAYAH PERSEKUTUAN
        'Kuala Lumpur' => 'Kuala Lumpur',
        'Labuan' => 'Labuan',
        'Putrajaya' => 'Putrajaya',
    );
}

function random_username($string)
{
    $pattern = " ";
    $firstPart = strstr(strtolower($string), $pattern, true);
    $secondPart = substr(strstr(strtolower($string), $pattern, false), 0, 3);
    $nrRand = rand(0, 100);

    $username = trim($firstPart) . trim($secondPart) . trim($nrRand);
    return $username;
}
