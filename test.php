<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <!-- <form action="process.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="submit" value="Upload" name="submit">
        
    </form> -->
    <div class="item">
        <img src="./img/appetizers/chicken_samosa_199.JPG" alt="chicken_samosa">
        <div class="item-desc">
            <h3>Chicken Samosa</h3>
            <p>Rs 199</p>
        </div>
        <div>
            <button class="item-btn">Add to Cart</button>
        </div>
    </div>
</body>

<script>
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'process2.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            let data = JSON.parse(this.responseText);
            console.log(data);
            document.querySelector('img').src = data.destination;
        }
    }

    xhr.send();
</script>
</html>