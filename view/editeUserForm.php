
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edite user form</title>
</head>
<body>
        <form action="http://localhost/routerDynamic/request/updatadUser" method = "post">
            <input type ="hidden" name ="editeId" value ="<?=$data['id'];?>">
            <input type = "text"  name ="name" placeholder = "enterName" value ="<?=$data['name'];?>">
            </br>
            <input type = "text"  name ="family" placeholder = "enterfamily" value ="<?=$data['family'];?>">
            </br>
            <input type = "number"  name ="age" placeholder ="enter age" value ="<?=$data['age'];?>">
            </br></br>
            ثبت : <button type="submit">submit</button>
        </form>
</body>
</html>