<% if PicasaRandomImages %>
<div id="PicasaRandomImages">
	<% loop PicasaRandomImages %>
		<img src="$ThumbnailURL" alt="$Album - $Title" />
	<% end_loop %>
</div>
<% end_if %>
