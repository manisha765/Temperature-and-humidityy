<?php
include("api.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Weather App</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./weatherapi.css" />
    <script src="./weatherapi.js" defer></script>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="weatherfav/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="weatherfav/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="weatherfav/favicon-16x16.png"
    />
    <link rel="manifest" href="weatherfav/site.webmanifest" />
  </head>
  <body>
    <div class="card">
      <div class="search">
        <input type="text" class="search-bar" placeholder="Search" />
        <button>
          <svg
            stroke="currentColor"
            fill="currentColor"
            stroke-width="0"
            viewBox="0 0 1024 1024"
            height="1.5em"
            width="1.5em"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z"
            ></path>
          </svg>
        </button>
      </div>
      <div class="weather loading">
        <h2 class="city">Weather in Dombivli</h2>
        <div class="temp">30°C</div>
        <div class="flex">
          <img
            src="https://openweathermap.org/img/wn/04n.png"
            alt=""
            class="icon"
          />
          <div class="description">Periodic Clouds</div>
        </div>
        <div class="humditiy">Humdity: 86%</div>
        <div class="wind">Wind speed: 13km/h</div>
      </div>
    </div>
  </body>
</html>

<?php
// $apiKey = "API KEY";
// $cityId = "CITY ID";
// $googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_VERBOSE, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// $response = curl_exec($ch);

// curl_close($ch);
// $data = json_decode($response);
// $currentTime = time();
if ( $_POST && $_POST['submit'])
{
  print_r($_POST);
//  $Name = $_POST['Name'];
//  $Phone_no = $_POST['Phone_no'];
//  $email = $_POST['email'];
//  $message =$_POST['message'];
//  $subject = $_POST['subject'];
  
 echo "Arrived at server";


 $format = "INSERT INTO apidata (location, Temperature, humidity, weather, windspeed) VALUES ('%s', '%f', '%f', '%s', '%f')";
 $query =  sprintf($format, $_POST["location"], $_POST["temperature"], $_POST["humidity"], $_POST["weather"],$_POST["windspeed"]);
 echo $query;
$data = mysqli_query($conn,$query);

if($data)
{
  
  echo "data inserted into database";

}
else 
{
    echo "failed";
}

}
?>