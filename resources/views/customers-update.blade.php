<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD  -  Update customer</title>
</head>
<style>
    *{margin:0;padding:0;box-sizing: border-box;text-decoration: none;}
    .container{
        max-width: 1000px;
        margin : 0 auto;
    }
    .container   h2{
        margin : 2rem 0 ;
        text-align: center;
    }
    #update-form  form {
        display: flex;
        flex-direction: column;
        margin-top : 1rem;
    }
    #update-form input[type="text" ]{
        width: 95%;
        margin : 1rem auto;
        border-radius: 6px;
        padding : 1rem ; 
        border : 2px solid #eee;
        outline : #fff;
    }
    #update-form input[type='submit']{
        width: 95%;
        margin : 0 auto;
        padding : 1rem;
        color : white;
        background-color: #36AE7C;
        border-radius: 7px;
        cursor: pointer;
    }
</style>
<body>
    <div class="container">
        <h2> Update Specific customer </h2>
        <section id="update-form">
            <form action="{{route('customers-update-post',$info->customerNumber)}}" method="POST"  >
                @csrf
                <label for=""> Name </label>
                <input type="text" name="customerName" value="{{ $info->customerName}}">
                <label for=""> Phone</label>
                <input type="text" name="phone" id="" value= " {{ $info->phone }}  "  >
                <label for=""> City </label>
                <input type="text" name="city" id="" value="{{$info->city}}">
                <label for=" "> country</label>
                <input type="text" name="country" value="{{$info->country}}">
                <label for="">creditLimit</label>
                <input type="text" name="creditLimit" id="" value="{{$info->creditLimit}}">
                <input type="submit" value='Update now'>
            </form>
        </section>
    </div>
</body>
</html>