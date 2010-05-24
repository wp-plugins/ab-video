=== AB-Video ===
Contributors: AndreasBa73
Tags: video, embed, movie, shortcode, plugin, clip, vimeo, youtube
Requires at least: 2.5
Tested up to: 3.0
Stable tag: 1.0

Allows the user to embed Youtube or Vimeo movie clips by entering a shortcode ([youtbue] or [vimeo]) into the post area. 

Video options are supported as short code attributes.

== Description ==

Allows the user to embed Youtube or Vimeo movie clips by entering a shortcode ([youtube] or [vimeo]) into the post area.

== Installation ==

1. Unzip `ab-video.zip` and upload the contained files to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Usage ==
Vimeo:
1. Enter the `[vimeo clip_id="XXXXXXX"]` short code into any post. `clip_id` is the number from the clip's URL (e.g. http://vimeo.com/123456)
2. Optionally modify the clip's appearance by specifying width or height, like so: `[vimeo clip_id="XXXXXXX" width="400" height="225"]`
3. Using empty values for either the `width` or `height`attributes will cause AB-Video to calculate the proper dimension based on a 16:9 aspect ration. 
   Example: `[vimeo clip_id="12345678" height="300" width=""]` or `[vimeo clip_id="12345678" height="" width="640"]`

Youtube:
1. Enter the `[youtube clip_id="XXXXXXX"]` short code into any post. `clip_id` is the id from the clip's URL after v= (e.g. http://www.youtube.com/watch?v=2LbpLRZwWtE)
2. Optionally modify the clip's appearance by specifying width or height, like so: `[youtube clip_id="XXXXXXX" width="400" height="225"]`
3. Using empty values for either the `width` or `height`attributes will cause AB-Video to calculate the proper dimension based on a 16:9 aspect ration. 
   Example: `[youtube clip_id="2LbpLRZwWtE" height="300" width=""]` or `[youtube clip_id="2LbpLRZwWtE" height="" width="640"]`

