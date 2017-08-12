<?php
if (!isset($_POST["submit"])) {
	header("Location: ../index.php");
	exit();
}
$data_channel = array(
	"data_channel_is_lifestyle" => "",
	"data_channel_is_entertainment" => "",
	"data_channel_is_bus" => "",
	"data_channel_is_socmed" => "",
	"data_channel_is_tech" => "",
	"data_channel_is_world" => ""
);
$publish_day = array(
	"weekday_is_monday" => "",
	"weekday_is_tuesday" => "",
	"weekday_is_wednesday" => "",
	"weekday_is_thursday" => "",
	"weekday_is_friday" => "",
	"weekday_is_saturday" => "",
	"weekday_is_sunday" => "",
	"is_weekend" => ""
);
if (isset($_POST["data_channel"])) {
	foreach ($data_channel as $key => $value) {
		$data_channel[$key] = 0;
	}
	$selected = "data_channel_is_";
	if($_POST["data_channel"] == "Social Media") {
		$selected .= "socmed";
	} else {
		$selected .= strtolower($_POST["data_channel"]);
	}
	$data_channel[$selected] = 1;
}
if (isset($_POST["publish_day"])) {
	foreach ($publish_day as $key => $value) {
		$publish_day[$key] = 0;
	}
	$selected = "weekday_is_" . strtolower($_POST["publish_day"]);
	if($_POST["publish_day"] == "Sunday" || $_POST["publish_day"] == "Saturday") {
		$publish_day["is_weekend"] = 1;
	}
	$publish_day[$selected] = 1;
}

$form_values = array(
	"url" => "",
	"timedelta" => "",
	"n_tokens_title" => trim($_POST["n_tokens_title"]),
	"n_tokens_content" => trim($_POST["n_tokens_content"]),
	"n_unique_tokens" => trim($_POST["n_unique_tokens"]),
	"n_non_stop_words" => trim($_POST["n_non_stop_words"]),
	"n_non_stop_unique_tokens" => trim($_POST["n_non_stop_unique_tokens"]),
	"num_hrefs" => trim($_POST["num_hrefs"]),
	"num_self_hrefs" => trim($_POST["num_self_hrefs"]),
	"num_imgs" => trim($_POST["num_imgs"]),
	"num_videos" => trim($_POST["num_videos"]),
	"average_token_length" => trim($_POST["average_token_length"]),
	"num_keywords" => trim($_POST["num_keywords"]),
	"data_channel_is_lifestyle" => $data_channel["data_channel_is_lifestyle"],
	"data_channel_is_entertainment" => $data_channel["data_channel_is_entertainment"],
	"data_channel_is_bus" => $data_channel["data_channel_is_bus"],
	"data_channel_is_socmed" => $data_channel["data_channel_is_socmed"],
	"data_channel_is_tech" => $data_channel["data_channel_is_tech"],
	"data_channel_is_world" => $data_channel["data_channel_is_world"],
	"kw_min_min" => trim($_POST["kw_min_min"]),
	"kw_max_min" => trim($_POST["kw_max_min"]),
	"kw_avg_min" => trim($_POST["kw_avg_min"]),
	"kw_min_max" => trim($_POST["kw_min_max"]),
	"kw_max_max" => trim($_POST["kw_max_max"]),
	"kw_avg_max" => trim($_POST["kw_avg_max"]),
	"kw_min_avg" => trim($_POST["kw_min_avg"]),
	"kw_max_avg" => trim($_POST["kw_max_avg"]),
	"kw_avg_avg" => trim($_POST["kw_avg_avg"]),
	"self_reference_min_shares" => trim($_POST["self_reference_min_shares"]),
	"self_reference_max_shares" => trim($_POST["self_reference_max_shares"]),
	"self_reference_avg_sharess" => trim($_POST["self_reference_avg_sharess"]),
	"weekday_is_monday" => $publish_day["weekday_is_monday"],
	"weekday_is_tuesday" => $publish_day["weekday_is_tuesday"],
	"weekday_is_wednesday" => $publish_day["weekday_is_wednesday"],
	"weekday_is_thursday" => $publish_day["weekday_is_thursday"],
	"weekday_is_friday" => $publish_day["weekday_is_friday"],
	"weekday_is_saturday" => $publish_day["weekday_is_saturday"],
	"weekday_is_sunday" => $publish_day["weekday_is_sunday"],
	"is_weekend" => $publish_day["is_weekend"],
	"LDA_00" => trim($_POST["LDA_00"]),
	"LDA_01" => trim($_POST["LDA_01"]),
	"LDA_02" => trim($_POST["LDA_02"]),
	"LDA_03" => trim($_POST["LDA_03"]),
	"LDA_04" => trim($_POST["LDA_04"]),
	"global_subjectivity" => trim($_POST["global_subjectivity"]),
	"global_sentiment_polarity" => trim($_POST["global_sentiment_polarity"]),
	"global_rate_positive_words" => trim($_POST["global_rate_positive_words"]),
	"global_rate_negative_words" => trim($_POST["global_rate_negative_words"]),
	"rate_positive_words" => trim($_POST["rate_positive_words"]),
	"rate_negative_words" => trim($_POST["rate_negative_words"]),
	"avg_positive_polarity" => trim($_POST["avg_positive_polarity"]),
	"min_positive_polarity" => trim($_POST["min_positive_polarity"]),
	"max_positive_polarity" => trim($_POST["max_positive_polarity"]),
	"avg_negative_polarity" => trim($_POST["avg_negative_polarity"]),
	"min_negative_polarity" => trim($_POST["min_negative_polarity"]),
	"max_negative_polarity" => trim($_POST["max_negative_polarity"]),
	"title_subjectivity" => trim($_POST["title_subjectivity"]),
	"title_sentiment_polarity" => trim($_POST["title_sentiment_polarity"]),
	"abs_title_subjectivity" => trim($_POST["abs_title_subjectivity"]),
	"abs_title_sentiment_polarity" => trim($_POST["abs_title_sentiment_polarity"]),
	"shares" => ""
);

$data = array(
	"Inputs" => array(
		"input1" => array(
			"ColumnNames" => array_keys($form_values),
			"Values" => array(array_values($form_values))
		),
	),
	"GlobalParameters"=> null
);

$encoded_data = json_encode($data);
$api_url = "https://ussouthcentral.services.azureml.net/workspaces/9ac1812591184f3ba74cc81ec767defa/services/8e0d12bf258d471794ef09e03ecdbe38/execute?api-version=2.0&details=true";
$api_key = "Dcid+lriB+/M4r+O3HEKSIf6iayRKPt4yauSLi5jJ6Niy+kUAFYuh/UCUW4i7ldioSTLiFilUUxvrFHR5RzdAg==";
$header = array(
	"Authorization:Bearer " . $api_key,
	"Content-Length:" . strlen($encoded_data),
	"Content-Type:application/json",
	"Accept: application/json"
);

$curl = curl_init($api_url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $encoded_data);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);
$result = json_decode($result, true);

// echo "<pre>";
// print_r($form_values);
// echo "</pre>";
//
// echo "<pre>";
// print_r($result);
// echo "</pre>";

if (isset($result["Results"]["output1"]["value"]["Values"][0])) {
	session_start();
	$_SESSION["mean"] = round($result["Results"]["output1"]["value"]["Values"][0][0]);
	$_SESSION["deviation"] = round($result["Results"]["output1"]["value"]["Values"][0][1], 2);
	header("Location: result.php");
	exit();
} else {
	header("Location: index.php");
	exit();
}
?>
