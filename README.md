Download the content of this folder. In your local set up place file in folder TuneGenius. If you are using MAMP it should look like this:

*Example*
/Applications/MAMP/htdocs/TuneGenius/blog (which you have just downloaded)

I used port 3306. 

*Note* As of this commit, I have gone through the code several times and working out some last minute bugs to get everything going the way I want for tomorrow. There are some items to be worked on like linkages for the site nav. Social Media integration will be coming soon. 

*References* This came from a mixture of in class video support, tutsplus tutorials, and youtube solutions. Also used were the documentation on the FuelPHP site. 

*localhost/blog/public/contact is working. can click on terms of service and reviews. Reviews is showing the editable reviews in a non formatted version. Once you click from reviews, it changes the url to include Reviews. Could not fix that error. Users was having the same issue, but was adding www.localhost.net again could not fix that error. 

*got user page to display by removing the following code. Even though I had tried to establish both $user and $current_user still would not take.
<!-- <?php if ($user){ ?>
	<p>
		Logged in as <?php echo Html::anchor('users/view/'.$current_user->id, $current_user->username) ?>
		(<?php echo Html::anchor('users/logout', 'Log out') ?>)
	</p>
<?php }else{ ?>
	<p><?php echo Html::anchor('users/login', 'Log in') ?></p>
<?php } ?> -->

Included the oauth/oauth2/ninjauth to build wrapper for facebook api signin form. 

Users keeps adding itself to my login attempts. Was able to pull some of the Facebook API data in. Followed the ninjauth instructions, but am told I am missing a packet from oauth2 which properly installed. Did build the api to integrate another and more socially forward login.  