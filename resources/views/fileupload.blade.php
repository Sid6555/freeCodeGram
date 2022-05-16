<x header />

<h1>File Upload form</h1>

<form action="/instagramusers/fileupload/" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="picture" placeholder="Please upload Picture" /><br><br>
    <input type="text" name="picture_name" placeholder="Please provide name the picture"><br><br>
    <button type="submit" style="background: blanchedalmond">Upload</button>
</form>
