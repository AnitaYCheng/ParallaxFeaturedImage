ParallaxFeaturedImage
=====================

Make any featured image in WordPress Genesis the parallax scrolling background for your post or page. A top margin is added if there is no featured image and you have a fixed navigation bar like I did.

### Demo
A working demo can be seen on <a href="http://www.flyingeyes.biz">FlyingEyes.biz</a>, which is what I made this solution for.

More detailed step-by-step instructions can be found <a href="http://anitacheng.com/parallax-scrolling-featured-image-in-wordpress-genesis">on my blog.</a>

### What problem this solves
If you want to easily change out the background image for a parallax scrolling page or post, you need to get this!

## What this is
Inspired by <a href="http://wevostudio.com/wordpress-parallax-implementation/">WevoStudio's tutorial for parallax scrolling implementation for Wordpress</a>, I decided to improve it by making it super-easy to use. Literally, just set a featured image for any page or post, and let 'er rip!

# Setup
The "parallaxfunction.php" is a snippet that needs to go into your child theme's functions.php file. I'll likely implement this as a plugin in the future, but the snippet is very short so it's not much fuss.

If you don't want a particular page or post (or category, or post type, etc) to have this feature, just use <a href="http://codex.wordpress.org/Conditional_Tags">conditional tags</a> around the function.

"parallaxstyle.css" is a snippet that styles the new sections. Insert into your child theme's style.css file, and modify as needed.

I've also included the original jQuery Parallax Scrolling plugin (<a href="http://ianlunn.co.uk/plugins/jquery-parallax/">made by Ian Lunn</a>) and the JavaScript calls in a "js" folder. Put the "js" folder into your child theme folder.