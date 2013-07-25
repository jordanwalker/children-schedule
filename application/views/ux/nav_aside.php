<div class="well" style="padding: 8px 0;">
<ul class="nav nav-list">
	<li class="nav-header"></li>

<?php
$uri = $this->uri->segment(2);
// MAIN
$main_nav = array(
	'dashboard' => array(
		'icon'=>'icon-home',
		'title'=>'Dashboard',
		'url'=>''
	),
	'projects' => array(
		'icon'=>'icon-folder-open',
		'title'=>'Projects',
		'url'=>'ux/projects'
	),
	'tasks' => array(
		'icon'=>'icon-check',
		'title'=>'Tasks',
		'url'=>'ux/tasks'
	),
	'messages' => array(
		'icon'=>'icon-envelope',
		'title'=>'Messages',
		'url'=>'ux/messages'
	),
	'files' => array(
		'icon'=>'icon-file',
		'title'=>'Files',
		'url'=>'ux/files'
	),
	'activity' => array(
		'icon'=>'icon-list-alt',
		'title'=>'Activity',
		'url'=>'ux/activity'
	),
);
foreach($main_nav as $m => $main){
	// dashboard
	if($uri == ''){
		$uri = 'dashboard';
	}
	
	// check active
	if( strcmp($uri,$m) == 0 ){
		echo '<li class="active">';
		$white = "icon_white ";
	} else {
		echo '<li>';
		$white = "";
	}
	echo anchor($main['url'],'<i class="'.$white.$main['icon'].'"></i> '.$main['title'].'');
	echo '</li>';
}

// ADMINISTRATOR
echo '<li class="nav-header">Administrator</li>';
$profile_nav = array(
	'profile' => array(
		'icon'=>'icon-user',
		'title'=>'Users',
		'url'=>'ux/profile'
	),
	'wizard' => array(
		'icon'=>'icon-cog',
		'title'=>'Wizard',
		'url'=>'ux/wizard'
	),	
);
foreach($profile_nav as $p => $profile){
	// check active
	if( strcmp($uri,$p) == 0 ){
		echo '<li class="active">';
		$white = "icon_white ";
	} else {
		echo '<li>';
		$white = "";
	}
	echo anchor($profile['url'],'<i class="'.$white.$profile['icon'].'"></i> '.$profile['title'].'');
	echo '</li>';
}


// ACCOUNT
echo '<li class="nav-header">Your Account</li>';
$profile_nav = array(
	'profile' => array(
		'icon'=>'icon-user',
		'title'=>'Profile',
		'url'=>'ux/profile'
	),
	'settings' => array(
		'icon'=>'icon-cog',
		'title'=>'Settings',
		'url'=>'ux/settings'
	),	
);
foreach($profile_nav as $p => $profile){
	// check active
	if( strcmp($uri,$p) == 0 ){
		echo '<li class="active">';
		$white = "icon_white ";
	} else {
		echo '<li>';
		$white = "";
	}
	echo anchor($profile['url'],'<i class="'.$white.$profile['icon'].'"></i> '.$profile['title'].'');
	echo '</li>';
}

// HELP
echo '<li class="divider"></li>';
$help_nav = array(
	'help' => array(
		'icon'=>'icon-info-sign',
		'title'=>'Help',
		'url'=>'ux/help'
	),
);
foreach($help_nav as $h => $help)
{
	// check active
	if( strcmp($uri,$h) == 0 ){
		echo '<li class="active">';
		$white = "icon_white ";
	} else {
		echo '<li>';
		$white = "";
	}
	echo anchor($help['url'],'<i class="'.$white.$help['icon'].'"></i> '.$help['title'].'');
	echo '</li>';
}

// TEMPLATE
echo '<li class="nav-header">Templates</li>';
$extra_nav = array(
	'gallery' => array(
		'icon'=>'icon-picture',
		'title'=>'Gallery',
		'url'=>'ux/gallery'
	),
	'blank' => array(
		'icon'=>'icon-stop',
		'title'=>'Blank',
		'url'=>'ux/blank'
	),
);
foreach($extra_nav as $e => $extra)
{
	// check active
	if( strcmp($uri,$e) == 0 ){
		echo '<li class="active">';
		$white = "icon_white ";
	} else {
		echo '<li>';
		$white = "";
	}
	echo anchor($extra['url'],'<i class="'.$white.$extra['icon'].'"></i> '.$extra['title'].'');
	echo '</li>';
}
?>
</ul>
</div>
