<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

ET::$languageInfo["English"] = array(
	"locale" => "en-US",
	"name" => "English",
	"description" => "A casual English language pack.",
	"version" => ESOTALK_VERSION,
	"author" => "esoTalk Team",
	"authorEmail" => "support@esotalk.org",
	"authorURL" => "http://esotalk.org",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "j M Y, g:ia \G\M\TO"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "eile";
$definitions["%d days ago"] = "%d päeva tagasi";
$definitions["%d hour ago"] = "tund aega tagasi";
$definitions["%d hours ago"] = "%d tundi tagasi";
$definitions["%d minute ago"] = "1 minutit tagasi";
$definitions["%d minutes ago"] = "%d minutit tagasi";
$definitions["%d month ago"] = "kuu aega tagasi";
$definitions["%d months ago"] = "%d kuud tagasi";
$definitions["%d second ago"] = "1 sekund tagasi";
$definitions["%d seconds ago"] = "%d sekundit tagasi";
$definitions["%d week ago"] = "eelmine nädal";
$definitions["%d weeks ago"] = "%d nädalat tagasi";
$definitions["%d year ago"] = "eelmine aasta";
$definitions["%d years ago"] = "%d aastat tagasi";

$definitions["%s and %s"] = "%s ja %s";
$definitions["%s can view this conversation."] = "%s näevad seda arutelu.";
$definitions["%s changed %s's group to %s."] = "%s muutis kasutaja %s grupi %s.";
$definitions["%s changed your group to %s."] = "%s muutis sinu grupi %s.";
$definitions["%s conversation"] = "%s arutelu";
$definitions["%s conversations"] = "%s arutelu";
$definitions["%s invited you to %s."] = "%s kutsus sind lugema %s.";
$definitions["%s joined the forum."] = "%s liitus foorumiga.";
$definitions["%s post"] = "%s post";
$definitions["%s posted %s"] = "%s postitas %s";
$definitions["%s posted in %s."] = "%s postitas %s.";
$definitions["%s posts"] = "%s postitust";
$definitions["%s reply"] = "%s postitust";
$definitions["%s replies"] = "%s postitust";
$definitions["%s Settings"] = "%s Seaded";
$definitions["%s started the conversation %s."] = "%s alustas arutelu %s.";
$definitions["%s tagged you in a post."] = "%s mainis sind.";
$definitions["%s will be able to view this conversation."] = "%s näevad seda arutelu.";
$definitions["%s will be able to:"] = "%s jaoks hetkel aktiivsed võimalused:";

$definitions["Success!"] = "Super!";
$definitions["A new version of esoTalk (%s) is available."] = "A new version of esoTalk (%s) is available.";
$definitions["a private conversation"] = "a private conversation";
$definitions["Access the administrator control panel."] = "Access the administrator control panel.";
$definitions["Account type"] = "Konto tüüp";
$definitions["Activate"] = "Activate";
$definitions["Activity"] = "Toimetamised";
$definitions["Add"] = "Lisa";
$definitions["Administration"] = "Admin";
$definitions["Administrator email"] = "Administrator email";
$definitions["Administrator password"] = "Administrator password";
$definitions["Administrator username"] = "Administrator username";
$definitions["Advanced options"] = "Advanced options";
$definitions["All Channels"] = "Kõik kategooriad";
$definitions["Allow members to edit their own posts:"] = "Allow members to edit their own posts:";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Sul on juba konto? <a href='%s' class='link-login'>Sisene!</a>";
$definitions["Appearance"] = "Välimus";
$definitions["Automatically star conversations that I reply to"] = "Automatically follow conversations that I reply to";
$definitions["Avatar"] = "Avatar";

$definitions["Back to channels"] = "Back to channels";
$definitions["Back to conversation"] = "Back to conversation";
$definitions["Back to member"] = "Back to member";
$definitions["Back to members"] = "Back to members";
$definitions["Back to search"] = "Pealehele";
$definitions["Background color"] = "Background color";
$definitions["Background image"] = "Background image";
$definitions["Base URL"] = "Base URL";
$definitions["Bold"] = "Bold";
$definitions["By %s"] = "By %s";

$definitions["Can suspend/unsuspend members"] = "Can suspend/unsuspend members";
$definitions["Cancel"] = "Tühista";
$definitions["Change %s's Permissions"] = "Muuda kasutaja %s õigusi";
$definitions["Change avatar"] = "Change avatar";
$definitions["Change Channel"] = "Muuda kategooriat";
$definitions["Change channel"] = "Muuda kategooriat";
$definitions["Change username"] = "Muuda kasutajanime";
$definitions["Change Password or Email"] = "Muuda parooli või e-maili aadressi";
$definitions["Change Password"] = "Muuda parool";
$definitions["Change password"] = "Muuda parool";
$definitions["Change permissions"] = "Muuda õigusi";
$definitions["Change"] = "Muuda";
$definitions["Channel description"] = "Channel description";
$definitions["Channel List"] = "Kategooriate nimekiri";
$definitions["Channel title"] = "Channel title";
$definitions["Channel slug"] = "Channel slug";
$definitions["Channels"] = "Kategooriad";
$definitions["Choose a secure password of at least %s characters"] = "Vähemalt 6 märki";
$definitions["Choose what people will see when they first visit your forum."] = "Choose what people will see when they first visit your forum.";
$definitions["Click on a member's name to remove them."] = "Eemaldamiseks kliki liikme nimel.";
$definitions["Close registration"] = "Sulge registreerimine";
$definitions["Confirm password"] = "Korda parooli";
$definitions["Context"] = "Context";
$definitions["Controls"] = "Seaded";
$definitions["Conversation"] = "Conversation";
$definitions["Conversations participated in"] = "Osalenud aruteludes";
$definitions["Conversations started"] = "Arutelu alustanud";
$definitions["Conversations"] = "Conversations";
$definitions["Copy permissions from"] = "Copy permissions from";
$definitions["Create Channel"] = "Loo kategooria";
$definitions["Create Group"] = "Loo grupp";
$definitions["Create Member"] = "Lisa uus liige";
$definitions["Customize how users can become members of your forum."] = "Customize how users can become members of your forum.";
$definitions["Customize your forum's appearance"] = "Customize your forum's appearance";

$definitions["Dashboard"] = "Töölaud";
$definitions["Default forum language"] = "Default forum language";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Delete</strong> all conversations forever.";
$definitions["Delete Channel"] = "Kustuta kategooria";
$definitions["Delete conversation"] = "Delete conversation";
$definitions["Delete member"] = "Kustuta liige";
$definitions["Delete Member"] = "Kustuta liige";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually.";
$definitions["Delete"] = "Kustuta";
$definitions["Deleted %s by %s"] = "Kustutatud %s liikme %s poolt";
$definitions["Disable"] = "Keela";
$definitions["Discard"] = "Tühista";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "<a href='%s' class='link-join'>Registreeru kasutajaks!</a>";
$definitions["Don't repeat"] = "Don't repeat";

$definitions["Edit Channel"] = "Edit Channel";
$definitions["Edit Group"] = "Edit Group";
$definitions["Edit member groups"] = "Muuda kasutajagruppe";
$definitions["Edit your profile"] = "Muuda oma profiili";
$definitions["Edit"] = "Muuda";
$definitions["Edited %s by %s"] = "Muudetud %s kasutaja %s poolt";
$definitions["Editing permissions"] = "Editing permissions";
$definitions["Email me when I'm added to a private conversation"] = "Saada mulle email, kui mind mainitakse privaatvestlustes";
$definitions["Email me when someone posts in a conversation I have starred"] = "Saada mulle e-mail kui minu jälgitud arutelusse lisandub postitusi";
$definitions["Email"] = "Email";
$definitions["Enable"] = "Enable";
$definitions["Enabled"] = "Enabled";
$definitions["Enter a conversation title"] = "Arutelu pealkiri?";
$definitions["Error"] = "Viga!";
$definitions["esoTalk version"] = "esoTalk version";
$definitions["Everyone"] = "Kõik";

$definitions["Fatal Error"] = "Uh oh! It's a fatal error...";
$definitions["Feed"] = "Feed";
$definitions["Filter by name or group..."] = "Filtreeri nime või grupi järgi";
$definitions["Filter conversations..."] = "Filtreeri arutelusid...";
$definitions["Find this post"] = "Find this post";
$definitions["First posted"] = "Esimene postitus";
$definitions["Follow to receive notifications"] = "Jälgi,et saada e-mailiga tagasisidet";
$definitions["For %s seconds"] = "For %s seconds";
$definitions["Forever"] = "Forever";
$definitions["Forgot?"] = "Unustasid?";
$definitions["Forgot Password"] = "Unustasid parooli?";
$definitions["Forum header"] = "Forum header";
$definitions["Forum language"] = "Forum language";
$definitions["Forum Settings"] = "Foorumi seaded";
$definitions["Forum Statistics"] = "Foorumi statistika";
$definitions["Forum title"] = "Forum title";
$definitions["forumDescription"] = "%s is a web-forum discussing %s, and %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Give this group the 'moderate' permission on all existing channels";
$definitions["Global permissions"] = "Global permissions";
$definitions["Go to top"] = "Tagasi üles";
$definitions["Group name"] = "Group name";
$definitions["group.administrator"] = "Administrator";
$definitions["group.administrator.plural"] = "Administrators";
$definitions["group.guest"] = "Guest";
$definitions["group.guest.plural"] = "Guests";
$definitions["group.member"] = "Liige";
$definitions["group.member.plural"] = "Ainult liikmed";
$definitions["group.Moderator"] = "Moderator";
$definitions["group.Moderator.plural"] = "Moderators";
$definitions["group.suspended"] = "Suspended";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Gruppe saab kasutada erinevate arutelude kuvamiseks ja peitmiseks.";
$definitions["Groups"] = "Grupid";

$definitions["Header"] = "Header";
$definitions["Header color"] = "Header color";
$definitions["Hide"] = "Peida";
$definitions["Home page"] = "Home page";
$definitions["HTML is allowed."] = "HTML is allowed.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>.";
$definitions["Install esoTalk"] = "Install esoTalk";
$definitions["Install My Forum"] = "Install My Forum";
$definitions["Installed Languages"] = "Installed Languages";
$definitions["Installed Plugins"] = "Installed Plugins";
$definitions["Installed plugins"] = "Installed plugins";
$definitions["Installed Skins"] = "Installed Skins";
$definitions["Installed skins"] = "Installed skins";
$definitions["is %s"] = "is %s";

$definitions["Joined"] = "Liitus";
$definitions["Jump to last"] = "Jump to last";
$definitions["Jump to unread"] = "Jump to unread";
$definitions["just now"] = "just praegu";

$definitions["Keep me logged in"] = "Hoia mind sisselogituna";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author.";

$definitions["label.draft"] = "Mustand";
$definitions["label.locked"] = "Lukustatud";
$definitions["label.muted"] = "Vaigistatud";#ebahuvitav
$definitions["label.private"] = "Privaatne";
$definitions["label.sticky"] = "Püsiv";#püsivad kategooriad
$definitions["Labels"] = "Labels";
$definitions["Last active"] = "Toimetatud";
$definitions["Last active %s"] = "Toimetatud %s";
$definitions["Latest News"] = "Viimased uudised";
$definitions["Loading..."] = "Laadimine...";
$definitions["Lock"] = "Lukusta";
$definitions["Log In"] = "Sisene";
$definitions["Log Out"] = "Lahku";

$definitions["Make member and online list visible to:"] = "Make member and online list visible to:";
$definitions["Manage Groups"] = "Gruppide haldus";
$definitions["Manage Languages"] = "Manage Languages";
$definitions["Manage your forum's channels (categories)"] = "Manage your forum's channels (categories)";
$definitions["Mark as read"] = "Märgi loetuks";
$definitions["Mark all as read"] = "Märgi kõik loetuks";
$definitions["Mark listed as read"] = "Märgi listitud loetuks";
$definitions["Maximum size of %s. %s."] = "Maximum size of %s. %s.";
$definitions["Member groups"] = "Member groups";
$definitions["Member list"] = "Member list";
$definitions["Member List"] = "Liikmete nimekiri";
$definitions["Member privacy"] = "Member privacy";
$definitions["Members Allowed to View this Conversation"] = "Liikmed kes arutelu näevad";
$definitions["Members Online"] = "Liiget hetkel lehel";
$definitions["Members"] = "Liikmed";
$definitions["Mobile skin"] = "Mobile skin";
$definitions["Moderate"] = "Muuta";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Move</strong> conversations to the following channel:";
$definitions["Mute conversation"] = "Vaigista arutelu";
$definitions["MySQL database"] = "MySQL database";
$definitions["MySQL host address"] = "MySQL host address";
$definitions["MySQL password"] = "MySQL password";
$definitions["MySQL queries"] = "MySQL queries";
$definitions["MySQL table prefix"] = "MySQL table prefix";
$definitions["MySQL username"] = "MySQL username";
$definitions["MySQL version"] = "MySQL version";

$definitions["Name"] = "Nimi";
$definitions["never"] = "puudub";
$definitions["%s new"] = "%s uut";
$definitions["%s"] = "%s uus";
$definitions["New conversation"] = "Kirjuta";
$definitions["New Conversation"] = "Kirjuta";
$definitions["New conversations in the past week"] = "New conversations in the past week";
$definitions["New email"] = "Uus e-maili aadress";
$definitions["New members in the past week"] = "New members in the past week";
$definitions["New password"] = "Uus parool";
$definitions["New posts in the past week"] = "New posts in the past week";
$definitions["New username"] = "Uus nimi";
$definitions["Next Step"] = "Next Step";
$definitions["Next"] = "Next";
$definitions["No preview"] = "No preview";
$definitions["No"] = "No";
$definitions["Notifications"] = "Teated";
$definitions["Now"] = "Täna";

$definitions["OK"] = "Olgu";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Open registration"] = "Open registration";
$definitions["optional"] = "mittekohustuslik";
$definitions["Order By:"] = "Järjesta:";
$definitions["Original Post"] = "Postitus";

$definitions["Page Not Found"] = "Lehekülge ei leitud";
$definitions["Password"] = "Parool";
$definitions["PHP version"] = "PHP version";
$definitions["Plugins"] = "Lisad";
$definitions["Post a Reply"] = "Vasta";
$definitions["Post count"] = "Post count";
$definitions["Posts"] = "Postitust";
$definitions["Preview"] = "Eelvaade";
$definitions["Previous"] = "Previous";

$definitions["Quote"] = "Kommenteeri seda postitust";
$definitions["quote"] = "tsitaat";

$definitions["Read more"] = "Read more";
$definitions["Recent posts"] = "Recent posts";
$definitions["Recover Password"] = "Saada mulle uus parool";/*uus parool*/
$definitions["Registered members"] = "Registered members";
$definitions["Registration"] = "Registreerimine";
$definitions["Remove avatar"] = "Eemalda pilt";
$definitions["Rename Member"] = "Muuda liikme nime";
$definitions["Reply"] = "Vastata";
$definitions["Report a bug"] = "Teata veast";
$definitions["Require users to confirm their email address"] = "Require users to confirm their email address";
$definitions["Restore"] = "Restore";
$definitions["restore"] = "restore";
$definitions["Reset"] = "Reset";

$definitions["Save Changes"] = "Salvesta";
$definitions["Save Draft"] = "Salvesta mustand";
$definitions["Search conversations..."] = "Otsi...";
$definitions["Search within this conversation..."] = "Otsi...";
$definitions["Search"] = "Search";
$definitions["See the private conversations I've had with %s"] = "Vaata privaatseid arutelusid kasutajaga %s";
$definitions["Set a New Password"] = "Määra uus parool";
$definitions["Settings"] = "Seaded";
$definitions["Show an image in the header"] = "Show an image in the header";
$definitions["Show matching posts"] = "Näita seonduvaid arutelusid";
$definitions["Show the channel list by default"] = "Show the channel list by default";
$definitions["Show the conversation list by default"] = "Show the conversation list by default";
$definitions["Show the forum title in the header"] = "Show the forum title in the header";
$definitions["Sign Up"] = "Registreeru";
$definitions["Skins"] = "Skins";
$definitions["Specify Setup Information"] = "Specify Setup Information";
$definitions["Star to receive notifications"] = "Follow to receive notifications";
$definitions["Starred"] = "Jälgin";
$definitions["Start"] = "Alustada";
$definitions["Start a conversation"] = "Algata arutelu";
$definitions["Start a new conversation"] = "Start a new conversation";
$definitions["Start a private conversation with %s"] = "Alusta privaatset arutelu kasutajaga %s";
$definitions["Start Conversation"] = "Salvesta";
$definitions["Starting a conversation"] = "Starting a conversation";
$definitions["Statistics"] = "Statistika";
$definitions["statistic.conversation.plural"] = "%s arutelu";
$definitions["statistic.conversation"] = "%s arutelu";
$definitions["statistic.member.plural"] = "%s liiget";
$definitions["statistic.member"] = "%s liiget";
$definitions["statistic.online.plural"] = "%s lehel";
$definitions["statistic.online"] = "%s lehel";
$definitions["statistic.post.plural"] = "%s postitust";
$definitions["statistic.post"] = "%s post";
$definitions["Sticky"] = "Sticky";
$definitions["Subscribe"] = "Subscribe";
$definitions["Subscribed"] = "Subscribed";
$definitions["Subscription"] = "Subscription";
$definitions["Suspend member"] = "Peata liikme tegevus";
$definitions["Suspend members."] = "Suspend members.";
$definitions["Suspend"] = "Kinnita tegevuse peatamine liikmele";

$definitions["To get started with your forum, you might like to:"] = "To get started with your forum, you might like to:";

$definitions["Unhide"] = "Näita";
$definitions["Uninstall"] = "Uninstall";
$definitions["Unlock"] = "Unlock";
$definitions["Unmute conversation"] = "Vaigista tagasi";
$definitions["Unstarred"] = "Not following";
$definitions["Unsticky"] = "Unsticky";
$definitions["Unsubscribe new users by default"] = "Unsubscribe new users by default";
$definitions["Unsubscribe"] = "Unsubscribe";
$definitions["Unsubscribed"] = "Unsubscribed";
$definitions["Unsuspend member"] = "Ava liikme saatus";
$definitions["Unsuspend"] = "Ava liikme saatus";
$definitions["Until someone replies"] = "Until someone replies";
$definitions["Untitled conversation"] = "Untitled conversation";
$definitions["Upgrade esoTalk"] = "Upgrade esoTalk";
$definitions["Use a background image"] = "Use a background image";
$definitions["Use for mobile"] = "Use for mobile";
$definitions["Use friendly URLs"] = "Use friendly URLs";
$definitions["Used to verify your account and subscribe to conversations"] = "Kasutatakse sisselogimiseks.";
$definitions["Username"] = "Kasutajanimi";
$definitions["Username or Email"] = "Kasutajanimi,e-mail";

$definitions["View %s's profile"] = "Vaata %s profiili";
$definitions["View all notifications"] = "Vaata kõiki teateid";
$definitions["View more"] = "View more";
$definitions["View your profile"] = "Vaata oma profiili";
$definitions["View"] = "Vaadata";
$definitions["Viewing: %s"] = "Viewing: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> of %s posts";

$definitions["Warning"] = "Uh oh, something's not right!";
$definitions["Welcome to esoTalk!"] = "Welcome to esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "We've logged you in and taken you straight to your forum's administration panel. You're welcome.";
$definitions["Write a reply..."] = "Kirjuta midagi...";

$definitions["Yes"] = "Yes";
$definitions["You can manage channel-specific permissions on the channels page."] = "You can manage channel-specific permissions on the channels page.";
$definitions["Your current password"] = "Sinu praegune parool";


// Messages.
$definitions["message.404"] = "Oh dear - the page you requested could not be found! Try going back and clicking a different link. Or something else.";
$definitions["message.ajaxDisconnected"] = "Ma ei saa praegu serveriga ühendust... <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>proovi uuesti</a>, või <a href='' onclick='window.location.reload();return false'>värskenda lehte</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! We're still processing some of your stuff! If you navigate away from this page you might lose any recent changes you've made, so wait a few seconds, ok?";
$definitions["message.avatarError"] = "There was a problem uploading your avatar. Make sure you're using a valid image type (like .jpg, .png, or .gif) and the file isn't really really huge.";
$definitions["message.cannotDeleteLastChannel"] = "Hey, wait up, you can't delete the last channel! Where would your conversations go? That's just silly.";
$definitions["message.changesSaved"] = "Sinu muudatused on salvestatud.";
$definitions["message.channelsHelp"] = "Kategooriad foorumis orienteerumiseks,kategooriaid saab ümber paigutada tirides neid üksteise alla ja alt ära.";
$definitions["message.channelSlugTaken"] = "This slug is already in use by another channel.";
$definitions["message.confirmDelete"] = "Oled sa kindel et tahad arutelu kustutada?Tagasi pöörata tegevust pole hiljem enam võimalik.";
$definitions["message.confirmDiscardReply"] = "You have not saved your reply as a draft. Do you wish to discard it?";
$definitions["message.confirmEmail"] = "Enne siia sisenemist tuleb sul logida sisse oma e-maili postkasti, sinna tuleb meilt kiri lingiga, millel klikkides kinnitad lõplikult, et sa pole robot ja säästad kõigi aega mõtetutest prügi ja muu jampsi postitajatest.";
$definitions["message.confirmLeave"] = "Woah, you haven't saved the stuff you are editing! If you leave this page, you'll lose any changes you've made. Is this ok?";
$definitions["message.connectionError"] = "esoTalk could not connect to the MySQL server. The error returned was:<br/>%s";
$definitions["message.conversationDeleted"] = "Arutelu sai kustutatud, sitaks hea tunne, kas pole ahh?";
$definitions["message.conversationNotFound"] = "Kui sa pole sisse logitud, siis järelikult pole sul õigusi seda postitust näha. Kui aga oled sisse logitud on lehekülg arvatavasti administraatori poolt lihtsalt kustutatud.";
$definitions["message.cookieAuthenticationTheft"] = "For security reasons, we couldn't log you in with your 'remember me' cookie. Please log in manually!";
$definitions["message.deleteChannelHelp"] = "Kui kustuta kategooria siis midagi taastada enam ei saa,vajadusel saad kustutada kategooria ja liigutada arutelud teise kategooria alla.";
$definitions["message.emailConfirmed"] = "Tere tulemast!";
$definitions["message.emailDoesntExist"] = "Sellist e-maili ei eksisteeri meie andmebaasis! Kontrolli üle.";
$definitions["message.emailNotYetConfirmed"] = "Sinu e-mail on veel kinnitamata, seda saad teha klikkides meie saadetud kirjas linki, <a href='%s'>kliki siia, et saada uus kinnitusteade</a>.";
$definitions["message.emailTaken"] = "Curses, there is already a member with this email!";
$definitions["message.empty"] = "You must fill out this field.";
$definitions["message.emptyPost"] = "Tegelikult kirjuta nüüd oma postitusse ikka päriselt ka midagi!!!";
$definitions["message.emptyTitle"] = "The title of your conversation can't be blank. I mean, how can anyone click on a blank title? Think about it.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong><br/><small>To reinstall esoTalk, you must remove <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "A new version of esoTalk, %s, is now available.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpToDate"] = "Administreerimis paneel";
$definitions["message.esoTalkUpToDateHelp"] = "";
$definitions["message.fatalError"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li>Go outside, walk the dog, have a coffee... then <strong><a href='%1\$s'>try again</a></strong>!</li>\n<li>If you are the forum administrator, then you can <strong>get help on the <a href='%2\$s'>esoTalk website</a></strong>.</li>\n<li>Try hitting the computer - that sometimes works for me.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.forgotPasswordHelp"] = "Sisesta oma e-mail ja me saadame sulle uue parooli.";
$definitions["message.fulltextKeywordWarning"] = "Otsingusõnad mis on väiksemad kui 4 kirjamärki ei otsita.";/*arutelusid pole*/
$definitions["message.gambitsHelp"] = "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!";
$definitions["message.gdNotEnabledWarning"] = "The <strong>GD extension</strong> is not enabled.<br/><small>This is required to resize and save avatars. Get your host or administrator to install/enable it.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "Sinu logimisandmed ei ole korrektsed.";
$definitions["message.incorrectPassword"] = "Your current password is incorrect.";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidEmail"] = "Seems this email address isn't valid...";
$definitions["message.invalidUsername"] = "You must choose a username between 3 and 20 alphanumeric characters.";
$definitions["message.javascriptRequired"] = "This page requires JavaScript to function properly. Please enable it!";
$definitions["message.languageUninstalled"] = "The language was uninstalled.";
$definitions["message.locked"] = "Arutelu on lõpetatud!";
$definitions["message.loginToParticipate"] = "To start conversations or reply to posts, please log in.";


$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Sisene</a> aruteludes osalemiseks.";
$definitions["message.memberNotFound"] = "Ei paista ühtegi liiget, sellise nimega.";
$definitions["message.memberNoPermissionView"] = "That member can't be added because they don't have permission to view the channel that this conversation is in.";
$definitions["message.nameTaken"] = "The name you have entered is taken or is a reserved word.";
$definitions["message.newSearchResults"] = "Vahepeal on toimunud foorumis muudatusi. <a href='%s'>Värskenda lehte!</a>";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noMembersOnline"] = "No members are currently online.";
$definitions["message.noNotifications"] = "Sul pole ühtegi teadet, huvitav küll miks? Suhtle siis ometi :) ";
$definitions["message.noPermission"] = "You do not have permisssion to perform this action.";
$definitions["message.noPermissionToReplyInChannel"] = "You don't have permission to reply to conversations in this channel.";
$definitions["message.noPluginsInstalled"] = "No plugins are currently installed.";
$definitions["message.noSearchResults"] = "Ühtegi arutelu ei leitud.";/*see tekst on lehel kus pole arutelusid*/
$definitions["message.noSearchResultsMembers"] = "Ei leitud ühtegi liiget.";
$definitions["message.noSearchResultsPosts"] = "Ühtegi artikklit ei leitud.";
$definitions["message.noSkinsInstalled"] = "No skins are currently installed.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "The page you're looking for could not be found.";
$definitions["message.passwordChanged"] = "Sinu parool on edukalt muudetud. <a href='".URL("user/login")."' class='link-login'>Logi nüüd sisse</a> !";
$definitions["message.passwordEmailSent"] = "Sinu parooli muutmise link on saadetud. Ära unusta vaadata rämpsposti kausta. Kontrolli oma postkasti, kliki lingil ja kogu lugu.";
$definitions["message.passwordsDontMatch"] = "Your passwords do not match.";
$definitions["message.passwordTooShort"] = "Your password is too short.";
$definitions["message.pluginCannotBeEnabled"] = "The plugin <em>%s</em> cannot be enabled: %s";
$definitions["message.pluginDependencyNotMet"] = "To enable this plugin, you must have %s version %s installed and enabled.";
$definitions["message.pluginUninstalled"] = "The plugin was uninstalled.";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Kui soovid lisada uue arutelu kliki lingi <a href='".URL("conversation/start")."'>Uus Arutelu</a> ";/*pole arutelusid*/

$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "Registreerimine on suletud!";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "<b><font color=red>Proovi ka üldist otsingut pealehelt, kuna olles ise alafoorumis otsitakse vaikimisi ka just alafoorumist.</font color></b>";
$definitions["message.setNewPassword"] = "";#mingi parooli muutmise teade
$definitions["message.skinUninstalled"] = "The skin was uninstalled.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Liikme %s tegevuse peatamine tõstab ta sisuliselt külalise staatusse.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Liikme %s staatuse avamine tõstab ta tagasi õiguste juurde kus enne.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitToReply"] = "Oota nüüd vähemalt 10 sekundit, enne kui uuesti postitad. Tõmba ikka hinge kah vahepeal :)";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";




// Emails.
$definitions["email.confirmEmail.body"] = "<p>Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.</p><p>If this was you, simply visit the following link and your account will be activated:<br>%2\$s</p>";
$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.footer"] = "<p>(If you don't want to receive any emails like this again, you can <a href='%s'>change your notification preferences</a>.)</p>";
$definitions["email.forgotPassword.body"] = "<p>Siin on sinu parooli muutmise link. Lihtsalt kliki siin: <br>%2\$s</p> ja sind suunatakse parooli muutmise juurde.";
$definitions["email.forgotPassword.subject"] = "Parooli muutmine, %1\$s?";
$definitions["email.header"] = "<p>Tsau %s!</p>";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> mainis sind postituses, arutelus <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>Kliki linki postituse vaatamiseks:<br>%4\$s</p>";
$definitions["email.mention.subject"] = "%1\$s mainis sind postituses";
$definitions["email.privateAdd.body"] = "<p>You have been added to a private conversation titled <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>To view this conversation, check out the following link:<br>%3\$s</p>";
$definitions["email.privateAdd.subject"] = "You have been added to a private conversation";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> has replied to a conversation which you followed: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>To view the new activity, check out the following link:<br>%4\$s</p>";
$definitions["email.post.subject"] = "There is a new reply to '%1\$s'";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "autor:";
$definitions["gambit.contributor:"] = "kaaskoostaja:";
$definitions["gambit.member"] = "liige";
$definitions["gambit.myself"] = "minule";
$definitions["gambit.draft"] = "mustandid";
$definitions["gambit.locked"] = "suletud";
$definitions["gambit.order by newest"] = "järjesta uusimad";
$definitions["gambit.order by replies"] = "järjesta vastuste järgi";
$definitions["gambit.private"] = "privaatne";
$definitions["gambit.random"] = "suvaline";
$definitions["gambit.reverse"] = "tagurpidi";
$definitions["gambit.starred"] = "järgitud";
$definitions["gambit.muted"] = "vaigistatud";
$definitions["gambit.sticky"] = "kleebitud";
$definitions["gambit.unread"] = "lugemata";
$definitions["gambit.limit:"] = "limit:";
$definitions["gambit.order by views"] = "järjesta vaatamiste järgi";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "aktiivne täna"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "aktiivne 1 päev"; // what it actually evaluates to

$definitions["gambit.has replies"] = "on vastuseid";
$definitions["gambit.has >0 replies"] = "on >0 vastust";
$definitions["gambit.has >10 replies"] = "on >10 vastust";

$definitions["gambit.has no replies"] = "vastusteta";
$definitions["gambit.has 0 replies"] = "on 0 vastust";

$definitions["gambit.dead"] = "lõpetatud";
$definitions["gambit.active >30 day"] = "aktiivne >30 päeva";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "sekund";
$definitions["gambit.minute"] = "minut";
$definitions["gambit.hour"] = "tundi";
$definitions["gambit.day"] = "päeva";
$definitions["gambit.week"] = "nädal";
$definitions["gambit.month"] = "kuu";
$definitions["gambit.year"] = "aasta";
$definitions["gambit.last"] = "viimased"; // as in "active last 180 days"
$definitions["gambit.active"] = "aktiivne"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";

$definitions["Choose a Channel"] = "Vali kategooria:";




$definitions["Email me when someone posts in a conversation I have followed"] = "Teavita, kui mind mainitakse minu järgitud postitustes";
$definitions["Email me when there is a new post by a member I have followed"] = "Teavita, kui minu järgitud kasutaja uutest postitustest";
$definitions["Email me when someone posts in a channel I have followed"] = "Teavita, kui minu järgitud kategooriasse lisandub uusi postitusi";
$definitions["Email me when someone mentions me in a post"] = "Teavita, kui mind mainitakse postitustes";
$definitions["Automatically follow conversations that I reply to"] = "Automaatselt järgi arutelusid teavitamistega, millele olen vastanud";
$definitions["Automatically follow private conversations that I'm added to"] = "Automaatselt järgi privaatseid arutelusid, millesse olen lisatud";

$definitions["Don't allow other users to see when I am online"]="Ära näita kasutajatele, et olen võrgus";

$definitions["Sticky"] = "Püsiv";
$definitions["Follow"] = "Jälgi";
$definitions["Following"] = "Jälgin";

$definitions["Delete conversation"] = "Kustuta arutelu";
$definitions["View more"] = "Vahi edasi...";
$definitions["Dec"] = "Detsember";


$definitions["Registration Closed"]="Registreerimine suletud";


/*Kui registreerimine sisse lülitada,muuta siin linki*/
#$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Logi sisse</a> või <a href='%2\$s' class='link-join'>Registreeru</a> vastamiseks!";
$definitions["message.logInToReply"] = "";#"<a href='%1\$s' class='link-login'>Vasta</a>"



#otsinguvormi jaoks
$definitions["gambit.ootel"]="Ootel";
$definitions["gambit.probleem"]="Probleemsed";


