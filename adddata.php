<?php
$dname = $_POST['districtname'];
$province = $_POST['province'];
$areacode = $_POST['areacode'];
$population = $_POST['population'];
$area = $_POST['area'];
$headquarter = $_POST['headquater'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
switch ($province) {
    case 1:
        $province_name = 'Province no.1';
        break;

    case 2:
        $province_name = 'Province no.2';
        break;

    case 3:
        $province_name = 'Bagmati Province';
        break;

    case 4:
        $province_name = 'Gandaki Province';
        break;

    case 5:
        $province_name = 'Lumbini Province';
        break;

    case 6:
        $province_name = 'Karnali Province';
        break;

    case 7:
        $province_name = 'Sudurpashchim Province';
        break;
    default:
        $province_name = 'Not found';
        break;
}

if (file_exists('./api.json')) {
    if (
        !empty(
            $dname &&
                $province &&
                $areacode &&
                $population &&
                $area &&
                $headquarter &&
                $latitude &&
                $longitude
        )
    ) {
        $current_data = file_get_contents('./api.json');
        $array_data = json_decode($current_data, true);
        $new_array = [
            'districtName' => $dname,
            'province' => $province_name,
            'acode' => $areacode,
            'headquarter' => $headquarter,
            'popu' => $population,

            'position' => [
                'lat' => $latitude,
                'long' => $longitude,
                'area' => $area,
            ],
        ];
        $array_data[] = $new_array;
        $json_data = json_encode($array_data, JSON_PRETTY_PRINT);
        if (file_put_contents('./api.json', $json_data)) {
            header('Location: index.php');
        } else {
            echo 'something went worng !';
        }
    }
}