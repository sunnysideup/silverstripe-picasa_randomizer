<% if PicasaRandomImages %>
<div id="PicasaRandomImages">
	<% control PicasaRandomImages %>
		<img src="$ThumbnailURL" alt="$Album - $Title" />
	<% end_controler %>
</div>
<% end_if %>
