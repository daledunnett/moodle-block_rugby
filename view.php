<?php

require('../../config.php');
require_once('../../lib/moodlelib.php');

require_login();

//get our config
$def_config = get_config('block_rugby');

$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/rugby/view.php');
$PAGE->set_heading($SITE->rugby);
$PAGE->set_pagelayout($def_config->pagelayout);
$PAGE->set_title(get_string('pluginname', 'block_rugby'));
$PAGE->navbar->add(get_string('pluginname', 'block_rugby'));


// start output to browser
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'block_rugby'),2);

echo "<div><h3 style='color: $def_config->namecolour'>" . get_string('welcome', 'block_rugby') . $def_config->firstname . '</h3></div>';

echo '<div><h3>' . get_string('welcome', 'block_rugby') . fullname($USER) . '</h3></div>';

echo '<br>' . $OUTPUT->user_picture($USER);



//send footer out to browser
echo $OUTPUT->footer();
return;


	