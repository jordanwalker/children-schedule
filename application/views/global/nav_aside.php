<h4 class="media-heading"><?php echo $user->first_name.'&nbsp;'.$user->last_name; ?></h4>
<!--<img alt="" class="media-object" src="<?php echo base_url(); ?>assets/ux/img/tmp/160x120.gif" />-->

<ul class="nav nav-list">
	<li class="nav-header">YOUR ACCOUNT</li>

<?php


$username = $this->uri->segment(1);
$uri = $this->uri->segment(2);
// MAIN
$main_nav = array(
	'dashboard' => array(
		'icon'=>'icon-home',
		'title'=>'Dashboard',
		'url'=>'admin'
	),
	'activity' => array(
		'icon'=>'icon-random',
		'title'=>'Activity',
		'url'=>'admin/activity'
	),
	'profile' => array(
		'icon'=>'icon-user',
		'title'=>'Profile',
		'url'=>'admin/profile'
	),
	'settings' => array(
		'icon'=>'icon-cog',
		'title'=>'Settings',
		'url'=>'admin/settings'
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
echo '<li class="divider"></li>';
echo '<li class="nav-header"><a href="'.base_url().'child/add" class="text-success">&middot; add child</a></li>';

// ACCOUNT

echo '<li class="nav-header">Child Name</li>';
echo '<img alt="" class="media-object" src="'.base_url().'assets/ux/img/tmp/160x120.gif" />';
$profile_nav = array(
	'eat' => array(
		'icon'=>'icon-home',
		'title'=>'Eat',
		'url'=>'eat'
	),
	'sleep' => array(
		'icon'=>'icon-off',
		'title'=>'Sleep',
		'url'=>'sleep'
	),
	'play' => array(
		'icon'=>'icon-play',
		'title'=>'Play',
		'url'=>'play'
	),
	'change' => array(
		'icon'=>'icon-refresh',
		'title'=>'Change',
		'url'=>'change'
	),
	'watch' => array(
		'icon'=>'icon-flag',
		'title'=>'Watch',
		'url'=>'watch'
	),
	'health' => array(
		'icon'=>'icon-heart',
		'title'=>'Health',
		'url'=>'health'
	),
	/*'contacts' => array(
		'icon'=>'icon-certificate',
		'title'=>'Contacts',
		'url'=>''
	),
	'supplies' => array(
		'icon'=>'icon-briefcase',
		'title'=>'Supplies',
		'url'=>'supplies'
	),
	'lullabies' => array(
		'icon'=>'icon-music',
		'title'=>'Lullabies',
		'url'=>''
	)*/
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
	echo anchor('child/'.$profile['url'],'<i class="'.$white.$profile['icon'].'"></i> '.$profile['title'].'');
	echo '</li>';
}



// HELP
echo '<li class="divider"></li>';
$help_nav = array(
	'help' => array(
		'icon'=>'icon-info-sign',
		'title'=>'Help',
		'url'=>'help'
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
/*
// TEMPLATE
echo '<li class="nav-header">Templates</li>';
$extra_nav = array(
	'activity' => array(
		'icon'=>'icon-',
		'title'=>'activity',
		'url'=>'ux/activity'
	),
	'files' => array(
		'icon'=>'icon-',
		'title'=>'files',
		'url'=>'ux/files'
	),
	'help_inner' => array(
		'icon'=>'icon-',
		'title'=>'inner help',
		'url'=>'ux/help_inner'
	),
	'login' => array(
		'icon'=>'icon-',
		'title'=>'login',
		'url'=>'ux/login'
	),
	'message' => array(
		'icon'=>'icon-',
		'title'=>'message',
		'url'=>'ux/message'
	),
	'profile' => array(
		'icon'=>'icon-',
		'title'=>'profile',
		'url'=>'ux/profile'
	),
	'projects' => array(
		'icon'=>'icon-',
		'title'=>'projects',
		'url'=>'ux/projects'
	),
	'settings' => array(
		'icon'=>'icon-',
		'title'=>'settings',
		'url'=>'ux/settings'
	),
	
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
	'wizard' => array(
		'icon'=>'icon-cog',
		'title'=>'Wizard',
		'url'=>'ux/wizard'
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
*/
?>
</ul>

