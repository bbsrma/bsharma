<form action="post_image" method="post"  enctype="multipart/form-data">
	@csrf
<input type="file" name="img" multiple>
<input type="submit">