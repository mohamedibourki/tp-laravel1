<form action="{{ route('profile') }}" method="post">
    @csrf

    <label for="nom">Nom</label>
    <input type="text" name="nom" />

    <label for="email">Email</label>
    <input type="text" name="email" />

    <br>

    <input type="submit" value="ok" />
</form>