<style>
    table{
        width:80%;
        margin-left: 10%;
    }
    h1{
        text-align: center;
    }
</style>
<div>
    <table border="1px solid black" cellspacing="0">
        <h1>User Listing</h1>
        <tr>
            <th>Sr</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($records as $record)
        <tr>
            <td>{{$record->id}}</td>
            <td>{{$record->username}}</td>
            <td>{{$record->email}}</td>
            <td>
                <button>
                    <a href="/edit/{{$record->id}}">Edit</a>  
                </button>
                <button>
                    <a href="/delete/{{$record->id}}">Delete</a>
                </button>
            </td>

        </tr>
        @endforeach
    </table>
</div>