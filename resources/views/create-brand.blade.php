<form method="POST" action="/profile">

    @csrf

    <label for="name">Название</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="logo">Логотип</label>
    <input type="file" id="logo" name="logo">
    <input type="submit" value="Submit">

</form>
