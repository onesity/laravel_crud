
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
    <form action="/edit/{{$user->id}}" method="POST">
        <h1>Update Form</h1>
        @csrf
        @method('put')
        <input type="text" name="username" placeholder="Username" value="{{$user->username}}">
        <br>
        <span> @error('username'){{$message}} @enderror</span>
        <br><br>
        <input type="text" name="email" placeholder="email" value="{{$user->email}}">
        <br>
        <span> @error('email'){{$message}} @enderror</span>
        <br><br>
        <input type="submit" name="submit"  value="Update">
      
    </form>
</div>
