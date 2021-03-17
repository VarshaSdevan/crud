<!----
@View page
@author:Varsha S
@date:17/03/2021
--->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <style>
       
    table,th,tr,td{
            border: 2px solid;
            border-collapse:collapse;
        }
       
</style>
</head>
<body>
<table>
<thead>
                    <tr>
                        <th>id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>age</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <td colspan="2">action</td>
                        
                    </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->firstname}}</td>
                <td>{{$data->lastname}}</td>
                <td>{{$data->age}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
                <td><a href="{{"delete/".$data->id}}">delete</a></td>
                <td><a href="{{"updateview/".$data->id}}">update</a></td>
               
            </tr>
            @endforeach
        </tbody>
    </table>

</table>
    
</body>
</html>