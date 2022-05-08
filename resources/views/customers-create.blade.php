<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create Customer </title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD  -  New customer</title>
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
    #create-form  form {
        display: flex;
        flex-direction: column;
        margin-top : 1rem;
    }
    #create-form input[type="text" ]{
        width: 95%;
        margin : 1rem auto;
        border-radius: 6px;
        padding : 1rem;
        border : 2px solid #eee;
        outline : #fff;
    }
    #create-form input[type='submit']{
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
        <h2> New customer </h2>
        <section id="create-form">
            <form action="{{ route('customers-create-post') }}" method="POST"  >
                @csrf
                <label for=""> Name </label>
                <input type="text" name="customerName" value="">
                <label for=""> Phone</label>
                <input type="text" name="phone" id="" value= "  "  >
                <label for=""> City </label>
                <input type="text" name="city" id="" value="">
                <label for=" "> country</label>
                <input type="text" name="country" value="">
                <label for="">creditLimit</label>
                <input type="text" name="creditLimit" id="" value="">
                <input type="submit" value='Update now'>
            </form>
        </section>
    </div>
</body>
</html>
</body>
</html>