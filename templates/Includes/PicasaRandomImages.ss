<% if PicasaRandomImages %>
<div id="PicasaRandomImages">
	<% with/loop PicasaRandomImages %>
		<img src="$ThumbnailURL" alt="$Album - $Title" />
	<% end_controler %>
</div>
<% end_if %>
