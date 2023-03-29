<?php

// Input data user
$gender = $_POST['gender'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$activity = $_POST['activity'];


// BMI
$hasil = ($weight / ((0.01 * $height) ** 2));

if ($hasil < 18.5) {
    $kategori = 'Anda Kekurangan berat badan';
} else if ($hasil < 25) {
    $kategori = 'Berat Badan Anda Normal (Ideal)';
} else if ($hasil < 30) {
    $kategori = 'Anda Kelebihan berat badan';
} else {
    $kategori = 'Anda Kegemukan (Obesitas)';
};


// BMR
if ($gender === 'male') {
    $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
} else if ($gender === 'female') {
    $bmr = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
}

$calories = ($bmr * $activity);

if ($calories < 1500) {
    $suggestion = "Jenis olahraga yang disarankan : jalan santai atau yoga";
} elseif ($calories >= 1500 && $calories < 2000) {
    $suggestion = "Jenis olahraga yang disarankan : bersepeda atau berjalan cepat";
} elseif ($calories >= 2000 && $calories < 2500) {
    $suggestion = "Jenis olahraga yang disarankan : lari atau renang";
} else {
    $suggestion = "Jenis olahraga yang disarankan : olahraga berat seperti angkat beban atau bersepeda gunung";
}





// Mengirim hasil
$url = 'hasil.html?' . http_build_query(array('hasil' => $hasil, 'kategori' => $kategori, 'calories' => $calories, 'suggestion' => $suggestion));
header('Location: ' . $url);
