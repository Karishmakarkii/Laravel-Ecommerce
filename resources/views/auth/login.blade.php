<form action={{route('login')}} method="POST">
    @csrf
    <input type="text" name="email" id="">
    <input type="password" name="password" id="">
    <button type="submit">Submit</button>
</form>