annamaics
=========
Generic Posting for Website Projects

Finally got around to making a website for myself.  However as I was documenting my projects it got really old really
fast when it came to making a new post.  I wanted the layout of all project content to be consistent so I decided to come up with some base files that I would just have to rename and move to the right area and then set a few variables.

----------------

### Files
* index-base.php
* base-post.php
* project-post.css

----------------

### Variables to set in files
**index-base.php**
  * $project - variable for the name of the project (remember to name your folders/files the same as well)
  * $IMAGE_ROOT_PATH - including images was a huge pain so setting the path once allows me to only have to change the filename.

**base-post.php**
  * This is where your post content goes.  For every section you simply need to copy paste the marked block.
 
**project-post.css**
  * The main css class for content posting.  You only need to edit this to change the default way your content will be displayed when using the bases.

----------------

### Technologies
I used [Foundation](http://foundation.zurb.com/) for the bulk of the css that exists on the rest of the site.
