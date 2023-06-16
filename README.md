<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1>Star Wars API </h1>

<p>Star Wars API is a web application aimed at developing programming skills. The logic and purpose of some elements on the site may not make sense as the intention was to make extensive use of PHP capabilities using Laravel.</p>

<h2>Using the website, there are 5 levels of access to functionality:
</h2>

<ul>
<li>1) Unauthenticated users can browse the database.
</li>
<li>2)Registered users receive the first level of access (Range Corporal), allowing them to send messages on Slack, upload photos, and generate passports for characters in PDF format.
</li>
<li> 3) At the rank of Lieutenant, you can delete uploaded photos, add new records to the database, edit existing records, and delete them.</li>
<li>4) At the Moff level, you can modify and assign the previous two ranks (Corporal and Lieutenant), change salaries, and assign Corporal to Lieutenant rank.</li>
<li>5)The Emperor can add new roles, assign them to users, add new tasks, and send global messages to all users.</li>
  </ul>
Each registered user can send a message to their superior, and the superior can send a message to their subordinate. Additionally, every user receives a daily salary which they can use in the Empire's store to purchase combat accessories.
<h2>Requirements</h2>

<ul>
  <li>PHP 7.3 or higher</li>
  <li>Laravel Framework 8.x</li>
  <li>MySQL database</li>
</ul>

<h2>Installation</h2>

<ol>
After Standard installation use : <br>
php artisan Command:data <br>
php artisan Command:relations <br>
</ol>

