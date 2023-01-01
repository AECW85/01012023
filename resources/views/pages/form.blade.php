@extends('layout.master')
@section('judul')
Halaman Registrasi
@endsection

@section('content')
    <h1>Buat Account Baru!</h1> <br>
    <h3>Sign Up Form</h3> <br>
    <form action="/submit" method="post">
    @csrf
    <label>First Name:</label> <br> <br>
    <input type="text" name="firstname"> <br> <br>
    <label>Last Name:</label> <br> <br>
    <input type="text" name="lastname"> <br> <br>
    <label>Gender:</label> <br> <br>
    <input type="radio" name="gender" id="" value="Male">Male <br>
    <input type="radio" name="gender" id="" value="Female">Female <br>
    <input type="radio" name="gender" id="" value="Other">Other <br> <br>
    <label>Nationality:</label> <br> <br>
    <select name="nationality" id="">
        <option value="Indonesian">Indonesian</option>
        <option value="Australian">Australian</option>
        <option value="American">American</option>
    </select> <br> <br>
    <label>language Spoken:</label> <br> <br>
    <input type="checkbox" name="language" value="Bahasa Indonesia">Bahasa Indonesia <br>
    <input type="checkbox" name="language" value="English">English <br>
    <input type="checkbox" name="language" value="Other">Other <br> <br>
    <label>Bio:</label> <br> <br>
    <textarea name="bio" id="" cols="30" rows="10"></textarea><br><br>
    <input type="submit" value="kirim">
    

</form>
@endsection