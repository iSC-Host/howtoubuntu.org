<?php

	$Title_HTML = 'Install Ubuntu 18.04 Bionic Beaver';
	$Title_Plain = 'How to Install Ubuntu 18.04 Bionic Beaver';

	$Description_HTML = 'Ubuntu 18.04 Bionic Beaver came out on April the 26th of 2018. It featured GNOME 3.28, improved boot speed, a minimal installation option, VLC as standard, an updated LibreOffice 6.0, automated security updates, and the removal of the 32-bit installer option.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'install ubuntu 18.04 18 04 1804 bionic beaver linux';

	$Featured_Image = '';

	$Canonical = 'how-to-install-ubuntu-18-04-bionic-beaver';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Release';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

</div>
<div class="content spanpage bionic">
	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<div class="bubble">
				<h2>How to Install Ubuntu 18.04 Bionic Beaver</h2>
			</div>
		</div>

		<div class="col span_1_of_6"><br></div>
	</div>
</div>
<div class="content">
	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<p>Ubuntu 18.04 Bionic Beaver came out on April the 26th of 2018. It featured GNOME 3.28, improved boot speed, a minimal installation option, VLC as standard, an updated LibreOffice 6.0, automated security updates, and the removal of the 32-bit installer option.</p>
			<div class="warning">
				<h3 id="warnings">Warnings</h3><p>When choosing how to install, some options will <strong>completely erase</strong> your drive before doing so. Please read carefully the description of your options below <em>before</em> choosing an install method. If you are comfortable managing partitions, we recommend doing so manually.</p>
			</div>
			<br>
			<div class="contents box">
				<h3 id="contents">How to Install Ubuntu 18.04 Bionic Beaver</h3>
				<div class="section group">
					<div class="col span_1_of_2">
						<p><a href="#warnings">Warnings</a></p>
						<p><a href="#download">Download</a><br>
					</div>
					<div class="col span_1_of_2">
						<p><a href="#media">CD, DVD or USB</a></p>
						<p><a href="#install">Install</a></p>
					</div>
				</div>
			</div>
			<br>
			<h3 id="download">Downloading</h3>
			<p>You can <a href="https://www.ubuntu.com/download/desktop">Download Ubuntu 18.04</a> from Ubuntu.com. The file size is just under a Gigabyte and may take anything from a few minutes to a few hours, depending primarily on your connection speed. Downloads will be faster after the first day of release (as less people download).</p>
			<h4><a class="download" href="https://www.ubuntu.com/download/desktop">Download Ubuntu</a></h4>
			<br>
			<h3 id="media">DVD or USB</h3>
			<p>To install Ubuntu, you must first put the installation image onto some form of media. Your choices are DVD or USB (the image has grown too large for most CDs). Most computers can boot from both, unless they lack a disc drive, in which case you can skip the next paragraph, as you'll be using a USB then.</p>
			<p>For DVDs, RW means you can write new data again and again, whereas R means once the Ubuntu installation image is on there, there it will stay. It can be used again, but never written to again. As for + or -, + means a computer can treat it like a USB drive, whereas - is a little older and won't. Either + or -, and R or RW will work for this.</p>
			<p>USB sticks need to be at least 2GB in size, and be prepared for it to be formatted (everything deleted).</p>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>
	<div class="section group">
		<div class="col span_1_of_3">
			<h4>Windows</h4>
			<p><a href="https://tutorials.ubuntu.com/tutorial/tutorial-burn-a-dvd-on-windows">How to burn a DVD on Windows</a><br>
			<a href="https://tutorials.ubuntu.com/tutorial/tutorial-create-a-usb-stick-on-windows">How to create a bootable USB stick on Windows</a><br>
		</div>
		<div class="col span_1_of_3">
			<h4>OS X</h4>
			<p><a href="https://tutorials.ubuntu.com/tutorial/tutorial-burn-a-dvd-on-macos">How to burn a DVD on OS X</a><br>
			<a href="https://tutorials.ubuntu.com/tutorial/tutorial-create-a-usb-stick-on-macos">How to create a bootable USB stick on OS X</a></p>
		</div>
		<div class="col span_1_of_3">
			<h4>Ubuntu</h4>
			<p><a href="https://tutorials.ubuntu.com/tutorial/tutorial-burn-a-dvd-on-ubuntu">How to burn a DVD on Ubuntu</a><br>
			<a href="https://tutorials.ubuntu.com/tutorial/tutorial-create-a-usb-stick-on-ubuntu">How to create a bootable USB stick on Ubuntu</a></p>
		</div>
	</div>
	<br>
	<div class="ad banner billboard">
		<!-- Banner Billboard -->
		<ins class="adsbygoogle"
			style="display: inline-block; width: 970px; height: 250px"
			data-ad-client="ca-pub-9775669566179340"
			data-ad-slot="9786999318"></ins>
		<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
		<p class="about-ads">Advertisement <a href="https://eustasy.org/advertisements">Why are there ads?</a></p>
	</div>
	<br>
	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<h3 id="install">Install Ubuntu 18.04 Bionic Beaver</h3>
			<p>Once you've put the image you downloaded onto a DVD or USB, you will need to shut down your computer. This may be a good time to print this page, or just read through and make notes, if you're planning to install on this computer.</p>
			<p>Once fully shutdown, Turn your computer back on, tapping the <span class="box">Setup</span> key to select a boot device when your screen shows the name of the manufacturer. This key is usually a Function key (<span class="box">F1</span> to <span class="box">F12</span>), or something like <span class="box">ESC</span>. It will be shown on the BIOS, the screen displaying the manufacturers logo, usually along the bottom labeled <span class="box">Setup</span> or <span class="box">Boot Settings</span>. You can then use the arrow keys, finally hitting enter, to select either USB or Disc Drive.</p> <!-- TODO Fastboot, EUFI -->
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>1. Click Continue</h4>
			<p>Once Ubuntu has booted, you will be presented with a screen that looks like this.</p>
			<p>Click <span class="box">Continue</span> to begin the installer. You can open the installer again later if you choose to try it out, but remember it will be far slower running from a Disc/USB than had you installed it, and nothing you do will actually be saved.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/1-Welcome.png" class="colorbox rounded" rel="install" title="Click Continue"><img src="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/1-Welcome.png" alt="Click Install" title="Click Continue"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11 floatright">
			<h4>2. Choose your Keyboard Layout</h4>
			<p>This is probably the most technical step in the installation, made a lot simpler by the <span class="box">Detect Keyboard Layout</span>. Just click that and follow the instructions on screen.</p>
		</div>
		<div class="col span_1_of_11 floatright"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/2-KeyboardLayout.png" class="colorbox rounded" rel="install" title="Choose your Keyboard Layout"><img src="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/2-KeyboardLayout.png" alt="Choose your Keyboard Layout" title="Choose your Keyboard Layout"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11 floatright">
			<h4>3. Check both Boxes</h4>
			<p>We recommend checking both boxes, but if you don't want to install all updates while installing, or don't want to play MP3 files (music), then you can leave the relevant box(es) unchecked.</p>
			<p>If you don't have at least 8 GB of available drive space, then try the minimal installation option. If you're not plugged in, then plug in before continuing. If you're not connected to the internet, then you'll be prompted to connect when you click continue. You can do it now using the icon to the left of the sound menu to connect. Mine shows two arrows, as I'm plugged in, disconnected it looks different, and a little change again if using WiFi. You can continue without connecting, but you won't be able to get updates, or any language packs you may require.</p>
		</div>
		<div class="col span_1_of_11 floatright"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/3-UpdatesAndOtherSoftware.png" class="colorbox rounded" rel="install" title="Check both Boxes"><img src="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/3-UpdatesAndOtherSoftware.png" alt="Check both Boxes" title="Check both Boxes"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>4. Choose How to Install</h4>
			<p>Yours will probably look a little different to mine here. My hard drive doesn't have anything on it yet, so i can choose either to use the whole disk, or specify partitions manually (surprisingly easy stuff). Yours may have a slightly different first option, and one or two extra.</p>
			<p>It may say <span class="box">Delete Windows and Install Ubuntu</span> and <span class="box">Shrink Windows and Install Ubuntu Alongside</span>.</p>
			<p>Choosing to install alongside will mean you are presented with a menu with the option to choose which operating system with the arrow keys and enter every time you turn on your computer.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/4-InstallationType.png" class="colorbox rounded" rel="install" title="Choose How to Install"><img src="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/4-InstallationType.png" alt="Choose How to Install" title="Choose How to Install"></a>
		</div>
	</div>
	<br>
	<div class="warning">
		<h4>Warning</h4>
		<div class="section group">
			<div class="col span_5_of_11">
				<p>In this step you could potentially erase your entire computer. This means all your programs, documents, photos, videos, and everything else could be lost. Be careful, especially if you plan to remove Windows or OS X and use only Ubuntu, or if you are installing to a USB Drive.</p>
			</div>
			<div class="col span_1_of_11"><br></div>
			<div class="col span_5_of_11">
				<p>Make sure you understand where it is being installed and how it will effect your data. This is the last point at which you can safely cancel the install without potential data loss.</p>
				<p>It is always a good idea to make backups.<p>
			</div>
		</div>
		<h4>If you have not done so already, backup your data.</h4>
	</div>
	<br>
	<div class="ad banner large">
		<!-- HTU Responsive -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-8487243089350978"
			 data-ad-slot="5917903427"
			 data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<p class="about-ads">Advertisement <a href="https://eustasy.org/advertisements">Why are there ads?</a></p>
	</div>
	<div class="section group">
		<div class="col span_5_of_11 floatright">
			<h4>5. Choose a Security Key</h4>
			<p>If you have opted for an encrypted installation, you will be asked to choose a security key. This is not a password for your user account, but a password to turn on the entire computer using Ubuntu.</p>
		</div>
		<div class="col span_1_of_11 floatright"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/5-ChooseASecurityKey.png" class="colorbox rounded" rel="install" title="Choose a Security Key"><img src="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/5-ChooseASecurityKey.png" alt="Choose a Security Key" title="Choose a Security Key"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11 floatright">
			<h4>6. Confirm your Choice</h4>
			<p>After clicking continue, you may be presented with a confirmation screen, much like this, to confirm your choices.</p>
			<p>Click <span class="box">Continue</span> to begin installing.</p>
			<p>You'll be asked a few more questions in a second about where you are, what your name is, and how you want your computer set up. These are for time settings, user names, and home folders.</p>
		</div>
		<div class="col span_1_of_11 floatright"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/6-WriteChangesToDisk.png" class="colorbox rounded" rel="install" title="Confirm your Choice"><img src="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/6-WriteChangesToDisk.png" alt="Confirm your Choice" title="Confirm your Choice"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>7. Choose your Location</h4>
			<p>Now you get to choose your location by dropping a pin on this nifty looking map. This is to select your timezone and apply any regional adjustments.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/7-WhereAreYou.png" class="colorbox rounded" rel="install" title="Choose your Location"><img src="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/7-WhereAreYou.png" alt="Choose your Location" title="Choose your Location"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>7. Set a Username and Password</h4>
			<p>Now you get to enter your name, the name you want your computer to be (not really important), your username (again, you won't see this much, but it can't have capitals or spaces, best leave as it is made from your real name), a password (if you want, then confirm it, and keep it strong), whether or not to log in automatically, and whether or not to encrypt your home folder (which is where documents, music, and video folder can be found, among others).</p>
			<p>I would not recommend encrypting your home folder, as this usually complicates things for you as much as any potential trespassers. It can lead to complications with keyrings, forgotten passwords, and bad data recovery. Only use if it is a company policy, or you thoroughly understand what you are doing. Also, only set your password to nothing if you are unlikely to ever want one, otherwise yet more compilations with keyrings and automatic unlocking-on-login can arise.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/8-WhoAreYou.png" class="colorbox rounded" rel="install" title="Set a Username and Password"><img src="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/8-WhoAreYou.png" alt="Set a Username and Password" title="Set a Username and Password"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11 floatright">
			<h4>9. Sit Back and Relax</h4>
			<p>Sit back and enjoy a little slideshow about Ubuntu, all the free, full-version software you've got, and just how great it is to have installed Ubuntu 18.04 Bionic Beaver LTS.</p>
			<p>You can rest easy in the knowledge that your computer is faster, safer, and simpler to use, now it's running a free open-source system.</p>
			<p>Check out <a href="https://askubuntu.com/">askubuntu.com</a> if you need any further help.</p>
		</div>
		<div class="col span_1_of_11 floatright"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/9-WelcomeToUbuntu.png" class="colorbox rounded" rel="install" title="Sit Back and Relax"><img src="assets/images/how-to-install-ubuntu-18-04-bionic-beaver/9-WelcomeToUbuntu.png" alt="Sit Back and Relax" title="Sit Back and Relax"></a>
		</div>
	</div>
	<!-- TODO Add items about RestartNow, UnlockDisk, Password, and Desktop -->
	<br>
	<h3>Welcome to Ubuntu 18.04 Bionic Beaver LTS!</h3>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>References</h4>
			<p><a href="how-to-burn-an-iso-to-a-cd-or-dvd-in-ubuntu" target="_blank">How to Burn an ISO to a CD or DVD in Ubuntu</a><br>
			<a href="how-to-find-out-how-much-ram-is-installed-in-ubuntu" target="_blank">How to find out how much RAM is installed in Ubuntu</a><br>
			<a href="how-to-decide-if-you-should-use-32bit-or-64bit-ubuntu" target="_blank">How to decide if you should use 32bit or 64bit Ubuntu</a><br>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h4>Further Reading</h4>
			<p><a href="about-ubuntu-18-04-bionic-beaver" target="_blank">About Ubuntu 18.04 Bionic Beaver</a><br>
			<a href="things-to-do-after-installing-ubuntu-18-04-bionic-beaver">Things to go after Installing Ubuntu 18.04 Bionic Beaver</a><br>
			<a href="how-to-make-your-dual-boot-better-with-burg" target="_blank">How to make your Dual Boot better with Burg</a><br>
			<a href="how-to-install-a-32bit-program-in-64bit-ubuntu" target="_blank">How to Install a 32bit program in 64bit Ubuntu</a></p>
		</div>
	</div>

	<?php
	require '../footer.php';
}
