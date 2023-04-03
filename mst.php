<?php
// Set language
$lang = 'russian';

// Set options
$options = array(
    'bengali' => array(
        'Question Mark' => 'video1.mp4',
        'Yes' => 'video2.mp4',
        'No' => 'video3.mp4',
    ),
    'russian' => array(
        'Question Mark' => 'video4.mp4',
        'Yes' => 'video5.mp4',
        'No' => 'video6.mp4',
    ),
    'american' => array(
        'Question Mark' => 'video7.mp4',
        'Yes' => 'video8.mp4',
        'No' => 'video9.mp4',
    ),
);

// Check language
if (!array_key_exists($lang, $options)) {
    die('Invalid language');
}

// Get list of options
$optionList = array_keys($options[$lang]);

// Show list of options
echo 'Please select an option:<br />';
foreach ($optionList as $option) {
    echo '<a href="?option=' . $option . '">' . $option . '</a><br />';
}

// Check option
if (isset($_GET['option']) && in_array($_GET['option'], $optionList)) {
    // Get option
    $option = $_GET['option'];

    // Show video
    echo '<video src="' . $options[$lang][$option] . '" controls></video>';
}
?>
