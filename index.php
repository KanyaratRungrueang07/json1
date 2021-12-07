<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th> <th>Title</th> <thAuthorD</th> 
            </tr>
        </thead>
        <tbody id="tblPost">

        </tbody>
    </table>
    <script>
        function loadPost(){
                var ur ="https://jsonplaceholder.typicode.com/posts";
                $.getJSON(url)
                .done((data)=>{
                    $.each(data, (k , item)=>{
                        console.log(item);
                        var line = "<tr";
                            line += "<td>" + k+"/td";
                             line += "<td>" + k+"/td";
                             line += "<td>" + k+"/td";
                            
                            line +="</tr>";
                            $("#tblPosts").append(line);


                    });
                })
                .fail(xhr, status ,console.error)=>{

                })
        }
        $(()=>{
            loadPost();
        })
    </script>

    
</body>
</html>
