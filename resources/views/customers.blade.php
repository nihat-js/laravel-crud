<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  CRUD Application - Customers </title>
</head>
<style>
    *{margin:0;padding:0;box-sizing: border-box;text-decoration: none;}
    .container{
        width: 1000px;
        margin : 0 auto;
    }
    .container  nav h2{
        margin : 2rem 0 ;
        text-align: center;
    }
    table{
        width: 800px;
        border-collapse: collapse;
        /* text-align: center; */
        /* box-sizing: content-box; */
    }
    table tr,th,td{
        margin-top : 1rem;
        border : 2px solid #5F7161;
        padding : .6rem;
    }
    table td:hover,table th:hover{
        background-color : #eee;
    }
    table .delete{

        padding : .4rem .6rem;
        cursor: pointer;
        color:white;
        background-color: #F32424;
        margin-right: 1rem;
        border-radius: 6px;
    }
    table .update{
        padding : .4rem .6rem;
        cursor: pointer;
        color : white;
        background-color: #36AE7C;
        border-radius: 6px;
    }
    main h3{
        margin-bottom : 2rem ;
        letter-spacing: .5px;
    }
    main h3 a{
        color : #EB5353;
    }

</style>
<body>
    <div class="container">
        <nav>
            <h2> All customers </h2>
        </nav>
        <main>
            <h3>  Do you wanna create new customer ? <a href="{{route('customers-create')}}"> Click here</a>      </h3>  
            <table>
                <thead>
                    <tr>
                        <th>  Name </th>
                        <th> Phone </th>
                        <th>  city   </th>
                        <th> country</th>
                        <th> creditLimit </th>
                        <th> Options </th>
                        <th> Options </th>
                    </tr>
                </thead>
                <tbody>
        
                @foreach ($customers as $customer)
                <tr>
                        <td>  {{$customer->customerName}} </td>
                        <td> {{$customer->phone}} </td>
                        <td> {{ $customer->city}}   </td>
                        <td> {{$customer->country}} </td>
                        <td>  {{$customer->creditLimit }} </td>
                        <td> <a  class='update' href="{{ route('customers-update', $customer->customerNumber );   }}"> Update</a>   </td>
                        <td> <a class='delete' href="{{route('customers-delete',$customer->customerNumber)}}"> Delete</a> </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </main>
        <!-- {{$customers}} -->
    </div>
</body>
</html>