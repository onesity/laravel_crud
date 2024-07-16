
<style>
    form{
        margin-left: 40%;
    }
    input{
        width:300px;
        height:40px;
    }
    span{
        color:red;
    }
</style>
<div>
    <form action="/signup" method="POST">
        <h1>Signup Form</h1>
        @csrf
        <input type="text" name="username" placeholder="Username" value="{{old('username')}}">
        <br>
        <span> @error('username'){{$message}} @enderror</span>
        <br><br>
        <input type="text" name="email" placeholder="email" value="{{old('email')}}">
        <br>
        <span> @error('email'){{$message}} @enderror</span>
        <br><br>
        <input type="text" name="password" placeholder="password" value="{{old('password')}}">
        <br>
        <span> @error('password'){{$message}} @enderror</span>
        <br><br>
        <input type="submit" name="submit"  value="Signup">
      
    </form>
</div>
